<!doctype html>

<?php include 'config.php'; ?>

<html>
    <head>
        <title>DropZone guleWeb</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <link rel="icon" type="image/png" href="assets/favicon.png" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">

        <!-- CSS -->
        <link href="css/dropzone.css" rel="stylesheet" type="text/css">
    		<link href="css/style.css" rel="stylesheet" type="text/css">

        <!-- Script -->
        <script src='js/jquery-3.2.1.min.js'></script>
        <script src="js/dropzone.js" type="text/javascript"></script>
    </head>

        <body>
        <div class="container" >


            <div class='content'>

              <div class="centerme margin-top">
                  <img class="" src="assets/official_logo.png" width="45px">
              </div>

            <form action="upload.php" class="dropzone" id="myAwesomeDropzone">
            </form>

            <div id="information" class="centerme"></div>

            <div id="browse" class="centerme">
                <a href="./upload"><button class="button2 button ">Browse exisiting files</button></a>
                <p class="smallnote">Note: All files are deleted after <?php echo $timeout/3600; ?> hours</p>
            </div>


          </div>

        </div>

        <!-- Script -->
        <script type='text/javascript'>


        function makeid() {
            var text = "";
            var possible = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";

            for (var i = 0; i < 7; i++)
              text += possible.charAt(Math.floor(Math.random() * possible.length));

            return text;
          }

          console.log(makeid());

        function myFunction(id) {
          var copyText = document.getElementById(id);
          copyText.select();
          document.execCommand("copy");

          var tooltip = document.getElementById(id);
          tooltip.innerHTML = "Copied! =) " ;
        }

        function outFunc(id) {
          var tooltip = document.getElementById(id);
          tooltip.innerHTML = "Copy to clipboard";
        }


        // Dropzone script
        Dropzone.autoDiscover = false;
        $(".dropzone").dropzone({
            addRemoveLinks: true,
            removedfile: function(file) {
                var name = file.name;

                $.ajax({
                    type: 'POST',
                    url: 'upload.php',
                    data: {name: name,request: 2},
                    sucess: function(data){
                        console.log('success: ' + data);
                    }
                });
                var _ref;
                return (_ref = file.previewElement) != null ? (_ref.parentNode.removeChild(file.previewElement)) : void 0;

            },

            success: function(file) {

              var div = document.createElement('div');
              div.setAttribute('class', "input-group tooltip");



              var img = document.createElement('img');
              img.setAttribute('src', "assets/clippy.svg");
              img.setAttribute('width', "16");
              img.setAttribute('alt', "Copy to clipboard");
              img.setAttribute('class', "icon");

              var span = document.createElement('span');
              span.setAttribute('class', "tooltiptext");
              span.setAttribute('id', "myTooltip"+ file.name);
              span.innerHTML = 'Copy Link';


              var input = document.createElement('input');
              input.setAttribute('type', "text");
              input.setAttribute('value',"https://guleweb.com/drop/upload/" + file.name);
              input.setAttribute('id',"dlink" + file.name);
              input.setAttribute('readonly',"");

              var button = document.createElement('button');
              //button.setAttribute('onclick', "myFunction(dlink" + file.name + ")");
              button.addEventListener('click', function(){
                  myFunction("dlink" + file.name);
              });
              //button.setAttribute('onmouseout', "outFunc(dlink" + file.name + ")");
              button.addEventListener('mouseout', function(){
                  outFunc("myTooltip" + file.name);
              });
              button.setAttribute('class', "button button1");
              button.innerHTML = 'Copy Link';


              var information = document.getElementById('information');

              information.appendChild(input);
              information.appendChild(div);
              div.appendChild(button);
              button.appendChild(span);
              button.appendChild(img);

            },



        });

        </script>



    </body>
</html>

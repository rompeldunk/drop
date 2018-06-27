<?php

/* Configuration: */

// 1:  Define upload directory (absolute path needed for crontab)
$dir = "/var/www/drop/upload/";

// 2: Edit crontab on webserver. Use https://crontab.guru/ for help with crontime.
// login@server:~# crontab -e -u www-data 
// Example:    30 * * * * /usr/bin/php /var/www/drop/cronjob.php

// 3: Remove comments before echo's to debug if needed.

// Excluding the needed DirectoryList
$exclusions = array($dir. 'index.php', $dir. 'resources');

// cycle through all files in the directory
foreach (glob($dir."*") as $file) {

  if (in_array($file, $exclusions)) {
      //echo "ignoring => " . $file . "<br>";
      continue;
  }

/*** if file is 72 hours (259200 seconds) old then delete it ***/

if(time() - filectime($file) > 259200){
    //echo "Deleting file: " . $file . ". Older than 72 hours.<br>";
    unlink($file);
    }

    else {
      $timeleft = (time() - filectime($file)) - 259200;
      $hours = floor(-$timeleft / 3600);
      $mins = floor(-$timeleft / 60 % 60);
      $secs = floor(-$timeleft % 60);
      //echo "Not deleting: ". $file . " Time left: =>  ". $hours . "h " .$mins. "m " . $secs . "s  <br>";

    }
}


?>
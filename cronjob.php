<?php

include 'config.php';

// Excluding files needed DirectoryList
$exclusions = array($dir. 'index.php', $dir. 'resources');

// Cycle through all files in the directory
foreach (glob($dir."*") as $file) {

  if (in_array($file, $exclusions)) {
      if ($debug) {
        echo "ignoring => " . $file . "<br>";
      }
      continue;
  }

/*** If file is older than ($timeout) seconds, delete it ***/

if(time() - filectime($file) > $timeout){

    $timeleft = (time() - filectime($file)) - $timeout;
    $hours = floor(-$timeleft / 3600);
    $mins = floor(-$timeleft / 60 % 60);
    $secs = floor(-$timeleft % 60);

    if ($debug) {
      echo "Deleting file: " . $file . ". Older than " . $hours . " hours.<br>";
    }

      unlink($file);
    }

    else {

      if ($debug) {
        echo "Not deleting: ". $file . " Time left: =>  ". $hours . "h " .$mins. "m " . $secs . "s  <br>";
      }
    }
}


?>

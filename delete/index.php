<!doctype html>
<link href="../css/style.css" rel="stylesheet" type="text/css">

<?php


include '../config.php';

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

    unlink($file);

}

?>

<div class="centerme">
    <a href="../"><button class="button2 button ">Go Back</button></a>
</div>
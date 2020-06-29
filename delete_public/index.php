<!doctype html>
<link href="../css/style.css" rel="stylesheet" type="text/css">

<?php


include '../config.php';

// Excluding files needed DirectoryList
$exclusions = array($dir_public. 'index.php', $dir_public. 'resources');

$count = 0;

// Cycle through all files in the directory
foreach (glob($dir_public."*") as $file) {

    if (in_array($file, $exclusions)) {
        if ($debug) {
          echo "ignoring => " . $file . "<br>";
        }
        continue;
    }
    
    unlink($file);
    ++$count;

}

echo $count;

?>

<div class="centerme">
    <a href="../"><button class="button2 button ">Go Back</button></a>
</div>
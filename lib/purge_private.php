<!doctype html>
<link href="../css/style.css" rel="stylesheet" type="text/css">


<?php

include '../config.php';
include './funcs.php';

// Cycle through all files in the directory
foreach (glob($dir_private."*") as $file) {
    echo deleteAll($file);
}

?>

<div class="centerme">
    <a href="../"><button class="button2 button ">Go Back</button></a>
</div>
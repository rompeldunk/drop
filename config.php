<?php

/* Configuration file */

$abs_path = realpath(dirname(__FILE__));
echo $abs_path;

$target_dir = "upload/";            // Relative path to upload folder
$dir = "/var/www/drop/upload/";     // Absolute path to upload folder
$debug = false;                     // Enables output when running on cronjob.php from browser

$timeout = 259200;                  // Default: 259200 seconds = 72 hours

/* Check upload/resources/config.php for options in DirectoryLister */


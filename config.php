<?php

/* Configuration file */

$public_upload_dir = "upload/";     // Relative path to upload folder
$private_upload_dir = "p/";         // Private path to upload
$debug = false;                     // Enables output when running on cronjob.php from browser
$timeout = 43200;                   // Default: 43200 seconds = 72 hours


/* Check upload/resources/config.php for options in DirectoryLister */

$dir_public = realpath(dirname(__FILE__)) . "/" . $public_upload_dir;       // Absolute path to public folder
$dir_private = realpath(dirname(__FILE__)) . "/" . $private_upload_dir;     // Absolute path to public folder

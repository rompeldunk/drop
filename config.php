    <?php

/* Configuration file */

$public_upload_dir = "upload/";                            // Relative path to upload folder
$private_upload_dir = "private/";                         // Creative (non-guessable) folder-name
$debug = false;                                            // Enables output when running on cronjob.php from browser
$timeout = 43200;                                          // Default: 259200 seconds = 72 hours  || 43200 = 12 hours


/* Check upload/resources/config.php for options in DirectoryLister */


$dir = realpath(dirname(__FILE__)) ."/" . $public_upload_dir;      // Absolute path to root folder






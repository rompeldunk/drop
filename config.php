    <?php

/* Configuration file */

$target_dir = "upload/";                                    // Relative path to upload folder
$debug = false;                                             // Enables output when running on cronjob.php from browser
$timeout = 259200;                                          // Default: 259200 seconds = 72 hours


/* Check upload/resources/config.php for options in DirectoryLister */


$dir = realpath(dirname(__FILE__)) ."/" . $target_dir;      // Absolute path to root folder






# DropZone + DirectoryList
Create your own fileshare service on your local webserver.

## General
Using DropZone.js, DirectoryList and PHP, you can setup your own fileservice (like files.fm) to upload and browse files and share link to friends or to your own use.

Files are deleted after 72 hours (can be adjusted), working like a temporary file sharing service, keeping your upload folder clean after usage.

## Installation / Configuration
1. Set your upload directory in cronjob.php.
2. Open cronjob on your webserver using terminal/SSH:

```
crontab -e -u www-data
```

Add this line for check every 30 min:
```
30 * * * * /usr/bin/php /var/www/drop/cronjob.php
```

Path to php can be found by ```whereis php``` and **must** be in absolute path to work with crontab. If you're new to crontab, see https://crontab.guru/.

## Debug
To check that the files are getting deleted, uncomment the "echo"-lines in cronjob.php.

## Planned features
- [ ] Better CSS-styling on dropzone
- [ ] Make own config.php file

## Licence:
MIT

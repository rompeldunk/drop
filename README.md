# DropZone + DirectoryList
Create your own fileshare service on your local webserver.

## General
Using DropZone.js, DirectoryList and PHP to upload and browse files and share link to friends or to your own use. 

Files are deleted after 72 hours (can be adjusted), working like a temporary file sharing service, keeping your upload folder clean after usage.

## Installation / Configuration
1. Set your upload directory in cronjob.php.
2. Add a cronjob on your webserver user in SSH/terminal. Example:

```
crontab -e -u www-data
 // Add this line: (check every 30 min)
30 * * * * /usr/bin/php /var/www/drop/cronjob.php
```
Path to php can be found by ```whereis php``` and **must** be in absolute path to work with crontab

## Debug
Get verbose output in cronjob.php by uncommenting echo-lines.

## Planned features
- [ ] Better CSS-styling on dropzone
- [ ] Make own config.php file

## Licence:
MIT

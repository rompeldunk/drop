# DropZone + DirectoryList
Create your own fileshare service on your local webserver. Files are deleted after 72 hours.

## Demo:
http://demo.mogieb.net


## About
Combining [DropZone.js](https://github.com/enyo/dropzone), [DirectoryLister](https://github.com/DirectoryLister/DirectoryLister) and PHP, you can setup your own fileservice (ala files.fm) to upload and browse files and share link to friends or to your own use.

Files are deleted after 72 hours (can be adjusted), working like a temporary file sharing service, keeping your upload folder clean after usage.


## Installation / Configuration

1. Define upload folder in config.php. (Default is ./upload)
2. Create a cronjob on your webserver through SSH/terminal:

```
crontab -e -u www-data
```

Add this line for check every 30 min:
```
*/30 * * * * /usr/bin/php /var/www/drop/cronjob.php
```

Path to php can be found by ```whereis php``` and **must be in absolute path** to work with crontab. To check at other time interval, see https://crontab.guru/ for an easy reference.



## Planned features
- [X] Multiple fileupload with unique share-link
- [X] Better CSS-styling on dropzone
- [X] Make own config.php file
- [X] Publish demo-site
- [ ] Scramble fileshare-path without using database
- [ ] Option for hiding uploaded file in DirectoryList browser


## Licence:
MIT

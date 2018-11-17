# PHP-FTP-Class
### PHP FTP is a simple and convenient FTP adapter for processing FTP requests via PHP.

## BASIC USAGE
Create a new directory, change into it and upload a file

```php
$ftp = new FTP('ftp.myserver.com', 'username', 'password',false);

$ftp->mkdir('somedir');
$ftp->chdir('somedir');

$ftp->put(['my_local_file.html','my_local_file2.html']);
```

## Download file from a directory

```php
$ftp = new FTP('ftp.myserver.com', 'username', 'password',false);

$ftp->chdir('somedir');

$ftp->get('my_local_file.html', 'file_on_server.html');

```
<?php
require_once 'classes/FTP.php';

$ftp = new FTP('ftp.myserver.com', 'username', 'password',false);

$ftp->mkdir('somedir');
$ftp->chdir('somedir');


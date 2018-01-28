<?php
require_once 'classes/Ftp.php';

$f = new FTP;

$server = "files.000webhost.com";
$secure = false;
if($f->FtpLoginStatus() === false){
$f->FtpConnect(
[
	'host' => $server,
	'secure' => false,
	'username' => 'unspun-pattern',
	'password' => "host115418github",	
]
);
}
if($f->FtpLoginStatus() === true){

	print_r($f->FtpFiles('public_html'));

	$f->FtpUpload(
		[
			'files' => [
				'index.html',
			]
		]
	);

}


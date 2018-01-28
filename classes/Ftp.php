<?php
class FTP{

	public function FtpConnect( $params ){

		if(is_array($params)){

			if($params['secure'] === false){

				$conn = ftp_connect($params['host']);

				$login_result = ftp_login($conn, $params['username'], $params['password']);

				$_SESSION['ftp'] = $conn;

				return true;


			}
			if($params['secure'] === true){

				
			}			
		}else{

			return false;

		}

	}

	public function FtpLoginStatus(){

		if(isset($_SESSION['ftp'])){

			return true;

		}else{

			return false;

		}

	}

	public function FtpFiles($dir){

		$ConnId = $_SESSION['ftp'];

		return ftp_nlist($ConnId, $dir);

	}

	public function FtpUpload( $params ){

		if(is_array($params)){

			$files = $params['files'];

			$server_root = 'public_html';

			foreach ($files as $key => $value) {

				ftp_put($_SESSION['ftp'], $server_root.'/'.$value, $value, FTP_ASCII);
				
			}

		}else{

			return false;

		}


	}
}
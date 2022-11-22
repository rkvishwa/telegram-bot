<?php 

define ('DB1','delegate_telegrambot');
define ('HOST','localhost');
define ('USER','vishwa');
define ('PW','0770499787kK#');

if($_SERVER['HTTP_HOST'] != 'localhost'){
	if(!$con = mysqli_connect(HOST,USER,PW,DB1)){
		die('Failed to connect!');
	}
}else{
	if(!$con = mysqli_connect(HOST,'root','',DB1)){
		die('Failed to connect!');
	}
}





?>
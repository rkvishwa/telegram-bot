<?php 

define ('DB1','delegate_telegrambot');
define ('HOST','localhost');
define ('USER','vishwa');
define ('PW','0770499787kK#');

if(!$con = mysqli_connect(HOST,USER,PW,DB1)){
	die('Failed to connect!');
}


?>
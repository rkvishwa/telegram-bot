<?php
include('autoload.php');
//$code = "https://api.telegram.org/bot5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o/getUpdates";
//$setcode = "https://api.telegram.org/bot5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o/setWebhook?url=https://rvkbot.tk/webhook.php";
//$getcode = "https://api.telegram.org/bot5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o/getwebhookinfo";
$password = '0770499787k';
if(!is_user_exist($con,$password)){
	echo 'here';
}else{
	echo is_user_exist($con,$password);
}

?>

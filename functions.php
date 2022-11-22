<?php
define('TOKEN','5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o');

function send_message($chat_id,$msg){
	$url = "https://api.telegram.org/bot".TOKEN."/sendMessage?text=$msg&chat_id=$chat_id";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	$result = curl_exec($ch);
	curl_close($ch);
}

 ?>
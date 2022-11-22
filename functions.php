<?php
define('TOKEN','5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o');

function send_message($chat_id,$msg){
	$url = "https://api.telegram.org/bot".TOKEN."/sendMessage?text=$msg&chat_id=$chat_id&parse_mode=html";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	$result = curl_exec($ch);
	curl_close($ch);
}

function is_user_exist($con,$password){
	$text = mysqli_real_escape_string($con,$password);
	$query = mysqli_query($con,"SELECT * FROM user_info WHERE u_pw='$text'");
	if(mysqli_num_rows($query) > 0){
		$row = mysqli_fetch_assoc($query);
		$message = $row['user_name'];
	}else{
		$message = false;
	}
	return $message;
}

 ?>
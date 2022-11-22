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
	$stmt = mysqli_stmt_init($con);
	$sql = "SELECT user_name FROM user_info WHERE u_pw=?";
	if(mysqli_stmt_prepare($stmt,$sql)){
		mysqli_stmt_bind_param($stmt,'s',$password);
		mysqli_stmt_execute($stmt);
		$result = mysqli_stmt_get_result($stmt);
		if(mysqli_num_rows($result) > 0){
			$row = mysqli_fetch_assoc($result);
			return $row['user_name'];
		}
	}
	return false;
}

 ?>
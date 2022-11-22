<?php 
include('autoload.php');

$input = file_get_contents('php://input');
$data = json_decode($input);
$chat_id = $data->message->chat->id;
$text = $data->message->text;

if($text == '/start'){
	$message = 'Welcome%0Adude';
}elseif($text == '/code'){
	$message = 'Enter <b>Password</b>';
}else{
	if(!is_user_exist($con,$message)){
		$message = 'in valid pasword';
	}else{
		$message = "Hello". is_user_exist($con,$message);
	}
}

send_message($chat_id,$message);


 ?>
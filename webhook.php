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
	$message = 'ow';
}
send_message($chat_id,$message);

 ?>
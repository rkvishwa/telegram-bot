<?php 
$setcode = "https://api.telegram.org/bot5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o/setWebhook?url=https://rvkbot.tk/webhook.php";
$getcode = "https://api.telegram.org/bot5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o/getwebhookinfo";


$input = file_get_contents('php://input');
$date = json_decode($input);
$chat_id = $data->message->chat->id;
$text = $data->message->text;
echo $text;

 ?>
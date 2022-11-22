<?php 

$input = file_get_contents('php://input');
$data = json_decode($input);
$chat_id = $data->message->chat->id;
$text = $data->message->text." webhook reply";
$token = '5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o';
$url = "https://api.telegram.org/bot$token/sendMessage?text=$text&chat_id=$chat_id";

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
$result = curl_exec($ch);
curl_close($ch);
mail("vishwa@ayzack.com","webhook",$text);
//$setcode = "https://api.telegram.org/bot5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o/setWebhook?url=https://rvkbot.tk/webhook.php";
//$getcode = "https://api.telegram.org/bot5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o/getwebhookinfo";


 ?>
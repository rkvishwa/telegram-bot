<?php
//$code = "https://api.telegram.org/bot5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o/getUpdates";
//$setcode = "https://api.telegram.org/bot5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o/setWebhook?url=https://rvkbot.tk/webhook.php";
//$getcode = "https://api.telegram.org/bot5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o/getwebhookinfo";

if(isset($_POST['submit'])){
	$text = $_POST['message'];
	$token = '5817268721:AAG6qqTHLsAQtcjfeQm7n5B1TE4WvAk2i0o';
	$chat_id = 1207819742;
	$url = "https://api.telegram.org/bot$token/sendMessage?text=$text&chat_id=$chat_id";
	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER,true);
	$result = curl_exec($ch);
	curl_close($ch);
	$result = json_decode($result,true);
	if(isset($result['ok'])){
		if(isset($result['result'])){
			echo "<pre>";
			print_r($result);
		}else{
			echo $result['description'];
		}
	}else{
		echo "Something went wrong!";
	}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Telegram bot</title>
</head>
<body>
	<form action='./' method='post'>
		<input type="text" name="message" required>
		<input type="submit" value="send2" name="submit">
	</form>
</body>
</html>
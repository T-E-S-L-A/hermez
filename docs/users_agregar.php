<?php

$botToken = "5005726938:AAFJ7NOJLAgihy17hW_qxwGPgZFw-2HfB2c";
$update = file_get_contents('php://input');
$update = json_decode($update, TRUE);
$print = print_r($update);
$chatId = $update["message"]["chat"]["id"];
$gId = $update["message"]["from"]["id"];
$userId = $update["message"]["from"]["id"];
$firstname = $update["message"]["from"]["first_name"];
$username = $update["message"]["from"]["username"];
$message = $update["message"]["text"];
$message_id = $update["message"]["message_id"];

if((strpos($message, ".aaa") === 0)){
  sendMessage($chatId, "USUARIO AGREGADO");  
}


function sendMessage ($chatId, $message){
  $url = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=".$message."&parse_mode=HTML";
  file_get_contents($url);      
}

?>

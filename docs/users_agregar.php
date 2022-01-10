<?php

///https://api.telegram.org/bot5005726938:AAFJ7NOJLAgihy17hW_qxwGPgZFw-2HfB2c/setwebhook?url=https://hermez.herokuapp.com/users_mostrar.php

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




    //////////=========[SEMANA]=========//////////
    if((strpos($message, ".semana") === 0)){
        
        $data = "OK";

        if($data == "OK"){
            sendMessage($chatId, "USUARIO AGREGADO"."\n\n"."Acceso: 1 semana", $botToken);
        }
        else{
            sendMessage($chatId, "ERROR: No fue posible hacer el registro", $botToken);
        }
    }


    function sendMessage ($chatId, $message, $botToken){
        $url = "https://api.telegram.org/bot".$botToken."/sendMessage?chat_id=".$chatId."&text=".$message."&parse_mode=HTML";
        file_get_contents($url);      
      }

?>

<?php

$nuevo = "👤USUARIO EXPIRADO👤"."\n\n";
$id = "➤<b>ID Telegram:</b> ".$_POST['id']."\n";
$nombre = "➤<b>PERFIL:</b> ".$_POST['nombre']."\n";
$inicio = "➤<b>Inicio:</b> ".$_POST['inicio']."\n";
$final = "➤<b>Final:</b> ".$_POST['final'];


$mensaje = $nuevo.$id.$nombre.$inicio.$final;

if(isset($nombre)){
    $token = "5005726938:AAFJ7NOJLAgihy17hW_qxwGPgZFw-2HfB2c";
    $id = "1545891683";
    $urlMsg = "https://api.telegram.org/bot{$token}/sendMessage";
    $msg = $mensaje;

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $urlMsg);curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, "chat_id={$id}&parse_mode=HTML&text=$msg");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $server_output = curl_exec($ch);
    curl_close($ch);

    echo 'OK';
}
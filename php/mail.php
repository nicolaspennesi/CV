<?php

$to = "hi@nicolaspennesi.com";

// Setea variables
$name = $_POST["callName"];
$email = $_POST["callEmail"];
$mensaje = $_POST["message"];

//Prepara mail
$subject = "Consulta desde Web";
$message = "Nombre: " . $name;
$message .= "<br><br>Email: " . $email;
$message .= "<br><br>Mensaje: " . $mensaje;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type: text/html; charset=utf-8" . "\r\n";
$headers .= "From: Web CV <web@nicolaspennesi.com>" . "\r\n";
$headers .= "Reply-To: " . $name . " <" . $email . ">" . "\r\n";

//Envía Mail
if (mail($to, $subject, $message, $headers)) {
    echo '{"response":"success"}';
} else {
    echo "Error sending message, please try again later.";
}

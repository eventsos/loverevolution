<?php

$email = $_POST['email'];
$subject = "Newsletter";
$message = "Bitte '$email' mit in den E-Mailverteiler aufnehmen.";


$to      = 'simon@opitzfamily.de';

$headers = 'From: '.$email. "\r\n" .
    'X-Mailer: PHP/' . phpversion();

if ($email != "" && $message != "") {
    mail($to, $subject, $message, $headers);
    echo "success";
} else {
    echo "missingFields";
}
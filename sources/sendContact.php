<?php

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];


$to      = 'simon@opitzfamily.de';

if ($name != "") {
    $headers = 'From: '.$name.'<'.$email.'>' . "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
} else {
    $headers = 'From: '.$email. "\r\n" .
        'Reply-To: '. $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
}

if ($email != "" && $message != "") {
    mail($to, $subject, $message, $headers);
    echo "success";
} else {
    echo "missingFields";
}
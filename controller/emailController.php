<?php

require_once 'vendor/autoload.php';
require_once './admin/controller/db_conn.php';

// Create the Transport
$transport = (new Swift_SmtpTransport('smtp.gmail.com', 465, 'ssl'))
  ->setUsername('lauritosamber@gmail.com')
  ->setPassword('Samber061617');
;

// Create the Mailer using your created Transport
$mailer = new Swift_Mailer($transport);

// Send the message
function sendVerificationEmail($userEmail, $token){
    // Create a message
    global $mailer;
    $body = '
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Verify Email</title>
        <style>
        .btn{
            font: bold 11px Arial;
            text-decoration: none;
            background-color: #6cc7b0;
            color: #ffffff;
            padding: 2px 6px 2px 6px;
 
                }
            </style>
    </head>
    <body>
    <div class="wrapper">
        <p>Thank you for signing in New Era University, Please click the link below to Verify your Email</p>
    </div>
        <a href="http://localhost/capstone%20project/homepage.php?token=' . $token .'" class="btn">Verify your email</a>
    </body>
    </html>
    ';
    $message = (new Swift_Message('New Era University, Verify your Email Address'))
    ->setFrom('lauritosamber@gmail.com')
    ->setTo($userEmail)
    ->setBody($body,'text/html');
    $result = $mailer->send($message);
}

?>
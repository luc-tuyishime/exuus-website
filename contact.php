<?php
function sendMail($name,$email,$text){
    $to      = 'info@exuus.com';
    $subject = '[Exuus] Mail From '.$name;
    $message = $text;
    $headers = 'From: '.$email. "\r\n" .
        'Reply-To: info@exuus.com' . "\r\n" .
        'X-Mailer: PHP/' . phpversion();
    mail($to, $subject, $message, $headers);
    echo $name,$email,$text;
}
sendMail($_POST['name'],$_POST['email'],$_POST['message']);
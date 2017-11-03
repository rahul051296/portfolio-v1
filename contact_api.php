<?php

    if (isset($_SERVER['HTTP_ORIGIN'])) {
    header("Access-Control-Allow-Origin: {$_SERVER['HTTP_ORIGIN']}");
    header('Access-Control-Allow-Credentials: true');
    header('Access-Control-Max-Age: 86400');    // cache for 1 day
}
    // Access-Control headers are received during OPTIONS requests
    if ($_SERVER['REQUEST_METHOD'] == 'OPTIONS') {

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_METHOD']))
            header("Access-Control-Allow-Methods: GET, POST, PUT, DELETE, OPTIONS");         

        if (isset($_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']))
            header("Access-Control-Allow-Headers: {$_SERVER['HTTP_ACCESS_CONTROL_REQUEST_HEADERS']}");

    }

    $name = $_REQUEST["name"];
    $email = $_REQUEST["email"];
    $phone = $_REQUEST["phone"];
    $message = $_REQUEST["message"];

        $headers = 'From: Rahul Prabhakar<admin@rahulprabhakar.ml>' . "\n";
        $msg =   'Name: ' .$name ."\n"
                .'Email: ' .$email ."\n"
                .'Phone: ' .$phone ."\n"
                .'Message: ' .$message;
        $reply = 'Hi ' .$name ."\n\n" .
                'Thank you for getting in touch with me. I will review your message and get back to you shortly' ."\n\n" .
                'Best Regards,'."\n" .'Rahul Prabhakar';
    
            mail('rahulprabhakar0596@gmail.com','Request from Portfolio Website', $message, $headers);
            mail($email,'Thank You',$reply,$headers);
?>

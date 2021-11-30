<?php
require 'twilio_sms.php';

$msg = '';
$alert = '';

if (filter_has_var(INPUT_POST, 'submit')) {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);

    if (empty($name) && empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL) == false) {
        $toEmail = 'btaftcan@gmail.com';
        $subject = 'Contact Request From ' .$name;
        $body = '<h2>Contact Request</h2><h4>Name</h4><p>'.$name.'</p><h4>Email</h4><p>'.$email.'</p>';
        $headers = "MIME-Version: 1.0" . "\r\n";
        $headers .= "content-Type:text/html;charset=UTF-8" . "\r\n";
        $headers .= "From: " .$name. "<" .$email. ">" . "\r\n";

        if (mail($toEmail, $subject, $body, $headers)) {
            send_sms($name, $email);
            unset($_POST['name']);
            unset($_POST['email']);
            $msg = "YOUR WORK HERE IS DONE";
            $alert = "alert-success";
        } else {
            $msg = "Your Email Was Not Sent";
            $alert = "alert-danger";
        }
    }

    // if (empty($name) || empty($email)) {
    //     $msg = "Please fill in all fields";
    //     $alert = "alert-danger";
    // } elseif (filter_var($email, FILTER_VALIDATE_EMAIL) === false) {
    //     $msg = "Please use a valid email";
    //     $alert = "alert-danger";
    // }
//}

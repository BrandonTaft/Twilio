<?php

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

function send_sms($name, $email)
{
    $sid = "AC9f06b54a2bf536b781bf3113de01a68d";
    $token = "903771346137aa7520388698650b345b"; 

    $client = new Client($sid, $token);
    $client->messages->create(
        '7706346786', 
        [
            'from' => '12676929007', 
            'body' => 'Congratulations! You Have A New Lead! ' . $name . " > " . $email . "."
        ]
    );
}

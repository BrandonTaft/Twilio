<?php

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

function send_sms($name, $email)
{
    $sid = "";
    $token = ""; 

    $client = new Client($sid, $token);
    $client->messages->create(
        '7706346786', 
        [
            'from' => '12676929007', 
            // 'body' => 'Congratulations! You Have A New Lead! ' . $name . " > " . $email . "."
            'body' => 'Congratulations! YOU FINISHED THE LIST! '
        ]
    );
}

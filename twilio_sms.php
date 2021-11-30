<?php

require __DIR__ . '/vendor/autoload.php';

use Twilio\Rest\Client;

function send_sms($name, $email)
{
    $sid = "AC9f06b54a2bf536b781bf3113de01a68d";
    $token = "d31c3a764336a0dfa72654224cc84553"; 

    $client = new Client($sid, $token);
    $client->messages->create(
        '7706346786', 
        [
            'from' => '+12676929007', 
            'body' => 'Congratulations! YOU FINISHED THE LIST! '
        ]
    );
}

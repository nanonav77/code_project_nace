<?php

    require __DIR__ . '/vendor/autoload.php';
    use Twilio\Rest\Client;

    // Your Account SID and Auth Token from twilio.com/console
    $account_sid = 'ACb08ac822f526b397c9cb85db560e31f5';
    $auth_token = '809750253574d369f8212203f47953c6';
    // In production, these should be environment variables. E.g.:
    // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

    // A Twilio number you own with SMS capabilities
    $twilio_number = "+18329813350";

    $client = new Client($account_sid, $auth_token);
    $client->messages->create(
        
        // Where to send a text message (your cell phone?)
        '+50661884176',
        array(
            'from' => $twilio_number,
            'body' => 'I sent this message in under 10 minutes!'
        )
    );

?>
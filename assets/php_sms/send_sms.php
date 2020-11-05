<?php

    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA MANDAR UN SMS AL COLABORADOR POR CADA INSERCIÓN Y ACTUALIZACIÓN DE UN REGISTRO

    // Importamos la librerias que conectan al servicio de sms TWILIO
    require __DIR__ . '/vendor/autoload.php';
    use Twilio\Rest\Client;

    $numero_telefono = "+506" . $_GET['numero_telefono'];
    $accion_determinada = $_GET['accion_determinada'];
    $fecha_seleccionada = $_GET['fecha_seleccionada'];
    $nombre_finca = $_GET['nombre_finca'];
    $nombre_colaborador = $_GET['nombre_colaborador'];
    $cajuelas_digitadas = $_GET['cajuelas_digitadas'];
    $cuartillos_digitados = $_GET['cuartillos_digitados'];

    // Your Account SID and Auth Token from twilio.com/console
    $account_sid = 'ACb08ac822f526b397c9cb85db560e31f5';
    $auth_token = '45f3f5f20b3550d4fd3f4ab3797a9020';
    // In production, these should be environment variables. E.g.:
    // $auth_token = $_ENV["TWILIO_AUTH_TOKEN"]

    // A Twilio number you own with SMS capabilities
    $twilio_number = "+18329813350";

    $client = new Client($account_sid, $auth_token);
    $client->messages->create(
        
        // Where to send a text message (your cell phone?)
        $numero_telefono,
        array(
            'from' => $twilio_number,
            'body' => $accion_determinada . "\n" . "Colaborador: " . $nombre_colaborador . "\n" . "Fecha:" . $fecha_seleccionada . "\nFinca:" . $nombre_finca . "\nCajuelas:" . $cajuelas_digitadas . "\nCuartillos: " . $cuartillos_digitados
        )
    );

?>
<?php
 
    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA INSERTAR UN REGISTRO DE PRODUCCION DIARIO
    
    include '../db_conexion/db_conexion.php';

    $ide_colaborador = $_GET['ide_colaborador'];
    $ide_finca = $_GET['ide_finca'];
    $fecha = $_GET['fecha'];
    $cajuelas = $_GET['cajuelas'];
    $cuartillos = $_GET['cuartillos'];
    
    $conn = new mysqli( $servidor, $usuario, $password , $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO nace_produccion (ide_colaborador,ide_finca,fecha,cajuelas,cuartillos)
    values ('$ide_colaborador', '$ide_finca', '$fecha','$cajuelas','$cuartillos')";

    if ($conn->query($sql) === TRUE) {
       
        echo mysqli_affected_rows($conn);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    $conn->close();

?>
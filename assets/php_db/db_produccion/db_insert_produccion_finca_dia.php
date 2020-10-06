<?php
 
    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA INSERTAR UN REGISTRO DE PRODUCCION TOTAL DIARIO POR FINCA
    
    include '../db_conexion/db_conexion.php';

    $numero_recibo = $_GET['numero_recibo'];
    $ide_finca = $_GET['ide_finca'];
    $fecha = $_GET['fecha'];
    $cajuelas = $_GET['cajuelas'];
    $cuartillos = $_GET['cuartillos'];
    
    $conn = new mysqli( $servidor, $usuario, $password , $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO nace_produccion_fincas (fecha,id_finca,numero_recibo,cajuelas,cuartillos)
    values ('$fecha', '$ide_finca', '$numero_recibo','$cajuelas','$cuartillos')";

    if ($conn->query($sql) === TRUE) {
       
        echo mysqli_affected_rows($conn);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    $conn->close();

?>
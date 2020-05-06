<?php
 
    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA AGREGAR UNA NUEVA FINCA
    
    include '../db_conexion/db_conexion.php';

    $nombre_ingresado = $_GET['nombre_ingresado'];
    $ide_propietario_ingresado = $_GET['ide_propietario_ingresado'];
    $direccion_ingresada = $_GET['direccion_ingresada'];

    $conn = new mysqli( $servidor, $usuario, $password , $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO nace_fincas (nombre, direccion,ide_propietario)
    SELECT * FROM (SELECT '$nombre_ingresado' as nombre, '$direccion_ingresada' as direccion, '$ide_propietario_ingresado' as ide_propietario) AS tmp
    WHERE NOT EXISTS (
        SELECT nombre FROM nace_fincas where  nombre = '$nombre_ingresado' 
    ) LIMIT 1;";

    if ($conn->query($sql) === TRUE) {
       
        echo mysqli_affected_rows($conn);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    $conn->close();

?>
<?php
 
    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA ACTUALIZAR LOS DATOS DE UN COLABORADOR
    
    include '../db_conexion/db_conexion.php';

    $numero_ingresado = $_GET['numero_ingresado'];
    $ide_propietario_ingresado = $_GET['ide_propietario_ingresado'];
    $nombre_ingresado = $_GET['nombre_ingresado'];
    $direccion_ingresada = $_GET['direccion_ingresada'];

    $conn = new mysqli( $servidor, $usuario, $password , $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE nace_fincas set nombre='$nombre_ingresado', direccion='$direccion_ingresada' , ide_propietario='$ide_propietario_ingresado' 
    where ide='$numero_ingresado'";

    if ($conn->query($sql) === TRUE) {
       
        echo mysqli_affected_rows($conn);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    $conn->close();

?>
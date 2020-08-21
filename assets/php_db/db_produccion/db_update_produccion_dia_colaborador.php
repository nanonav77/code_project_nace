<?php

    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA ACTUALIZAR LA PRODUCCIÓN DIARIA DE UN COLABORADOR

    include '../db_conexion/db_conexion.php';
       
    $ide_ingresado = $_GET['ide_ingresado'];
    $cajuelas_ingresadas = $_GET['cajuelas_ingresadas'];
    $cuartillos_ingresados = $_GET['cuartillos_ingresados'];

    $conn = new mysqli( $servidor, $usuario, $password , $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE nace_produccion set cajuelas='$cajuelas_ingresadas', cuartillos='$cuartillos_ingresados' where id_registro='$ide_ingresado'";

    if ($conn->query($sql) === TRUE) {
       
        echo mysqli_affected_rows($conn);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    $conn->close();

?>

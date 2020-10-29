<?php

    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA ACTUALIZAR LA PRODUCCIÓN DIARIA EN UNA FINCA

    include '../db_conexion/db_conexion.php';
       
    $numero_recibo = $_GET['numero_recibo'];
    $fecha_ingresada = $_GET['fecha_ingresada'];
    $id_finca_ingresado = $_GET['id_finca_ingresado'];

    $conn = new mysqli( $servidor, $usuario, $password , $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE from nace_produccion_fincas 
    where fecha='$fecha_ingresada' and id_finca='$id_finca_ingresado' and numero_recibo = '$numero_recibo'";

    if ($conn->query($sql) === TRUE) {
       
        echo mysqli_affected_rows($conn);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    $conn->close();

?>

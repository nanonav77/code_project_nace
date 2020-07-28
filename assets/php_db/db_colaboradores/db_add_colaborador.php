<?php
 
    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA AGREGAR UN NUEVO COLABORADOR
    
    include '../db_conexion/db_conexion.php';

    $nombre_ingresado = $_GET['nombre_ingresado'];
    $identificacion_ingresado = $_GET['identificacion_ingresado'];
    $telefono_ingresado = $_GET['telefono_ingresado'];
    $email_ingresado = $_GET['email_ingresado'];
    
    $conn = new mysqli( $servidor, $usuario, $password , $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO nace_colaboradores (nombre, identificacion, telefono,email)
    SELECT * FROM (SELECT '$nombre_ingresado' as nombre, '$identificacion_ingresado' as identificacion, '$telefono_ingresado' as telefono,'$email_ingresado' as correo) AS tmp
    WHERE NOT EXISTS (
        SELECT identificacion,telefono,email FROM nace_colaboradores WHERE identificacion = '$identificacion_ingresado' or email = '$email_ingresado' or telefono = '$telefono_ingresado'
    ) LIMIT 1;";

    if ($conn->query($sql) === TRUE) {
       
        echo mysqli_affected_rows($conn);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    $conn->close();

?>
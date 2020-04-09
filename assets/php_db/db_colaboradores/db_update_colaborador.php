<?php
 
    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA ACTUALIZAR LOS DATOS DE UN COLABORADOR
    
    include '../db_conexion/db_conexion.php';

    $numero_ingresado = $_GET['numero_ingresado'];
    $nombre_ingresado = $_GET['nombre_ingresado'];
    $identificacion_ingresado = $_GET['identificacion_ingresado'];
    $telefono_ingresado = $_GET['telefono_ingresado'];
    $email_ingresado = $_GET['email_ingresado'];
    $genero_ingresado = $_GET['genero_ingresado'];

    $conn = new mysqli( $servidor, $usuario, $password , $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "UPDATE nace_colaboradores set nombre='$nombre_ingresado', identificacion='$identificacion_ingresado' , telefono='$telefono_ingresado' ,email='$email_ingresado' , genero='$genero_ingresado' 
    where numero='$numero_ingresado'";

    if ($conn->query($sql) === TRUE) {
       
        echo mysqli_affected_rows($conn);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    $conn->close();

?>
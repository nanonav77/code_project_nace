<?php
 
    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA ELIMINAR UN DETERMINADO COLABORADOR
    
    include '../db_conexion/db_conexion.php';

    $numero_ingresado = $_GET['numero_ingresado'];

    $conn = new mysqli( $servidor, $usuario, $password , $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM nace_colaboradores where numero='$numero_ingresado'";

    if ($conn->query($sql) === TRUE) {
       
        echo mysqli_affected_rows($conn);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
       
    }
    $conn->close();

?>
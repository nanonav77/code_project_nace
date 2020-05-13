
<?php
 
    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA INICIALIZAR UNA NUEVA SEMANA DE PRODUCCION POR COLABORADOR Y FINCA
    
    include '../db_conexion/db_conexion.php';

    $ide_finca_ingresado = $_GET['ide_finca_ingresado'];
    $ide_colaborador_ingresado = $_GET['ide_colaborador_ingresado'];
    $fecha_ingresada = $_GET['fecha_ingresada'];

    $conn = new mysqli( $servidor, $usuario, $password , $basededatos);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "INSERT INTO nace_produccion (cajuelas,cuartillos,ide_finca,ide_colaborador,fecha)
    SELECT * FROM (SELECT 0 as cajuelas, 0 as cuartillos, '$ide_finca_ingresado' as ide_finca,'$ide_colaborador_ingresado' as ide_colaborador,'$fecha_ingresada' as fecha) AS tmp
    WHERE NOT EXISTS (
        SELECT fecha,ide_colaborador,ide_finca FROM nace_produccion where fecha = '$fecha_ingresada' and ide_colaborador = '$ide_colaborador_ingresado' and ide_finca = '$ide_finca_ingresado' 
    ) LIMIT 1;";

    if ($conn->query($sql) === TRUE) {
        
        echo mysqli_affected_rows($conn);
        
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
        
    }
    $conn->close();

?>
<?php

    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA OBTENER EL TELEFONO REGISTRADO DE UN DETERMINADO COLABORADOR

    include '../db_conexion/db_conexion.php';
    
    $id_colaborador = $_GET['id_colaborador'];

    $return_arr = array();

    // creación de la conexión a la base de datos con mysql_connect()
    $conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");

    // Selección del a base de datos a utilizar
    $db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
    // establecer y realizar consulta. guardamos en variable.
    $consulta = "SELECT nombre,telefono FROM nace_colaboradores WHERE numero = '$id_colaborador'";

    $resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

    if ($conexion)
    {
    while($row = mysqli_fetch_array($resultado)){

        $row_array['nombre'] = $row['nombre']; 
        $row_array['telefono'] = $row['telefono'];      
        array_push($return_arr,$row_array);
    }  
    }

    mysqli_close($conexion);

    echo json_encode($return_arr);
   
?>
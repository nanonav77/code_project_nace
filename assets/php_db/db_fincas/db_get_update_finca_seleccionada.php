<?php

    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA LOS DATOS DE LA FINCA SELECCIONADA A ACTUALIZAR

    include '../db_conexion/db_conexion.php';
       
    $numero_ingresado = $_GET['numero_ingresado'];

    $return_arr = array();
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
    $consulta = "SELECT a.numero as numero_finca, a.nombre as nombre_finca, a.direccion as direccion_finca, b.nombre_usuario as nombre_propietario,b.apellidos_usuario as apellidos_propietario,b.identificacion as identificacion_propietario FROM nace_fincas as a join nace_usuarios as b on a.ide_propietario = b.identificacion WHERE a.numero = '$numero_ingresado'";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

   if ($conexion)
   {
       while($row = mysqli_fetch_array($resultado)){
          $row_array['numero_finca'] = $row['numero_finca'];
          $row_array['nombre_finca'] = $row['nombre_finca'];
          $row_array['direccion_finca'] = $row['direccion_finca'];
          $row_array['nombre_propietario'] = $row['nombre_propietario'];
          $row_array['apellidos_propietario'] = $row['apellidos_propietario'];
          $row_array['identificacion_propietario'] = $row['identificacion_propietario'];
     
          array_push($return_arr,$row_array);
       }  
   }

    mysqli_close($conexion);

    echo json_encode($return_arr);

?>
<?php

    // ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA OBTENER LAS FINCAS A ACTUALIZAR

    include '../db_conexion/db_conexion.php';
       
    $valor_ingresado = $_GET['valor_ingresado'];

    $return_arr = array();
	
	// creación de la conexión a la base de datos con mysql_connect()
	$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");
	
	// Selección del a base de datos a utilizar
	$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
	// establecer y realizar consulta. guardamos en variable.
    $consulta = "SELECT a.numero, a.nombre, a.direccion, b.nombre_usuario as nombre_cli, b.apellidos_usuario as apellidos_cli FROM nace_fincas as a join nace_usuarios as b on a.ide_propietario = b.identificacion WHERE a.numero = '$valor_ingresado' or a.nombre like '%$valor_ingresado%' order by a.numero desc";
	$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

   if ($conexion)
   {
       while($row = mysqli_fetch_array($resultado)){
          $row_array['numero'] = $row['numero'];
          $row_array['nombre'] = $row['nombre'];
          $row_array['direccion'] = $row['direccion'];
          $row_array['nombre_cli'] = $row['nombre_cli'];
          $row_array['apellidos_cli'] = $row['apellidos_cli'];
          array_push($return_arr,$row_array);
       }  
   }

    mysqli_close($conexion);

    echo json_encode($return_arr);

?>
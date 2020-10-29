<?php

// ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA LA PRODUCCION DIARIA TOTAL DE UNA FINCA

include '../db_conexion/db_conexion.php';
   
$fecha_ingresada = $_GET['fecha_ingresada'];
$ide_finca_ingresado = $_GET['ide_finca_ingresado'];

$return_arr = array();

// creación de la conexión a la base de datos con mysql_connect()
$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");

// Selección del a base de datos a utilizar
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT id_registro,fecha,id_finca,numero_recibo,cajuelas,cuartillos 
FROM nace_produccion_fincas where fecha = '$fecha_ingresada' and id_finca = '$ide_finca_ingresado'";

$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

if ($conexion)
{
   while($row = mysqli_fetch_array($resultado)){

      $row_array['id_registro'] = $row['id_registro'];
      $row_array['fecha'] = $row['fecha'];
      $row_array['id_finca'] = $row['id_finca'];
      $row_array['numero_recibo'] = $row['numero_recibo'];
      $row_array['cajuelas'] = $row['cajuelas'];
      $row_array['cuartillos'] = $row['cuartillos'];
            
      array_push($return_arr,$row_array);
   }  
}

mysqli_close($conexion);

// validar si hay datos o no con los filtros aplicados por el usuario
if(empty($return_arr)){
   $row_array['id_registro'] = 0;
   array_push($return_arr,$row_array);
   echo json_encode($return_arr);
}
else{
   echo json_encode($return_arr);
}
   
?>
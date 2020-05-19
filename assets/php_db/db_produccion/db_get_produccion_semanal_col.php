
<?php

// ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA LA PRODUCCION DIARIA POR COLABORADOR Y FINCA

include '../db_conexion/db_conexion.php';
   
$ide_colaborador_ingresado = $_GET['ide_colaborador_ingresado'];
$ide_finca_ingresado = $_GET['ide_finca_ingresado'];

$return_arr = array();

// creación de la conexión a la base de datos con mysql_connect()
$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");

// Selección del a base de datos a utilizar
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT a.*, b.nombre as nombre_finca FROM nace_produccion as a join nace_fincas as b on a.ide_finca = b.ide where a.ide_colaborador='$ide_colaborador_ingresado' and a.ide_finca='$ide_finca_ingresado' and week(a.fecha) and week(CURDATE()) order by a.fecha desc";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

if ($conexion)
{
   while($row = mysqli_fetch_array($resultado)){
      $row_array['ide'] = $row['ide'];
      $row_array['nombre_finca'] = $row['nombre_finca'];
      $row_array['cajuelas'] = $row['cajuelas'];
      $row_array['cuartillos'] = $row['cuartillos'];
      $row_array['fecha'] = $row['fecha'];
      array_push($return_arr,$row_array);
   }  
}

mysqli_close($conexion);

echo json_encode($return_arr);

?>

<?php

// ESTE CODIGO PHP CONECTA A LA BASE DE DATOS PARA LA PRODUCCION DIARIA POR COLABORADOR Y FINCA

include '../db_conexion/db_conexion.php';
   
$fecha_ingresada = $_GET['fecha_ingresada'];
$ide_finca_ingresado = $_GET['ide_finca_ingresado'];

$return_arr = array();

// creación de la conexión a la base de datos con mysql_connect()
$conexion = mysqli_connect( $servidor, $usuario, $password ) or die ("No se ha podido conectar al servidor de Base de datos");

// Selección del a base de datos a utilizar
$db = mysqli_select_db( $conexion, $basededatos ) or die ( "Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
// establecer y realizar consulta. guardamos en variable.
$consulta = "SELECT a.numero as numero_colaborador, a.nombre as nombre_colaborador,
b.fecha as fecha_produccion, b.cajuelas, b.cuartillos, b.id_registro  FROM nace_colaboradores as a
left join nace_produccion as b 
on a.numero = b.ide_colaborador and b.fecha = '$fecha_ingresada'
left join nace_fincas as c
on b.ide_finca = c.numero and c.numero = '$ide_finca_ingresado'";
$resultado = mysqli_query( $conexion, $consulta ) or die ( "Algo ha ido mal en la consulta a la base de datos");

if ($conexion)
{
   while($row = mysqli_fetch_array($resultado)){
      $row_array['numero_colaborador'] = $row['numero_colaborador'];
      $row_array['nombre_colaborador'] = $row['nombre_colaborador'];
      $row_array['fecha_produccion'] = $row['fecha_produccion'];
      $row_array['cajuelas'] = $row['cajuelas'];
      $row_array['cuartillos'] = $row['cuartillos'];
      $row_array['id_registro'] = $row['id_registro'];
      array_push($return_arr,$row_array);
   }  
}

mysqli_close($conexion);

echo json_encode($return_arr);

?>
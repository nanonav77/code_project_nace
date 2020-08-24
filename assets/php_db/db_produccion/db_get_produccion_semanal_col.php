
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
$consulta = "SELECT tt.numero_colaborador as numero_colaborador, tt.nombre_colaborador,tt.numero_finca, tt.fecha_produccion,tt.cajuelas,tt.cuartillos,
tt.id_registro from (

SELECT  a.numero as numero_colaborador, a.nombre as nombre_colaborador,
case when c.numero is null then 0 else c.numero end as numero_finca,
b.fecha as fecha_produccion, b.cajuelas, b.cuartillos, 
case when b.id_registro is null then 0 else b.id_registro end as id_registro FROM nace_colaboradores as a
join nace_produccion as b 
on a.numero = b.ide_colaborador and b.fecha = '$fecha_ingresada'
join nace_fincas as c
on b.ide_finca = c.numero and c.numero = '$ide_finca_ingresado'

union all

SELECT  a.numero as numero_colaborador, a.nombre as nombre_colaborador,
case when c.numero is null then 0 else c.numero end as numero_finca,
b.fecha as fecha_produccion, b.cajuelas, b.cuartillos, 
case when b.id_registro is null then 0 else b.id_registro end as id_registro FROM nace_colaboradores as a
left join nace_produccion as b 
on a.numero = b.ide_colaborador and b.fecha = '$fecha_ingresada'
left join nace_fincas as c
on b.ide_finca = c.numero and c.numero = '$ide_finca_ingresado'
where a.numero not in (SELECT  DISTINCT(a.numero) FROM nace_colaboradores as a
join nace_produccion as b 
on a.numero = b.ide_colaborador and b.fecha = '$fecha_ingresada'
join nace_fincas as c
on b.ide_finca = c.numero and c.numero = '$ide_finca_ingresado')

) as tt
order by tt.numero_colaborador asc";

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
      $row_array['numero_finca'] = $row['numero_finca'];
      array_push($return_arr,$row_array);
   }  
}

mysqli_close($conexion);

echo json_encode($return_arr);

?>
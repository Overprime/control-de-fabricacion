<?php 

include('../header.php');

$db      = new Conexion();
$link    = Conectarse();

$Ot          = $_POST['ot'];
$Horainicio  = $_POST['horainicio'];
$Horafin     = $_POST['horafin'];
$date        = new DateTime($_POST['fecha']); 
$Fecha       = $date->format('Y-m-d');
$HorasTrabajo= $Horafin-$horainicio; 
$Horashombre = (floatval($Horafin)-floatval($Horainicio))/60;
$Fechaproceso=date('Ym');

/*1. Obtener la descripción de la hora de inicio*/
$sql= $db->query("SELECT descripcion FROM fechainicio WHERE 
valor ='$Horainicio';");
while ($fila = mysqli_fetch_array($sql))
{
$DescHorainicio=$fila['descripcion'];
}



/*2. Obtener la descripción de la hora de fin*/
$sql= $db->query("SELECT descripcion FROM fechainicio WHERE 
valor ='$Horafin';");
while ($fila = mysqli_fetch_array($sql))
{
$DescHorafin=$fila['descripcion'];
}

/*3. Obtener el centro de costo de la ot*/
$sql="SELECT  CODIGOCENTROCOSTO,CODIGOOT
	FROM [020BDCOMUN].DBO.CENCOSOT  WHERE
	CODIGOOT IN (SELECT OF_COD FROM [011BDCOMUN].DBO.ORD_FAB
 WHERE OF_ESTADO='ACTIVO') AND CODIGOOT='$Ot'";
$result       =mssql_query($sql,$link);
if ($row      =mssql_fetch_array($result)) {
mssql_field_seek($result,0);
while ($field =mssql_fetch_field($result)) {
}do {
 $Cencos=$row['CODIGOCENTROCOSTO'];
} while ($row =mssql_fetch_array($result));
}else { 
echo "error";
} 


$reporte = new Reporte('',$Fecha,$DescHorainicio,$DescHorafin,$HorasTrabajo,$_POST['detalle'],
	$Horashombre,$Ot,$Cencos,$_SESSION['id'],$Fechaproceso,$_POST['proceso'],$_POST['clasificacion']); 

$reporte -> Registrar();

?>
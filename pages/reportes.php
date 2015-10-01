<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
$db       = new Conexion();//clase de conexion
$Fecha    = $_POST['fecha'];//fecha  recibidad por post
$date        = new DateTime($_POST['fecha']); 
$Fechaformato       = $date->format('d-m-Y');
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Bienvenidos</title>
<?php $template->display('meta.tpl'); ?>
<?php $template->display('estilos.tpl'); ?>
</head>
<body>
<div class="container-fluid">
<div class="row">
<div class="col-md-12">
<?php $template->display('nav.tpl'); ?>
</div>
</div>
<div class="row">
<div class="col-md-11">
<?php
$query = "SELECT idreporte,concat(u.nombres,' ',u.apellidos)AS fullname,a.descripcion AS area,r.ot,r.horainicio,r.horafin,
horashombre,r.descripciontrabajo,DATE_FORMAT(r.fechainicio,'%d/%m/%Y') AS fecha,r.cencos,
p.descripcion as proceso,c.descripcion as clasificacion from reporte AS r  INNER JOIN usuario AS u ON 
r.usuario_idusuario=u.idusuario INNER JOIN  area AS a ON 
u.area_idarea=a.idarea INNER JOIN procesos AS p ON 
r.procesos_idprocesos=p.idprocesos INNER JOIN clasificacion AS c ON 
r.clasificacion_idclasificacion=c.idclasificacion 
WHERE  usuario_idusuario=$_SESSION[id] AND r.fechainicio='$Fecha'
ORDER BY r.horainicio";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;
?>

<div class="table-responsive">	
<table class="table table-bordered table-condensed" id="Exportar_a_Excel" border="1">
<thead>
<tr   class="success t12">
<th>USUARIO</th>
<th>ÁREA</th>
<th>OT</th>
<th>CENCOS</th>
<th>H.INICIO</th>
<th>H.FIN</th>
<th>H.HOMBRES</th>
<th>DESCRIPCIÓN</th>
<th>FECHA</th>
<th>PROCESO</th>
<th>CLASIFICACIÓN</th>
</tr>
</thead>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<tr class="default t12">
<td  style="mso-number-format:'@'"><?php echo $fila->fullname ?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->area?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->ot ?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->cencos ?></td>
<td                               ><?php echo $fila->horainicio ?></td>
<td                               ><?php echo $fila->horafin ?></td>
<td                               ><?php echo $fila->horashombre ?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->descripciontrabajo?></td>
<td                               ><?php echo $fila->fecha ?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->proceso ?></td>
<td  style="mso-number-format:'@'"><?php echo $fila->clasificacion ?></td>
</tr>
<?php
}
?>


</table>
</div>

</div>
<div class="col-md-1">

<form action="/control-de-fabricacion/includes/excel/generador-excel.php" 
method="post" target="_blank" id="FormularioExportacion">
<button class="btn btn-success botonExcel"  title="DESCARGAR ARCHIVO"id="#excel">
<i class="fa fa-file-excel-o fa-5x"></i>
</button>

<input type="hidden" id="datos_a_enviar" name="datos_a_enviar" />
</form>

</div>
</div>


<div class="row">
<div class="col-md-11">
<?php 
$query = "SELECT  'total de horas',sum(horashombre) as total 
from reporte as r
where usuario_idusuario=$_SESSION[id]  AND 
r.fechainicio='$Fecha'  AND r.estado='00'";
$result = $db->query($query);
$numfilas = $result->num_rows;
//echo "El n&uacute;mero de elementos es ".$numfilas;
?>

<div class="table-responsive">	
<table class="table table-bordered table-condensed">
<thead>
<tr class="info t12">
<th>FECHA</th>
<th>HORAS  EL DIA DE HOY</th>
<th>HORAS PROMEDIO POR DIA</th>
<th>HORAS FALTANTES</th>
<th>HORAS EXTRAS</th>
</tr>
</thead>
<?php
for ($x=0;$x<$numfilas;$x++) {
$fila = $result->fetch_object();
?>
<tr class="default t12">
<td><?php echo $Fechaformato; ?></td>
<td><?php echo $fila->total?></td>
<td>9.6</td>
<td style="text-align: center"><?php 
$reto=9.6-$fila->total; 
if ($reto<=0) {
echo "<label class='text-primary'>
RETO CUMPLIDO :D 
<i class='glyphicon glyphicon-ok-circle'></i></label>";
}
else { echo $reto; 
}
?>
</td>	

<td style="text-align: center">
<?php 
$extra=9.6-$fila->total; 
if ($extra<=0) {
echo abs($extra);
}
else
{
echo "0";
}
?>
</td>
</tr>
<?php
}
?>


</table>
</div>
</div>
</div>




<div class="row">
<div class="col-md-12">
<?php $template->display('footer.tpl'); ?>
</div>
</div>
</div>

</body>
</html>


<?php 
include('../header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(1);//template 
$db = new Conexion();//clase de conexion
$fecha = new Fecha($_SESSION['id'],'');//clase  fecha de progreso
$id=$_GET['/'];

/*Generar la consulta para obtener ot,proceso,clasificacion*/
$sql= $db->query("SELECT r.ot,p.idprocesos,c.idclasificacion,
p.descripcion AS proceso,c.descripcion AS clasificacion,r.horainicio,r.horafin,
r.descripciontrabajo
 FROM reporte as r 
INNER JOIN procesos as p ON r.procesos_idprocesos=p.idprocesos
INNER JOIN clasificacion as c ON r.clasificacion_idclasificacion=c.idclasificacion
 WHERE  idreporte=$id");
while ($fila = mysqli_fetch_array($sql))
{
$Ot=$fila['ot'];
$Idprocesos=$fila['idprocesos'];
$Procesos=$fila['proceso'];
$Idclasificacion=$fila['idclasificacion'];
$Clasificacion=$fila['clasificacion'];
$Horainicio=$fila['horainicio'];
$Horafin=$fila['horafin'];
$Descripciontrabajo=$fila['descripciontrabajo'];
}

/*Generar la consulta para obtener el id de la hora de inicio*/
$sql= $db->query("SELECT descripcion,valor FROM fechainicio WHERE 
	descripcion='$Horainicio'");
while ($fila = mysqli_fetch_array($sql))
{
$Vhorainicio=$fila['valor'];

}


/*Generar la consulta para obtener el id de la hora de inicio*/
$sql= $db->query("SELECT descripcion,valor FROM fechafin WHERE 
	descripcion='$Horafin'");
while ($fila = mysqli_fetch_array($sql))
{
$Vhorafin=$fila['valor'];

}


?>

<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<title>Actualizar Reporte</title>
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

<!-- CUERPO DEL FORMULARIO -->
<form action="../actualizar/registrar-reporte.php" method="POST">

<div class="row">
<div class="col-md-2">

<!--  <div class="form-group">-->
<input type="hidden" name="id" value="<?php echo $id; ?>">
<!-- </div> -->

<div class="form-group">
<label>ORDEN  DE TRABAJO</label>
<select name="ot" class="form-control"required autofocus>
<option value="<?php echo $Ot ?>"><?php echo $Ot ?></option>
<?php
$link=Conectarse();
$Sql="SELECT CODIGOOT FROM  [020BDCOMUN].DBO.CENCOSOT 
WHERE USUARIO in ('45')
AND
CODIGOOT  IN (SELECT OF_COD FROM [011BDCOMUN].dbo.ORD_FAB
WHERE OF_ESTADO ='ACTIVO') AND 
CODIGOOT NOT LIKE '$Ot' ORDER BY CODIGOOT;";
$result=mssql_query($Sql) or die(mssql_error());
while ($row=mssql_fetch_array($result)) {
?>
<option value ="<?php echo $row['CODIGOOT']?>"><?php echo $row['CODIGOOT']?></option>
<?php }?>
</select>
</div>
</div>

<div class="col-md-2">
<div class="form-group">	
<label>FECHA </label>
<input type="text"  name="fecha"class="form-control"  value="<?php $fecha ->Mostrar(); ?>"
readonly>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>HORA INICIO</label>
<select name="horainicio" class="form-control" readonly>
<option value="<?php echo $Vhorainicio; ?>"><?php echo $Horainicio; ?></option>
<?php
$sql    = "SELECT  * FROM fechainicio WHERE valor NOT LIKE '$Vhorainicio'";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
echo "<option value=\"{$row['valor']}\">";
echo $row['descripcion'];
echo "</option>";
}
?>
</select>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>HORA FIN</label>
<select name="horafin"  class="form-control" readonly="">
<option value="<?php echo $Vhorafin; ?>"><?php echo $Horafin; ?></option>
<?php
$sql    = "SELECT  * FROM fechafin WHERE valor NOT LIKE '$Vhorafin'";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
echo "<option value=\"{$row['valor']}\">";
echo $row['descripcion'];
echo "</option>";
}
?>
</select>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>CLASIFICACIÓN</label>
<select name="clasificacion"  class="form-control" required="">
<option value="<?php echo $Idclasificacion; ?>"><?php echo $Clasificacion; ?></option>
<?php
$sql    = "SELECT  idclasificacion,descripcion FROM clasificacion
WHERE idclasificacion NOT LIKE '$Idclasificacion'
ORDER BY descripcion";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {	
echo "<option value=\"{$row['idclasificacion']}\">";
echo $row['descripcion'];
echo "</option>";
}
?>
</select>
</div>
</div>

<div class="col-md-2">
<div class="form-group">
<label>PROCESO</label>
<select name="proceso"  class="form-control" required="">
<option value="<?php echo $Idprocesos; ?>"><?php echo $Procesos; ?></option>
<?php
$sql    = "SELECT  idprocesos,descripcion FROM procesos
WHERE idprocesos NOT LIKE '$Idprocesos'
ORDER BY descripcion";
$result = $db->query($sql);
while ($row = $result->fetch_assoc()) {
echo "<option value=\"{$row['idprocesos']}\">";
echo $row['descripcion'];
echo "</option>";
}
?>
</select>
</div>
</div>


</div>

<div class="row">

<div class="col-md-12">
<div class="form-group">
<label>DESCRIPCIÓN DE TRABAJO</label>
<textarea name="detalle" class="form-control" rows="7"
onchange="conMayusculas(this);" >
<?php echo $Descripciontrabajo; ?>
</textarea>
</div>


<div class="form-group">
<button class="btn btn-lg btn-success btn-block">ACTUALIZAR INFORMACIÓN</button>
</div>

</div>


</div>
</form>
<div class="row">
<div class="col-md-12">
<?php $template->display('footer.tpl'); ?>
</div>
</div>
</div>

</body>
</html>


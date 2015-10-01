<?php 
include('header.php');//incluye   la  rutas  para  invocar a la clase smarty
$template = new Smarty(0);//template 
$db = new Conexion();//clase de conexion
$fecha = new Fecha($_SESSION['id'],'');//clase  fecha de progreso

/*1. Obtener EL TIPO DE PERMISO DE USUARIO*/
$sql= $db->query("SELECT permiso FROM  usuario WHERE 
idusuario=$_SESSION[id];");
while ($fila = mysqli_fetch_array($sql))
{
$Permiso=$fila['permiso'];
}

$template->assign('Permiso',$Permiso);

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
<div class="col-md-3">
</div>
<div class="col-md-5">
<h2 class="text-center">
<a class="btn btn-lg btn-warning" href="#">
<i class="fa fa-calendar fa-3x pull-left">
</i> Fecha Actual<br><?php $fecha -> Mostrar(); ?></a>
</h2>
<?php $template->display('home.tpl'); ?>
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


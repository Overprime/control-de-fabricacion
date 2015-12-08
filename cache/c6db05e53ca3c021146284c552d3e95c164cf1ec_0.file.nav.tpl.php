<?php /* Smarty version 3.1.24, created on 2015-10-02 12:21:01
         compiled from "./estilos/templates/nav.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:934371185560ebcfdc74414_68525468%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c6db05e53ca3c021146284c552d3e95c164cf1ec' => 
    array (
      0 => './estilos/templates/nav.tpl',
      1 => 1443806224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '934371185560ebcfdc74414_68525468',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560ebcfdc9e3c7_52867543',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560ebcfdc9e3c7_52867543')) {
function content_560ebcfdc9e3c7_52867543 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/control-de-fabricacion/includes/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '934371185560ebcfdc74414_68525468';
?>
<nav class="navbar navbar-default" role="navigation">
<div class="navbar-header">

<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
<span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
</button> <a class="navbar-brand" href="/control-de-fabricacion/home">
<i class="fa fa-home fa-x text-info"></i>
Home</a>
</div>

<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
<!-- 
<ul class="nav navbar-nav">
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown<strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="#">Action</a>
</li>
<li>
<a href="#">Another action</a>
</li>
<li>
<a href="#">Something else here</a>
</li>
<li class="divider">
</li>
<li>
<a href="#">Separated link</a>
</li>
<li class="divider">
</li>
<li>
<a href="#">One more separated link</a>
</li>
</ul>
</li>
</ul>
-->

<form class="navbar-form navbar-left" role="search" method="POST"
action="/control-de-fabricacion/pages/reportes">
<div class="form-group">
<input type="date" name="fecha" class="form-control" 
value="<?php echo $_POST['fecha'];?>
" 
max="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" required>
</div> 
<button type="submit" class="btn btn-success">
<i class="fa fa-search fa-1x"></i>
Consultar Reportes
</button>
</form>
<ul class="nav navbar-nav navbar-right">
<li>
<a href="#">
<i class="glyphicon glyphicon-user text-success"></i>
<?php echo $_SESSION['nom'];?>

<?php echo $_SESSION['ape'];?>

</a>
</li>
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown"><strong class="caret"></strong></a>
<ul class="dropdown-menu">
<li>
<a href="/control-de-fabricacion/registrar/salir">Salir</a>
</li>
</ul>
</li>
</ul>
</div>

</nav><?php }
}
?>
<?php /* Smarty version 3.1.24, created on 2015-09-25 12:49:26
         compiled from "../estilos/templates/estilos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3116656057b16f2af68_79192004%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dcebfacb919f333c80cfed9dccec54c56f0d8cd7' => 
    array (
      0 => '../estilos/templates/estilos.tpl',
      1 => 1443189161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3116656057b16f2af68_79192004',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56057b170ca7b7_57174515',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56057b170ca7b7_57174515')) {
function content_56057b170ca7b7_57174515 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3116656057b16f2af68_79192004';
?>
<link href="/control-de-fabricacion/assets/b3/css/bootstrap.min.css" rel="stylesheet">
<link href="/control-de-fabricacion/assets/font-awesome/css/font-awesome.min.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link rel="shortcut icon" type="image/x-icon" href="/control-de-fabricacion/assets/img/logo48.png">
<link href="/control-de-fabricacion/assets/b3/css/mis-estilos.css" rel="stylesheet">
 <?php echo '<script'; ?>
 src="/control-de-fabricacion/assets/b3/js/jquery.min.js"><?php echo '</script'; ?>
>

<!-- Inicio Script convertir en mayuscula al ingresar -->
<?php echo '<script'; ?>
 language    =""="JavaScript">
function conMayusculas(field) {
field.value         = field.value.toUpperCase()
}
<?php echo '</script'; ?>
>
<!-- Fin Script convertir en mayuscula al ingresar-->




<!-- Inicio de Script para exportar un tabla html a excel -->

<?php echo '<script'; ?>
 language="javascript">
$(document).ready(function() {
$(".botonExcel").click(function(event) {
$("#datos_a_enviar").val( $("<div>").append( $("#Exportar_a_Excel").eq(0).clone()).html());
$("#FormularioExportacion").submit();
});
});
<?php echo '</script'; ?>
>

<!-- Fin de Script para exportar un tabla html a excel--><?php }
}
?>
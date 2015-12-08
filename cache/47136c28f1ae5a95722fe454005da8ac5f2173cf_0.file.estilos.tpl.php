<?php /* Smarty version 3.1.24, created on 2015-10-07 10:50:57
         compiled from "../estilos/templates/estilos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:145611260456153f610bdc17_35844534%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '47136c28f1ae5a95722fe454005da8ac5f2173cf' => 
    array (
      0 => '../estilos/templates/estilos.tpl',
      1 => 1443806224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '145611260456153f610bdc17_35844534',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56153f610c2514_61359151',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56153f610c2514_61359151')) {
function content_56153f610c2514_61359151 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '145611260456153f610bdc17_35844534';
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
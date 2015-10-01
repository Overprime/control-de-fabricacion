<?php /* Smarty version 3.1.24, created on 2015-09-25 09:52:44
         compiled from "../estilos/templates/estilos.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5895560551ac3e5918_49534473%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9094003f9fadc5ddc266f36f62abdf967fd1ca5a' => 
    array (
      0 => '../estilos/templates/estilos.tpl',
      1 => 1443189161,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5895560551ac3e5918_49534473',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560551ac44eae7_12396754',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560551ac44eae7_12396754')) {
function content_560551ac44eae7_12396754 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '5895560551ac3e5918_49534473';
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
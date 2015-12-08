<?php /* Smarty version 3.1.24, created on 2015-10-02 12:20:55
         compiled from "./estilos/templates/acceso.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:85520141560ebcf7af0ea9_26600237%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0e07761e379956b1d35279ddee32452c13df829a' => 
    array (
      0 => './estilos/templates/acceso.tpl',
      1 => 1443806237,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '85520141560ebcf7af0ea9_26600237',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560ebcf7af38e3_53008001',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560ebcf7af38e3_53008001')) {
function content_560ebcf7af38e3_53008001 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '85520141560ebcf7af0ea9_26600237';
?>
<div class="modal-dialog">
<form action="registrar/validar.php" method="POST" autocomplete="Off">
<div class="modal-content">
<div class="modal-header">
<h2 class="modal-title text-center text-success" id="myModalLabel">
INICIO DE SESIÓN
</h2>
</div>
<div class="modal-body">
<div class="form-group">
<input type="text"  name="usuario"  class="form-control" placeholder="Ingrese su Usuario" required autofocus>
</div>
<div class="form-group">
<input type="password"  name="contrasena"class="form-control" placeholder="Ingrese su Contraseña" required>
</div>
</div>
<div class="modal-footer">
<button type="submit" class="btn btn-success btn-block btn-lg">
Iniciar Sesión
</button>
</div>
</div>
</form>
</div>

<?php }
}
?>
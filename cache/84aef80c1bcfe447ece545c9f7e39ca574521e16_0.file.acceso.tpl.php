<?php /* Smarty version 3.1.24, created on 2015-09-25 15:20:04
         compiled from "./estilos/templates/acceso.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1982256059e64dc54d5_02553941%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '84aef80c1bcfe447ece545c9f7e39ca574521e16' => 
    array (
      0 => './estilos/templates/acceso.tpl',
      1 => 1443208791,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1982256059e64dc54d5_02553941',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_56059e64e65a55_77868072',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_56059e64e65a55_77868072')) {
function content_56059e64e65a55_77868072 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1982256059e64dc54d5_02553941';
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
<input type="text"  name="contrasena"class="form-control" placeholder="Ingrese su Contraseña" required>
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
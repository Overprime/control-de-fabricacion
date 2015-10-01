<?php /* Smarty version 3.1.24, created on 2015-09-24 19:06:07
         compiled from "../estilos/templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:5078560481dfdd90b5_39613204%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f0f73f421740cf5027d6adf848967b9eee452ceb' => 
    array (
      0 => '../estilos/templates/home.tpl',
      1 => 1443040023,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5078560481dfdd90b5_39613204',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560481dfdf57c7_00268306',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560481dfdf57c7_00268306')) {
function content_560481dfdf57c7_00268306 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:/xampp/htdocs/control-de-fabricacion/includes/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '5078560481dfdd90b5_39613204';
?>
<form action="registrar/valores-fecha" method="POST">

<div class="form-group">
<input type="date" name="fecha" class="form-control" 
value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" 
max="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"
 required>
</div>

<div class="form-group">
<button class="btn btn-lg btn-primary btn-block">DEFINIR FECHA  Y CREAR REPORTE</button>
</div>


</form><?php }
}
?>
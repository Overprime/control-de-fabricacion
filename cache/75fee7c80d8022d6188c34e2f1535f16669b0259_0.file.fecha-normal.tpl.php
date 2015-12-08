<?php /* Smarty version 3.1.24, created on 2015-09-29 19:01:31
         compiled from "./estilos/templates/fecha-normal.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:20582560b184b2a8599_39861502%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75fee7c80d8022d6188c34e2f1535f16669b0259' => 
    array (
      0 => './estilos/templates/fecha-normal.tpl',
      1 => 1443567687,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20582560b184b2a8599_39861502',
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560b184b353642_96163695',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560b184b353642_96163695')) {
function content_560b184b353642_96163695 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:/xampp/htdocs/control-de-fabricacion/includes/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '20582560b184b2a8599_39861502';
?>
<form action="registrar/valores-fecha" method="POST">

<?php if ($_SESSION[1] == 1) {?>
<div class="form-group">
<input type="date" name="fecha" class="form-control" 
value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" 
max="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"
 required>
</div>

<?php } else { ?>
<div class="form-group">
<input type="date" name="fecha" class="form-control" 
value="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
" 
max="<?php echo smarty_modifier_date_format(time(),"%Y-%m-%d");?>
"
 required>
</div>

<?php }?>

<div class="form-group">
<button class="btn btn-lg btn-primary btn-block">
<i class="fa fa-hand-paper-o fa-2x"></i></button>
</div>


</form><?php }
}
?>
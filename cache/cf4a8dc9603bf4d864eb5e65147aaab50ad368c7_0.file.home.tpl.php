<?php /* Smarty version 3.1.24, created on 2015-10-02 12:21:02
         compiled from "./estilos/templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1912152531560ebcfe0afac9_54476379%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'cf4a8dc9603bf4d864eb5e65147aaab50ad368c7' => 
    array (
      0 => './estilos/templates/home.tpl',
      1 => 1443806224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1912152531560ebcfe0afac9_54476379',
  'variables' => 
  array (
    'Permiso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560ebcfe0e2c25_13014775',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560ebcfe0e2c25_13014775')) {
function content_560ebcfe0e2c25_13014775 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once '/var/www/control-de-fabricacion/includes/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '1912152531560ebcfe0afac9_54476379';
?>
<form action="registrar/valores-fecha" method="POST">

<?php if ($_smarty_tpl->tpl_vars['Permiso']->value == 2) {?>

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
" readonly="" required>
</div>


<?php }?>

<div class="form-group">
<button class="btn btn-lg btn-primary btn-block">
<i class="fa fa-hand-paper-o fa-2x"></i></button>
</div>


</form><?php }
}
?>
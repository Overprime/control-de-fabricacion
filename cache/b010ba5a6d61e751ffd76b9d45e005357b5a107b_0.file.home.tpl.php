<?php /* Smarty version 3.1.24, created on 2015-09-29 19:55:48
         compiled from "./estilos/templates/home.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:13338560b2504c4e133_28034558%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b010ba5a6d61e751ffd76b9d45e005357b5a107b' => 
    array (
      0 => './estilos/templates/home.tpl',
      1 => 1443570920,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13338560b2504c4e133_28034558',
  'variables' => 
  array (
    'Permiso' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.24',
  'unifunc' => 'content_560b2504cfb774_23884577',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_560b2504cfb774_23884577')) {
function content_560b2504cfb774_23884577 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_date_format')) require_once 'C:/xampp/htdocs/control-de-fabricacion/includes/libs/plugins/modifier.date_format.php';

$_smarty_tpl->properties['nocache_hash'] = '13338560b2504c4e133_28034558';
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
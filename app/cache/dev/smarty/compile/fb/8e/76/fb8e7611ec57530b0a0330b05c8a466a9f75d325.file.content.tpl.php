<?php /* Smarty version Smarty-3.1.19, created on 2018-04-05 11:25:03
         compiled from "/var/www/html/admin786elpbmm/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4024288795ac5dd5fa57a63-09556022%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fb8e7611ec57530b0a0330b05c8a466a9f75d325' => 
    array (
      0 => '/var/www/html/admin786elpbmm/themes/default/template/content.tpl',
      1 => 1519649749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4024288795ac5dd5fa57a63-09556022',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac5dd5fa62672_05217834',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac5dd5fa62672_05217834')) {function content_5ac5dd5fa62672_05217834($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>

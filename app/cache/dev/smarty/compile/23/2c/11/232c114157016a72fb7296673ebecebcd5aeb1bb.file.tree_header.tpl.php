<?php /* Smarty version Smarty-3.1.19, created on 2018-04-05 12:09:26
         compiled from "/var/www/html/admin786elpbmm/themes/default/template/helpers/tree/tree_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4128102575ac5e7c669d237-52305251%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '232c114157016a72fb7296673ebecebcd5aeb1bb' => 
    array (
      0 => '/var/www/html/admin786elpbmm/themes/default/template/helpers/tree/tree_header.tpl',
      1 => 1519649749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4128102575ac5e7c669d237-52305251',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'toolbar' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac5e7c66aedb9_24841955',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac5e7c66aedb9_24841955')) {function content_5ac5e7c66aedb9_24841955($_smarty_tpl) {?>
<div class="tree-panel-heading-controls clearfix">
	<?php if (isset($_smarty_tpl->tpl_vars['title']->value)) {?><i class="icon-tag"></i>&nbsp;<?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['title']->value),$_smarty_tpl);?>
<?php }?>
	<?php if (isset($_smarty_tpl->tpl_vars['toolbar']->value)) {?><?php echo $_smarty_tpl->tpl_vars['toolbar']->value;?>
<?php }?>
</div>
<?php }} ?>

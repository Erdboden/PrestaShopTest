<?php /* Smarty version Smarty-3.1.19, created on 2018-03-20 17:13:21
         compiled from "/var/www/html/admin786elpbmm/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6618769335ab1251135d754-18252395%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
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
  'nocache_hash' => '6618769335ab1251135d754-18252395',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab1251136a7e2_28254996',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab1251136a7e2_28254996')) {function content_5ab1251136a7e2_28254996($_smarty_tpl) {?>
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

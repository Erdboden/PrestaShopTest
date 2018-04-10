<?php /* Smarty version Smarty-3.1.19, created on 2018-04-10 12:07:57
         compiled from "/var/www/html/modules/seoptimize/views/templates/admin/configure.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5492369555acc7eedd00d85-67983064%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5c9ce0e91f71ef0cd3144a7357ac70f3c714cd71' => 
    array (
      0 => '/var/www/html/modules/seoptimize/views/templates/admin/configure.tpl',
      1 => 1522932151,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5492369555acc7eedd00d85-67983064',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'errors' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5acc7eedd258b3_07773189',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5acc7eedd258b3_07773189')) {function content_5acc7eedd258b3_07773189($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['errors']->value)&&count($_smarty_tpl->tpl_vars['errors']->value)) {?>
	<div class="bootstrap">
		<div class="alert alert-danger">
			<button type="button" class="close" data-dismiss="alert">&times;</button>

            <?php echo smartyTranslate(array('s'=>'%d errors','sprintf'=>count($_smarty_tpl->tpl_vars['errors']->value),'mod'=>'seoptimize'),$_smarty_tpl);?>

			<br/>
			<ol>
                <?php  $_smarty_tpl->tpl_vars['error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['error']->key => $_smarty_tpl->tpl_vars['error']->value) {
$_smarty_tpl->tpl_vars['error']->_loop = true;
?>
					<li><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['error']->value,'htmlall','UTF-8');?>
</li>
                <?php } ?>
			</ol>

		</div>
	</div>
<?php }?>


	
		
            
                
            
		
	
<?php }} ?>

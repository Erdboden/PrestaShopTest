<?php /* Smarty version Smarty-3.1.19, created on 2018-04-05 13:37:52
         compiled from "/var/www/html/modules/addtofavoritesmywishlist/views/templates/front/favorites_header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:11490385245ac5fc80cbb100-72929340%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'afe707ae989f3d5495628e4794b6bd007bd2afd8' => 
    array (
      0 => '/var/www/html/modules/addtofavoritesmywishlist/views/templates/front/favorites_header.tpl',
      1 => 1522317199,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '11490385245ac5fc80cbb100-72929340',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'favorites_name' => 0,
    'favorites' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac5fc80d93c01_38813435',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac5fc80d93c01_38813435')) {function content_5ac5fc80d93c01_38813435($_smarty_tpl) {?>

<div id="_desktop_favorites">
    <span class="body">
        <a href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['link']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
">
            <?php echo smartyTranslate(array('s'=>'My ','mod'=>'addtofavoritesmywishlist'),$_smarty_tpl);?>
<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['favorites_name']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
 (<span class="favorites-nr" data-nr="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['favorites']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
"><?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['favorites']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
</span>)
        </a>
    </span>
</div><?php }} ?>

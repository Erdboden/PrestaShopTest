<?php /* Smarty version Smarty-3.1.19, created on 2018-03-22 15:50:56
         compiled from "module:ps_socialfollow/ps_socialfollow.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17904030175ab3b4c01ba5f5-27245286%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '80ac9ddb06fe7b43ffdd2f5cd1185536480d2577' => 
    array (
      0 => 'module:ps_socialfollow/ps_socialfollow.tpl',
      1 => 1519649749,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '17904030175ab3b4c01ba5f5-27245286',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'social_links' => 0,
    'social_link' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab3b4c01d4a77_41995437',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab3b4c01d4a77_41995437')) {function content_5ab3b4c01d4a77_41995437($_smarty_tpl) {?><!-- begin /var/www/html/themes/classic/modules/ps_socialfollow/ps_socialfollow.tpl -->


  <div class="block-social col-lg-4 col-md-12 col-sm-12">
    <ul>
      <?php  $_smarty_tpl->tpl_vars['social_link'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['social_link']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['social_links']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['social_link']->key => $_smarty_tpl->tpl_vars['social_link']->value) {
$_smarty_tpl->tpl_vars['social_link']->_loop = true;
?>
        <li class="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['class'], ENT_QUOTES, 'UTF-8');?>
"><a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['url'], ENT_QUOTES, 'UTF-8');?>
" target="_blank"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['social_link']->value['label'], ENT_QUOTES, 'UTF-8');?>
</a></li>
      <?php } ?>
    </ul>
  </div>

<!-- end /var/www/html/themes/classic/modules/ps_socialfollow/ps_socialfollow.tpl --><?php }} ?>
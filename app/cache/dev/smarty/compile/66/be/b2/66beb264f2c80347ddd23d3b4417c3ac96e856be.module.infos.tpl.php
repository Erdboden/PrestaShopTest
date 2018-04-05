<?php /* Smarty version Smarty-3.1.19, created on 2018-04-05 11:14:21
         compiled from "module:discountfollower/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20539373565ac5dadd351f66-33288560%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66beb264f2c80347ddd23d3b4417c3ac96e856be' => 
    array (
      0 => 'module:discountfollower/views/templates/hook/infos.tpl',
      1 => 1522239934,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '20539373565ac5dadd351f66-33288560',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'follow_list_url' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac5dadd35b8f8_36302162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac5dadd35b8f8_36302162')) {function content_5ac5dadd35b8f8_36302162($_smarty_tpl) {?><!-- begin /var/www/html/modules/discountfollower/views/templates/hook/infos.tpl -->

<div class="top_d_follower">
    <a class="logout hidden-sm-down" href="<?php echo htmlspecialchars($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['follow_list_url']->value,'htmlall','UTF-8'), ENT_QUOTES, 'UTF-8');?>
" rel="nofollow">
        <i class="follow-logo-icon"></i>
        <?php echo smartyTranslate(array('s'=>'Follow list','mod'=>'discountfollower'),$_smarty_tpl);?>

    </a>
</div>
<!-- end /var/www/html/modules/discountfollower/views/templates/hook/infos.tpl --><?php }} ?>

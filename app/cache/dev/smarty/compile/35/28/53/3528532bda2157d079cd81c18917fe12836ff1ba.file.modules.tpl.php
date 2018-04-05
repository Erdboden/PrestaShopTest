<?php /* Smarty version Smarty-3.1.19, created on 2018-04-05 15:02:11
         compiled from "/var/www/html/modules/gshoppingfeed/views/templates/hook/modules.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13775599405ac61043492e94-67950911%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3528532bda2157d079cd81c18917fe12836ff1ba' => 
    array (
      0 => '/var/www/html/modules/gshoppingfeed/views/templates/hook/modules.tpl',
      1 => 1522397475,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13775599405ac61043492e94-67950911',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'this_module' => 0,
    'labels' => 0,
    'modules' => 0,
    'module_item' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ac610434f89d8_47810318',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ac610434f89d8_47810318')) {function content_5ac610434f89d8_47810318($_smarty_tpl) {?>

<?php if (!empty($_smarty_tpl->tpl_vars['this_module']->value->id)) {?>
<div class="alert alert-info">
    <?php echo smartyTranslate(array('s'=>$_smarty_tpl->tpl_vars['labels']->value['like'],'sprintf'=>array($_smarty_tpl->tpl_vars['this_module']->value->displayName),'tags'=>array('<strong>'),'mod'=>((string)$_smarty_tpl->tpl_vars['this_module']->value->name)),$_smarty_tpl);?>

    <a href="https://addons.prestashop.com/en/ratings.php?id_product=<?php echo intval($_smarty_tpl->tpl_vars['this_module']->value->id_product);?>
" target="_blank" class="btn btn-default">
        <i class="icon-thumbs-o-up"></i> <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['labels']->value['yes'],'quotes','UTF-8');?>
</span>
    </a>
    <a href="https://addons.prestashop.com/en/contact-us?id_product=<?php echo intval($_smarty_tpl->tpl_vars['this_module']->value->id_product);?>
" target="_blank" class="btn btn-default">
        <i class="icon-thumbs-o-down"></i> <span><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['labels']->value['no'],'quotes','UTF-8');?>
</span>
    </a>
</div>
<?php }?>

<?php if (!empty($_smarty_tpl->tpl_vars['modules']->value)) {?>
<div class="panel">
    <h3>
        <i class="icon-rocket"></i> <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['labels']->value['title'],'quotes','UTF-8');?>

    </h3>
    <div class="row">
        <?php  $_smarty_tpl->tpl_vars['module_item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module_item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['modules']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module_item']->key => $_smarty_tpl->tpl_vars['module_item']->value) {
$_smarty_tpl->tpl_vars['module_item']->_loop = true;
?>
        <div class="col-lg-4">
            <div class="panel media">
                <div class="col-lg-3">
                    <div class="row text-center">
                        <img src="https://addons.prestashop.com/img/pico/<?php echo intval($_smarty_tpl->tpl_vars['module_item']->value['id_product']);?>
.jpg">
                    </div>
                    <div class="row text-center">
                        <?php if ($_smarty_tpl->tpl_vars['module_item']->value['rate']=='new') {?>
                            <span class="badge badge-primary">New</span>
                        <?php } else { ?>
                            <img src="https://addons.prestashop.com/themes/prestastore/img/stars-bo/rate_<?php echo intval($_smarty_tpl->tpl_vars['module_item']->value['rate']);?>
.jpg">
                        <?php }?>
                    </div>
                </div>
                <div class="col-lg-9">
                    <h4><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_item']->value['name'],'quotes','UTF-8');?>
</h4>
                    <p>
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_item']->value['description'],'quotes','UTF-8');?>

                    </p>
                    <a href="https://addons.prestashop.com/<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['module_item']->value['lang_code'],'htmlall','UTF-8');?>
/product.php?id_product=<?php echo intval($_smarty_tpl->tpl_vars['module_item']->value['id_product']);?>
" target="_blank" class="btn btn-default">
                        <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['labels']->value['discover'],'quotes','UTF-8');?>

                    </a>
                </div>
            </div>
        </div>
        <?php } ?>
    </div>
</div>
<?php }?><?php }} ?>

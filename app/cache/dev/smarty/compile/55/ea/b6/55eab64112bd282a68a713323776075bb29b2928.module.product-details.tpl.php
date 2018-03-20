<?php /* Smarty version Smarty-3.1.19, created on 2018-03-20 17:15:23
         compiled from "module:iconsforfeatures/views/templates/hook/product-details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4429469815ab1258b910367-02545017%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55eab64112bd282a68a713323776075bb29b2928' => 
    array (
      0 => 'module:iconsforfeatures/views/templates/hook/product-details.tpl',
      1 => 1521558326,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '4429469815ab1258b910367-02545017',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'grouped_features' => 0,
    'feature' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ab1258b959986_55416514',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ab1258b959986_55416514')) {function content_5ab1258b959986_55416514($_smarty_tpl) {?><!-- begin /var/www/html/modules/iconsforfeatures/views/templates/hook/product-details.tpl -->
    <?php if ($_smarty_tpl->tpl_vars['grouped_features']->value) {?>
        <section class="product-features">
            <h3 class="h6"><?php echo smartyTranslate(array('s'=>'Data sheet','d'=>'Shop.Theme.Catalog'),$_smarty_tpl);?>
</h3>
            <dl class="data-sheet">
                <?php  $_smarty_tpl->tpl_vars['feature'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['feature']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['grouped_features']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['feature']->key => $_smarty_tpl->tpl_vars['feature']->value) {
$_smarty_tpl->tpl_vars['feature']->_loop = true;
?>
                    <dt class="name">
                        <?php if (Configuration::get('ICONSFORFEATURES_ALT',null)) {?>
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"
                                 style="padding-right: <?php echo htmlspecialchars(Configuration::get('ICONSFORFEATURES_RIGHT_PADDING',null), ENT_QUOTES, 'UTF-8');?>
"
                                 title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                                 alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                        <?php } else { ?>
                            <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"
                                 style="padding-right: <?php echo htmlspecialchars(Configuration::get('ICONSFORFEATURES_RIGHT_PADDING',null), ENT_QUOTES, 'UTF-8');?>
">
                        <?php }?>
                        <?php if (Configuration::get('ICONSFORFEATURES_FEATURES_TITLE',null)) {?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </dt>
                    <dd class="value"><?php echo nl2br($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['feature']->value['value'],'htmlall'));?>
</dd>
                <?php } ?>
            </dl>
        </section>
    <?php }?>


<!-- end /var/www/html/modules/iconsforfeatures/views/templates/hook/product-details.tpl --><?php }} ?>

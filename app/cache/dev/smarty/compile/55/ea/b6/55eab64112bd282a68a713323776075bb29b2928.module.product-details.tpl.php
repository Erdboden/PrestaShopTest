<?php /* Smarty version Smarty-3.1.19, created on 2018-03-27 14:43:32
         compiled from "module:iconsforfeatures/views/templates/hook/product-details.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1850109685aba2e646ffe86-03193557%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '55eab64112bd282a68a713323776075bb29b2928' => 
    array (
      0 => 'module:iconsforfeatures/views/templates/hook/product-details.tpl',
      1 => 1522149315,
      2 => 'module',
    ),
  ),
  'nocache_hash' => '1850109685aba2e646ffe86-03193557',
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
  'unifunc' => 'content_5aba2e647493a3_73281477',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aba2e647493a3_73281477')) {function content_5aba2e647493a3_73281477($_smarty_tpl) {?><!-- begin /var/www/html/modules/iconsforfeatures/views/templates/hook/product-details.tpl -->

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
                        <?php if ($_smarty_tpl->tpl_vars['feature']->value['icon']!='') {?>
                            <?php if (Configuration::get('ICONSFORFEATURES_ALT',null)) {?>
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"
                                     style="padding-right: <?php echo htmlspecialchars(Configuration::get('ICONSFORFEATURES_RIGHT_PADDING',null), ENT_QUOTES, 'UTF-8');?>
px"
                                     title="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
                                     alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>
">
                            <?php } else { ?>
                                <img src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['icon'], ENT_QUOTES, 'UTF-8');?>
"
                                     style="padding-right: <?php echo htmlspecialchars(Configuration::get('ICONSFORFEATURES_RIGHT_PADDING',null), ENT_QUOTES, 'UTF-8');?>
px">
                            <?php }?>
                            <?php if (Configuration::get('ICONSFORFEATURES_FEATURES_TITLE',null)) {?>
                                <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>

                            <?php }?>
                        <?php } else { ?>
                            <?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['name'], ENT_QUOTES, 'UTF-8');?>

                        <?php }?>
                    </dt>
                    <dd class="value"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['feature']->value['value'], ENT_QUOTES, 'UTF-8');?>
</dd>
                <?php } ?>
            </dl>
        </section>
    <?php }?>


<!-- end /var/www/html/modules/iconsforfeatures/views/templates/hook/product-details.tpl --><?php }} ?>

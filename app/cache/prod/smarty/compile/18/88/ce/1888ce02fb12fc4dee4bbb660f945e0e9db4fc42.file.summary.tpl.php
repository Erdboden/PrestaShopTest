<?php /* Smarty version Smarty-3.1.19, created on 2018-03-12 12:08:49
         compiled from "/var/www/html/admin786elpbmm/themes/default/template/controllers/carrier_wizard/summary.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6248031925aa651b1582367-45396710%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1888ce02fb12fc4dee4bbb660f945e0e9db4fc42' => 
    array (
      0 => '/var/www/html/admin786elpbmm/themes/default/template/controllers/carrier_wizard/summary.tpl',
      1 => 1519649749,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6248031925aa651b1582367-45396710',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'is_multishop' => 0,
    'active_form' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa651b15be527_63003221',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa651b15be527_63003221')) {function content_5aa651b15be527_63003221($_smarty_tpl) {?>

<script type="text/javascript">
	var summary_translation_undefined = '<?php echo smartyTranslate(array('s'=>'[undefined]','js'=>1),$_smarty_tpl);?>
';
	var summary_translation_meta_informations = '<?php echo smartyTranslate(array('s'=>'This carrier is %1$s and the transit time is %2$s.','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>
';
	var summary_translation_free = '<?php echo smartyTranslate(array('s'=>'free','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>
';
	var summary_translation_paid = '<?php echo smartyTranslate(array('s'=>'not free','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>
';
	var summary_translation_range = '<?php echo smartyTranslate(array('s'=>'This carrier can deliver orders from %1$s to %2$s.','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>
';
	var summary_translation_range_limit =  '<?php echo smartyTranslate(array('s'=>'If the order is out of range, the behavior is to %3$s.','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>
';
	var summary_translation_shipping_cost = '<?php echo smartyTranslate(array('s'=>'The shipping cost is calculated %1$s and the tax rule %2$s will be applied.','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>
';
	var summary_translation_price = '<?php echo smartyTranslate(array('s'=>'according to the price','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>
';
	var summary_translation_weight = '<?php echo smartyTranslate(array('s'=>'according to the weight','js'=>1,'d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>
';
</script>

<div class="defaultForm">
	<div class="panel">
		<div class="panel-heading"><?php echo smartyTranslate(array('s'=>'Carrier name:','d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>
 <strong id="summary_name"></strong></div>
		<div class="panel-body">
			<p id="summary_meta_informations"></p>
			<p id="summary_shipping_cost"></p>
			<p id="summary_range"></p>
			<div>
			<?php echo smartyTranslate(array('s'=>'This carrier will be proposed for those delivery zones:','d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>

				<ul id="summary_zones"></ul>
			</div>
			<div>
				<?php echo smartyTranslate(array('s'=>'And it will be proposed for those client groups:','d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>

				<ul id="summary_groups"></ul>
			</div>
			<?php if ($_smarty_tpl->tpl_vars['is_multishop']->value) {?>
			<div>
				<?php echo smartyTranslate(array('s'=>'Finally, this carrier will be proposed in those shops:','d'=>'Admin.Shipping.Feature'),$_smarty_tpl);?>

				<ul id="summary_shops"></ul>
			</div>
			<?php }?>
		</div>
	</div>
	<?php echo $_smarty_tpl->tpl_vars['active_form']->value;?>

</div>
<?php }} ?>

<?php /* Smarty version Smarty-3.1.19, created on 2018-03-12 12:10:34
         compiled from "/var/www/html/modules/ps_wirepayment/views/templates/hook/infos.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5462631255aa6521ae64261-41452728%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a0cd5f4673451a01cdc6ef1ef29f676f3b97db89' => 
    array (
      0 => '/var/www/html/modules/ps_wirepayment/views/templates/hook/infos.tpl',
      1 => 1489659874,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5462631255aa6521ae64261-41452728',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5aa6521aea0106_92389404',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5aa6521aea0106_92389404')) {function content_5aa6521aea0106_92389404($_smarty_tpl) {?>

<div class="alert alert-info">
<img src="../modules/ps_wirepayment/logo.png" style="float:left; margin-right:15px;" height="60">
<p><strong><?php echo smartyTranslate(array('s'=>"This module allows you to accept secure payments by bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</strong></p>
<p><?php echo smartyTranslate(array('s'=>"If the client chooses to pay by bank wire, the order status will change to 'Waiting for Payment'.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</p>
<p><?php echo smartyTranslate(array('s'=>"That said, you must manually confirm the order upon receiving the bank wire.",'d'=>'Modules.Wirepayment.Admin'),$_smarty_tpl);?>
</p>
</div>
<?php }} ?>

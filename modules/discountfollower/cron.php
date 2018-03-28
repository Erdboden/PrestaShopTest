<?php
/**
 * 2016 Terranet
 *
 * NOTICE OF LICENSE
 *
 * @author    Terranet
 * @copyright 2016 Terranet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

include(dirname(__FILE__) . '/../../config/config.inc.php');
include(dirname(__FILE__) . '/../../init.php');

if (Tools::substr(Tools::encrypt('discountfollower/index'), 0, 10) != Tools::getValue('token') || !Module::isInstalled('discountfollower')) {
    die('Bad token');
}

include(dirname(__FILE__) . '/classes/FollowList.php');

$module = new FollowList();
if (Tools::isSubmit('mailsend')) {
    $module->mailConvertSend();
} elseif (Tools::isSubmit('all')) {
    $module->cronAllGeneration();
    $module->mailConvertSend();
} else {
    $module->cronAllGeneration();
}

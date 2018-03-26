<?php
/**
 * 2016 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2016 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

include(dirname(__FILE__) . '/../../config/config.inc.php');
include(dirname(__FILE__) . '/../../init.php');

if (Tools::substr(Tools::encrypt('grouperpro/index'), 0, 10) != Tools::getValue('token') || !Module::isInstalled('grouperpro')) {
    die('Bad token');
}

include(dirname(__FILE__) . '/classes/cron_manager.php');

$module = new GrouperCronManager();

$Grouper = (Tools::getValue('grouperpro')) ? (int)Tools::getValue('grouperpro') : 0;

$module->cronGeneration($Grouper);

die('OK');

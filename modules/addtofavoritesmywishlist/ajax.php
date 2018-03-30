<?php
/**
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

require_once('../../config/config.inc.php');
require_once('../../init.php');
require_once('./ajax/AjaxHandler.php');

if (Tools::substr(Tools::hash('addtofavoritesmywishlist/index'), 0, 10) != Tools::getValue('token') || !Module::isInstalled('addtofavoritesmywishlist')) {
    die('Bad token');
}

$method = Tools::getValue('method');

(new AjaxHandler)->$method(Tools::getValue('parameters'));

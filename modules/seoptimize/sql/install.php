<?php
/**
* 2007-2018 PrestaShop
*
* NOTICE OF LICENSE
*
* This source file is subject to the Academic Free License (AFL 3.0)
* that is bundled with this package in the file LICENSE.txt.
* It is also available through the world-wide-web at this URL:
* http://opensource.org/licenses/afl-3.0.php
* If you did not receive a copy of the license and are unable to
* obtain it through the world-wide-web, please send an email
* to license@prestashop.com so we can send you a copy immediately.
*
* DISCLAIMER
*
* Do not edit or add to this file if you wish to upgrade PrestaShop to newer
* versions in the future. If you wish to customize PrestaShop for your
* needs please refer to http://www.prestashop.com for more information.
*
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

$sql = array();

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seoptimize` (
    `id_seoptimize` int(11) NOT NULL AUTO_INCREMENT,
    PRIMARY KEY (`id_seoptimize`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'category_seo_rule` (
    `id_seoptimize_category` int(11) NOT NULL AUTO_INCREMENT,
    `id_category` int(11) unsigned UNIQUE,
    `id_seoptimize` int(11) unsigned DEFAULT NULL,
    PRIMARY KEY (`id_seoptimize_category`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seo_rule_lang` (
    `id_seoptimize_lang` int(11) NOT NULL AUTO_INCREMENT,
    `id_seoptimize` int(11) unsigned DEFAULT NULL,
    `id_lang` int(11) unsigned DEFAULT NULL,
    `seo_meta_title` TEXT DEFAULT NULL,
    `seo_meta_description` TEXT DEFAULT NULL,
    `seo_meta_keywords` TEXT DEFAULT NULL,
    `seo_image_alt` TEXT DEFAULT NULL,
    PRIMARY KEY (`id_seoptimize_lang`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seoptimize_product_meta` (
    `id_seoptimize_product_meta` int(11) NOT NULL AUTO_INCREMENT,
    `id_product` int(11) unsigned DEFAULT NULL,
    `has_custom_title` tinyint(1) default 0,
    `has_custom_description` tinyint(1) default 0,
    `has_custom_keywords` tinyint(1) default 0,
    `has_custom_alt` tinyint(1) default 0,
    PRIMARY KEY (`id_seoptimize_product_meta`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'seoptimize_product_meta_lang` (
    `id_seoptimize_product_meta_lang` int(11) NOT NULL AUTO_INCREMENT,
    `id_seoptimize_product_meta` int(11) unsigned DEFAULT NULL,
    `id_lang` int(11) unsigned DEFAULT NULL,
    `has_custom_meta` tinyint(1) default 0,
    `seo_meta_title` TEXT DEFAULT NULL,
    `seo_meta_description` TEXT DEFAULT NULL,
    `seo_meta_keywords` TEXT DEFAULT NULL,
    `seo_image_alt` TEXT DEFAULT NULL,
    PRIMARY KEY (`id_seoptimize_product_meta_lang`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}
$products = Db::getInstance()->executeS("SELECT * FROM `" . _DB_PREFIX_ . "product`");
foreach ($products as $product){
    Db::getInstance()->insert('seoptimize_product_meta', array('id_product' => $product['id_product']), false, true);
}
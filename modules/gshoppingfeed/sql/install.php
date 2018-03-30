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

$sql = array();
$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'gshoppingfeed` (
    `id_gshoppingfeed` int(11) NOT NULL AUTO_INCREMENT,
    `only_active` TINYINT NOT NULL DEFAULT \'1\',
    `name` VARCHAR( 255 ) NOT NULL,
    `type_image` int(11) DEFAULT NULL,
    `mpn_type` VARCHAR( 255 ) NOT NULL,
    `additional_image` TINYINT NOT NULL DEFAULT \'1\',
    `type_description` TINYINT NOT NULL DEFAULT \'1\',
    `select_lang` int(11) DEFAULT NULL,
    `id_currency` int(11) DEFAULT NULL,
    `id_country` int(11) DEFAULT NULL,
    `id_carrier` VARCHAR(256) NOT NULL,
    `export_attributes` TINYINT NOT NULL DEFAULT \'1\',
    `export_attribute_prices` TINYINT NOT NULL DEFAULT \'1\',
    `export_attribute_images` TINYINT NOT NULL DEFAULT \'1\',
    `export_feature` TINYINT NOT NULL DEFAULT \'1\',
    `export_product_quantity` TINYINT NOT NULL DEFAULT \'1\',
    `get_features_gender` int(11) DEFAULT NULL,
    `get_features_age_group` int(11) DEFAULT NULL,
    `get_attribute_color` TEXT DEFAULT NULL,
    `get_attribute_material` TEXT DEFAULT NULL,
    `get_attribute_size` TEXT DEFAULT NULL,
    `get_attribute_pattern` TEXT DEFAULT NULL,
    `unique_product` TINYINT NOT NULL DEFAULT \'1\',
    `identifier_exists` TINYINT NOT NULL DEFAULT \'1\',
    `export_non_available` TINYINT NOT NULL DEFAULT \'1\',
    `category_filter` TEXT DEFAULT NULL,
    `manufacturers_filter` TEXT DEFAULT NULL,
    `min_price_filter` int(11) DEFAULT NULL,
    `max_price_filter` int(11) DEFAULT NULL,
    `date_update` DATETIME NULL,
    PRIMARY KEY  (`id_gshoppingfeed`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';
$sql[] = 'CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'gshoppingfeed_taxonomy` (
    `id_category` int( 11 ) NOT NULL,
    `id_taxonomy` int( 11 ) NOT NULL,
    `id_lang` int( 11 ) NOT NULL,
    `name_taxonomy` TEXT DEFAULT NULL,
    INDEX (`id_category`, `id_lang`)
) ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8;';

foreach ($sql as $query) {
    if (Db::getInstance()->execute($query) == false) {
        return false;
    }
}

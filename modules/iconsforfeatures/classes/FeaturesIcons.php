<?php
/**
* 2007-2016 PrestaShop
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
*  @copyright 2007-2016 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*/

if (!defined('_PS_VERSION_')) {
    exit;
}

class FeaturesIcons extends ObjectModel
{
    public $id_feature;

    public $image;

    public $image_dir = _PS_IMG_DIR_.'feature_icons/';

    public static $definition = array(
        'table' => 'features_icons',
        'primary' => 'id_feature_icon',
        'fields' => array(
            'id_feature' => array('type' => self::TYPE_STRING),
            'image' => array('type' => self::TYPE_STRING),
        )
    );

    public function deleteImage($force_delete = false)
    {
        unlink($this->image_dir.$this->image);
    }

    public static function  installDB()
    {
        return (Db::getInstance()->execute('
		CREATE TABLE IF NOT EXISTS `'._DB_PREFIX_.'features_icons` (
			`id_feature_icon` INT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
			`id_feature` VARCHAR(255) UNIQUE,
			`image` VARCHAR(255),
			INDEX (`id_feature`)
		) ENGINE = '._MYSQL_ENGINE_.' CHARACTER SET utf8 COLLATE utf8_general_ci;'));
    }

    public static function  uninstallDB()
    {
        return Db::getInstance()->execute('DROP TABLE IF EXISTS `'._DB_PREFIX_.'features_icons`');
    }
}

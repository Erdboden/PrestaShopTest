<?php
/**
 * 2017 Terranet
 *
 * NOTICE OF LICENSE
 *
 * @author    Terranet
 * @copyright 2017 Terranet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class FollowerStatistic extends ObjectModel
{
    public $id;

    public $id_follower_statistic;

    public $from_mail;

    public $uniq_key;

    public $type_send;

    public $id_product;

    public $viewed;

    public $viewed_data;

    public $date_add;

    protected static $module = false;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'follower_statistic',
        'primary' => 'id_follower_statistic',
        'multilang' => false,
        'fields' => array(
            'from_mail' => array('type' => self::TYPE_STRING, 'size' => 250),
            'uniq_key' => array('type' => self::TYPE_STRING, 'size' => 200),
            'type_send' => array('type' => self::TYPE_STRING, 'size' => 50),
            'id_product' => array('type' => self::TYPE_INT),
            'viewed' => array('type' => self::TYPE_INT, 'size' => 2),
            'viewed_data' => array('type' => self::TYPE_DATE),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        ),
    );

    public static function getStaticKey($uniq_key = '', $id_product = '')
    {
        if (isset($uniq_key) && !empty($uniq_key)) {
            $uniq_key = Tools::getDescriptionClean($uniq_key);
            return Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('SELECT `id_follower_statistic` FROM `' . _DB_PREFIX_ . 'follower_statistic`
                    WHERE `uniq_key` = "' . pSQL($uniq_key) . '"' . ((!empty($id_product) && Validate::isInt($id_product)) ? ' AND id_product = ' . (int)$id_product : ''));
        }

        return false;
    }

    public static function getAllStatistic($from, $to)
    {
        $sql = new DbQuery();

        $sql->select('fs.from_mail, fs.type_send, fs.viewed, fs.viewed_data, fs.date_add');
        $sql->from('follower_statistic', 'fs');
        $sql->where('DATE_FORMAT(fs.`date_add`, "%Y-%m-%d") >= "' . pSQL($from) . '"');
        $sql->where('DATE_FORMAT(fs.`date_add`, "%Y-%m-%d") <=  "' . pSQL($to) . '"');
        $sql->groupBy('fs.uniq_key');
        $sql->orderBy('fs.`date_add` DESC');

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }

    public static function getProductGroupStatistic($from, $to)
    {
        $sql = new DbQuery();

        $sql->from('follower_statistic', 'fs');
        $sql->select('p.id_product, count(p.id_product) AS qty, pl.name, pl.link_rewrite');
        $sql->leftJoin('product', 'p', 'p.`id_product` = fs.`id_product`');
        $sql->leftJoin('product_lang', 'pl', 'p.`id_product` = pl.`id_product` AND pl.`id_lang` = ' . (int)Configuration::get('PS_LANG_DEFAULT') . Shop::addSqlRestrictionOnLang('pl'));

        $sql->where('fs.`id_product` != \'\'');
        $sql->where('DATE_FORMAT(fs.`date_add`, "%Y-%m-%d") >= "' . pSQL($from) . '"');
        $sql->where('DATE_FORMAT(fs.`date_add`, "%Y-%m-%d") <=  "' . pSQL($to) . '"');

        $sql->groupBy('fs.`id_product`');
        $sql->orderBy('qty DESC');

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }

    public static function getGroupMailsByProduct($id_product, $from, $to)
    {
        if (!Validate::isInt($id_product)) {
            return false;
        }

        $sql = new DbQuery();
        $sql->from('follower_statistic', 'fs');

        $sql->select('fs.from_mail, count(fs.from_mail) AS qty');
        $sql->where('fs.`id_product` = '.(int)$id_product);
        $sql->where('DATE_FORMAT(fs.`date_add`, "%Y-%m-%d") >= "' . pSQL($from) . '"');
        $sql->where('DATE_FORMAT(fs.`date_add`, "%Y-%m-%d") <=  "' . pSQL($to) . '"');
        $sql->groupBy('fs.`from_mail`');
        $sql->orderBy('fs.`date_add` DESC');

        return Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
    }
}

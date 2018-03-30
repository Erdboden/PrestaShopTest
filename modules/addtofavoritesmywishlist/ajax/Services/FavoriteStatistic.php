<?php
/**
 * 2007-2017 PrestaShop
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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

class FavoriteStatistic
{
    protected $context;

    public function __construct()
    {
        $this->context = Context::getContext();
    }

    public function added($productID)
    {
        if ((int)$productID < 1) {
            return false;
        }

        $sql = 'SELECT `id_favorites_statistic` 
                FROM `' . _DB_PREFIX_ . 'favorites_statistic` 
                WHERE `user_id` = ' . (int)$this->context->customer->id . ' AND `product_id` = ' . (int)$productID;

        $row = Db::getInstance()->getRow($sql);

        if (isset($row['id_favorites_statistic'])) {
            $result = Db::getInstance()
                ->query('UPDATE `' . _DB_PREFIX_ . 'favorites_statistic` 
                    SET `state` = 1
                    WHERE `user_id` = ' . (int)$this->context->customer->id . ' 
                    AND `product_id` = ' . (int)$productID . '
                    LIMIT 1            
            ');

            return (boolean)$result;
        }

        $result = Db::getInstance()
            ->insert('favorites_statistic', array(
                'user_id' => (int)$this->context->customer->id,
                'product_id' => (int)$productID,
                'state' => 1
            ));

        return (boolean)$result;
    }

    public function removed($productID)
    {
        $result = Db::getInstance()
            ->query('UPDATE `' . _DB_PREFIX_ . 'favorites_statistic` 
                    SET `state` = 0
                    WHERE `user_id` = ' . (int)$this->context->customer->id . ' 
                    AND `product_id` = ' . (int)$productID . '            
            ');

        return (boolean)$result;
    }

    public function allStatistics()
    {
        $sql = 'SELECT COUNT(*) FROM '._DB_PREFIX_.'customer';
        return Db::getInstance()->getValue($sql);
    }

    public function statistics($page, $limit)
    {
        if (!Validate::isInt($page) || $page < 1) {
            $page = 1;
        }

        if (!Validate::isInt($limit) || $limit < 1) {
            $limit = 20;
        }

        $offset = ($page - 1) * $limit;
        $sql = 'SELECT c.`id_customer`, CONCAT(c.`email`," (",c.`firstname`, " ", c.`lastname`, ")") AS username,
                  SUM(if(fs.state = 1, 1, 0)) AS favorites,
                  SUM(if(fs.state = 0, 1, 0)) AS non_favorites
                    FROM `' . _DB_PREFIX_ . 'favorites_statistic` AS fs
                        INNER JOIN `' . _DB_PREFIX_ . 'customer` AS c ON (c.id_customer = fs.user_id)
                    GROUP BY c.`id_customer`
                  LIMIT ' . (int)$limit . '
                  OFFSET ' . (int)$offset . '';

        return Db::getInstance()->executeS($sql);
    }
}

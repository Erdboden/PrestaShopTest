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

class FollowProductList extends ObjectModel
{
    /** @var integer ID */
    public $id;

    public $id_df_customer;

    public $price;

    public $id_product;

    public $quantity;

    public $price_without_reduct;

    public $base_price;

    public $id_currency;

    public $accessories;

    public $specific_price;

    public $date_add;

    public $date_upd;

    /**
     * @see ObjectModel::$definition
     */
    public static $definition = array(
        'table' => 'df_product',
        'primary' => 'id_df_product',
        'multilang' => false,
        'fields' => array(
            'id_df_customer' => array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),
            'id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'quantity' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'price' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'price_without_reduct' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'base_price' => array('type' => self::TYPE_FLOAT, 'validate' => 'isPrice'),
            'id_currency' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedInt'),
            'accessories' => array('type' => self::TYPE_STRING),
            'specific_price' => array('type' => self::TYPE_STRING),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
        )
    );
}

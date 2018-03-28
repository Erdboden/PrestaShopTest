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

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;

class FollowList extends ObjectModel
{
    public $id;

    public $id_shop;

    public $id_customer;

    public $email;

    public $msend_data;

    public $msend_active;

    public $request_token;

    public $temp_id_product;

    public $newsletter = 1;

    public $id_lang;

    public $date_add;

    public $date_upd;

    protected static $module = false;

    public static $_customer_id = 0;

    public static $_customer_info = array();

    public static $definition = array(
        'table' => 'df_customer',
        'primary' => 'id_df_customer',
        'multilang' => false,
        'fields' => array(
            'id_shop' => array('type' => self::TYPE_NOTHING, 'validate' => 'isUnsignedId'),
            'id_customer' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'email' => array('type' => self::TYPE_STRING, 'validate' => 'isEmail', 'required' => true, 'size' => 128),
            'msend_data' => array('type' => self::TYPE_DATE, 'validate' => 'isDate'),
            'msend_active' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'request_token' => array('type' => self::TYPE_STRING, 'size' => 128),
            'temp_id_product' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'newsletter' => array('type' => self::TYPE_BOOL, 'shop' => true, 'validate' => 'isBool'),
            'id_lang' => array('type' => self::TYPE_INT, 'validate' => 'isUnsignedId'),
            'date_add' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => false),
            'date_upd' => array('type' => self::TYPE_DATE, 'validate' => 'isDate', 'copy_post' => false),
        ),
        'associations' => array(
            'items' => array('type' => self::HAS_MANY, 'field' => 'id_df_customer', 'object' => 'FollowProductList', 'association' => 'id_df_product'),
        ),
    );

    public static function getIfExistCustomer($email = '')
    {
        if (empty($email) || !Validate::isEmail($email)) {
            return false;
        }

        return Db::getInstance()->getRow('SELECT * FROM `' . _DB_PREFIX_ . 'df_customer` 
            WHERE email = "' . pSQL($email) . '"');
    }

    public static function updateCustomerProfile($email)
    {
        if (!isset($email) || !Validate::isEmail($email)) {
            return false;
        }

        $update = true;
        if ($id_customer = Customer::customerExists($email, true)) {
            if ($id_customer && Validate::isInt($id_customer) && $id_customer > 0) {
                $update = Db::getInstance()->update('df_customer', array('id_customer' => (int)$id_customer), 'email = "' . pSQL($email) . '"');
            }
        }

        return $update;
    }

    public function getIfExistProductInFollow($id_product)
    {
        if (empty($this->id) || !Validate::isInt($this->id)) {
            return false;
        }

        return Db::getInstance()->getRow('SELECT * FROM `' . _DB_PREFIX_ . 'df_product`
            WHERE `id_df_customer` = ' . (int)$this->id . ' 
            AND id_product = ' . (int)$id_product);
    }

    public function verificationExistProduct($id_product = '')
    {
        if (empty($this->id) || !Validate::isInt($this->id)
            || empty($id_product) || !Validate::isInt($id_product)
        ) {
            return false;
        }

        return (bool)Db::getInstance()->getValue('SELECT `id_product` FROM `' . _DB_PREFIX_ . 'df_product`
            WHERE `id_product`=' . (int)$id_product . ' AND `id_df_customer`=' . (int)$this->id);
    }

    public static function createVerificationKey($email, $id_product = '')
    {
        if (empty($email) || !Validate::isEmail($email)) {
            return array();
        }

        if ($customer = self::getIfExistCustomer($email)) {
        } elseif (self::createFollowCustomer($email)) {
        } else {
            return false;
        }

        $key = self::generationNewToken($email, $id_product);
        if (!empty($key)) {
            return self::sendVerificationEmail($email, $key);
        }

        return false;
    }

    public static function getFollowerEmailByToken($token = '')
    {
        if (empty($token)) {
            return false;
        }

        return Db::getInstance()->getValue('SELECT `email` FROM `' . _DB_PREFIX_ . 'df_customer`
            WHERE `request_token` = "' . pSQL($token) . '"');
    }

    public static function activateGuestFollower($email)
    {
        if (empty($email) || !Validate::isEmail($email)) {
            return false;
        }

        $context = Context::getContext();
        $customerInfo = Db::getInstance()->getRow('SELECT `id_df_customer`, `temp_id_product`, `id_lang` FROM `' . _DB_PREFIX_ . 'df_customer`
            WHERE `email` = "' . pSQL($email) . '"');

        $context->cookie->email = $email;
        $context->cookie->df_vefirication_email = date('Y-m-d H:i:s', strtotime("+2 days"));

        if (isset($customerInfo['temp_id_product']) && !empty($customerInfo['temp_id_product'])
            && Validate::isInt($customerInfo['temp_id_product'])
        ) {
            $FList = new FollowList((int)$customerInfo['id_df_customer']);
            $FList->addProductInFollower((int)$customerInfo['temp_id_product'], (int)$customerInfo['id_lang']);
        }

        $update = Db::getInstance()->update('df_customer', array('request_token' => ''), 'email = "' . pSQL($email) . '"');

        return ($update && $customerInfo) ? true : false;
    }

    protected static function createFollowCustomer($email)
    {
        $context = Context::getContext();
        $id_customer = 0;
        $id_shop = (int)$context->shop->id;
        $id_lang = (int)$context->language->id;

        $DWList = new FollowList();
        $DWList->id_shop = $id_shop;
        $DWList->id_customer = $id_customer;
        $DWList->email = $email;
        $DWList->id_lang = $id_lang;
        return ($DWList->add(true)) ? $DWList : false;
    }

    public static function forceConnection($email, $id_product = '')
    {
        if (empty($email) || !Validate::isEmail($email)) {
            return false;
        }

        $context = Context::getContext();
        if ($customer = self::getIfExistCustomer($email)) {
            $context->cookie->email = $email;
            $context->cookie->df_vefirication_email = date('Y-m-d H:i:s', strtotime("+2 days"));
            if (isset($id_product) && Validate::isInt($id_product) && $id_product > 0
                && Product::existsInDatabase($id_product, 'product')
            ) {
                $followCustomer = new FollowList((int)$customer['id_df_customer']);
                return $followCustomer->addProductInFollower($id_product);
            }
            return true;
        } else {
            if ($new_follow = self::createFollowCustomer($email)) {
                $context->cookie->email = $email;
                $context->cookie->df_vefirication_email = date('Y-m-d H:i:s', strtotime("+2 days"));
                if (isset($id_product) && Validate::isInt($id_product) && $id_product > 0
                    && Product::existsInDatabase($id_product, 'product')
                ) {
                    return $new_follow->addProductInFollower($id_product);
                }
                return true;
            }
        }

        return false;
    }

    public static function generationNewToken($email, $id_product)
    {
        if (empty($id_product) || !Validate::isInt($id_product)) {
            $id_product = 0;
        }

        $token = Tools::substr(sha1(uniqid(rand(), true) . _COOKIE_KEY_ . time()), 0, 16);
        $res = Db::getInstance()->update('df_customer', array('request_token' => pSQL($token), 'temp_id_product' => (int)$id_product), 'email = "' . pSQL($email) . '"');
        return ($res) ? $token : false;
    }

    public static function init($module)
    {
        if (self::$module == false) {
            self::$module = $module;
        }

        return self::$module;
    }

    protected static function sendVerificationEmail($email, $token)
    {
        self::init(new DiscountFollower());

        $context = Context::getContext();
        $th_param = array( 'verification'=>$token );
        $verif_url = Context::getContext()->link->getModuleLink('discountfollower', 'followlist', $th_param);
        $language = new Language($context->language->id);

        return Mail::Send(
            $context->language->id,
            'follower_email_verification',
            self::$module->getTranslator()->trans(
                'Email verification',
                array(),
                'Emails.Subject',
                $language->locale
            ),
            array(
                '{verif_url}' => $verif_url,
            ),
            $email,
            null,
            null,
            null,
            null,
            null,
            dirname(__FILE__) . '/mails/',
            false,
            $context->shop->id
        );
    }

    public function addProductInFollower($id_product = '', $id_lang = null)
    {
        //$id_product
        if (empty($this->id) || !Validate::isInt($this->id)
            || empty($id_product) || !Validate::isInt($id_product)
        ) {
            return false;
        }

        if ($this->verificationExistProduct($id_product)) {
            if (!$this->removeProductFromFollower($id_product)) {
                return false;
            }
        }

        $product = new Product($id_product, true, $id_lang);
        $quantity = $product->quantity;
        $price = $product->getPrice();
//        $public_price = $product->getPublicPrice();
        $getPriceWithoutReduct = $product->getPriceWithoutReduct();
        $base_price = $product->base_price;

        $context = Context::getContext();
        $id_currency = Validate::isLoadedObject($context->currency) ? (int)$context->currency->id : (int)Configuration::get('PS_CURRENCY_DEFAULT');

        $accessories = $product->getAccessories($id_lang);
        $accessories_enc = array();
        if (!empty($accessories) && count($accessories) > 0) {
            foreach ($accessories as $accessory) {
                $accessories_enc[] = array('id' => (int)$accessory['id_product'],
                    'quantity' => $accessory['quantity'],
                    'price' => $accessory['price'],
                    'wholesale_price' => $accessory['wholesale_price'],
                    'price_tax_exc' => $accessory['price_tax_exc'],
                    'price_without_reduction' => $accessory['price_without_reduction'],
                );
            }
        }

        $followProductList = new FollowProductList();
        $followProductList->id_df_customer = (int)$this->id;
        $followProductList->id_product = (int)$id_product;
        $followProductList->quantity = (int)$quantity;
        $followProductList->price = (float)$price;
        $followProductList->price_without_reduct = (float)$getPriceWithoutReduct;
        $followProductList->base_price = (float)$base_price;
        $followProductList->id_currency = (int)$id_currency;
        $followProductList->accessories = serialize($accessories_enc);
        $followProductList->specific_price = (isset($product->specificPrice) && !empty($product->specificPrice)
            && is_array($product->specificPrice)) ? pSQL(Tools::jsonEncode((array)$product->specificPrice)) : '';

        return $followProductList->add(true);
    }

    public function removeProductFromFollower($id_product = '')
    {
        if (empty($this->id) || !Validate::isInt($this->id)
            || empty($id_product) || !Validate::isInt($id_product)
        ) {
            return false;
        }

        return Db::getInstance()->delete('df_product', '`id_df_customer` = ' . (int)$this->id . ' AND `id_product` = ' . (int)$id_product);
    }

    public static function authCustomer()
    {
        $context = Context::getContext();
        if ($context->customer->isLogged()) {
            return $context->customer->email;
        } elseif (isset($context->cookie->email)
            && !empty($context->cookie->email) && Validate::isEmail($context->cookie->email)
            && isset($context->cookie->df_vefirication_email) && Validate::isDate($context->cookie->df_vefirication_email)
            && $context->cookie->df_vefirication_email >= date('Y-m-d H:i:s')
        ) {
            return $context->cookie->email;
        }

        return false;
    }

    public static function stVerificationExistProduct($id_product = '')
    {
        if (!FollowList::$_customer_id || empty(FollowList::$_customer_id)) {
            if ($email = self::authCustomer()) {
                if (Validate::isEmail($email)) {
                    $customerInfo = self::getIfExistCustomer($email);
                    FollowList::$_customer_id = $customerInfo['id_df_customer'];
                    FollowList::$_customer_info = $customerInfo;
                }
            }
        }

        return (bool)Db::getInstance()->getValue('SELECT `id_product` FROM `' . _DB_PREFIX_ . 'df_product`
            WHERE `id_product`=' . (int)$id_product . ' AND `id_df_customer`=' . (int)FollowList::$_customer_id);
    }

    public static function getAuthEmail()
    {
        if (!FollowList::$_customer_id || empty(FollowList::$_customer_id)) {
            if ($email = self::authCustomer()) {
                if (Validate::isEmail($email)) {
                    $customerInfo = self::getIfExistCustomer($email);
                    FollowList::$_customer_id = $customerInfo['id_df_customer'];
                    FollowList::$_customer_info = $customerInfo;
                }
            }
        }

        return (FollowList::$_customer_info && isset(FollowList::$_customer_info['email'])) ? FollowList::$_customer_info['email'] : '';
    }

    public static function getAuthInfo()
    {
        if (!FollowList::$_customer_id || empty(FollowList::$_customer_id)) {
            if ($email = self::authCustomer()) {
                if (Validate::isEmail($email)) {
                    $customerInfo = self::getIfExistCustomer($email);
                    FollowList::$_customer_id = $customerInfo['id_df_customer'];
                    FollowList::$_customer_info = $customerInfo;
                }
            }
        }

        return (FollowList::$_customer_info && isset(FollowList::$_customer_info['email'])) ? FollowList::$_customer_info : '';
    }

    public static function getListing()
    {
        $products = array();
        $info = self::getAuthInfo();
        if (!empty($info['email']) && Validate::isEmail($info['email'])
            && isset($info['id_df_customer']) && !empty($info['id_df_customer'])
        ) {
            $items = self::getProductsByIdCustomer($info['id_df_customer']);

            $priceFormatted = new PriceFormatter();

            $products = array_map(function ($item) use ($priceFormatted) {
                $context = Context::getContext();
                $id_lang = (int)$context->language->id;
                $product = new Product((int)$item['id_product'], true, $id_lang);

                $accessories = $product->getAccessories($id_lang);
                $accessories_enc = array();
                if (!empty($accessories) && count($accessories) > 0) {
                    foreach ($accessories as $accessory) {
                        $accessories_enc[] = array('id' => (int)$accessory['id_product'],
                            'quantity' => $accessory['quantity'],
                            'price' => $accessory['price'],
                            'wholesale_price' => $accessory['wholesale_price'],
                            'price_tax_exc' => $accessory['price_tax_exc'],
                            'price_without_reduction' => $accessory['price_without_reduction'],
                        );
                    }
                }
                $item['accessories'] = Tools::unSerialize($item['accessories']);

                $cover_image = '';
                $cover = Product::getCover((int)$item['id_product']);
                if ($cover && isset($cover['id_image']) && $cover['id_image'] > 0 && Validate::isInt($cover['id_image'])) {
                    $id_cover = $cover['id_image'];
                    $retriever = new ImageRetriever(
                        $context->link
                    );
                    $cover_image = $retriever->getImage($product, $id_cover);
                }

                $discount = array();
                $discount['has_discount'] = false;
                $discount['discount_type'] = null;
                $discount['discount_percentage'] = null;
                $discount['discount_percentage_absolute'] = null;
                $discount['discount_amount'] = null;

                if ($product->specificPrice) {
                    $discount['has_discount'] = (0 != $product->specificPrice['reduction']);
                    $discount['discount_type'] = $product->specificPrice['reduction_type'];
                    // TODO: format according to locale preferences
                    $discount['discount_percentage'] = -round(100 * $product->specificPrice['reduction']) . '%';
                    $discount['discount_percentage_absolute'] = round(100 * $product->specificPrice['reduction']) . '%';
                    // TODO: Fix issue with tax calculation
                    $discount['discount_amount'] = $priceFormatted->format(
                        $product->specificPrice['reduction']
                    );
                }

                $regular_price = $product->getPriceWithoutReduct();

                $item['current'] = array(
                    'quantity' => $product->quantity,
                    'price' => $product->getPrice(),
                    'price_without_reduct' => $product->getPriceWithoutReduct(),
                    'base_price' => $product->base_price,
                    'accessories' => $accessories_enc,
                    'price_formated' => $priceFormatted->format($product->getPrice()),
                    'images' => $cover_image,
                    'name' => $product->name,
                    'url' => $context->link->getProductLink(
                        $product->id,
                        null,
                        null,
                        null,
                        $context->language->id,
                        null,
                        Product::getDefaultAttribute($product->id),
                        false,
                        false,
                        true
                    ),
                    'show_price' => $product->show_price,
                    'discount' => $discount,
                    'regular_price_amount' => $regular_price,
                    'regular_price' => $priceFormatted->format($regular_price),
                    'main_variants' => array()
                );

                return $item;
            }, $items);
        }

        return $products;
    }

    protected static function getProductsByIdCustomer($id_df_customer = '')
    {
        if (empty($id_df_customer) || !Validate::isInt($id_df_customer)) {
            return false;
        }

        return Db::getInstance()->executeS('SELECT * FROM `' . _DB_PREFIX_ . 'df_product`
                WHERE `id_df_customer` = ' . (int)$id_df_customer);
    }

    public static function existCustomerProductItem($id_df_product)
    {
        if (isset($id_df_product) && is_numeric($id_df_product) && !empty($id_df_product)) {
            return Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
            SELECT id_df_product
              FROM `' . _DB_PREFIX_ . 'df_product`
            WHERE id_df_product = ' . (int)$id_df_product . '');
        }
        return false;
    }

    public static function getCountCustomers()
    {
        $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
            SELECT count(fl.`email`) AS cnt
              FROM `' . _DB_PREFIX_ . 'df_customer` fl
            LEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON c.`id_customer` = fl.`id_customer`
            ORDER BY c.`firstname` ASC');

        return ($result && !empty($result['cnt'])) ? (int)$result['cnt'] : 0;
    }

    public static function getCustomers()
    {
        $filter = array();
        if (Tools::isSubmit('discountfollowerFilter_mail') && Tools::getValue('discountfollowerFilter_mail')) {
            $filter['where'][] = 'fl.`email` LIKE "%' . pSQL(Tools::getValue('discountfollowerFilter_mail')) . '%"';
        }

        if (Tools::isSubmit('discountfollowerFilter_quantity') && is_numeric(Tools::getValue('discountfollowerFilter_quantity'))
        ) {
            $filter['having'] = ' HAVING COUNT(cp.`id_id_df_product_product_product`) = ' . (int)Tools::getValue('discountfollowerFilter_quantity') . '';
        }

        if (Tools::isSubmit('discountfollowerFilter_auth') && (Tools::getValue('discountfollowerFilter_auth') == '0'
                || Tools::getValue('discountfollowerFilter_auth') == '1')
        ) {
            $auth_sql = (Tools::getValue('discountfollowerFilter_auth') > 0) ? ' > 0 ' : ' IS NULL ';
            $filter['where'][] = 'c.`id_customer` ' . $auth_sql;
        }

        $orderByWay = 'ASC';
        if (Tools::isSubmit('discountfollowerOrderway')) {
            if (Tools::getValue('discountfollowerOrderway') == 'asc' || Tools::getValue('discountfollowerOrderway') == 'desc') {
                $orderByWay = Tools::strtoupper(Tools::getValue('discountfollowerOrderway'));
            }
        }

        if (Tools::isSubmit('discountfollowerOrderby')) {
            $orderBy = Tools::getValue('discountfollowerOrderby');
            switch ($orderBy) {
                case 'id_customer':
                    $filter['orderby'] = 'ORDER BY c.`id_customer` ' . pSQL($orderByWay);
                    break;
                case 'firstname':
                    $filter['orderby'] = 'ORDER BY c.`firstname` ' . pSQL($orderByWay);
                    break;
                case 'lastname':
                    $filter['orderby'] = 'ORDER BY c.`lastname` ' . pSQL($orderByWay);
                    break;
                case 'email':
                    $filter['orderby'] = 'ORDER BY fl.`email` ' . pSQL($orderByWay);
                    break;
                case 'auth':
                    $filter['orderby'] = 'ORDER BY c.`id_customer` ' . pSQL($orderByWay);
                    break;
                case 'quantity':
                    $filter['orderby'] = 'ORDER BY `quantity` ' . pSQL($orderByWay);
                    break;
                default:
                    $filter['orderby'] = 'ORDER BY c.`firstname` ' . pSQL($orderByWay);
                    break;
            }
        }

        $result = array();
        $where_sql = '';
        $having = '';
        $orderby = (isset($filter['orderby']) && !empty($filter['orderby'])) ? $filter['orderby'] : '';
        $where = (isset($filter['where']) && !empty($filter['where'])) ? join(' AND ', $filter['where']) : '';
        if (!empty($where)) {
            $where_sql .= ' WHERE ' . $where;
        }

        if (!empty($filter['having'])) {
            $having = $filter['having'];
        }
        $customers = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT c.`id_customer`, c.`firstname`, c.`lastname`, fl.`email`, fl.`id_df_customer`, count(cp.id_df_product) AS quantity
              FROM `' . _DB_PREFIX_ . 'df_customer` fl
            LEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON c.`id_customer` = fl.`id_customer`
            LEFT JOIN `' . _DB_PREFIX_ . 'df_product` cp ON cp.`id_df_customer` = fl.`id_df_customer`
            ' . $where_sql . '
            GROUP BY fl.`email` ' . pSQL($orderby) . $having);

        foreach ($customers as $customer_key => $customer) {
            $result[$customer_key] = $customer;
            $result[$customer_key]['auth'] = (!empty($customer['id_customer'])) ? 1 : 0;
        }

        return $result;
    }

    public static function getProductsList($filter = array(), $lang = '', $id_shop = '')
    {
        $products = array();

        if (Tools::isSubmit('productListFilter_id_product') && Tools::getValue('productListFilter_id_product')) {
            $filter['where'][] = 'pl.id_product = ' . (int)Tools::getValue('productListFilter_id_product');
        }
        if (Tools::isSubmit('productCustomerListFilter_id_product') && Tools::getValue('productCustomerListFilter_id_product')) {
            $filter['where'][] = 'pl.id_product = ' . (int)Tools::getValue('productCustomerListFilter_id_product');
        }
        if (Tools::isSubmit('productListFilter_name') && Tools::getValue('productListFilter_name')) {
            $filter['where'][] = 'pt.`name` LIKE "%' . pSQL(Tools::getValue('productListFilter_name')) . '%"';
        }
        if (Tools::isSubmit('productCustomerListFilter_name') && Tools::getValue('productCustomerListFilter_name')) {
            $filter['where'][] = 'pt.`name` LIKE "%' . pSQL(Tools::getValue('productCustomerListFilter_name')) . '%"';
        }

        $orderByWay = 'ASC';
        if (Tools::isSubmit('productListOrderway')) {
            if (Tools::getValue('productListOrderway') == 'asc' || Tools::getValue('productListOrderway') == 'desc') {
                $orderByWay = Tools::strtoupper(Tools::getValue('productListOrderway'));
            }
        }
        if (Tools::isSubmit('productCustomerListOrderway')) {
            if (Tools::getValue('productCustomerListOrderway') == 'asc' || Tools::getValue('productCustomerListOrderway') == 'desc') {
                $orderByWay = Tools::strtoupper(Tools::getValue('productCustomerListOrderway'));
            }
        }
        if (Tools::isSubmit('productListOrderby') || Tools::isSubmit('productCustomerListOrderby')) {
            if (Tools::getValue('productListOrderby')) {
                $orderBy = Tools::getValue('productListOrderby');
            } else {
                $orderBy = Tools::getValue('productCustomerListOrderby');
            }
            switch ($orderBy) {
                case 'id_product':
                    $filter['orderby'] = 'ORDER BY pl.`id_product` ' . pSQL($orderByWay);
                    break;
                case 'name':
                    $filter['orderby'] = 'ORDER BY pt.`name` ' . pSQL($orderByWay);
                    break;
                case 'qty':
                    $filter['orderby'] = 'ORDER BY `qty` ' . pSQL($orderByWay);
                    break;
            }
        }

        if (!empty($lang) && !empty($id_shop) && is_numeric($id_shop) && is_numeric($lang)) {
            $where_sql = '';
            $where = (isset($filter['where']) && !empty($filter['where'])) ? join(' AND ', $filter['where']) : '';
            if (!empty($where)) {
                $where_sql .= ' WHERE ' . $where;
            }

            $inner_sql = '';
            if (!empty($filter['inner'])) {
                $inner_sql = $filter['inner'];
            }

            $orderby = (isset($filter['orderby']) && !empty($filter['orderby'])) ? $filter['orderby'] : '';

            $pagination = array();
            if (Tools::isSubmit('submitFilterproductList') && Tools::getValue('productList_pagination')) {
                $page = (int)Tools::getValue('submitFilterproductList');
                $limit = (int)Tools::getValue('productList_pagination');
                if ($page > 0 && $limit > 0) {
                    $pagination['from'] = (int)(($page * $limit) - $limit);
                    $pagination['to'] = (int)$limit;
                } elseif (($page == 0 || $page == 1) && $limit > 0) {
                    $pagination['from'] = 0;
                    $pagination['to'] = (int)$limit;
                }
            }

            $products = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS(
                'SELECT count(pl.id_product) AS qty, pl.id_product, pt.name, pt.link_rewrite, pl.id_df_product, image_shop.id_image
                FROM `' . _DB_PREFIX_ . 'df_product` pl
                INNER JOIN `' . _DB_PREFIX_ . 'product_lang` pt ON pl.id_product = pt.id_product AND pt.id_lang = ' . (int)$lang . ' AND id_shop = ' . (int)$id_shop . '
                LEFT JOIN `' . _DB_PREFIX_ . 'image_shop` image_shop
					ON (image_shop.`id_product` = pt.`id_product` AND image_shop.cover=1 AND image_shop.id_shop=' . (int)$id_shop . ')
                ' . $inner_sql
                . ' '
                . $where_sql
                . ' GROUP BY pl.id_product ' . pSQL($orderby)
                . ((Tools::isSubmit('productListFilter_qty') && is_numeric(Tools::getValue('productListFilter_qty'))) ? ' HAVING COUNT(pl.`id_product`) = ' . (int)Tools::getValue('productListFilter_qty') : '')
                . ((isset($pagination['from']) && is_numeric($pagination['from']) && isset($pagination['to']) && is_numeric($pagination['to']) && $pagination['to'] > 0) ? ' LIMIT ' . (int)$pagination['from'] . ', ' . (int)$pagination['to'] : '')
            );
        }

        return $products;
    }


    public static function getCountProductsList($lang = '', $id_shop = '')
    {
        $products = false;
        if (!empty($lang) && !empty($id_shop) && is_numeric($id_shop) && is_numeric($lang)) {
            $products = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT count(pl.id_product) AS qty, pl.id_product, pt.name, pt.link_rewrite
                FROM `' . _DB_PREFIX_ . 'df_product` pl
                INNER JOIN `' . _DB_PREFIX_ . 'product_lang` pt ON pl.id_product = pt.id_product 
                    AND pt.id_lang = ' . (int)$lang . ' AND id_shop = ' . (int)$id_shop . '
                GROUP BY pl.id_product');
        }

        return ($products && count($products) > 0) ? count($products) : 0;
    }

    public static function getCustomersForProduct($id_product)
    {
        $filter = array();

        if (Tools::isSubmit('productCustomerMailListFilter_quantity') && Tools::getValue('productCustomerMailListFilter_quantity')) {
            $filter['where'][] = 'cp.`quantity` LIKE "%' . pSQL(Tools::getValue('productCustomerMailListFilter_quantity')) . '%"';
        }
        if (Tools::isSubmit('productCustomerMailListFilter_price_with_tax') && Tools::getValue('productCustomerMailListFilter_price_with_tax')) {
            $filter['where'][] = 'cp.`price_with_tax` LIKE "%' . pSQL(Tools::getValue('productCustomerMailListFilter_price_with_tax')) . '%"';
        }
        if (Tools::isSubmit('productCustomerMailListFilter_mail') && Tools::getValue('productCustomerMailListFilter_mail')) {
            $filter['where'][] = 'fl.`email` LIKE "%' . pSQL(Tools::getValue('productCustomerMailListFilter_mail')) . '%"';
        }
        if (Tools::isSubmit('productCustomerMailListFilter_auth') && (Tools::getValue('productCustomerMailListFilter_auth') == '0'
                || Tools::getValue('productCustomerMailListFilter_auth') == '1')
        ) {
            $auth_sql = (Tools::getValue('productCustomerMailListFilter_auth') > 0) ? ' > 0 ' : ' IS NULL ';
            $filter['where'][] = 'c.`id_customer` ' . $auth_sql;
        }

        $orderByWay = 'ASC';
        if (Tools::isSubmit('productCustomerMailListOrderway')) {
            if (Tools::getValue('productCustomerMailListOrderway') == 'asc' || Tools::getValue('productCustomerMailListOrderway') == 'desc') {
                $orderByWay = Tools::strtoupper(Tools::getValue('productCustomerMailListOrderway'));
            }
        }

        if (Tools::isSubmit('productCustomerMailListOrderby')) {
            $orderBy = Tools::getValue('productCustomerMailListOrderby');
            switch ($orderBy) {
                case 'id_product':
                    $filter['orderby'] = 'ORDER BY pl.`id_product` ' . pSQL($orderByWay);
                    break;
                case 'firstname':
                    $filter['orderby'] = 'ORDER BY c.`firstname` ' . pSQL($orderByWay);
                    break;
                case 'lastname':
                    $filter['orderby'] = 'ORDER BY c.`lastname` ' . pSQL($orderByWay);
                    break;
                case 'email':
                    $filter['orderby'] = 'ORDER BY fl.`email` ' . pSQL($orderByWay);
                    break;
                case 'auth':
                    $filter['orderby'] = 'ORDER BY c.`id_customer` ' . pSQL($orderByWay);
                    break;
                case 'date_add':
                    $filter['orderby'] = 'ORDER BY cp.`date_add` ' . pSQL($orderByWay);
                    break;
                case 'price':
                    $filter['orderby'] = 'ORDER BY cp.`price` ' . pSQL($orderByWay);
                    break;
                case 'quantity':
                    $filter['orderby'] = 'ORDER BY cp.`quantity` ' . pSQL($orderByWay);
                    break;
                case 'id_customer':
                    $filter['orderby'] = 'ORDER BY `id_customer` ' . pSQL($orderByWay);
                    break;
            }
        }

        $result = array();
        $orderby = (isset($filter['orderby']) && !empty($filter['orderby'])) ? $filter['orderby'] : '';

        $where_sql = '';
        $where = (isset($filter['where']) && !empty($filter['where'])) ? join(' AND ', $filter['where']) : '';
        if (!empty($where)) {
            $where_sql .= ' AND ' . $where;
        }

        $customers = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT c.`id_customer`, c.`firstname`, c.`lastname`, fl.`email`, fl.`id_df_customer`, DATE_FORMAT(cp.`date_add`, \'%b-%d-%Y\') AS date_add,
            cp.`price`, cp.`quantity`, cp.`id_df_product`, cp.`id_currency`
              FROM `' . _DB_PREFIX_ . 'df_customer` fl
            LEFT JOIN `' . _DB_PREFIX_ . 'customer` c ON c.`id_customer` = fl.`id_customer`
            LEFT JOIN `' . _DB_PREFIX_ . 'df_product` cp ON cp.`id_df_customer` = fl.`id_df_customer`
            WHERE cp.id_product = ' . (int)$id_product . $where_sql . '
            GROUP BY fl.`email` ' . $orderby);

        foreach ($customers as $customer_key => $customer) {
            if (!empty($customer['id_currency']) && Validate::isInt($customer['id_currency']) && $customer['id_currency'] > 0) {
                $customer['price'] = Tools::displayPrice($customer['price'], (int)$customer['id_currency']);
            } else {
                $customer['price'] = Tools::displayPrice($customer['price']);
            }

            $result[$customer_key] = $customer;
            $result[$customer_key]['auth'] = (!empty($customer['id_customer'])) ? 1 : 0;
        }

        return ($result && count($result) > 0) ? $result : array();
    }

    public static function removeCustomerProductItem($id_df_customer_product)
    {
        if (is_numeric($id_df_customer_product) && $id_df_customer_product > 0) {
            $result = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow('
            SELECT `id_df_customer`, `id_product`  FROM `' . _DB_PREFIX_ . 'df_product`
            WHERE `id_df_product` = ' . (int)$id_df_customer_product);
            if ($result && count($result) > 0) {
                Db::getInstance()->delete('df_mail_pack', '`id_product` = ' . (int)$result['id_product'] . ' AND `id_df_customer` = ' . (int)$result['id_df_customer']);
            }
            return Db::getInstance()->delete('df_product', 'id_df_product=' . (int)$id_df_customer_product . ' AND `id_df_customer` = ' . (int)$result['id_df_customer']);
        }
        return false;
    }

    public static function removeProductItems($id_product)
    {
        if (isset($id_product) && is_numeric($id_product) && $id_product > 0) {
            return Db::getInstance()->delete('df_product', 'id_product= ' . (int)$id_product)
                && Db::getInstance()->delete('df_mail_pack', 'id_product= ' . (int)$id_product);
        }
        return false;
    }

    public function cronAllGeneration()
    {
        $sql = 'SELECT p.id_product
          FROM `' . _DB_PREFIX_ . 'product` AS p ' . Shop::addSqlAssociation('product', 'p') . '
            INNER JOIN `' . _DB_PREFIX_ . 'df_product` flp ON p.id_product IN(flp.id_product)
            WHERE product_shop.`visibility` IN ("both", "catalog") AND product_shop.`active` = 1
            GROUP BY p.id_product';
        $rq = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($sql);
        foreach ($rq as $item) {
            $id = (int)$item['id_product'];
            if (!empty($id) && is_numeric($id)) {
                $inf = array();
                $product = new Product((int)$id, true);

                $inf['id'] = (int)$id;
                $inf['quantity'] = $product->quantity;
                $inf['out_of_stock'] = $product->out_of_stock;
                $inf['base_price'] = $product->base_price;
                $inf['price'] = $product->price;
                $inf['public_price'] = $product->getPrice();
                $inf['getPriceWithoutReduct'] = $product->getPriceWithoutReduct();

                $lang = (int)Configuration::get('PS_LANG_DEFAULT');
                $accessories_enc = array();
                $accessories = $product->getAccessories((int)$lang);
                if (!empty($accessories) && count($accessories) > 0) {
                    foreach ($accessories as $accessory) {
                        $accessories_enc[] = array('id' => $accessory['id_product'],
                            'quantity' => $accessory['quantity'],
                            'price' => $accessory['price'],
                            'wholesale_price' => $accessory['wholesale_price'],
                            'price_tax_exc' => $accessory['price_tax_exc'],
                            'price_without_reduction' => $accessory['price_without_reduction'],
                        );
                    }
                }
                $inf['accessories'] = $accessories_enc;
                $inf['specific_price'] = $product->specificPrice;
                unset($product);

                FollowList::genPackMail($inf);
            }
        }
    }

    public static function genPackMail($inf = array())
    {
        if (is_array($inf) && count($inf) > 0 && isset($inf['id']) && !empty($inf['id'])) {
            $followListUsers = self::getIdProductsUsers($inf['id']);

            if (!$followListUsers || count($followListUsers) == 0) {
                return false;
            }

            foreach ($followListUsers as $followListUser) {
                if (Configuration::get('DISCOUNTFOLLOWER_WATCH_QUANTITY') && $followListUser['quantity'] == 0
                    && isset($inf['quantity']) && is_numeric($inf['quantity']) && $inf['quantity'] > 0
                ) {
                    self::addMailPackProduct($inf['id'], $followListUser['id_df_customer'], 'quantity_null');
                }

                $minimumQty = Configuration::get('DISCOUNTFOLLOWER_LIST_SEND_QTY_DAYS');
                if (Configuration::get('DISCOUNTFOLLOWER_WATCH_QUANTITY') && $followListUser['quantity'] > 0
                    && isset($inf['quantity']) && is_numeric($inf['quantity']) && $inf['quantity'] > 0
                    && $inf['quantity'] <= $minimumQty && $minimumQty >= 0
                ) {
                    self::addMailPackProduct($inf['id'], $followListUser['id_df_customer'], 'lower_quantity');
                } else {
                    Db::getInstance()->delete('df_mail_pack', 'id_product=' . (int)$inf['id'] . ' AND id_df_customer = ' . (int)$followListUser['id_df_customer'] . ' AND `type` = "lower_quantity"');
                }

                if ($inf['price'] != $followListUser['price'] && $inf['price'] < $followListUser['price']) {
                    if (Configuration::get('DISCOUNTFOLLOWER_WATCH_PROMO') && isset($inf['specific_price'])
                        && !empty($inf['specific_price'])
                    ) {
                        $promo = false;
                        $specific_price = Tools::jsonDecode($followListUser['specific_price']);
                        if ($specific_price && count($specific_price) > 0) {
                            $array_watch = array('id_specific_price',
                                'id_specific_price_rule', 'id_cart',
                                'id_product', 'id_shop', 'id_shop_group',
                                'id_currency', 'id_country', 'id_customer',
                                'id_product_attribute', 'price', 'from_quantity',
                                'id_group', 'price', 'from_quantity', 'reduction',
                                'reduction_tax', 'reduction_type', 'from', 'to');

                            foreach ($specific_price as $key => $item) {
                                if (in_array($key, $array_watch) && (!isset($inf['specific_price'][$key]) || $inf['specific_price'][$key] != $item)) {
                                    $promo = true;
                                }
                            }
                        } elseif (!isset($specific_price) && empty($specific_price) && isset($inf['specific_price']) && !empty($inf['specific_price'])) {
                            $promo = true;
                        } else {
                            $promo = false;
                        }
                        if ($promo) {
                            self::addMailPackProduct($inf['id'], $followListUser['id_df_customer'], 'promo');
                        } else {
                            if (Configuration::get('DISCOUNTFOLLOWER_WATCH_PRICE')) {
                                self::addMailPackProduct($inf['id'], $followListUser['id_df_customer'], 'change_price');
                            }
                        }
                    } else {
                        if (Configuration::get('DISCOUNTFOLLOWER_WATCH_PRICE')) {
                            self::addMailPackProduct($inf['id'], $followListUser['id_df_customer'], 'change_price');
                        }
                    }
                }

                if (Configuration::get('DISCOUNTFOLLOWER_WATCH_RELATED') && count($inf['accessories']) > 0) {
                    $accessories = Tools::unSerialize($followListUser['accessories']);
                    $accIdCustomerList = $accIdSystemLists = array();
                    if ($accessories && count($accessories) > 0) {
                        foreach ($accessories as $accessory) {
                            $accIdCustomerList[] = $accessory['id'];
                        }
                    }
                    foreach ($inf['accessories'] as $accessory) {
                        if (!in_array($accessory['id'], $accIdCustomerList)) {
                            $accIdSystemLists[] = $accessory['id'];
                        }
                    }

                    if (count($accIdSystemLists) > 0) {
                        self::addMailPackProduct($inf['id'], $followListUser['id_df_customer'], 'additional_products');
                    }
                }
            }
        }
    }

    protected static function getIdProductsUsers($id_product)
    {
        if (isset($id_product) && is_numeric($id_product) && $id_product > 0) {
            return Db::getInstance()->executeS('
                SELECT  fp.quantity, fp.price, fp.price_without_reduct, fp.base_price, fp.accessories, fp.specific_price,
                        fl.id_df_customer
                FROM `' . _DB_PREFIX_ . 'df_customer` AS fl
                INNER JOIN `' . _DB_PREFIX_ . 'df_product` AS fp
                ON fl.id_df_customer= fp.id_df_customer
                 WHERE fp.id_product = ' . (int)$id_product . ' AND fl.newsletter = 1');
        }
        return array();
    }

    protected static function addMailPackProduct($id_product, $id_df_customer, $type)
    {
        $packType = array('quantity_null', 'change_price', 'promo',
            'additional_products', 'lower_quantity');

        if (isset($id_product) && is_numeric($id_product) && $id_product > 0
            && isset($id_df_customer) && is_numeric($id_df_customer) && $id_df_customer > 0
            && in_array($type, $packType)
        ) {
            self::insertPackType(
                array(
                    'type' => $type,
                    'id_df_customer' => (int)$id_df_customer,
                    'id_product' => (int)$id_product
                )
            );
        }
    }

    protected static function insertPackType($param)
    {
        if (!empty($param['type']) && !empty($param['id_df_customer']) && is_numeric($param['id_df_customer'])) {
            $result = Db::getInstance()->getRow('
                SELECT `id` FROM ' . _DB_PREFIX_ . 'df_mail_pack
                WHERE `id_product` = ' . (int)$param['id_product'] . '
                AND `id_df_customer` = ' . (int)$param['id_df_customer'] . ' AND `send` < 3
                 AND `type` = "' . pSQL($param['type']) . '"');
            if (!isset($result['id']) || empty($result['id'])) {
                $insert = array();
                $insert['type'] = pSQL($param['type']);
                $insert['id_df_customer'] = (int)$param['id_df_customer'];
                $insert['data_added'] = Date('Y-m-d H:i:s');
                $insert['data_updated'] = Date('Y-m-d H:i:s');
                $insert['id_product'] = (int)$param['id_product'];
                Db::getInstance()->insert('df_mail_pack', $insert, false, true);
            } else {
                $update = array();
                $update['data_updated'] = Date('Y-m-d H:i:s');
                self::resetPackType($param);
                Db::getInstance()->update('df_mail_pack', $update, 'id=' . (int)$result['id']);
            }
        }
    }

    public static function resetPackType($param)
    {
        switch ($param['type']) {
            case 'promo':
            case 'change_price':
                $type_value = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('SELECT `type_values`
                    FROM `' . _DB_PREFIX_ . 'df_mail_pack`
                        WHERE `type`="' . pSQL($param['type']) . '"
                        AND `id_df_customer` = "' . (int)$param['id_df_customer'] . '"
                        AND `id_product` = "' . (int)$param['id_product'] . '"');

                if ($type_value && !empty($type_value)) {
                    $product = new Product((int)$param['id_product'], true);
                    $product_price_with_tax = Product::getPriceStatic((int)$product->id, true, null, 6);

                    if ($product_price_with_tax < $type_value) {
                        Db::getInstance()->update('df_mail_pack', array('send' => 0, 'status' => 0), '`type`="' . pSQL($param['type']) . '"
                            AND `id_df_customer` = "' . (int)$param['id_df_customer'] . '"
                            AND `id_product` = "' . (int)$param['id_product'] . '"');
                    }
                    unset($product);
                }
                break;
            case 'additional_products':
                $type_value = Db::getInstance(_PS_USE_SQL_SLAVE_)->getValue('SELECT `type_values`
                    FROM `' . _DB_PREFIX_ . 'df_mail_pack`
                        WHERE `type`="' . pSQL($param['type']) . '"
                        AND `id_df_customer` = "' . (int)$param['id_df_customer'] . '"
                        AND `id_product` = "' . (int)$param['id_product'] . '"');

                $product = new Product((int)$param['id_product'], true);

                $lang = (int)Configuration::get('PS_LANG_DEFAULT');
                $accessories_enc = array();
                $accessories = $product->getAccessories($lang);
                if (!empty($accessories) && count($accessories) > 0) {
                    foreach ($accessories as $accessory) {
                        $accessories_enc[] = (int)$accessory['id_product'];
                    }
                }

                if (!empty($type_value)) {
                    $type_decode = Tools::jsonDecode($type_value);
                    if ($type_decode && is_array($type_decode) && count($type_decode) > 0) {
                        $type_decode_flip = array_flip($type_decode);
                        foreach ($accessories_enc as $item) {
                            if (!isset($type_decode_flip[$item])) {
                                Db::getInstance()->update('df_mail_pack', array('send' => 0, 'status' => 0), '`type`="' . pSQL($param['type']) . '"
                                    AND `id_df_customer` = "' . (int)$param['id_df_customer'] . '"
                                    AND `id_product` = "' . (int)$param['id_product'] . '"');
                                break;
                            }
                        }
                    }
                } elseif (empty($type_value) && !empty($accessories_enc)) {
                    Db::getInstance()->update('df_mail_pack', array('send' => 0, 'status' => 0), '`type`="' . pSQL($param['type']) . '"
                                    AND `id_df_customer` = "' . (int)$param['id_df_customer'] . '"
                                    AND `id_product` = "' . (int)$param['id_product'] . '"');
                }
                unset($product);
                break;
        }
    }

    protected function clearDisabledMailStack()
    {
        $result = Db::getInstance()->executeS(' SELECT flpack.id
          FROM `' . _DB_PREFIX_ . 'df_customer` AS fl
          INNER JOIN `' . _DB_PREFIX_ . 'df_mail_pack` AS flpack
          ON flpack.id_df_customer = fl.id_df_customer
          WHERE fl.`newsletter` = 0');

        $listRemoveUid = array();
        if ($result && !empty($result)) {
            foreach ($result as $item) {
                if (!empty($item['id']) && is_numeric($item['id'])) {
                    $listRemoveUid[] = (int)$item['id'];
                }
            }
        }
        if (count($listRemoveUid) > 0) {
            Db::getInstance()->delete('df_mail_pack', '`id` IN (' . join(', ', $listRemoveUid) . ')');
        }
    }

    public function mailConvertSend()
    {
        $this->clearDisabledMailStack();

        $firstSend = $secondSend = 0;

        $MailListConvert = $this->getConvertMailList();
        foreach ($MailListConvert as $id_discountfollower => $customer) {
            foreach ($customer as $types => $products) {
                if (count($products) > 0) {
                    switch ($types) {
                        case 'change_price':
                            $firstSend = (int)Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS');
                            $secondSend = (int)Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS2');
                            break;
                        case 'promo':
                            $firstSend = (int)Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS');
                            $secondSend = (int)Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS2');
                            break;
                        case 'lower_quantity':
                            $firstSend = (int)Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS');
                            $secondSend = (int)Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS2');
                            break;
                        case 'quantity_null':
                            $firstSend = (int)Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS');
                            $secondSend = (int)Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS2');
                            break;
                        case 'additional_products':
                            $firstSend = (int)Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS');
                            $secondSend = (int)Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS2');
                            break;
                    }
                    $sendList = array();
                    foreach ($products as $product) {
                        if (empty($product['data_send']) || $product['send'] == 0) {
                            $dayAccess = date('Y-m-d H:i:s', strtotime('-' . $firstSend . ' day', strtotime(Date('Y-m-d H:i:s'))));
                            if ($product['data_added'] <= $dayAccess) {
                                $sendList[] = $product;
                            }
                        } elseif ($secondSend >= 0) {
                            $dayAccess = date('Y-m-d H:i:s', strtotime('-' . $secondSend . ' day', strtotime(Date('Y-m-d H:i:s'))));
                            if ($product['data_send'] <= $dayAccess) {
                                $product['secondSend'] = 1;
                                $sendList[] = $product;
                            }
                        }
                    }

                    if (count($sendList) > 0) {
                        $this->sendMail($id_discountfollower, $sendList, $types);
                    }
                }
            }
        }
    }

    protected function sendMail($id_discountfollower, $products, $types, $closeStackAfter = false)
    {
        if (empty($products) && !is_array($products) || !Configuration::get('DISCOUNTFOLLOWER_MAIL_SEND')) {
            return false;
        }

        $customer_data = self::getFollowCustomerInform($id_discountfollower);
        $uniq_mailsend_key = md5($customer_data['email'] . time());

        $id_lang = (!isset($customer_data['c_id_lang']) || empty($customer_data['c_id_lang']) || !is_numeric($customer_data['c_id_lang'])) ? (int)$customer_data['id_lang'] : (int)$customer_data['c_id_lang'];
        $is_product_send = array();
        $products_list = array();
        $validated_products = array();
        foreach ($products as $product) {
            $is_product_send[] = (int)$product['id_product'];
            $prod_obj = new Product((int)$product['id_product'], true, $id_lang);

            $inf = array();
            $inf['id'] = (int)$product['id_product'];
            $inf['quantity'] = $prod_obj->quantity;
            $inf['out_of_stock'] = $prod_obj->out_of_stock;
            $inf['base_price'] = $prod_obj->base_price;
            $inf['price'] = $prod_obj->price;
            $inf['public_price'] = $prod_obj->getPrice();
            $inf['getPriceWithoutReduct'] = $prod_obj->getPriceWithoutReduct();

            $lang = (int)Configuration::get('PS_LANG_DEFAULT');
            $accessories_enc = array();
            $accessories = $prod_obj->getAccessories((int)$lang);
            if (!empty($accessories) && count($accessories) > 0) {
                foreach ($accessories as $accessory) {
                    $accessories_enc[] = array('id' => (int)$accessory['id_product'],
                        'quantity' => $accessory['quantity'],
                        'price' => $accessory['price'],
                        'wholesale_price' => $accessory['wholesale_price'],
                        'price_tax_exc' => $accessory['price_tax_exc'],
                        'price_without_reduction' => $accessory['price_without_reduction'],
                    );
                }
            }
            $inf['accessories'] = $accessories_enc;
            $inf['specific_price'] = $prod_obj->specificPrice;
            $validItem = $this->validProductSend($id_discountfollower, $product, $inf);
            if ($validItem) {
                $id_image = $prod_obj->getCover((int)$product['id_product']);
                $link = new Link;
                $image_link = '';
                if (isset($id_image['id_image']) && is_numeric($id_image['id_image']) && $id_image['id_image'] > 0
                    && isset($prod_obj->link_rewrite)
                ) {
                    $imageType = $this->getTypeImageSize($types);
                    $image_link = $link->getImageLink($prod_obj->link_rewrite, (int)$id_image['id_image'], ((!empty($imageType)) ? $imageType : ''));
                }
                unset($link);
                $protocol = Tools::getProtocol(Tools::usingSecureMode());

                $https_link = (Tools::usingSecureMode() && Configuration::get('PS_SSL_ENABLED')) ? 'https://' : 'http://';
                $link = new Link($https_link, $https_link);

                $url = $link->getProductLink(
                    $prod_obj,
                    $prod_obj->link_rewrite,
                    Category::getLinkRewrite($prod_obj->id_category_default, $id_lang),
                    null,
                    $id_lang,
                    null,
                    Product::getDefaultAttribute($prod_obj->id),
                    false,
                    false,
                    true,
                    array('stat' => $uniq_mailsend_key)
                );

                $presentedDiscountProduct = array();
                if (isset($prod_obj->specificPrice) && isset($prod_obj->specificPrice['reduction_type'])) {
                    $presentedDiscountProduct['discount_type'] = $prod_obj->specificPrice['reduction_type'];
                    // TODO: format according to locale preferences
                    $presentedDiscountProduct['discount_percentage'] = -round(100 * $prod_obj->specificPrice['reduction']).'%';
                    $presentedDiscountProduct['discount_percentage_absolute'] = round(100 * $prod_obj->specificPrice['reduction']).'%';
                }

                $products_list[(int)$product['id_product']] = array(
                    'type' => $product['type'],
                    'name' => $prod_obj->name,
                    'description_short' => Tools::getDescriptionClean($prod_obj->description_short),
                    'quantity' => $prod_obj->quantity,
                    'link' => $url,
                    'image' => $protocol . $image_link,
                    'price' => Tools::displayPrice($prod_obj->getPublicPrice()),
                    'price_without_discount' => Tools::displayPrice($prod_obj->getPublicPrice(true, null, 6, null, false, false)),
                    'discount_this' => Product::isDiscounted((int)$product['id_product'], 1),
                    'presentedDiscountProduct' => $presentedDiscountProduct,
                    'id_manufacturer' => (int)$prod_obj->id_manufacturer,
                    'id_category_default' => (int)$prod_obj->id_category_default
                );
                $validated_products[] = (int)$product['id_product'];
            }

            $type_values = $this->getChangeValues($types, $inf);
            if (!isset($product['secondSend']) || $product['secondSend'] != 1) {
                $where = 'id_product = ' . (int)$product['id_product'] . ' AND `type`="' . pSQL($types) . '" AND `id_df_customer` = ' . (int)$id_discountfollower;
                Db::getInstance()->update('df_mail_pack', array('type_values' => pSQL($type_values)), $where);
            }

            unset($prod_obj);
        }

        if (count($products_list) > 0) {
            if (isset($product['secondSend']) && $product['secondSend'] == 1) {
                $where = 'id_product IN(' . join(', ', $is_product_send) . ') AND status = 2 AND `type` = "' . pSQL($types) . '" AND `id_df_customer` = ' . (int)$id_discountfollower;
                Db::getInstance()->update('df_mail_pack', array('status' => 3, 'data_send' => Date('Y-m-d H:i:s')), $where);
            } else {
                $where = 'id_product IN(' . join(', ', $is_product_send) . ') AND status = 0 AND `type` = "' . pSQL($types) . '" AND `id_df_customer` = ' . (int)$id_discountfollower;
                Db::getInstance()->update('df_mail_pack', array('status' => 1, 'data_send' => Date('Y-m-d H:i:s')), $where);
            }

            $product_list_txt = '';
            $product_list_html = '';
            if (count($products_list) > 0) {
                $product_list_txt = $this->getEmailTemplateContent('product_conf_list.txt', Mail::TYPE_TEXT, $products_list);
                $product_list_html = $this->getEmailTemplateContent('product_conf_list.tpl', Mail::TYPE_HTML, $products_list);
            }

            $related_product = '';
            $related_product_txt = '';
            $relatedInfo = array();
            switch ($types) {
                case 'change_price':
                    $quantity = Configuration::get('DISCOUNTFOLLOWER_PRICE_RELATED_QUANTITY', 0);
                    if ($this->getRelatedType('DISCOUNTFOLLOWER_PRICE_RELATED_ACTIVE')
                        && Validate::isInt($quantity) && $quantity > 0
                    ) {
                        $quantity = (int)$quantity;
                        $related_type = $this->getRelatedType('DISCOUNTFOLLOWER_PRICE_RELATED_ACTIVE');
                        switch ($related_type) {
                            case 'accessories':
                                $product_append = array();
                                foreach ($validated_products as $validated_product) {
                                    $product_accessories = Product::getAccessoriesLight($id_lang, (int)$validated_product);
                                    if ($product_accessories && count($product_accessories) > 0) {
                                        foreach ($product_accessories as $product_accessory) {
                                            if (!in_array($product_accessory['id_product'], $product_append) && !in_array($product_accessory['id_product'], $validated_products)) {
                                                $product_append[] = (int)$product_accessory['id_product'];
                                                if (count($product_append) == $quantity) {
                                                    break 2;
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                            case 'manufacturer':
                                $product_append = array();
                                foreach ($validated_products as $validated_product) {
                                    if (isset($products_list[$validated_product]['id_manufacturer'])
                                        && Validate::isInt($products_list[$validated_product]['id_manufacturer'])
                                        && $products_list[$validated_product]['id_manufacturer'] > 0
                                    ) {
                                        if (Manufacturer::manufacturerExists((int)$products_list[$validated_product]['id_manufacturer'])) {
                                            $manufacturies = new Manufacturer((int)$products_list[$validated_product]['id_manufacturer'], $id_lang);
                                            $product_accessories = $manufacturies->getProductsLite($id_lang);
                                            if ($product_accessories && count($product_accessories) > 0) {
                                                foreach ($product_accessories as $product_accessory) {
                                                    if (!in_array($product_accessory['id_product'], $product_append) && !in_array($product_accessory['id_product'], $validated_products)) {
                                                        $product_append[] = (int)$product_accessory['id_product'];
                                                        if (count($product_append) == $quantity) {
                                                            break 2;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                            case 'default_category':
                                $product_append = array();
                                $default_viewed = array();
                                foreach ($validated_products as $validated_product) {
                                    if (isset($products_list[$validated_product]['id_category_default'])
                                        && Validate::isInt($products_list[$validated_product]['id_category_default'])
                                        && $products_list[$validated_product]['id_category_default'] > 0
                                        && !in_array($products_list[$validated_product]['id_category_default'], $default_viewed)
                                    ) {
                                        if (Category::categoryExists((int)$products_list[$validated_product]['id_category_default'])) {
                                            $default_viewed[] = (int)$products_list[$validated_product]['id_category_default'];
                                            if (count($product_append) > 0) {
                                                $quantity = $quantity - count($product_append);
                                            }
                                            $categoryProducts = $this->getCategoriesProduct((int)$products_list[$validated_product]['id_category_default'], $quantity, $validated_products);
                                            if (count($categoryProducts) <= $quantity) {
                                                $product_append = array_merge($categoryProducts, $product_append);
                                            }
                                            if (count($product_append) >= $quantity) {
                                                break;
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                        }
                    }
                    break;
                case 'promo':
                    $quantity = Configuration::get('DISCOUNTFOLLOWER_PROMO_RELATED_QUANTITY', 0);
                    if ($this->getRelatedType('DISCOUNTFOLLOWER_PROMO_RELATED_ACTIVE')
                        && Validate::isInt($quantity) && $quantity > 0
                    ) {
                        $quantity = (int)$quantity;
                        $related_type = $this->getRelatedType('DISCOUNTFOLLOWER_PROMO_RELATED_ACTIVE');
                        switch ($related_type) {
                            case 'accessories':
                                $product_append = array();
                                foreach ($validated_products as $validated_product) {
                                    $product_accessories = Product::getAccessoriesLight($id_lang, (int)$validated_product);
                                    if ($product_accessories && count($product_accessories) > 0) {
                                        foreach ($product_accessories as $product_accessory) {
                                            if (!in_array($product_accessory['id_product'], $product_append) && !in_array($product_accessory['id_product'], $validated_products)) {
                                                $product_append[] = (int)$product_accessory['id_product'];
                                                if (count($product_append) == $quantity) {
                                                    break 2;
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                            case 'manufacturer':
                                $product_append = array();
                                foreach ($validated_products as $validated_product) {
                                    if (isset($products_list[$validated_product]['id_manufacturer'])
                                        && Validate::isInt($products_list[$validated_product]['id_manufacturer'])
                                        && $products_list[$validated_product]['id_manufacturer'] > 0
                                    ) {
                                        if (Manufacturer::manufacturerExists((int)$products_list[$validated_product]['id_manufacturer'])) {
                                            $manufacturies = new Manufacturer((int)$products_list[$validated_product]['id_manufacturer'], $id_lang);
                                            $product_accessories = $manufacturies->getProductsLite($id_lang);
                                            if ($product_accessories && count($product_accessories) > 0) {
                                                foreach ($product_accessories as $product_accessory) {
                                                    if (!in_array($product_accessory['id_product'], $product_append) && !in_array($product_accessory['id_product'], $validated_products)) {
                                                        $product_append[] = (int)$product_accessory['id_product'];
                                                        if (count($product_append) == $quantity) {
                                                            break 2;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                            case 'default_category':
                                $product_append = array();
                                $default_viewed = array();
                                foreach ($validated_products as $validated_product) {
                                    if (isset($products_list[$validated_product]['id_category_default'])
                                        && Validate::isInt($products_list[$validated_product]['id_category_default'])
                                        && $products_list[$validated_product]['id_category_default'] > 0
                                        && !in_array($products_list[$validated_product]['id_category_default'], $default_viewed)
                                    ) {
                                        if (Category::categoryExists((int)$products_list[$validated_product]['id_category_default'])) {
                                            $default_viewed[] = (int)$products_list[$validated_product]['id_category_default'];
                                            if (count($product_append) > 0) {
                                                $quantity = $quantity - count($product_append);
                                            }
                                            $categoryProducts = $this->getCategoriesProduct((int)$products_list[$validated_product]['id_category_default'], $quantity, $validated_products);
                                            if (count($categoryProducts) <= $quantity) {
                                                $product_append = array_merge($categoryProducts, $product_append);
                                            }
                                            if (count($product_append) >= $quantity) {
                                                break;
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                        }
                    }
                    break;
                case 'quantity_null':
                case 'lower_quantity':
                    $quantity = Configuration::get('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_QUANTITY', 0);
                    if ($this->getRelatedType('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_ACTIVE')
                        && Validate::isInt($quantity) && $quantity > 0
                    ) {
                        $quantity = (int)$quantity;
                        $related_type = $this->getRelatedType('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_ACTIVE');
                        switch ($related_type) {
                            case 'accessories':
                                $product_append = array();
                                foreach ($validated_products as $validated_product) {
                                    $product_accessories = Product::getAccessoriesLight($id_lang, (int)$validated_product);
                                    if ($product_accessories && count($product_accessories) > 0) {
                                        foreach ($product_accessories as $product_accessory) {
                                            if (!in_array($product_accessory['id_product'], $product_append) && !in_array($product_accessory['id_product'], $validated_products)) {
                                                $product_append[] = (int)$product_accessory['id_product'];
                                                if (count($product_append) == $quantity) {
                                                    break 2;
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                            case 'manufacturer':
                                $product_append = array();
                                foreach ($validated_products as $validated_product) {
                                    if (isset($products_list[$validated_product]['id_manufacturer'])
                                        && Validate::isInt($products_list[$validated_product]['id_manufacturer'])
                                        && $products_list[$validated_product]['id_manufacturer'] > 0
                                    ) {
                                        if (Manufacturer::manufacturerExists((int)$products_list[$validated_product]['id_manufacturer'])) {
                                            $manufacturies = new Manufacturer((int)$products_list[$validated_product]['id_manufacturer'], $id_lang);
                                            $product_accessories = $manufacturies->getProductsLite($id_lang);
                                            if ($product_accessories && count($product_accessories) > 0) {
                                                foreach ($product_accessories as $product_accessory) {
                                                    if (!in_array($product_accessory['id_product'], $product_append) && !in_array($product_accessory['id_product'], $validated_products)) {
                                                        $product_append[] = (int)$product_accessory['id_product'];
                                                        if (count($product_append) == $quantity) {
                                                            break 2;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                            case 'default_category':
                                $product_append = array();
                                $default_viewed = array();
                                foreach ($validated_products as $validated_product) {
                                    if (isset($products_list[$validated_product]['id_category_default'])
                                        && Validate::isInt($products_list[$validated_product]['id_category_default'])
                                        && $products_list[$validated_product]['id_category_default'] > 0
                                        && !in_array($products_list[$validated_product]['id_category_default'], $default_viewed)
                                    ) {
                                        if (Category::categoryExists((int)$products_list[$validated_product]['id_category_default'])) {
                                            $default_viewed[] = (int)$products_list[$validated_product]['id_category_default'];
                                            if (count($product_append) > 0) {
                                                $quantity = $quantity - count($product_append);
                                            }
                                            $categoryProducts = $this->getCategoriesProduct((int)$products_list[$validated_product]['id_category_default'], $quantity, $validated_products);
                                            if (count($categoryProducts) <= $quantity) {
                                                $product_append = array_merge($categoryProducts, $product_append);
                                            }
                                            if (count($product_append) >= $quantity) {
                                                break;
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                        }
                    }
                    break;
                case 'additional_products':
                    $quantity = Configuration::get('DISCOUNTFOLLOWER_RELATED_RELATED_QUANTITY', 0);
                    if ($this->getRelatedType('DISCOUNTFOLLOWER_RELATED_RELATED_ACTIVE')
                        && Validate::isInt($quantity) && $quantity > 0
                    ) {
                        $quantity = (int)$quantity;
                        $related_type = $this->getRelatedType('DISCOUNTFOLLOWER_RELATED_RELATED_ACTIVE');
                        switch ($related_type) {
                            case 'accessories':
                                $product_append = array();
                                foreach ($validated_products as $validated_product) {
                                    $product_accessories = Product::getAccessoriesLight($id_lang, (int)$validated_product);
                                    if ($product_accessories && count($product_accessories) > 0) {
                                        foreach ($product_accessories as $product_accessory) {
                                            if (!in_array($product_accessory['id_product'], $product_append) && !in_array($product_accessory['id_product'], $validated_products)) {
                                                $product_append[] = (int)$product_accessory['id_product'];
                                                if (count($product_append) == $quantity) {
                                                    break 2;
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                            case 'manufacturer':
                                $product_append = array();
                                foreach ($validated_products as $validated_product) {
                                    if (isset($products_list[$validated_product]['id_manufacturer'])
                                        && Validate::isInt($products_list[$validated_product]['id_manufacturer'])
                                        && $products_list[$validated_product]['id_manufacturer'] > 0
                                    ) {
                                        if (Manufacturer::manufacturerExists((int)$products_list[$validated_product]['id_manufacturer'])) {
                                            $manufacturies = new Manufacturer((int)$products_list[$validated_product]['id_manufacturer'], $id_lang);
                                            $product_accessories = $manufacturies->getProductsLite($id_lang);
                                            if ($product_accessories && count($product_accessories) > 0) {
                                                foreach ($product_accessories as $product_accessory) {
                                                    if (!in_array($product_accessory['id_product'], $product_append) && !in_array($product_accessory['id_product'], $validated_products)) {
                                                        $product_append[] = (int)$product_accessory['id_product'];
                                                        if (count($product_append) == $quantity) {
                                                            break 2;
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                            case 'default_category':
                                $product_append = array();
                                $default_viewed = array();
                                foreach ($validated_products as $validated_product) {
                                    if (isset($products_list[$validated_product]['id_category_default'])
                                        && Validate::isInt($products_list[$validated_product]['id_category_default'])
                                        && $products_list[$validated_product]['id_category_default'] > 0
                                        && !in_array($products_list[$validated_product]['id_category_default'], $default_viewed)
                                    ) {
                                        if (Category::categoryExists((int)$products_list[$validated_product]['id_category_default'])) {
                                            $default_viewed[] = (int)$products_list[$validated_product]['id_category_default'];
                                            if (count($product_append) > 0) {
                                                $quantity = $quantity - count($product_append);
                                            }
                                            $categoryProducts = $this->getCategoriesProduct((int)$products_list[$validated_product]['id_category_default'], $quantity, $validated_products);
                                            if (count($categoryProducts) <= $quantity) {
                                                $product_append = array_merge($categoryProducts, $product_append);
                                            }
                                            if (count($product_append) >= $quantity) {
                                                break;
                                            }
                                        }
                                    }
                                }
                                if (count($product_append) > 0) {
                                    $relatedInfo = $this->packingProductList($product_append, $id_lang, $types, $uniq_mailsend_key);
                                }
                                break;
                        }
                    }
                    break;
            }

            if (isset($relatedInfo) && count($relatedInfo) > 0) {
                $related_product_txt = $this->getEmailTemplateContent('related_product_conf_list.txt', Mail::TYPE_TEXT, $relatedInfo);
                $related_product = $this->getEmailTemplateContent('related_product_conf_list.tpl', Mail::TYPE_HTML, $relatedInfo);
            }

            $OptionalText = $this->getTextMail($types, (int)$id_lang);

            $request_token = md5($customer_data['email']);
            Db::getInstance()->update('df_customer', array('request_token' => pSQL($request_token)), '`email` = "' . pSQL($customer_data['email']) . '"');

            $link = new Link();
            $FL_link = $link->getModuleLink('discountfollower', 'followlist', array(), true);

            $send = Mail::Send(
                (int)$id_lang,
                'follower_products',
                Mail::l('Your Follow request\'s link', (int)$id_lang),
                array(
                    '{mail_var}' => $customer_data['email'],
                    '{OptionalText}' => $OptionalText,
                    '{lastname}' => (!empty($customer_data['lastname']) || !empty($customer_data['firstname'])) ? $customer_data['lastname'] : $customer_data['email'],
                    '{firstname}' => (!empty($customer_data['firstname'])) ? $customer_data['firstname'] : '',
                    '{products}' => $product_list_html,
                    '{products_txt}' => $product_list_txt,
                    '{related_products}' => $related_product,
                    '{related_product_txt}' => $related_product_txt,
                    '{unsubscribe}' => $FL_link . '?unsubscribe=' . $request_token,
                ),
                $customer_data['email'],
                Mail::l('The new website message', (int)$id_lang),
                null,
                (string)Configuration::get('PS_SHOP_NAME'),
                null,
                null,
                (string)_PS_MODULE_DIR_ . 'discountfollower/' . 'mails/'
            );

            if (!class_exists('FollowerStatistic')) {
                require_once _PS_MODULE_DIR_ . 'discountfollower/classes/FollowerStatistic.php';
            }

            $statistic = new FollowerStatistic();
            $statistic->from_mail = $customer_data['email'];
            $statistic->uniq_key = Tools::getDescriptionClean($uniq_mailsend_key);
            $statistic->type_send = Tools::getDescriptionClean($types);
            $statistic->add();
            unset($statistic);

            $copy_send_fn = true;
            $copy_send = Configuration::get('DISCOUNTFOLLOWER_WATCH_COPY');
            $copy_mail = Configuration::get('DISCOUNTFOLLOWER_WATCH_MAIL');
            if ($copy_send && filter_var($copy_mail, FILTER_VALIDATE_EMAIL)) {
                $copy_send_fn = Mail::Send(
                    (int)$id_lang,
                    'follower_products',
                    Mail::l('Copy mail from Follower Mod', (int)$id_lang),
                    array(
                        '{mail_var}' => $customer_data['email'],
                        '{OptionalText}' => $OptionalText,
                        '{lastname}' => (!empty($customer_data['lastname']) || !empty($customer_data['firstname'])) ? $customer_data['lastname'] : $customer_data['email'],
                        '{firstname}' => (!empty($customer_data['firstname'])) ? $customer_data['firstname'] : '',
                        '{products}' => $product_list_html,
                        '{products_txt}' => $product_list_txt,
                        '{related_product}' => $related_product,
                        '{related_product_txt}' => $related_product_txt,
                        '{unsubscribe}' => $FL_link . '?unsubscribe=' . $request_token,
                    ),
                    $copy_mail,
                    Mail::l('The new website message', $id_lang),
                    null,
                    (string)Configuration::get('PS_SHOP_NAME'),
                    null,
                    null,
                    (string)_PS_MODULE_DIR_ . 'discountfollower/' . 'mails/'
                );
            }
            unset($inf);

            if (!isset($product['secondSend']) || $product['secondSend'] != 1) {
                $where = 'id_product IN (' . join(', ', $is_product_send) . ') AND status = 1 AND `type`="' . pSQL($types) . '" AND `id_df_customer` = ' . (int)$id_discountfollower;
                $update = array('status' => 2, 'send' => 1, 'data_updated' => Date('Y-m-d H:i:s'));
                Db::getInstance()->update('df_mail_pack', $update, $where);
            }

            return $send && $copy_send_fn;
        }
        return false;
    }

    protected static function getFollowCustomerInform($id_customer)
    {
        if (is_numeric($id_customer) && $id_customer > 0) {
            return Db::getInstance()->getRow('
                SELECT fl.`id_lang`, fl.`email`, c.id_lang AS c_id_lang, c.firstname, c.lastname
                FROM ' . _DB_PREFIX_ . 'df_customer fl
                    LEFT JOIN ' . _DB_PREFIX_ . 'customer c ON c.id_customer = fl.id_customer
                    WHERE fl.`id_df_customer` = ' . (int)$id_customer);
        }
        return false;
    }

    protected function getConvertMailList()
    {
        $itemsList = $this->getListMailTurn();
        $itemSortable = array();
        if ($itemsList && is_array($itemsList) && count($itemsList) > 0) {
            foreach ($itemsList as $item) {
                $itemSortable[$item['id_df_customer']][$item['type']][] = $item;
            }
        }
        return $itemSortable;
    }

    protected static function getListMailTurn()
    {
        return Db::getInstance()->executeS('
                SELECT pk.type, pk.data_added, pk.data_updated,pk.data_send, pk.id_product, pk.id_df_customer,
                pk.send, pk.status, pk.id
                FROM `' . _DB_PREFIX_ . 'df_mail_pack` AS pk
                INNER JOIN `' . _DB_PREFIX_ . 'df_product` AS fp
                ON pk.id_df_customer = fp.id_df_customer
                    AND pk.id_product = fp.id_product
                WHERE pk.status < 3');
    }

    protected function validProductSend($id_discountfollower, $followListUser, $inf)
    {
        if (isset($followListUser['id_product']) && !empty($followListUser['id_product'])
            && isset($followListUser['id_df_customer']) && !empty($followListUser['id_df_customer'])
            && isset($followListUser['type']) && !empty($followListUser['type'] && !empty($followListUser['id']))
        ) {
            $RowFl = Db::getInstance()->getRow('
                SELECT * FROM `' . _DB_PREFIX_ . 'df_product`
                    WHERE id_product = ' . (int)$followListUser['id_product'] . '
                        AND `id_df_customer` = ' . (int)$id_discountfollower . '
            ');

            switch ($followListUser['type']) {
                case 'change_price':
                    if ($inf['price'] != $RowFl['price'] && $inf['price'] < $RowFl['price']) {
                        if (Configuration::get('DISCOUNTFOLLOWER_WATCH_PRICE')) {
                            return true;
                        }
                    }
                    return false;

                    break;
                case 'promo':
                    if (Configuration::get('DISCOUNTFOLLOWER_WATCH_PROMO') && isset($inf['specific_price'])
                        && !empty($inf['specific_price'])
                    ) {
                        $specific_price = Tools::jsonDecode($RowFl['specific_price']);
                        if ($specific_price && count($specific_price) > 0) {
                            $array_watch = array('id_specific_price',
                                'id_specific_price_rule', 'id_cart',
                                'id_product', 'id_shop', 'id_shop_group',
                                'id_currency', 'id_country', 'id_customer',
                                'id_product_attribute', 'price', 'from_quantity',
                                'id_group', 'price', 'from_quantity', 'reduction',
                                'reduction_tax', 'reduction_type', 'from', 'to');
                            foreach ($specific_price as $key => $item) {
                                if (in_array($key, $array_watch) && (!isset($inf['specific_price'][$key]) || $inf['specific_price'][$key] != $item)) {
                                    return true;
                                }
                            }
                        } elseif (!isset($specific_price) && empty($specific_price) && isset($inf['specific_price']) && !empty($inf['specific_price'])) {
                            return true;
                        }
                        return false;
                    }

                    break;
                case 'lower_quantity':
                    $minimumQty = Configuration::get('DISCOUNTFOLLOWER_LIST_SEND_QTY_DAYS');
                    if (Configuration::get('DISCOUNTFOLLOWER_WATCH_QUANTITY') && $RowFl['quantity'] > 0
                        && isset($inf['quantity']) && is_numeric($inf['quantity']) && $inf['quantity'] > 0
                        && $inf['quantity'] <= $minimumQty && $minimumQty >= 0
                    ) {
                        return true;
                    }
                    return false;

                    break;
                case 'quantity_null':
                    if (Configuration::get('DISCOUNTFOLLOWER_WATCH_QUANTITY') && $RowFl['quantity'] == 0
                        && isset($inf['quantity']) && is_numeric($inf['quantity']) && $inf['quantity'] > 0
                    ) {
                        return true;
                    }
                    return false;

                    break;
                case 'additional_products':
                    if (Configuration::get('DISCOUNTFOLLOWER_WATCH_RELATED') && count($inf['accessories']) > 0) {
                        $accessories = Tools::jsonDecode($RowFl['accessories']);
                        $accIdCustomerList = $accIdSystemLists = array();
                        if ($accessories && count($accessories) > 0) {
                            foreach ($accessories as $accessory) {
                                $accIdCustomerList[] = (int)$accessory->id;
                            }
                        }
                        foreach ($inf['accessories'] as $accessory) {
                            if (!in_array($accessory['id'], $accIdCustomerList)) {
                                $accIdSystemLists[] = (int)$accessory['id'];
                            }
                        }
                        if (count($accIdSystemLists) > 0) {
                            return true;
                        }
                        return false;
                    }

                    break;
            }
        } else {
            return false;
        }
    }

    public function getTypeImageSize($type = '')
    {
        $imageTypeId = '';
        switch ($type) {
            case 'change_price':
                $imageTypeId = (int)Configuration::get('DISCOUNTFOLLOWER_PRICE_RELATED_IMAGE');
                break;
            case 'promo':
                $imageTypeId = (int)Configuration::get('DISCOUNTFOLLOWER_PROMO_RELATED_IMAGE');
                break;
            case 'lower_quantity':
            case 'quantity_null':
                $imageTypeId = (int)Configuration::get('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_IMAGE');
                break;
            case 'additional_products':
                $imageTypeId = (int)Configuration::get('DISCOUNTFOLLOWER_RELATED_RELATED_IMAGE');
                break;
        }
        if (empty($imageTypeId) || !Validate::isInt($imageTypeId)) {
            return '';
        }
        $imType = new ImageType($imageTypeId);
        $typeName = (isset($imType->name) && !empty($imType->name)) ? $imType->name : '';
        unset($imType);
        return $typeName;
    }

    protected function getChangeValues($type, $data)
    {
        switch ($type) {
            case 'promo':
            case 'change_price':
                return $data['public_price'];
                break;
            case 'lower_quantity':
            case 'quantity_null':
                return $data['quantity'];
                break;
            case 'additional_products':
                if (is_array($data['accessories']) && count($data['accessories']) > 0) {
                    $ret = array();
                    foreach ($data['accessories'] as $accessory) {
                        (isset($accessory['id']) && !empty($accessory['id'])) ? $ret[] = (int)$accessory['id'] : 0;
                    }
                    return (count($ret) > 0) ? Tools::jsonEncode($ret) : '';
                }
                return '';
                break;
        }
        return (isset($data) && is_array($data) && !empty($data)) ? Tools::jsonEncode($data) : '';
    }

    protected function getEmailTemplateContent($template_name, $mail_type, $var, $uniqKey = '')
    {
        $email_configuration = Configuration::get('PS_MAIL_TYPE');
        if ($email_configuration != $mail_type && $email_configuration != Mail::TYPE_BOTH) {
            return '';
        }
        $theme_template_path = _PS_MODULE_DIR_ . 'discountfollower/views/templates/hook/' . $template_name;
        $context = Context::getContext();
        $context->smarty->assign(
            array('list' => $var, 'uniqKey' => $uniqKey)
        );
        return $context->smarty->fetch($theme_template_path);
    }

    public function getRelatedType($type = 0)
    {
        switch (Configuration::get($type, 0)) {
            case 0:
                return false;
            case 1:
                return 'accessories';
            case 2:
                return 'manufacturer';
            case 3:
                return 'default_category';
        }

        return false;
    }

    public function packingProductList($products, $id_lang, $types, $uniq_mailsend_key)
    {
        if (!is_array($products) || count($products) == 0) {
            return array();
        }

        $products_list = array();

        foreach ($products as $id_product) {
            $prod_obj = new Product((int)$id_product, true, $id_lang);
            $protocol = Tools::getProtocol(Tools::usingSecureMode());
            $id_image = $prod_obj->getCover((int)$id_product);
            $link = new Link;
            $image_link = '';
            if (isset($id_image['id_image']) && is_numeric($id_image['id_image']) && $id_image['id_image'] > 0
                && isset($prod_obj->link_rewrite)
            ) {
                $imageType = $this->getTypeImageSize($types);
                $image_link = $link->getImageLink($prod_obj->link_rewrite, (int)$id_image['id_image'], ((!empty($imageType)) ? $imageType : ''));
            }
            unset($link);

            $https_link = (Tools::usingSecureMode() && Configuration::get('PS_SSL_ENABLED')) ? 'https://' : 'http://';
            $link = new Link($https_link, $https_link);
            $url = $link->getProductLink(
                $prod_obj,
                $prod_obj->link_rewrite,
                Category::getLinkRewrite($prod_obj->id_category_default, $id_lang),
                null,
                $id_lang,
                null,
                Product::getDefaultAttribute($prod_obj->id),
                false,
                false,
                true,
                array('stat' => $uniq_mailsend_key)
            );

            $presentedDiscountProduct = array();
            if (isset($prod_obj->specificPrice) && isset($prod_obj->specificPrice['reduction_type'])) {
                $presentedDiscountProduct['discount_type'] = $prod_obj->specificPrice['reduction_type'];
                // TODO: format according to locale preferences
                $presentedDiscountProduct['discount_percentage'] = -round(100 * $prod_obj->specificPrice['reduction']).'%';
                $presentedDiscountProduct['discount_percentage_absolute'] = round(100 * $prod_obj->specificPrice['reduction']).'%';
            }

            $products_list[(int)$id_product] = array(
                'name' => $prod_obj->name,
                'description_short' => Tools::getDescriptionClean($prod_obj->description_short),
                'quantity' => $prod_obj->quantity,
                'link' => $url,
                'image' => $protocol . $image_link,
                'price' => Tools::displayPrice($prod_obj->getPublicPrice()),
                'price_without_discount' => Tools::displayPrice($prod_obj->getPublicPrice(true, null, 6, null, false, false)),
                'discount_this' => Product::isDiscounted((int)$prod_obj->id, 1),
                'presentedDiscountProduct' => $presentedDiscountProduct
            );
        }

        return $products_list;
    }

    public static function getCategoriesProduct($id_category, $qty, $ids)
    {
        $ret = array();
        if (!Validate::isInt($id_category)
            || !Validate::isInt($qty)
            || !is_array($ids)
            || !(count($ids) > 0)
        ) {
            return false;
        }

        $row = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS('
            SELECT `id_product` FROM `' . _DB_PREFIX_ . 'product`
            WHERE `active` = 1 AND `id_category_default` = ' . $id_category . '
            AND  id_product NOT IN(' . implode(',', array_map('intval', $ids)) . ') LIMIT ' . $qty);

        if ($row) {
            foreach ($row as $val) {
                $ret[] = $val['id_product'];
            }
        }

        return $ret;
    }

    protected function getTextMail($type, $lang)
    {
        switch ($type) {
            case 'change_price':
                return Configuration::get('DISCOUNTFOLLOWER_WATCH_TEXT_PRICE', $lang);
                break;
            case 'promo':
                return Configuration::get('DISCOUNTFOLLOWER_WATCH_TEXT_PROMO', $lang);
                break;
            case 'lower_quantity':
                return Configuration::get('DISCOUNTFOLLOWER_WATCH_TEXT_CHANGE_QUANTITY', $lang);
                break;
            case 'quantity_null':
                return Configuration::get('DISCOUNTFOLLOWER_WATCH_TEXT_CHANGE_IN_STOCK_QUANTITY', $lang);
                break;
            case 'additional_products':
                return Configuration::get('DISCOUNTFOLLOWER_WATCH_TEXT_RELATED', $lang);
                break;
        }
    }

    public static function setDisabledUnsubscribeCustomer($token)
    {
        return Db::getInstance()->update('df_customer', array('newsletter' => '0', 'request_token' => ''), '`request_token` = "' . pSQL($token) . '"');
    }

    public static function removeFollowCustomer($id_df_customer)
    {
        if (isset($id_df_customer) && is_numeric($id_df_customer) && $id_df_customer > 0) {
            return Db::getInstance()->delete('df_product', 'id_df_customer= ' . (int)$id_df_customer) &&
                Db::getInstance()->delete('df_customer', 'id_df_customer= ' . (int)$id_df_customer) &&
                Db::getInstance()->delete('df_customer_shop', 'id_df_customer= ' . (int)$id_df_customer) &&
                Db::getInstance()->delete('df_mail_pack', 'id_df_customer= ' . (int)$id_df_customer);
        }
        return false;
    }
}

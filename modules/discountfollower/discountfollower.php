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

if (!defined('_PS_VERSION_')) {
    exit;
}

use PrestaShop\PrestaShop\Core\Module\WidgetInterface;

require_once _PS_MODULE_DIR_ . 'discountfollower/classes/FollowProductList.php';
require_once _PS_MODULE_DIR_ . 'discountfollower/classes/FollowList.php';
require_once _PS_MODULE_DIR_ . 'discountfollower/classes/FollowerStatistic.php';

class DiscountFollower extends Module implements WidgetInterface
{
    private $templates;
    private $_notification = array();
    protected $_mail_errors = array();
    protected static $lang_fields = array(
        'DISCOUNTFOLLOWER_WATCH_TEXT_CHANGE_QUANTITY',
        'DISCOUNTFOLLOWER_WATCH_TEXT_CHANGE_IN_STOCK_QUANTITY',
        'DISCOUNTFOLLOWER_WATCH_TEXT_PROMO',
        'DISCOUNTFOLLOWER_WATCH_TEXT_RELATED',
        'DISCOUNTFOLLOWER_WATCH_TEXT_COMMENTS',
        'DISCOUNTFOLLOWER_WATCH_TEXT_PRICE',
    );

    public function __construct()
    {
        $this->name = 'discountfollower';
        $this->author = 'TerranetPro';
        $this->tab = 'front_office_features';
        $this->version = '3.1.0';
        $this->need_instance = 0;

        $this->bootstrap = true;
        parent::__construct();

        $this->displayName = $this->trans('Follower - Intelligent Products Wishlist and Notifier', array(), 'Modules.Discountfollower.Admin');
        $this->description = $this->trans('Be aware of your clients wishes and offer them a better discount!', array(), 'Modules.Discountfollower.Admin');

        $this->ps_versions_compliancy = array('min' => '1.7.0.0', 'max' => _PS_VERSION_);
        $this->module_key = '699cc3bd4d59657c73971d825c3884b7';
        
        $this->templates = array(
            'menu' => 'infos.tpl',
            'button' => 'button.tpl',
        );
    }

    public function install()
    {
        $this->installMail();

        return parent::install() &&
            $this->installDB() &&
            $this->registerHook('displayHeader') &&
            $this->registerHook('displayNav2') &&
            $this->registerHook('displayProductAdditionalInfo') &&
            $this->registerHook('displayBackOfficeHeader') &&
            $this->registerHook('actionCustomerAccountAdd') &&
            $this->registerHook('authentication')
            && Configuration::updateValue('DISCOUNTFOLLOWER_AUTH_REQUIRED', true)
            && Configuration::updateValue('DISCOUNTFOLLOWER_COUNT_ITEMS', 3)
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_QUANTITY', 1)
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_PROMO', 1)
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_RELATED', 1)
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_PRICE', 1)
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS', '0')
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS2', '7')
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS', '0')
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS2', '7')
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS', '0')
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS2', '7')
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS', '0')
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS2', '7')
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_COPY', 0)
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_MAIL', '')
            && Configuration::updateValue('DISCOUNTFOLLOWER_MAIL_SEND', 1)
            && Configuration::updateValue('DISCOUNTFOLLOWER_LIST_SEND_QTY_DAYS', 5)
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_COMMENTS', 1)
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_COMMENTS_DAYS', '0')
            && Configuration::updateValue('DISCOUNTFOLLOWER_WATCH_COMMENTS_DAYS2', '7')
            && Configuration::updateValue('DISCOUNTFOLLOWER_PRICE_RELATED_ACTIVE', 0)
            && Configuration::updateValue('DISCOUNTFOLLOWER_PRICE_RELATED_QUANTITY', 6)
            && Configuration::updateValue('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_ACTIVE', 0)
            && Configuration::updateValue('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_QUANTITY', 6)
            && Configuration::updateValue('DISCOUNTFOLLOWER_PROMO_RELATED_ACTIVE', 0)
            && Configuration::updateValue('DISCOUNTFOLLOWER_PROMO_RELATED_QUANTITY', 6)
            && Configuration::updateValue('DISCOUNTFOLLOWER_RELATED_RELATED_ACTIVE', 0)
            && Configuration::updateValue('DISCOUNTFOLLOWER_RELATED_RELATED_QUANTITY', 6)
            && Configuration::updateValue('DISCOUNTFOLLOWER_PRICE_RELATED_IMAGE', 0)
            && Configuration::updateValue('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_IMAGE', 0)
            && Configuration::updateValue('DISCOUNTFOLLOWER_PROMO_RELATED_IMAGE', 0)
            && Configuration::updateValue('DISCOUNTFOLLOWER_RELATED_RELATED_IMAGE', 0);
    }

    protected function installMail()
    {
        $mailCopyFiles = array('followrequest.html',
            'followrequest.txt', 'index.php',
            'follower_products.txt', 'follower_products.html',
            'follower_email_verification.html', 'follower_email_verification.txt');

        foreach ($mailCopyFiles as $mailCopyFile) {
            $this->copyMailLangs($mailCopyFile);
        }

        return true;
    }

    protected function copyMailLangs($fileName = '')
    {
        $languages = Language::getLanguages(false);
        foreach ($languages as $language) {
            if ($language["iso_code"] == 'en') {
                continue;
            }

            if (!file_exists(_PS_MODULE_DIR_ . $this->name . '/mails/' . $language["iso_code"])) {
                mkdir(_PS_MODULE_DIR_ . $this->name . '/mails/' . $language["iso_code"], 0777, true);
            }

            if (!file_exists(_PS_MODULE_DIR_ . $this->name . '/mails/' . $language["iso_code"] . '/' . $fileName)
                && file_exists(_PS_MODULE_DIR_ . $this->name . '/mails/en/' . $fileName)
            ) {
                if (!copy(
                    _PS_MODULE_DIR_ . $this->name . '/mails/en/' . $fileName,
                    _PS_MODULE_DIR_ . $this->name . '/mails/' . $language["iso_code"] . '/' . $fileName
                )
                ) {
                    return false;
                }
            }
        }
        return true;
    }

    public function uninstall()
    {
        return parent::uninstall() && $this->uninstallDB();
    }

    public function installDB()
    {
        $return = true;
        $return &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'df_customer` (
                `id_df_customer` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `id_shop` int(10) unsigned DEFAULT NULL,
                `id_customer` int(10) unsigned DEFAULT NULL,
                `email` varchar(255) NOT NULL,
                `msend_data` DATETIME NULL,
                `msend_active` TINYINT(1) NOT NULL DEFAULT \'0\',
                `request_token` varchar(128) DEFAULT NULL,
                `temp_id_product` int(10) UNSIGNED,
                `newsletter` TINYINT(1) NOT NULL DEFAULT \'1\',
                `id_lang` int(10) unsigned DEFAULT NULL,
                `date_add` DATETIME NULL,
                `date_upd` DATETIME NULL,
                PRIMARY KEY (`id_df_customer`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;');

        $return &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'df_product` (
                `id_df_product` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `id_df_customer` int(10) unsigned DEFAULT NULL,
                `id_product` int(10) unsigned DEFAULT NULL,
                `quantity` int(10) unsigned DEFAULT NULL,
                `price`  DECIMAL(20,10),
                `price_without_reduct`  DECIMAL(20,10),
                `base_price`  DECIMAL(20,10),
                `id_currency` int(10) unsigned DEFAULT NULL,
                `accessories` TEXT,
                `specific_price` TEXT,
                `date_add` DATETIME NULL,
                `date_upd` DATETIME NULL,
                PRIMARY KEY (`id_df_product`),
                INDEX (`id_df_customer`, `id_df_product`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;');

        $return &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'df_customer_shop` (
                `id_df_customer` INT UNSIGNED NOT NULL AUTO_INCREMENT,
                `id_shop` int(10) unsigned DEFAULT NULL,
                `newsletter` TINYINT(1) NOT NULL DEFAULT \'1\',
                PRIMARY KEY (`id_df_customer`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=utf8;');

        $return &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'df_mail_pack` (
                  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
                  `type` varchar(100) DEFAULT NULL,
                  `id_df_customer` int(11) DEFAULT NULL,
                  `data_added` datetime DEFAULT NULL,
                  `data_updated` datetime DEFAULT NULL,
                  `data_send` datetime DEFAULT NULL,
                  `send` tinyint(4) DEFAULT \'0\',
                  `status` tinyint(4) DEFAULT \'0\',
                  `id_product` int(11) DEFAULT NULL,
                  `type_values`  TEXT NOT NULL,
                  PRIMARY KEY (`id`)
                ) ENGINE=' . _MYSQL_ENGINE_ . ' AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;');

        $return &= Db::getInstance()->execute('CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . 'follower_statistic` (
              `id_follower_statistic` int(11) unsigned NOT NULL AUTO_INCREMENT,
              `from_mail` varchar(250) DEFAULT NULL,
              `uniq_key` varchar(200) DEFAULT NULL,
              `type_send` varchar(50) DEFAULT NULL,
              `id_product` int(11) DEFAULT NULL,
              `viewed` tinyint(4) DEFAULT \'0\',
              `viewed_data` DATETIME NOT NULL,
              `date_add` DATETIME NOT NULL,
              PRIMARY KEY (`id_follower_statistic`)
            ) ENGINE=' . _MYSQL_ENGINE_ . ' AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;');

        return $return;
    }

    public function uninstallDB($drop_table = true)
    {
        $ret = true;
        if ($drop_table) {
            $ret &= Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'df_customer`')
                && Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'df_product`')
                && Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'df_mail_pack`')
                && Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'follower_statistic`')
                && Db::getInstance()->execute('DROP TABLE IF EXISTS `' . _DB_PREFIX_ . 'df_customer_shop`');
        }

        return ($ret && Configuration::deleteByName('DISCOUNTFOLLOWER_AUTH_REQUIRED')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_COUNT_ITEMS')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_QUANTITY')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_PROMO')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_RELATED')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_PRICE')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_COPY')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_MAIL')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_MAIL_SEND')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS2')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS2')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS2')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS2')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_LIST_SEND_QTY_DAYS')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_COMMENTS')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_COMMENTS_DAYS')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_WATCH_COMMENTS_DAYS2')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_PRICE_RELATED_ACTIVE')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_PRICE_RELATED_QUANTITY')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_ACTIVE')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_QUANTITY')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_PROMO_RELATED_ACTIVE')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_PROMO_RELATED_QUANTITY')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_RELATED_RELATED_ACTIVE')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_RELATED_RELATED_QUANTITY')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_PRICE_RELATED_IMAGE')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_IMAGE')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_PROMO_RELATED_IMAGE')
                && Configuration::deleteByName('DISCOUNTFOLLOWER_RELATED_RELATED_IMAGE'));
    }

    public function getTabs()
    {
        return array(
            array(
                'class_name' => 'AdminDiscountFollower',
                'name' => $this->trans('Discount Follower Stats', array(), 'Modules.ClearCacheButton.Admin'),
                'ParentClassName' => 'SELL',
                'visible' => true,
                'icon' => 'icon-signal'
            )
        );
    }

    public function getContent()
    {
        if (Tools::isSubmit('submitDiscountfollowerModule')) {
            $this->postConfigureProcess();
        }

        if (Tools::isSubmit('submitMailCFDiscountfollowerModule')) {
            $this->postMailConfigureProcess();
        }

        if (Tools::isSubmit('save_general_confiduration')) {
            $this->processSaveDefaultSettings();
        }

        foreach ($this->templates as $template) {
            $this->_clearCache($template);
        }

        $mailingControlForm = $this->getMailConfigForm();

        $this->_path = __PS_BASE_URI__ . 'modules/' . $this->name . '/';
        $module_url = Tools::getProtocol(Tools::usingSecureMode()) . $_SERVER['HTTP_HOST'] . $this->_path;
        $cron = $module_url . 'cron.php' . '?&token=' . Tools::substr(Tools::encrypt('discountfollower/index'), 0, 10);
        $this->context->smarty->assign('cron_all_url', $cron . '&all');
        $output = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/cron.tpl');

        return $output . join(' ', $this->_notification) . $this->renderForm() . join(' ', $this->_mail_errors) . $this->renderMailConfigForm($mailingControlForm);
    }


    protected function renderMailConfigForm($form)
    {
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = (int)$this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitMailCFDiscountfollowerModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $form_values = $this->getMailConfigFormValues();
        $form_values_lang = $this->getConfigFieldsValues();
        $form_values = array_merge($form_values, $form_values_lang);

        $helper->tpl_vars = array(
            'fields_value' => $form_values,
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => (int)$this->context->language->id,
        );

        return $helper->generateForm(array($form));
    }

    public function getConfigFieldsValues()
    {
        $languages = Language::getLanguages(false);
        $fields = array();

        foreach ($languages as $lang) {
            foreach (DiscountFollower::$lang_fields as $field) {
                $fields[$field][$lang['id_lang']] = Tools::getValue($field . '_' . $lang['id_lang'], Configuration::get($field, $lang['id_lang']));
            }
        }

        return $fields;
    }

    protected function getMailConfigForm()
    {
        $form = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Email notification settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enabled/Disabled sending emails'),
                        'name' => 'DISCOUNTFOLLOWER_MAIL_SEND',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                        'desc' => $this->l('Major option!'),
                    ),
                    array(
                        'type' => 'hr',
                        'name' => 'hr',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Follow the discount price'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_PRICE',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('First email'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS',
                        'options' => array(
                            'query' => $this->getOptionsDay(),
                            'id' => 'id_option',
                            'name' => 'name'
                        ),
                        'desc' => $this->l('Choose when the notification will be sent to the customer')
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Second email'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS2',
                        'options' => array(
                            'query' => $this->getOptionsDay(true),
                            'id' => 'id_option',
                            'name' => 'name'
                        ),
                        'desc' => $this->l('Choose when the notification will be sent to the customer')
                    ),
                    array(
                        'type' => 'textarea',
                        'autoload_rte' => true,
                        'class' => 'rte',
                        'lang' => true,
                        'label' => $this->l('Text of price discount notification'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_TEXT_PRICE',
                    ),
                    /* * * * * * * * * * * * */
                    array(
                        'type' => 'select',
                        'label' => $this->l('Related products'),
                        'name' => 'DISCOUNTFOLLOWER_PRICE_RELATED_ACTIVE',
                        'options' => array(
                            'query' => $this->getOptionRelatedProducts(),
                            'id' => 'ip_option',
                            'name' => 'name'
                        ),
                        'desc' => $this->l('Choose when the notification will be sent to the customer')
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Max-Quantity send products related products'),
                        'name' => 'DISCOUNTFOLLOWER_PRICE_RELATED_QUANTITY',
                        'col' => 2
                    ),
                    array(
                        'type' => 'select',
                        'tab' => 'set',
                        'label' => 'Images type',
                        'name' => 'DISCOUNTFOLLOWER_PRICE_RELATED_IMAGE',
                        'options' => array(
                            'query' => array_map(function ($param) {
                                $param['name'] = $param['name'] . ' (' . $param['width'] . 'x' . $param['height'] . ')';
                                return $param;
                            }, ImageType::getImagesTypes('products')),
                            'id' => 'id_image_type',
                            'name' => 'name'
                        )
                    ),
                    /* * * * * * * * * * * * */
                    array(
                        'type' => 'hr',
                        'name' => 'hr',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Follow the change of the quantity and availability in stock'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_QUANTITY',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('First email'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS',
                        'options' => array(
                            'query' => $this->getOptionsDay(),
                            'id' => 'id_option',
                            'name' => 'name'
                        ),
                        'desc' => $this->l('Choose when the notification will be sent to the customer')
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Second email'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS2',
                        'options' => array(
                            'query' => $this->getOptionsDay(true),
                            'id' => 'id_option',
                            'name' => 'name'
                        ),
                        'desc' => $this->l('Choose when the notification will be sent to the customer')
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Quantity of the product in stock to send notification'),
                        'name' => 'DISCOUNTFOLLOWER_LIST_SEND_QTY_DAYS',
                        'col' => 1,
                    ),
                    array(
                        'type' => 'textarea',
                        'autoload_rte' => true,
                        'class' => 'rte',
                        'lang' => true,
                        'label' => $this->l('Text of quantity notification'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_TEXT_CHANGE_QUANTITY',
                    ),
                    array(
                        'type' => 'textarea',
                        'autoload_rte' => true,
                        'class' => 'rte',
                        'lang' => true,
                        'label' => $this->l('Text of availability in stock'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_TEXT_CHANGE_IN_STOCK_QUANTITY',
                    ),
                    /* * * * * * * * * * * * */
                    array(
                        'type' => 'select',
                        'label' => $this->l('Related products'),
                        'name' => 'DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_ACTIVE',
                        'options' => array(
                            'query' => $this->getOptionRelatedProducts(),
                            'id' => 'ip_option',
                            'name' => 'name'
                        ),
                        'desc' => $this->l('Choose when the notification will be sent to the customer')
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Max-Quantity send products related products'),
                        'name' => 'DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_QUANTITY',
                        'col' => 2
                    ),
                    array(
                        'type' => 'select',
                        'tab' => 'set',
                        'label' => 'Images type',
                        'name' => 'DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_IMAGE',
                        'options' => array(
                            'query' => array_map(function ($param) {
                                $param['name'] = $param['name'] . ' (' . $param['width'] . 'x' . $param['height'] . ')';
                                return $param;
                            }, ImageType::getImagesTypes('products')),
                            'id' => 'id_image_type',
                            'name' => 'name'
                        )
                    ),
                    /* * * * * * * * * * * * */
                    array(
                        'type' => 'hr',
                        'name' => 'hr',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Follow the specific price for the product'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_PROMO',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('First email'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS',
                        'options' => array(
                            'query' => $this->getOptionsDay(),
                            'id' => 'id_option',
                            'name' => 'name'
                        )
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Second email'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS2',
                        'options' => array(
                            'query' => $this->getOptionsDay(true),
                            'id' => 'id_option',
                            'name' => 'name'
                        )
                    ),
                    array(
                        'type' => 'textarea',
                        'autoload_rte' => true,
                        'class' => 'rte',
                        'lang' => true,
                        'label' => $this->l('Text of the specific price notification'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_TEXT_PROMO',
                    ),
                    /* * * * * * * * * * * * */
                    array(
                        'type' => 'select',
                        'label' => $this->l('Related products'),
                        'name' => 'DISCOUNTFOLLOWER_PROMO_RELATED_ACTIVE',
                        'options' => array(
                            'query' => $this->getOptionRelatedProducts(),
                            'id' => 'ip_option',
                            'name' => 'name'
                        ),
                        'desc' => $this->l('Choose when the notification will be sent to the customer')
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Max-Quantity send products related products'),
                        'name' => 'DISCOUNTFOLLOWER_PROMO_RELATED_QUANTITY',
                        'col' => 2
                    ),
                    array(
                        'type' => 'select',
                        'tab' => 'set',
                        'label' => 'Images type',
                        'name' => 'DISCOUNTFOLLOWER_PROMO_RELATED_IMAGE',
                        'options' => array(
                            'query' => array_map(function ($param) {
                                $param['name'] = $param['name'] . ' (' . $param['width'] . 'x' . $param['height'] . ')';
                                return $param;
                            }, ImageType::getImagesTypes('products')),
                            'id' => 'id_image_type',
                            'name' => 'name'
                        )
                    ),
                    /* * * * * * * * * * * * */
                    array(
                        'type' => 'hr',
                        'name' => 'hr',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Follow the accessories added for the product'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_RELATED',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('First email'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS',
                        'options' => array(
                            'query' => $this->getOptionsDay(),
                            'id' => 'id_option',
                            'name' => 'name'
                        )
                    ),
                    array(
                        'type' => 'select',
                        'label' => $this->l('Second email'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS2',
                        'options' => array(
                            'query' => $this->getOptionsDay(true),
                            'id' => 'id_option',
                            'name' => 'name'
                        )
                    ),
                    array(
                        'type' => 'textarea',
                        'autoload_rte' => true,
                        'class' => 'rte',
                        'lang' => true,
                        'label' => $this->l('Text of the accessories added for the product notification'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_TEXT_RELATED',
                    ),
                    /* * * * * * * * * * * * */
                    array(
                        'type' => 'select',
                        'label' => $this->l('Related products'),
                        'name' => 'DISCOUNTFOLLOWER_RELATED_RELATED_ACTIVE',
                        'options' => array(
                            'query' => $this->getOptionRelatedProducts(),
                            'id' => 'ip_option',
                            'name' => 'name'
                        ),
                        'desc' => $this->l('Choose when the notification will be sent to the customer')
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Max-Quantity send products related products'),
                        'name' => 'DISCOUNTFOLLOWER_RELATED_RELATED_QUANTITY',
                        'col' => 2
                    ),
                    array(
                        'type' => 'select',
                        'tab' => 'set',
                        'label' => 'Images type',
                        'name' => 'DISCOUNTFOLLOWER_RELATED_RELATED_IMAGE',
                        'options' => array(
                            'query' => array_map(function ($param) {
                                $param['name'] = $param['name'] . ' (' . $param['width'] . 'x' . $param['height'] . ')';
                                return $param;
                            }, ImageType::getImagesTypes('products')),
                            'id' => 'id_image_type',
                            'name' => 'name'
                        )
                    ),
                    /* * * * * * * * * * * * */
                    array(
                        'type' => 'hr',
                        'name' => 'hr',
                    ),
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Get an Email copy'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_COPY',
                        'is_bool' => true,
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                                'label' => $this->l('Enabled'),
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                                'label' => $this->l('Disabled'),
                            ),
                        ),
                    ),
                    array(
                        'type' => 'text',
                        'label' => $this->l('Email were the copies will be sent'),
                        'name' => 'DISCOUNTFOLLOWER_WATCH_MAIL',
                        'col' => 3,
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            )
        );

        return $form;
    }

    protected function getOptionsDay($last = false)
    {
        $ret = array(
            array(
                'id_option' => '0',
                'name' => $this->l('On the 1th day')
            ),
            array(
                'id_option' => '3',
                'name' => $this->l('On the 3rd day')
            ),
            array(
                'id_option' => '7',
                'name' => $this->l('On the 7th day')
            ),
            array(
                'id_option' => '15',
                'name' => $this->l('On the 15th day')
            ),
            array(
                'id_option' => '30',
                'name' => $this->l('On the 30th day')
            )
        );

        if ($last) {
            $ret[] = array(
                'id_option' => '-1',
                'name' => $this->l('Disabled')
            );
        }

        return $ret;
    }

    public function getOptionRelatedProducts()
    {
        return array(
            array(
                'name' => 'Disable',
                'ip_option' => 0
            ),
            array(
                'name' => 'Accessories',
                'ip_option' => 1
            ),
            array(
                'name' => 'Manufacturer',
                'ip_option' => 2
            ),
            array(
                'name' => 'Default category',
                'ip_option' => 3
            )
        );
    }

    protected function getMailConfigFormValues()
    {
        return array(
            'DISCOUNTFOLLOWER_WATCH_QUANTITY' => Configuration::get('DISCOUNTFOLLOWER_WATCH_QUANTITY'),
            'DISCOUNTFOLLOWER_WATCH_PROMO' => Configuration::get('DISCOUNTFOLLOWER_WATCH_PROMO'),
            'DISCOUNTFOLLOWER_WATCH_RELATED' => Configuration::get('DISCOUNTFOLLOWER_WATCH_RELATED'),
            'DISCOUNTFOLLOWER_WATCH_PRICE' => Configuration::get('DISCOUNTFOLLOWER_WATCH_PRICE'),
            'DISCOUNTFOLLOWER_WATCH_COPY' => Configuration::get('DISCOUNTFOLLOWER_WATCH_COPY'),
            'DISCOUNTFOLLOWER_WATCH_MAIL' => Configuration::get('DISCOUNTFOLLOWER_WATCH_MAIL'),
            'DISCOUNTFOLLOWER_MAIL_SEND' => Configuration::get('DISCOUNTFOLLOWER_MAIL_SEND'),
            'DISCOUNTFOLLOWER_LIST_SEND_QTY_DAYS' => Configuration::get('DISCOUNTFOLLOWER_LIST_SEND_QTY_DAYS'),
            'DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS' => Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS'),
            'DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS' => Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS'),
            'DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS' => Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS'),
            'DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS' => Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS'),
            'DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS2' => Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_PRICE_DAYS2'),
            'DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS2' => Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_QUANTITY_DAYS2'),
            'DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS2' => Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_PROMO_DAYS2'),
            'DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS2' => Configuration::get('DISCOUNTFOLLOWER_WATCH_CHANGE_RELATED_DAYS2'),
            'DISCOUNTFOLLOWER_WATCH_COMMENTS' => Configuration::get('DISCOUNTFOLLOWER_WATCH_COMMENTS'),
            'DISCOUNTFOLLOWER_WATCH_COMMENTS_DAYS' => Configuration::get('DISCOUNTFOLLOWER_WATCH_COMMENTS_DAYS'),
            'DISCOUNTFOLLOWER_WATCH_COMMENTS_DAYS2' => Configuration::get('DISCOUNTFOLLOWER_WATCH_COMMENTS_DAYS2'),

            'DISCOUNTFOLLOWER_PRICE_RELATED_ACTIVE' => Configuration::get('DISCOUNTFOLLOWER_PRICE_RELATED_ACTIVE'),
            'DISCOUNTFOLLOWER_PRICE_RELATED_QUANTITY' => Configuration::get('DISCOUNTFOLLOWER_PRICE_RELATED_QUANTITY'),
            'DISCOUNTFOLLOWER_PRICE_RELATED_IMAGE' => Configuration::get('DISCOUNTFOLLOWER_PRICE_RELATED_IMAGE'),

            'DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_ACTIVE' => Configuration::get('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_ACTIVE'),
            'DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_QUANTITY' => Configuration::get('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_QUANTITY'),
            'DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_IMAGE' => Configuration::get('DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_IMAGE'),

            'DISCOUNTFOLLOWER_PROMO_RELATED_ACTIVE' => Configuration::get('DISCOUNTFOLLOWER_PROMO_RELATED_ACTIVE'),
            'DISCOUNTFOLLOWER_PROMO_RELATED_QUANTITY' => Configuration::get('DISCOUNTFOLLOWER_PROMO_RELATED_QUANTITY'),
            'DISCOUNTFOLLOWER_PROMO_RELATED_IMAGE' => Configuration::get('DISCOUNTFOLLOWER_PROMO_RELATED_IMAGE'),

            'DISCOUNTFOLLOWER_RELATED_RELATED_ACTIVE' => Configuration::get('DISCOUNTFOLLOWER_RELATED_RELATED_ACTIVE'),
            'DISCOUNTFOLLOWER_RELATED_RELATED_QUANTITY' => Configuration::get('DISCOUNTFOLLOWER_RELATED_RELATED_QUANTITY'),
            'DISCOUNTFOLLOWER_RELATED_RELATED_IMAGE' => Configuration::get('DISCOUNTFOLLOWER_RELATED_RELATED_IMAGE')
        );
    }

    protected function postMailConfigureProcess()
    {
        $form_values = $this->getMailConfigFormValues();
        $integer_values = array(
            'DISCOUNTFOLLOWER_LIST_SEND_QTY_DAYS' => 'Quantity of the product in stock to send notification',
            'DISCOUNTFOLLOWER_PRICE_RELATED_QUANTITY' => 'Max-Quantity send products related products from "Follow the discount price"',
            'DISCOUNTFOLLOWER_CHANGE_IN_STOCK_RELATED_QUANTITY' => 'Max-Quantity send products related products from "Change of the quantity and availability in stock"',
            'DISCOUNTFOLLOWER_PROMO_RELATED_QUANTITY' => 'Max-Quantity send products related products from "Specific price"',
            'DISCOUNTFOLLOWER_RELATED_RELATED_QUANTITY' => 'Max-Quantity send products related products from "Accessories added"'
        );
        foreach (array_keys($form_values) as $key) {
            $key_temp = Tools::getValue($key);
            if ($key == 'DISCOUNTFOLLOWER_WATCH_MAIL') {
                if ($key_temp && filter_var($key_temp, FILTER_VALIDATE_EMAIL) || empty($key_temp)) {
                    Configuration::updateValue($key, $key_temp);
                } else {
                    $this->_mail_errors[] = sprintf($this->displayError('Email "%s" is incorrect!'), $key_temp);
                }
            } else {
                if (isset($integer_values[$key]) && !empty($key_temp)) {
                    if (!(is_numeric($key_temp) && preg_match("#^[0-9]+$#", $key_temp))) {
                        $this->_notification[] = $this->displayError(sprintf($this->l('You must enter a numerical value! (in the field "%s")'), $integer_values[$key]));
                    } else {
                        Configuration::updateValue($key, $key_temp);
                    }
                } else {
                    Configuration::updateValue($key, $key_temp);
                }
            }
        }

        $languages = Language::getLanguages(false);
        $values = array();
        foreach ($languages as $lang) {
            foreach (DiscountFollower::$lang_fields as $field) {
                $values[$field][(int)$lang['id_lang']] = Tools::getValue($field . '_' . (int)$lang['id_lang']);
            }
        }

        foreach (DiscountFollower::$lang_fields as $field) {
            Configuration::updateValue($field, $values[$field], true);
        }

        $this->_notification[] = $this->displayConfirmation($this->l('Settings updated'));
    }

    protected function postConfigureProcess()
    {
        $form_values = $this->getConfigFormValues();
        $integer_values = array('DISCOUNTFOLLOWER_COUNT_ITEMS');
        foreach (array_keys($form_values) as $key) {
            if (in_array($key, $integer_values)) {
                if (!(is_numeric(Tools::getValue($key)) && preg_match("#^[0-9]+$#", Tools::getValue($key)))) {
                    $this->_notification[] = $this->displayError($this->l('You must enter a numerical value! (in the field "Number of the products")'));
                } else {
                    Configuration::updateValue($key, Tools::getValue($key));
                }
            } else {
                Configuration::updateValue($key, Tools::getValue($key));
            }
        }

        $this->_notification[] = $this->displayConfirmation($this->l('Settings updated'));
    }

    protected function renderForm()
    {
        $default_lang = (int)Configuration::get('PS_LANG_DEFAULT');

        $fields_form = array(
            'tinymce' => true,
            'legend' => array(
                'title' => $this->trans('Settings for the users', array(), 'Modules.Customtext.Admin'),
            ),
            'input' => array(
                array(
                    'type' => 'switch_js',
                    'label' => $this->l('Use by authorized users only'),
                    'name' => 'DISCOUNTFOLLOWER_AUTH_REQUIRED',
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => true,
                            'label' => $this->l('Enabled'),
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => false,
                            'label' => $this->l('Disabled'),
                        ),
                    ),
                    'js' => array(
                        'change' => 'followerManagementActivationAuthorization()',
                    )
                ),
                array(
                    'type' => 'switch',
                    'label' => $this->l('Confirm by email for unauthorized users'),
                    'name' => 'DISCOUNTFOLLOWER_MAIL_REQUIRED',
                    'is_bool' => true,
                    'values' => array(
                        array(
                            'id' => 'active_on',
                            'value' => true,
                            'label' => $this->l('Enabled'),
                        ),
                        array(
                            'id' => 'active_off',
                            'value' => false,
                            'label' => $this->l('Disabled'),
                        ),
                    ),
                ),
                array(
                    'type' => 'text',
                    'label' => $this->l('Number of the products'),
                    'name' => 'DISCOUNTFOLLOWER_COUNT_ITEMS',
                    'col' => 3,
                    'desc' => $this->l('Number of the products displayed in the front office'),
                ),
            ),
            'submit' => array(
                'title' => $this->trans('Save', array(), 'Admin.Actions'),
            ),
            'buttons' => array(
                array(
                    'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules'),
                    'title' => $this->trans('Back to list', array(), 'Admin.Actions'),
                    'icon' => 'process-icon-back'
                )
            )
        );

        $helper = new HelperForm();
        $helper->module = $this;
        //$helper->name_controller = 'ps_customtext';
        $helper->identifier = $this->identifier;
        $helper->token = Tools::getAdminTokenLite('AdminModules');
        foreach (Language::getLanguages(false) as $lang) {
            $helper->languages[] = array(
                'id_lang' => $lang['id_lang'],
                'iso_code' => $lang['iso_code'],
                'name' => $lang['name'],
                'is_default' => ($default_lang == $lang['id_lang'] ? 1 : 0)
            );
        }

        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name;
        $helper->default_form_language = $default_lang;
        $helper->allow_employee_form_lang = $default_lang;
        $helper->toolbar_scroll = true;
        $helper->title = $this->displayName;
        $helper->submit_action = 'save_general_confiduration';

        $helper->fields_value = $this->getConfigFormValues();

        return $helper->generateForm(array(array('form' => $fields_form)));
    }

    protected function getConfigFormValues()
    {
        return array(
            'DISCOUNTFOLLOWER_AUTH_REQUIRED' => Configuration::get('DISCOUNTFOLLOWER_AUTH_REQUIRED'),
            'DISCOUNTFOLLOWER_MAIL_REQUIRED' => Configuration::get('DISCOUNTFOLLOWER_MAIL_REQUIRED'),
            'DISCOUNTFOLLOWER_COUNT_ITEMS' => Configuration::get('DISCOUNTFOLLOWER_COUNT_ITEMS'),
        );
    }

    public function getGlobalConfiguration()
    {
        return $this->getConfigFormValues();
    }

    protected function processSaveDefaultSettings()
    {
        $form_values = $this->getConfigFormValues();
        $integer_values = array('DISCOUNTFOLLOWER_COUNT_ITEMS');
        foreach (array_keys($form_values) as $key) {
            if (in_array($key, $integer_values)) {
                if (!(is_numeric(Tools::getValue($key)) && preg_match("#^[0-9]+$#", Tools::getValue($key)))) {
                    $this->_notification[] = $this->displayError($this->l('You must enter a numerical value! (in the field "Number of the products")'));
                } else {
                    Configuration::updateValue($key, Tools::getValue($key));
                }
            } else {
                Configuration::updateValue($key, Tools::getValue($key));
            }
        }

        $this->_notification[] = $this->displayConfirmation($this->l('Settings updated'));
    }

    public function getFormValues()
    {
        $fields_value = array();
        $id_info = 1;

        foreach (Language::getLanguages(false) as $lang) {
            //    $info = new CustomText((int)$id_info);
            $fields_value['text'][(int)$lang['id_lang']] = 'test';
        }

        $fields_value['id_info'] = $id_info;

        return $fields_value;
    }

    public function renderWidget($hookName = null, array $configuration = array())
    {
        if ($hookName == null && isset($configuration['hook'])) {
            $hookName = $configuration['hook'];
        }
        $tpl_uri = 'module:discountfollower/views/templates/hook/';
        if (preg_match('/^displayNav\d*$/', $hookName)) {
            $template_file = $tpl_uri . $this->templates['menu'];
        } else {
            $template_file = $tpl_uri . $this->templates['button'];
        }
        $this->smarty->assign($this->getWidgetVariables($hookName, $configuration));

        return $this->fetch($template_file);
    }

    public function hookDisplayHeader($params)
    {
        $this->context->controller->addJqueryPlugin(array('fancybox'));
        $this->context->controller->registerStylesheet('modules-discountfollower', 'modules/' . $this->name . '/views/css/front.css', array('media' => 'all', 'priority' => 150));
        $this->context->controller->registerJavascript('modules-discountfollower', 'modules/' . $this->name . '/views/js/front.js', array('position' => 'bottom', 'priority' => 150));

        $page_name = Dispatcher::getInstance()->getController();
        $id_product = (int)Tools::getValue('id_product');
        if ($page_name == 'product' && Tools::isSubmit('stat') && Tools::getValue('stat') && Validate::isInt($id_product) && $id_product > 0) {
            $id_static = FollowerStatistic::getStaticKey(Tools::getValue('stat'));
            if (isset($id_static) && Validate::isInt($id_static) && $id_static > 0) {
                $stat = new FollowerStatistic($id_static);
                if (Validate::isLoadedObject($stat) && empty($stat->id_product)) {
                    $stat->viewed = 1;
                    $stat->id_product = (int)$id_product;
                    $stat->viewed_data = date('Y-m-d H:i:s');
                    $stat->update();
                } elseif (($stat->viewed == 1 && $stat->id_product != (int)$id_product) && !(FollowerStatistic::getStaticKey(Tools::getValue('stat'), (int)$id_product))) {
                    unset($stat->id);
                    $stat->id_product = (int)$id_product;
                    $stat->viewed_data = date('Y-m-d H:i:s');
                    $stat->add();
                }
            }
        }
    }

    public function hookDisplayBackOfficeHeader()
    {
        $this->context->controller->addJS($this->_path . '/view/js/back.js', 'all');
    }

    public function getWidgetVariables($hookName = null, array $configuration = array())
    {
        $data = array();
        if (preg_match('/^displayNav\d*$/', $hookName)) {
            $follow_list_url = Context::getContext()->link->getModuleLink('discountfollower', 'followlist', array());
            $data = array('follow_list_url' => $follow_list_url);
        } elseif (Tools::isSubmit('id_product')) {
            $id_product = Tools::getValue('id_product');
            $dfollower_url = Context::getContext()->link->getModuleLink('discountfollower', 'ajax', array());
            $follow_tracked = FollowList::stVerificationExistProduct($id_product);
            $data = array(
                'id_product' => $id_product,
                'dfollower_url' => $dfollower_url,
                'followed' => $follow_tracked
            );
        }

        return $data;
    }

    /**
     * Ends the registration process to the newsletter.
     *
     * @param string $token
     *
     * @return string
     */
    public function confirmEmail($token)
    {
        $activated = false;

        if ($email = FollowList::getFollowerEmailByToken($token)) {
            $activated = FollowList::activateGuestFollower($email);
        }

        if (!$activated) {
            return $this->trans('This email is already registered and/or invalid.', array(), 'Modules.Discountfollower.Shop');
        }
        $this->context->cookie->follow_message = $this->trans('Thank you for subscribing to our follower.', array(), 'Modules.Discountfollower.Shop');
        $follow_list_url = Context::getContext()->link->getModuleLink('discountfollower', 'followlist', array());
        Tools::redirect($follow_list_url);
    }

    public function hookActionCustomerAccountAdd($params)
    {
        $customer_email = $params['newCustomer']->email;
        if ($DFCustomer = FollowList::getIfExistCustomer($customer_email)) {
            FollowList::updateCustomerProfile($customer_email);
        }

        $context = Context::getContext();
        $context->cookie->df_vefirication_email = '';
        $context->cookie->email = '';

        return '';
    }

    public function hookAuthentication($params)
    {
        $customer_id = (int)$params['customer']->id;
        if (isset($customer_id) && is_numeric($customer_id) && $customer_id > 0) {
            $customer_email = $params['customer']->email;
            if ($DFCustomer = FollowList::getIfExistCustomer($customer_email)) {
                FollowList::updateCustomerProfile($customer_email);
            }

            $context = Context::getContext();
            $context->cookie->df_vefirication_email = '';
            $context->cookie->email = '';

            return '';
        }
    }
}

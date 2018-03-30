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

use PrestaShop\PrestaShop\Core\Addon\Module\ModuleManagerBuilder;

require_once('ajax/Services/Favorite.php');
require_once('ajax/Services/FavoriteStatistic.php');

if (!defined('_PS_VERSION_')) {
    exit;
}

class AddToFavoritesMyWishList extends Module
{
    protected $config_form = false;
    protected $_errors;

    public function __construct()
    {
        $this->name = 'addtofavoritesmywishlist';
        $this->tab = 'front_office_features';
        $this->version = '1.0.0';
        $this->author = 'TerranetPro';
        $this->need_instance = 0;
        $this->bootstrap = true;
        $this->module_key = '02e8b5fbbaa3f9236efbb615ffe25498';
        parent::__construct();
        $this->displayName = $this->l('Add to favorites /My Wishlist (from Basket/Cart UpSale)');
        $this->description = $this->l('A bookmark for products');
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);

        $this->_errors = array();
    }

    public function install()
    {
        Configuration::updateValue('FAVORITES_NAME', 'favorites');
        Configuration::updateValue('FAVORITES_NO_ITEMS_TITLE', 'You have not placed any favorites');
        Configuration::updateValue('FAVORITES_NO_ITEMS_DESCRIPTION', 'Here are the favorites');

        include(dirname(__FILE__) . '/sql/install.php');

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('backOfficeHeader') &&
            $this->registerHook('displayProductAdditionalInfo') &&
            $this->registerHook('actionAuthentication') &&
            $this->registerHook('actionCustomerAccountAdd') &&
            $this->registerHook('displayNav2') &&
            $this->registerHook('displayCustomerAccount') &&
            $this->registerHook('displayAdminStatsModules');
    }

    public function uninstall()
    {
        Configuration::deleteByName('FAVORITES_NAME');
        Configuration::deleteByName('FAVORITES_NO_ITEMS_TITLE');
        Configuration::deleteByName('FAVORITES_NO_ITEMS_DESCRIPTION');

        include(dirname(__FILE__) . '/sql/uninstall.php');

        return parent::uninstall();
    }

    public function getContent()
    {
        if (((bool)Tools::isSubmit('submitAddtofavoritesmywishlistModule')) == true) {
            $this->postProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        if (count($this->_errors) > 0) {
            $this->displayErrors();
        }

        $output_messages = $this->context->smarty->fetch($this->local_path.'views/templates/admin/configure.tpl');

        return $output_messages . $this->renderPackModule() . $this->renderForm();
    }

    public function displayConfirmationMessage()
    {
        $this->context->smarty->assign('confirmations', $this->l('Configuration successfully saved'));
    }

    public function displayErrors()
    {
        $this->context->smarty->assign('errors', $this->_errors);
    }

    public function renderPackModule()
    {
        $moduleManagerBuilder = ModuleManagerBuilder::getInstance();
        $moduleManager = $moduleManagerBuilder->build();
        $this->context->smarty->assign(array(
            'compare_is_installed' => $moduleManager->isInstalled('addtocompare') && $moduleManager->isEnabled('addtocompare'),
            'favorite_is_installed' => $moduleManager->isInstalled('addtofavoritesmywishlist') && $moduleManager->isEnabled('addtofavoritesmywishlist'),
            'basketupsale_is_installed' => $moduleManager->isInstalled('basketupsale') && $moduleManager->isEnabled('basketupsale')
        ));

        return $this->display(__FILE__, '/views/templates/admin/our_offers.tpl');
    }

    protected function postProcess()
    {
        $lang_name = array();
        $lang_no_items_title = array();
        $lang_no_items_description = array();

        try {
            foreach (Language::getLanguages(false) as $language) {
                $lang_name[$language['id_lang']] = Tools::getValue('FAVORITES_NAME_' . $language['id_lang']);
                $lang_no_items_title[$language['id_lang']] = Tools::getValue(
                    'FAVORITES_NO_ITEMS_TITLE_' . $language['id_lang']
                );
                $lang_no_items_description[$language['id_lang']] = Tools::getValue(
                    'FAVORITES_NO_ITEMS_DESCRIPTION_' . $language['id_lang']
                );
            }

            Configuration::updateValue('FAVORITES_NAME', $lang_name, true);
            Configuration::updateValue('FAVORITES_NO_ITEMS_TITLE', $lang_no_items_title, true);
            Configuration::updateValue('FAVORITES_NO_ITEMS_DESCRIPTION', $lang_no_items_description, true);

            $this->displayConfirmationMessage();
        } catch (Exception $e) {
            $this->_errors[] = $this->l('Error save configuration! Exp:' . $e->getMessage());
            return false;
        }
    }

    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar = false;
        $helper->table = $this->table;
        $helper->module = $this;
        $helper->default_form_language = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitAddtofavoritesmywishlistModule';
        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    protected function getConfigFormValues()
    {
        $lang_name = array();
        $lang_no_items_title = array();
        $lang_no_items_description = array();

        foreach (Language::getLanguages(false) as $language) {
            $lang_name[$language['id_lang']] = Configuration::get('FAVORITES_NAME', $language['id_lang']);
            $lang_no_items_title[$language['id_lang']] = Configuration::get(
                'FAVORITES_NO_ITEMS_TITLE',
                $language['id_lang']
            );
            $lang_no_items_description[$language['id_lang']] = Configuration::get(
                'FAVORITES_NO_ITEMS_DESCRIPTION',
                $language['id_lang']
            );
        }

        return array(
            'FAVORITES_NAME' => $lang_name,
            'FAVORITES_NO_ITEMS_TITLE' => $lang_no_items_title,
            'FAVORITES_NO_ITEMS_DESCRIPTION' => $lang_no_items_description,
        );
    }

    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon' => 'icon-cogs'
                ),
                'input' => array(
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'autoload_rte' => true,
                        'label' => $this->l('Name'),
                        'name' => 'FAVORITES_NAME'
                    ),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'autoload_rte' => true,
                        'label' => $this->l('No favorite items title'),
                        'name' => 'FAVORITES_NO_ITEMS_TITLE',
                    ),
                    array(
                        'type' => 'text',
                        'lang' => true,
                        'autoload_rte' => true,
                        'label' => $this->l('No favorite items description'),
                        'name' => 'FAVORITES_NO_ITEMS_DESCRIPTION',
                    )
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            )
        );
    }

    public function hookBackOfficeHeader()
    {
        if (Tools::getValue('module_name') == $this->name
            || Tools::getValue('module') == $this->name
            || Tools::getValue('configure') == $this->name) {
            $this->context->controller->addJS($this->_path . 'views/js/back.js');
            $this->context->controller->addCSS($this->_path . 'views/css/back.css');
        }
    }

    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path . '/views/js/front.js');
        $this->context->controller->addCSS($this->_path . '/views/css/front.css');
    }

    public function hookDisplayProductAdditionalInfo($param = null)
    {
        $this->context->smarty->assign(array(
            'favorites_name' => Configuration::get('FAVORITES_NAME', $this->context->language->id),
            'favorites_img' => $this->getImageURL('favorite_empty.png'),
            'id_product' => (int)Tools::getValue('id_product'),
            'base_url' => $this->context->link->getBaseLink(),
            'favorite_token' => Tools::substr(Tools::hash('addtofavoritesmywishlist/index'), 0, 10),
            'favorite' => $this->favoriteService(array(
                'product_id' => (int)Tools::getValue('id_product')
            ))->favoriteStatus(),
        ));

        $output = $this->context->smarty->fetch($this->local_path . 'views/templates/front/favorites.tpl');

        echo $output;
    }

    private function getImageURL($image)
    {
        return $this->context->link->getMediaLink(__PS_BASE_URI__ . 'modules/' . $this->name . '/views/img/' . $image);
    }

    protected function favoriteService(array $parameters = array())
    {
        return new Favorite(Context::getContext(), $parameters);
    }

    public function hookActionCustomerAccountAdd()
    {
        $this->hookActionAuthentication();
    }

    public function hookActionAuthentication()
    {
        $this->favoriteService()->transferCookieToDB();
    }

    public function hookDisplayNav2($param)
    {
        $this->context->smarty->assign(array(
            'favorites_name' => Configuration::get('FAVORITES_NAME', $this->context->language->id),
            'favorites' => $this->favoriteService()->favoriteCount(),
            'link' => $this->context->link->getModuleLink($this->name, 'favorites'),
        ));

        $output = $this->context->smarty->fetch($this->local_path . 'views/templates/front/favorites_header.tpl');

        echo $output;
    }

    public function hookDisplayCustomerAccount()
    {
        $this->context->smarty->assign(array(
            'link' => $this->context->link->getModuleLink($this->name, 'favorites'),
        ));
        $output = $this->context->smarty->fetch($this->local_path . 'views/templates/front/favorites_my_account.tpl');

        echo $output;
    }

    public function hookDisplayAdminStatsModules()
    {
        $page = 1;
        $defaultPagination = 20;

        if (Tools::getValue('submitFilterconfiguration', false)
            && Validate::isInt(Tools::getValue('submitFilterconfiguration'))) {
            $page = (int)Tools::getValue('submitFilterconfiguration');
        }

        if (Tools::getValue('configuration_pagination', false)
            && Validate::isInt(Tools::getValue('configuration_pagination'))) {
            $defaultPagination = (int)Tools::getValue('configuration_pagination');
        }

        $getData = (new FavoriteStatistic)->statistics($page, $defaultPagination);

        $helper = new HelperList();
        $helper->no_link = true;
        $helper->default_form_language = $this->context->language->id;
        $helper->shopLinkType = '';
        $helper->page = $page;
        $helper->_default_pagination = $defaultPagination;
        $helper->simple_header = false;
        $helper->show_toolbar = false;
        $helper->module = $this;
        $helper->listTotal = (new FavoriteStatistic)->allStatistics();
        $helper->title = $this->l('Statistics');
        $helper->identifier = 'id_customer';
        $helper->table = 'favorites_statistic';
        $helper->token = $this->context->controller->token;
        $helper->currentIndex = AdminController::$currentIndex . '&module=' . $this->name;

        return $this->renderPackModule() . $helper->generateList($getData, $this->statisticConfigForm());
    }

    public function statisticConfigForm()
    {
        return array(
            'id_customer' => array(
                'title' => 'ID',
                'search' => false,
                'orderby' => false
            ),
            'username' => array(
                'title' => $this->l('Customer email'),
                'search' => false,
                'orderby' => false
            ),
            'favorites' => array(
                'title' => $this->l('In favorites'),
                'search' => false,
                'orderby' => false
            ),
            'non_favorites' => array(
                'title' => $this->l('Was in favorites'),
                'search' => false,
                'orderby' => false
            ),
        );
    }
}

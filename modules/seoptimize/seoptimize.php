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
 * @author    PrestaShop SA <contact@prestashop.com>
 * @copyright 2007-2018 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

if (!defined('_PS_VERSION_')) {
    exit;
}

class Seoptimize extends Module
{
    protected $config_form = false;
    protected static $lang_fields = array(
        'meta_title',
        'meta_description',
        'meta_keywords',
    );

    public function __construct()
    {
        $this->name          = 'seoptimize';
        $this->tab           = 'seo';
        $this->version       = '1.0.0';
        $this->author        = 'terranetpro.com';
        $this->need_instance = 1;

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Seoptimize');
        $this->description = $this->l('easily optimize meta title, description and keywords.');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {

        include(dirname(__FILE__) . '/sql/install.php');

        return parent::install() &&
            $this->registerHook('header') &&
            $this->registerHook('backOfficeHeader');
    }

    public function uninstall()
    {
        include(dirname(__FILE__) . '/sql/uninstall.php');
        Configuration::deleteByName('SEOPTIMIZE_LIVE_MODE');

        return parent::uninstall();
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submitSeoptimizeModule')) == true) {
            $this->postProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        return $this->renderForm() . $this->renderRulesForm();
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar             = false;
        $helper->table                    = $this->table;
        $helper->module                   = $this;
        $helper->default_form_language    = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier    = $this->identifier;
        $helper->submit_action = 'submitSeoptimizeModule';
        $helper->currentIndex  = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token         = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getConfigFormValues(), /* Add values for your inputs */
            'languages'    => $this->context->controller->getLanguages(),
            'id_language'  => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    protected function renderRulesForm()
    {
        dump($this->getRules());
        exit();
        $helper = new HelperForm();

        $helper->show_toolbar             = false;
        $helper->table                    = 'category_seo_rule';
        $helper->module                   = $this;
        $helper->default_form_language    = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier    = $this->identifier;
        $helper->submit_action = 'submitRulesEdit';

        $helper->currentIndex = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;

        $helper->token = Tools::getAdminTokenLite('AdminModules');

//        $helper->tpl_vars = array(
//            'fields_value' => $this->getRules(),
//            'languages' => $this->context->controller->getLanguages(false),
//            'id_language' => $this->context->language->id,
//        );
//
//        return $helper->generateForm(array($this->getRulesForm()));
    }

    public function getRules()
    {
//        $ret = array();
        $ret = Db::getInstance()->executeS('SELECT *
                        FROM `' . _DB_PREFIX_ . 'seoptimize` AS `s`
                        JOIN `' . _DB_PREFIX_ . 'category_seo_rule` AS `csr`
                        ON `s`.`id_seoptimize`=`csr`.`id_seoptimize`');
        $arr = array();
        foreach ($ret as $item) {
            $arr[$item['id_seoptimize']] = array(
                $item['id_category']
            );
        }
dump($arr);
        exit();
        return $ret;
        //get all rules

    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('General'),
                    'icon'  => 'icon-cogs',
                ),
                'tabs'   => array(
                    'set'        => $this->l('General'),
                    'set_filter' => $this->l('Categories'),
//                    'category_connect' => $this->l('Google category configuration')
                ),
                'input'  => array(
                    array(
                        'type'  => 'text',
                        'tab'   => 'set',
                        'class' => 'input',
                        'label' => 'Meta title',
                        'name'  => 'meta_title',
                        'lang'  => true
                    ),
                    array(
                        'type'  => 'textarea',
                        'tab'   => 'set',
                        'class' => 'input',
                        'label' => 'Meta description',
                        'name'  => 'meta_description',
                        'lang'  => true
                    ),
                    array(
                        'type'  => 'text',
                        'tab'   => 'set',
                        'class' => 'input',
                        'label' => 'Meta keywords',
                        'name'  => 'meta_keywords',
                        'lang'  => true
                    ),
                    array(
                        'type'  => 'categories',
                        'label' => 'Select categories',
                        'name'  => 'selected_categories',
                        'tab'   => 'set_filter',
                        'tree'  => array(
                            'id'                  => 'categories-tree',
                            'selected_categories' => $this->getCategoryFilterSelected(),
                            'root_category'       => (int)Category::getRootCategory()->id,
                            'use_search'          => true,
                            'use_checkbox'        => true
                        ),
                        'desc'  => $this->l('Select categories')
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    protected function getCategoryFilterSelected()
    {
        if ((bool)Tools::isSubmit('updateseoptimize') == true && Validate::isInt(Tools::getValue('id_seoptimize'))) {
            $sql           = 'SELECT `category_filter` FROM `' . _DB_PREFIX_ . 'gshoppingfeed` WHERE `id_gshoppingfeed` = ' . (int)Tools::getValue('id_gshoppingfeed');
            $gshoppingfeed = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);
            if ($gshoppingfeed['category_filter'] && !empty($gshoppingfeed['category_filter'])) {
                return Tools::jsonDecode($gshoppingfeed['category_filter']);
            }

            return array();
        }

        return array();
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        $fields    = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $lang) {
            foreach (Seoptimize::$lang_fields as $field) {
                $fields[$field][$lang['id_lang']] = Tools::getValue($field . '_' . $lang['id_lang'],
                    Configuration::get($field, $lang['id_lang']));
            }
        }

        return $fields;
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $categories = Tools::getValue('selected_categories');
        if ($categories != null) {
            $languages = Language::getLanguages(false);
            $values    = array();


            Db::getInstance()->insert('seoptimize', array('id_seoptimize' => ''), false, true);
            $rule = Db::getInstance()->getRow('SELECT `*`
                        FROM `' . _DB_PREFIX_ . 'seoptimize`
                            ORDER BY `id_seoptimize` DESC');
            foreach ($categories as $category) {
                Db::getInstance()->insert('category_seo_rule',
                    array('id_category' => $category, 'id_seoptimize' => $rule['id_seoptimize']), false, true);
            }

            foreach ($languages as $lang) {
                foreach (Seoptimize::$lang_fields as $field) {
                    $values[$field][(int)$lang['id_lang']] = Tools::getValue($field . '_' . (int)$lang['id_lang']);
                }
                Db::getInstance()->insert('seo_rule_lang',
                    array(
                        'id_seoptimize'    => $rule['id_seoptimize'],
                        'id_lang'          => $lang['id_lang'],
                        'meta_title'       => $values['meta_title'][$lang['id_lang']],
                        'meta_description' => $values['meta_description'][$lang['id_lang']],
                        'meta_keywords'    => $values['meta_keywords'][$lang['id_lang']]
                    ), false, true);
            }
        }
    }


    /**
     * Add the CSS & JavaScript files you want to be loaded in the BO.
     */
    public
    function hookBackOfficeHeader()
    {
        if (Tools::getValue('module_name') == $this->name) {
            $this->context->controller->addJS($this->_path . 'views/js/back.js');
            $this->context->controller->addCSS($this->_path . 'views/css/back.css');
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public
    function hookHeader()
    {
        $this->context->controller->addJS($this->_path . '/views/js/front.js');
        $this->context->controller->addCSS($this->_path . '/views/css/front.css');
    }
}

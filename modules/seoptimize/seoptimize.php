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
    protected $_errors;
    protected static $lang_fields = array(
        'meta_title',
        'meta_description',
        'meta_keywords',
    );
    protected static $currentIndex;

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
        $this->_errors                = array();
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

        if (count($this->_errors) > 0) {
            $this->displayErrors();
        }

        if (((bool)Tools::isSubmit('submitSeoptimizeModule')) == true) {
            $this->postProcess();
        }
        if (((bool)Tools::isSubmit('editSeoptimizeModule')) == true) {
            $this->editPostProcess();
        }
        if ((bool)Tools::isSubmit('deleteseoptimize_category_seo_rule') == true && Validate::isInt(Tools::getValue('id_seoptimize'))) {
            if (Db::getInstance()->delete('seoptimize', 'id_seoptimize= ' . (int)Tools::getValue('id_seoptimize'))) {
                Db::getInstance()->delete('category_seo_rule',
                    'id_seoptimize= ' . (int)Tools::getValue('id_seoptimize'));
                Db::getInstance()->delete('seo_rule_lang', 'id_seoptimize= ' . (int)Tools::getValue('id_seoptimize'));
                Tools::redirectAdmin(
                    AdminController::$currentIndex . '&configure=' . urlencode($this->name) . '&token=' . Tools::getAdminTokenLite('AdminModules') . '&conf=5'
                );
            }
        }
        $this->context->smarty->assign('module_dir', $this->_path);
        $output_messages = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');

        return $output_messages . $this->renderForm() . $this->renderRulesList();
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

        $helper->identifier    = 'id_seoptimize';
        $helper->submit_action = ((bool)Tools::isSubmit('updateseoptimize_category_seo_rule')) == true ?
            'editSeoptimizeModule' : 'submitSeoptimizeModule';
        $helper->currentIndex  = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token         = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => ((bool)Tools::isSubmit('updateseoptimize_category_seo_rule')) == true ?
                $this->getEditConfigFormValues() : $this->getConfigFormValues(), /* Add values for your inputs */
            'languages'    => $this->context->controller->getLanguages(),
            'id_language'  => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    protected function renderRulesList()
    {
        $this->fields_list                  = array();
        $this->fields_list['id_seoptimize'] = array(
            'title'   => $this->l('Rule'),
            'type'    => 'text',
            'search'  => false,
            'orderby' => false,
        );
        $this->fields_list['categories']    = array(
            'title'   => $this->l('Categories'),
            'type'    => 'categories_list',
            'search'  => false,
            'orderby' => false,
        );

        $helper                = new HelperList();
        $helper->module        = $this;
        $helper->simple_header = false;
        $helper->title         = $this->l('Rules');
        $helper->identifier    = 'id_seoptimize';
        $helper->actions       = array('edit', 'delete');
        $helper->show_toolbar  = true;
        $helper->shopLinkType  = '';
        $helper->token         = Tools::getAdminTokenLite('AdminModules');
        $helper->table         = 'seoptimize_category_seo_rule';
        $helper->table_id      = 'module-seoptimize';
        $helper->currentIndex  = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&module_name=' . $this->name;

        return $helper->generateList($this->getRulesList(), $this->fields_list);
    }

    public function getRulesList()
    {
        $result = Db::getInstance()->executeS('SELECT *
                        FROM `' . _DB_PREFIX_ . 'seoptimize` AS `s`
                        JOIN `' . _DB_PREFIX_ . 'category_seo_rule` AS `csr`
                        ON `s`.`id_seoptimize`=`csr`.`id_seoptimize`
                        JOIN `' . _DB_PREFIX_ . 'category_lang` as `cl`
                        on `csr`.`id_category`=`cl`.`id_category`
                        where `cl`.`id_lang`=1');

        $rulesList = array();
        $foundKey  = null;
        foreach ($result as $rule) {

            foreach ($rulesList as $key => $rL) {
                if (array_search($rule['id_seoptimize'], $rL)) {
                    $foundKey = $key;
                    array_push($rulesList[$key][0],
                        array('id_category' => $rule['id_category'], 'name' => $rule['name']));
                    break;
                }
            }
            if ($foundKey == null) {
                $rulesList[] = array(
                    'id_seoptimize' => $rule['id_seoptimize'],
                    array(array('id_category' => $rule['id_category'], 'name' => $rule['name']))
                );
            }
            $foundKey = null;
        }

        return $rulesList;
    }

    public function getCategoriesByRule()
    {
        $ret = Db::getInstance()->executeS('SELECT *
                        FROM `' . _DB_PREFIX_ . 'category_seo_rule` AS `s`');

        return $ret;
    }

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        $form = array(
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
                    array(
                        'type' => 'hidden',
                        'name' => 'id_seoptimize',
                    ),
                ),
                'submit' => array(
                    'title' => ((bool)Tools::isSubmit('updateseoptimize_category_seo_rule')) == true ? $this->l('Edit') : $this->l('Save'),
                ),
            ),
        );
        if ((bool)Tools::isSubmit('updateseoptimize_category_seo_rule') === true && Tools::getValue('id_seoptimize') > 0) {
            $form['form']['buttons'] = array(
                array(
                    'href'  => AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules'),
                    'title' => $this->l('Back to list'),
                    'icon'  => 'process-icon-back'
                )
            );
        }

        return $form;
    }

    protected function getCategoryFilterSelected()
    {
        $selectedCategories = array();
        if ((bool)Tools::isSubmit('updateseoptimize_category_seo_rule') == true && Validate::isInt(Tools::getValue('id_seoptimize'))) {
            $sql            = 'SELECT `id_category` FROM `' . _DB_PREFIX_ . 'category_seo_rule` WHERE `id_seoptimize` = ' . (int)Tools::getValue('id_seoptimize');
            $ruleCategories = Db::getInstance()->executeS($sql);
            foreach ($ruleCategories as $ruleCategory) {
                array_push($selectedCategories, $ruleCategory['id_category']);
            }
            if ($selectedCategories && !empty($selectedCategories)) {
                return $selectedCategories;
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
        $fields['id_seoptimize'] = null;

        return $fields;
    }

    protected function getEditConfigFormValues()
    {
        $idSeoptimize = Tools::getValue('id_seoptimize');
        $result       = Db::getInstance()->executeS('SELECT *
                        FROM `' . _DB_PREFIX_ . 'seoptimize` AS `s`
                        JOIN `' . _DB_PREFIX_ . 'seo_rule_lang` AS `srl`
                        ON `s`.`id_seoptimize`=`srl`.`id_seoptimize`
                        where `s`.`id_seoptimize`=' . $idSeoptimize . '');

        $fields    = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $key => $lang) {
            foreach (Seoptimize::$lang_fields as $field) {
                $fields[$field][$lang['id_lang']] = $result[$key][$field];
            }
        }
        $fields['id_seoptimize'] = Tools::getValue('id_seoptimize');

        return $fields;
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {

        $categories = Tools::getValue('selected_categories');

        try {
            if ($categories != null) {

                foreach ($categories as $category) {
                    $categoryExists = 'SELECT `name`
                FROM `' . _DB_PREFIX_ . 'category_seo_rule` AS `csr`
                JOIN `' . _DB_PREFIX_ . 'category_lang` AS `cl`
                ON `csr`.`id_category`=`cl`.`id_category`
                WHERE `cl`.`id_lang`=1
                AND `csr`.`id_category` = ' . $category;
                    if ($test = Db::getInstance()->getRow($categoryExists)) {
                        throw new Exception('Category ' . $test['name'] . ' already has a rule');
                    }
                }
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

                    foreach ($categories as $category) {
                        $products = "SELECT `*` FROM `" . _DB_PREFIX_ . "product_lang` AS `pl`
                    JOIN `" . _DB_PREFIX_ . "category_product` AS `cp`
                    ON `pl`.`id_product`=`cp`.`id_product`
                    WHERE `cp`.`id_category`=" . $category."";
                        $products = Db::getInstance()->executeS($products);

                        foreach ($products as $product) {
                            $p = new Product((int)$product['id_product'], false, (int)$lang['id_lang']);
                            $p->meta_title = $values['meta_title'][$lang['id_lang']];
                            $p->meta_description = $values['meta_description'][$lang['id_lang']];
                            $p->meta_keywords = $values['meta_keywords'][$lang['id_lang']];
                            $p->update();
                        }
                    }
                }
            }
        } catch (Exception $e) {
            $this->_errors[] = $this->l('Error save configuration! Exp: ' . $e->getMessage());
            $this->displayErrors();

            return false;
        }
    }

    protected function editPostProcess()
    {
        $categories = Tools::getValue('selected_categories');
        if ($categories != null) {
            $ruleId = Tools::getValue('id_seoptimize');

            Db::getInstance()->delete('category_seo_rule', 'id_seoptimize=' . $ruleId);
            foreach ($categories as $category) {
                Db::getInstance()->insert('category_seo_rule',
                    array('id_category' => $category, 'id_seoptimize' => $ruleId), false, true);
            }
            $languages = Language::getLanguages(false);
            $values    = array();
            Db::getInstance()->delete('seo_rule_lang', 'id_seoptimize=' . $ruleId);
            foreach ($languages as $lang) {
                foreach (Seoptimize::$lang_fields as $field) {
                    $values[$field][(int)$lang['id_lang']] = Tools::getValue($field . '_' . (int)$lang['id_lang']);
                }
                Db::getInstance()->insert('seo_rule_lang',
                    array(
                        'id_seoptimize'    => $ruleId,
                        'id_lang'          => $lang['id_lang'],
                        'meta_title'       => $values['meta_title'][$lang['id_lang']],
                        'meta_description' => $values['meta_description'][$lang['id_lang']],
                        'meta_keywords'    => $values['meta_keywords'][$lang['id_lang']]
                    ), false, true);
            }
        }
    }

    public function displayErrors()
    {
        $this->context->smarty->assign('errors', $this->_errors);
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

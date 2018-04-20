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
        'seo_meta_title',
        'seo_meta_description',
        'seo_meta_keywords',
        'seo_image_alt',
    );
    protected static $product_lang_fields = array(
        'meta_title',
        'meta_description',
        'meta_keywords',
        'legend',
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
        self::$currentIndex = $_SERVER['SCRIPT_NAME'] . (($controller = Tools::getValue('controller')) ? '?controller=' . $controller : '');

        if (Tools::isSubmit('reloadProductsList') && Tools::getValue('reloadProductsList') == 1
            && Tools::getValue('ajax') && Tools::isSubmit('language') && Validate::isInt(Tools::getValue('language'))
            && Tools::getValue('language') > 0
        ) {

            die($this->renderProductsList((int)Tools::getValue('language')));
        }

        if (Tools::isSubmit('ajaxEditProductMeta') && Tools::getValue('ajaxEditProductMeta') == 1
            && Tools::getValue('ajax')
        ) {
            $lang        = (int)Tools::getValue('language');
            $productId   = (int)Tools::getValue('product_id');
            $title       = Tools::getValue('title');
            $description = Tools::getValue('description');
            $keywords    = Tools::getValue('keywords');
            $legend      = Tools::getValue('legend');
            die($this->ajaxEditProductMeta($lang, $productId, $title, $description, $keywords, $legend));
        }

        if (Tools::isSubmit('ajaxChangeMetaToUse') && Tools::getValue('ajaxChangeMetaToUse') == 1 && Tools::getValue('ajax')) {
            $productId = (int)Tools::getValue('product_id');
            $field     = Tools::getValue('name');
            $isChecked = Tools::getValue('checked');
            die($this->ajaxMetaToUse($productId, $field, $isChecked));
        }

        if (((bool)Tools::isSubmit('editProductMeta')) == true) {
            $this->editProductPostProcess();
        }

        if (Tools::getValue('id_product')) {
            return $this->renderProductMetaForm();
        }

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
        if (((bool)Tools::isSubmit('updateseoptimize_category_seo_rule')) == true) {
            return $output_messages . $this->renderRulesList() . $this->renderEditForm() . $this->renderProductsList();
        }

        return $output_messages . $this->renderRulesList() . $this->renderForm() . $this->renderProductsList();
    }

    /**
     * Create the form that will be displayed in the configuration of your module.
     */
    protected function renderForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar             = false;
        $helper->table                    = 'seoptimize_rules';
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

    protected function renderEditForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar             = false;
        $helper->table                    = 'seoptimize_edit_rules';
        $helper->module                   = $this;
        $helper->default_form_language    = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier    = 'id_seoptimize';
        $helper->submit_action = 'editSeoptimizeModule';
        $helper->currentIndex  = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token         = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getEditConfigFormValues(), /* Add values for your inputs */
            'languages'    => $this->context->controller->getLanguages(),
            'id_language'  => $this->context->language->id
        );

        return $helper->generateForm(array($this->getConfigForm()));
    }

    protected function renderProductMetaForm()
    {
        $helper = new HelperForm();

        $helper->show_toolbar             = false;
        $helper->table                    = $this->table;
        $helper->module                   = $this;
        $helper->default_form_language    = $this->context->language->id;
        $helper->allow_employee_form_lang = Configuration::get('PS_BO_ALLOW_EMPLOYEE_FORM_LANG', 0);

        $helper->identifier    = 'id_product';
        $helper->submit_action = 'editProductMeta';
        $helper->currentIndex  = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&tab_module=' . $this->tab . '&module_name=' . $this->name;
        $helper->token         = Tools::getAdminTokenLite('AdminModules');

        $helper->tpl_vars = array(
            'fields_value' => $this->getProductFormValues(), /* Add values for your inputs */
            'languages'    => $this->context->controller->getLanguages(),
            'id_language'  => $this->context->language->id,
        );

        return $helper->generateForm(array($this->getProductForm()));
    }

    public function getProductFormValues()
    {
        $idProduct = Tools::getValue('id_product');
        $result    = Db::getInstance()->executeS('SELECT *
                        FROM `' . _DB_PREFIX_ . 'product_lang` AS `pl`
                        JOIN `' . _DB_PREFIX_ . 'image` AS `i`
                        on `pl`.`id_product`=`i`.`id_product`
                        JOIN `' . _DB_PREFIX_ . 'image_lang` AS `il`
                        on `i`.`id_image`=`il`.`id_image`
                        where `pl`.`id_product`=' . $idProduct);

        $fields    = array();
        $languages = Language::getLanguages(false);
        foreach ($languages as $key => $lang) {
            foreach (Seoptimize::$product_lang_fields as $field) {
                $fields[$field][$lang['id_lang']] = $result[$key][$field];
            }
        }
        $fields['id_product'] = Tools::getValue('id_product');

        return $fields;
    }

    protected function getProductForm()
    {
        $form                    = array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Edit single product meta'),
                    'icon'  => 'icon-cogs',
                ),
                'input'  => array(
                    array(
                        'type'  => 'text',
                        'class' => 'input',
                        'label' => 'Meta title',
                        'name'  => 'meta_title',
                        'lang'  => true
                    ),
                    array(
                        'type'  => 'textarea',
                        'class' => 'input',
                        'label' => 'Meta description',
                        'name'  => 'meta_description',
                        'lang'  => true
                    ),
                    array(
                        'type'  => 'text',
                        'class' => 'input',
                        'label' => 'Meta keywords',
                        'name'  => 'meta_keywords',
                        'lang'  => true
                    ),
                    array(
                        'type'  => 'text',
                        'class' => 'input',
                        'label' => 'Image alt',
                        'name'  => 'legend',
                        'lang'  => true
                    ),
                    array(
                        'type' => 'hidden',
                        'name' => 'id_product',
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Edit'),
                ),
            ),
        );
        $form['form']['buttons'] = array(
            array(
                'href'  => AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules'),
                'title' => $this->l('Back to list'),
                'icon'  => 'process-icon-back'
            )
        );

        return $form;
    }

    protected function renderProductsList($select_lang = 1)
    {
        $this->fields_list                = array();
        $this->fields_list['id_product']  = array(
            'title' => $this->l('Product'),
            'type'  => 'product'
        );
        $this->fields_list['name']        = array(
            'title'      => $this->l('Category'),
            'type'       => 'category_name',
            'filter_key' => 'name'
        );
        $this->fields_list['rules_meta']  = array(
            'title'          => $this->l('Meta by rules'),
            'type'           => 'rules_meta',
            'search'         => false,
            'orderby'        => false,
            'remove_onclick' => true
        );
        $this->fields_list['custom_meta'] = array(
            'title'          => $this->l('Custom meta'),
            'type'           => 'custom_meta',
            'search'         => false,
            'orderby'        => false,
            'remove_onclick' => true
        );

        $helper                = new HelperList();
        $helper->module        = $this;
        $helper->simple_header = false;
        $helper->title         = $this->l('Products');
        $helper->identifier    = 'id_product';
        $helper->actions       = array('edit');
        $helper->show_toolbar  = true;
        $helper->shopLinkType  = '';
        $helper->token         = Tools::getAdminTokenLite('AdminModules');
        $helper->table         = 'seoptimize_products';
        $helper->table_id      = 'module-seoptimize';
        $helper->currentIndex  = $this->context->link->getAdminLink('AdminModules', false)
            . '&configure=' . $this->name . '&module_name=' . $this->name;
        $helper->tpl_vars      = array(
            'languages'   => $this->context->controller->getLanguages(false),
            'update_path' => self::$currentIndex . '&configure=' . urlencode($this->name) . '&token=' . Tools::getAdminTokenLite('AdminModules') . '&reloadProductsList'
        );

        return $helper->generateList($this->getProductsList($select_lang), $this->fields_list);
    }

    public function getProductsList($select_lang)
    {
        $categoryName = Tools::getValue('seoptimize_productsFilter_name');
        $productName  = Tools::getValue('seoptimize_productsFilter_id_product');
        $sql          = "SELECT `spml`.`seo_meta_title` as `custom_title`,
                               `spml`.`seo_meta_description` as `custom_description`,
                               `spml`.`seo_meta_keywords` as `custom_keywords`,
                               `spml`.`seo_image_alt` as `custom_alt`,
                               `spm`.`has_custom_title`,
                               `spm`.`has_custom_description`,
                               `spm`.`has_custom_keywords`,
                               `spm`.`has_custom_alt`,
                               `pl`.`id_product`,
                               `pl`.`name` AS `product_name`,
                               `srl`.`id_seoptimize_lang`,
                               `srl`.`seo_meta_title`,
                               `srl`.`seo_meta_description`,
                               `srl`.`seo_meta_keywords`,
                               `srl`.`seo_image_alt`,
                               `il`.`legend`
                        FROM `" . _DB_PREFIX_ . "product_lang` AS `pl`
                        JOIN `" . _DB_PREFIX_ . "category_product` AS `cp`
                        ON `pl`.`id_product`=`cp`.`id_product`
                        JOIN `" . _DB_PREFIX_ . "category_lang` AS `cl`
                        on `cp`.`id_category`=`cl`.`id_category`
                        LEFT JOIN `" . _DB_PREFIX_ . "category_seo_rule` as `csr`
                        on `cp`.`id_category`=`csr`.`id_category`
                        LEFT JOIN `" . _DB_PREFIX_ . "seo_rule_lang` as `srl`
                        on `csr`.`id_seoptimize`=`srl`.`id_seoptimize`
                        JOIN `" . _DB_PREFIX_ . "image` AS `i`
                        on `pl`.`id_product`=`i`.`id_product`
                        JOIN `" . _DB_PREFIX_ . "image_lang` AS `il`
                        on `i`.`id_image`=`il`.`id_image`
                        LEFT JOIN `" . _DB_PREFIX_ . "seoptimize_product_meta` as `spm`
                        on `pl`.`id_product`=`spm`.`id_product`
                        LEFT JOIN `" . _DB_PREFIX_ . "seoptimize_product_meta_lang` as `spml`
                        on `spm`.`id_seoptimize_product_meta` = `spml`.`id_seoptimize_product_meta`
                        where `pl`.`id_lang`=" . $select_lang;
        if ($categoryName != '') {
            $result = Db::getInstance()->executeS($sql .
                " and `cl`.`name`='" . $categoryName . "'
                 group by `pl`.`id_product`");
            foreach ($result as $key => $product) {
                $categoriesSql = $this->getProductImage($product);
                $images        = Product::getCover($product['id_product']);
                $productImage  = $this->context->link->getImageLink($product['id_product'], $images['id_image'],
                    ImageType::getFormattedName('small'));

                $result[$key][] = $categoriesSql;
                $result[$key][] = $productImage;
            }

        } elseif ($productName != '') {
            $result = Db::getInstance()->executeS($sql .
                " and `pl`.`name`='" . $productName . "'
                group by `pl`.`id_product`");
            foreach ($result as $key => $product) {
                $categoriesSql = $this->getProductImage($product);
                $images        = Product::getCover($product['id_product']);
                $productImage  = $this->context->link->getImageLink($product['id_product'], $images['id_image'],
                    ImageType::getFormattedName('small'));

                $result[$key][] = $categoriesSql;
                $result[$key][] = $productImage;
            }
        } else {
            $result = Db::getInstance()->executeS($sql .
                " group by `pl`.`id_product`");
            foreach ($result as $key => $product) {
                $categoriesSql = $this->getProductImage($product);
                $images        = Product::getCover($product['id_product']);
                $productImage  = $this->context->link->getImageLink($product['id_product'], $images['id_image'],
                    ImageType::getFormattedName('small'));

                $result[$key][] = $categoriesSql;
                $result[$key][] = $productImage;
            }
        }


        return $result;
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
        if (((bool)Tools::isSubmit('updateseoptimize_category_seo_rule')) == true) {
            $helper->tpl_vars = array(
                'back_to_add' => AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . Tools::getAdminTokenLite('AdminModules')
            );
        }

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
        $foundKey  = false;
        foreach ($result as $rule) {
            foreach ($rulesList as $key => $rL) {
                if (array_search($rule['id_seoptimize'], $rL)) {
                    $foundKey = true;
                    array_push($rulesList[$key][0],
                        array('id_category' => $rule['id_category'], 'name' => $rule['name']));
                    break;
                }
            }
            if ($foundKey == false) {
                $rulesList[] = array(
                    'id_seoptimize' => $rule['id_seoptimize'],
                    array(array('id_category' => $rule['id_category'], 'name' => $rule['name']))
                );
            }

            $foundKey = false;
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
                ),
                'input'  => array(
                    array(
                        'type'  => 'text',
                        'tab'   => 'set',
                        'class' => 'input',
                        'label' => 'Meta title',
                        'name'  => 'seo_meta_title',
                        'lang'  => true
                    ),
                    array(
                        'type'  => 'textarea',
                        'tab'   => 'set',
                        'class' => 'input',
                        'label' => 'Meta description',
                        'name'  => 'seo_meta_description',
                        'lang'  => true
                    ),
                    array(
                        'type'  => 'text',
                        'tab'   => 'set',
                        'class' => 'input',
                        'label' => 'Meta keywords',
                        'name'  => 'seo_meta_keywords',
                        'lang'  => true
                    ),
                    array(
                        'type'  => 'text',
                        'tab'   => 'set',
                        'class' => 'input',
                        'label' => 'Image alt',
                        'name'  => 'seo_image_alt',
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
                        where `s`.`id_seoptimize`=' . $idSeoptimize);

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
            if ($categories == null) {
                throw new Exception('You must select at least one category');
            }
            foreach ($categories as $category) {
                $categoryExists = "SELECT `name`
                FROM `" . _DB_PREFIX_ . "category_seo_rule` AS `csr`
                JOIN `" . _DB_PREFIX_ . "category_lang` AS `cl`
                ON `csr`.`id_category`=`cl`.`id_category`
                WHERE `cl`.`id_lang`=1
                AND `csr`.`id_category` = " . $category;
                if ($test = Db::getInstance()->getRow($categoryExists)) {
                    throw new Exception('Category ' . $test['name'] . ' already has a rule');
                }
            }
            $languages = Language::getLanguages(false);
            $values    = array();


            Db::getInstance()->insert('seoptimize', array('id_seoptimize' => ''), false, true);
            $rule = Db::getInstance()->getRow("SELECT *
                        FROM `" . _DB_PREFIX_ . "seoptimize`
                            ORDER BY `id_seoptimize` DESC");
            foreach ($categories as $category) {
                Db::getInstance()->insert('category_seo_rule',
                    array('id_category' => $category, 'id_seoptimize' => $rule['id_seoptimize']), false, true);
            }

            foreach ($languages as $lang) {
                foreach (Seoptimize::$lang_fields as $field) {
                    $meta                                  = Tools::getValue($field . '_' . (int)$lang['id_lang']);
                    $values[$field][(int)$lang['id_lang']] = $this->replaceKeyWithName($categories, $meta, $lang);
                }
                Db::getInstance()->insert('seo_rule_lang',
                    array(
                        'id_seoptimize'        => $rule['id_seoptimize'],
                        'id_lang'              => $lang['id_lang'],
                        'seo_meta_title'       => $values['seo_meta_title'][$lang['id_lang']],
                        'seo_meta_description' => $values['seo_meta_description'][$lang['id_lang']],
                        'seo_meta_keywords'    => $values['seo_meta_keywords'][$lang['id_lang']],
                        'seo_image_alt'        => $values['seo_image_alt'][$lang['id_lang']]
                    ), false, true);


                $this->updateProductMeta($categories, $lang, $values);
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

        try {
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
                        $meta                                  = Tools::getValue($field . '_' . (int)$lang['id_lang']);
                        $values[$field][(int)$lang['id_lang']] = $this->replaceKeyWithName($categories, $meta, $lang);
                    }
                    Db::getInstance()->insert('seo_rule_lang',
                        array(
                            'id_seoptimize'        => $ruleId,
                            'id_lang'              => $lang['id_lang'],
                            'seo_meta_title'       => $values['seo_meta_title'][$lang['id_lang']],
                            'seo_meta_description' => $values['seo_meta_description'][$lang['id_lang']],
                            'seo_meta_keywords'    => $values['seo_meta_keywords'][$lang['id_lang']],
                            'seo_image_alt'        => $values['seo_image_alt'][$lang['id_lang']]
                        ), false, true);

                    $this->updateProductMeta($categories, $lang, $values);
                }
            }
        } catch (Exception $e) {
            $this->_errors[] = $this->l('Error save configuration! Exp: ' . $e->getMessage());
            $this->displayErrors();

            return false;
        }
    }

    protected function editProductPostProcess()
    {
        $productId = Tools::getValue('id_product');
        Db::getInstance()->insert('seoptimize_product_meta', array('id_product' => $productId), false, true);
        $languages = Language::getLanguages(false);
        $values    = array();
        foreach ($languages as $lang) {
            foreach (Seoptimize::$product_lang_fields as $field) {
                $values[$field][(int)$lang['id_lang']] = Tools::getValue($field . '_' . (int)$lang['id_lang']);
            }
            $id_image    = Db::getInstance()->getRow("SELECT `id_image` FROM `" . _DB_PREFIX_ . "image`
                             WHERE `id_product` = " . (int)($productId) . "
                             AND `cover` = 1");
            $img         = new Image((int)$id_image['id_image'], (int)$lang['id_lang']);
            $img->legend = $values['legend'][$lang['id_lang']];
            $img->update();
            $p                   = new Product((int)$productId, false,
                (int)$lang['id_lang']);
            $p->meta_title       = $values['meta_title'][$lang['id_lang']];
            $p->meta_description = $values['meta_description'][$lang['id_lang']];
            $p->meta_keywords    = $values['meta_keywords'][$lang['id_lang']];
            $p->update();
        }

    }

    protected function ajaxEditProductMeta($lang, $productId, $title, $description, $keywords, $legend)
    {
        $res = Db::getInstance()->executeS("SELECT * FROM `" . _DB_PREFIX_ . "seoptimize_product_meta`
                       WHERE `id_product`=" . $productId);
        if ($res == null) {
            $res = Db::getInstance()->insert('seoptimize_product_meta', array('id_product' => $productId), false, true);
        }

        $resLang = Db::getInstance()->executeS("SELECT * FROM `" . _DB_PREFIX_ . "seoptimize_product_meta_lang`
                       WHERE `id_lang`=" . $lang);
//        if ($resLang == null) {
        try {
            Db::getInstance()->delete('seoptimize_product_meta_lang',
                'id_lang=' . $lang . ' and id_seoptimize_product_meta=' . $res[0]['id_seoptimize_product_meta']);
        } catch (Exception $e) {

        }
        Db::getInstance()->insert('seoptimize_product_meta_lang', array(
            'seo_meta_title'             => $title,
            'seo_meta_description'       => $description,
            'seo_meta_keywords'          => $keywords,
            'seo_image_alt'              => $legend,
            'id_lang'                    => $lang,
            'id_seoptimize_product_meta' => $res[0]['id_seoptimize_product_meta'],
        ));
//        } else {
//            Db::getInstance()->update('seoptimize_product_meta_lang', array(
//                'seo_meta_title'       => $title,
//                'seo_meta_description' => $description,
//                'seo_meta_keywords'    => $keywords,
//                'seo_image_alt'        => $legend,
//                'id_lang'              => $lang,
//            ), 'id_seoptimize_product_meta=' . $res[0]['id_seoptimize_product_meta']);
//        }
    }

    public function replaceKeyWithName($categories, $meta, $lang)
    {
        if (substr_count($meta, '{product}') > 0 && substr_count($meta, '{category}') > 0) {
            foreach ($categories as $category) {
                $product          = "SELECT * FROM `" . _DB_PREFIX_ . "product_lang` AS `pl`
                    JOIN `" . _DB_PREFIX_ . "category_product` AS `cp`
                    ON `pl`.`id_product`=`cp`.`id_product`
                    WHERE `pl`.`id_lang` = " . $lang['id_lang'] . "
                    AND `cp`.`id_category`=" . $category;
                $categoryName     = "SELECT `name` FROM `" . _DB_PREFIX_ . "category_lang`
                                WHERE `id_lang` = " . $lang['id_lang'] . "
                                AND `id_category`=" . $category;
                $categoryName     = Db::getInstance()->getRow($categoryName);
                $product          = Db::getInstance()->getRow($product);
                $replacedProduct  = str_replace('\'', '', str_replace('{product}',
                    $product['name'],
                    $meta));
                $replacedCategory = str_replace('\'', '', str_replace('{category}',
                    $categoryName['name'],
                    $replacedProduct));

                return $replacedCategory;
            }
        } elseif (substr_count($meta, '{category}') > 0) {
            foreach ($categories as $category) {
                $categoryName = "SELECT `name` FROM `" . _DB_PREFIX_ . "category_lang`
                                WHERE `id_lang` = " . $lang['id_lang'] . "
                                AND `id_category`=" . $category;
                $categoryName = Db::getInstance()->getRow($categoryName);

                return str_replace('\'', '', str_replace('{category}',
                    $categoryName['name'],
                    $meta));
            }
        } elseif (substr_count($meta, '{product}') > 0) {
            foreach ($categories as $category) {
                $product = "SELECT * FROM `" . _DB_PREFIX_ . "product_lang` AS `pl`
                    JOIN `" . _DB_PREFIX_ . "category_product` AS `cp`
                    ON `pl`.`id_product`=`cp`.`id_product`
                    WHERE `pl`.`id_lang` = " . $lang['id_lang'] . "
                    AND `cp`.`id_category`=" . $category . "";
                $product = Db::getInstance()->getRow($product);

                return str_replace('\'', '', str_replace('{product}',
                    $product['name'],
                    $meta));
            }
        } else {
            return $meta;
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
        if (Tools::getValue('configure') == $this->name) {
            $this->context->controller->addJS($this->_path . 'views/js/back.js');
            if (Tools::getValue('newRule') == false && Tools::getValue('newRule') != 1) {
                $this->context->controller->addCSS($this->_path . 'views/css/back.css');
            }
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

    /**
     * @param $product
     *
     * @return array|false|mysqli_result|null|PDOStatement|resource
     */
    protected function getProductImage($product)
    {
        $categoriesSql = Db::getInstance()->executeS("
                        SELECT `cl`.`name`
                        FROM `" . _DB_PREFIX_ . "category_lang` AS `cl`
                        join `" . _DB_PREFIX_ . "category_product` AS `cp`
                        on `cl`.`id_category`=`cp`.`id_category`
                        where `cp`.`id_product`=" . $product['id_product'] . "
                        group by `cl`.`name`");

        return $categoriesSql;
    }

    /**
     * @param $categories
     * @param $lang
     * @param $values
     */
    protected function updateProductMeta($categories, $lang, $values)
    {
        foreach ($categories as $category) {
            $products = "SELECT * FROM `" . _DB_PREFIX_ . "product_lang` AS `pl`
                    JOIN `" . _DB_PREFIX_ . "category_product` AS `cp`
                    ON `pl`.`id_product`=`cp`.`id_product`
                    WHERE `cp`.`id_category`=" . $category . "";
            $products = Db::getInstance()->executeS($products);

            foreach ($products as $product) {

                $res = Db::getInstance()->executeS("SELECT * FROM `" . _DB_PREFIX_ . "seoptimize_product_meta`
                       WHERE `id_product`=" . $product['id_product']);
//                if ($res == null ) {
                $id_image = Db::getInstance()->getRow("SELECT `id_image` FROM `" . _DB_PREFIX_ . "image`
                             WHERE `id_product` = " . (int)($product['id_product']) . "
                             AND `cover` = 1");
                $img      = new Image((int)$id_image['id_image'], (int)$lang['id_lang']);
                if ((bool)$res[0]['has_custom_alt'] == false) {
                    $img->legend = $values['seo_image_alt'][$lang['id_lang']];
                }
                $img->update();
                $p = new Product((int)$product['id_product'], false,
                    (int)$lang['id_lang']);
                if ((bool)$res[0]['has_custom_title'] == false) {
                    $p->meta_title = $values['seo_meta_title'][$lang['id_lang']];
                }
                if ((bool)$res[0]['has_custom_description'] == false) {
                    $p->meta_description = $values['seo_meta_description'][$lang['id_lang']];
                }
                if ((bool)$res[0]['has_custom_keywords'] == false) {
                    $p->meta_keywords = $values['seo_meta_keywords'][$lang['id_lang']];
                }
                $p->update();
//                }
            }
        }
    }

    protected function ajaxMetaToUse($productId, $field, $isChecked)
    {
        Db::getInstance()->update('seoptimize_product_meta', array($field => $isChecked == 'true' ? 1 : 0),
            'id_product=' . $productId);


        if ($isChecked =='true') {

            $res = Db::getInstance()->executeS("select * from `"._DB_PREFIX_."seoptimize_product_meta`
        where `id_product`=".$productId);
            $customMeta = Db::getInstance()->executeS("select * from `" . _DB_PREFIX_ . "seoptimize_product_meta_lang` 
        where `id_seoptimize_product_meta`=" . $res[0]['id_seoptimize_product_meta']);

            if ($field == 'has_custom_alt') {
                foreach ($customMeta as $item) {
                    $id_image    = Db::getInstance()->getRow("SELECT `id_image` FROM `" . _DB_PREFIX_ . "image`
                                 WHERE `id_product` = " . (int)($productId) . "
                                 AND `cover` = 1");
                    $img         = new Image((int)$id_image['id_image'], (int)$item['id_lang']);
                    $img->legend = $item['seo_image_alt'];
                    $img->update();
                }
            }
            foreach ($customMeta as $item) {
                $p = new Product((int)$productId, false,
                    (int)$item['id_lang']);
                if ($field == 'has_custom_title') {
                    $p->meta_title = $item['seo_meta_title'];
                }
                if ($field == 'has_custom_description') {
                    $p->meta_description = $item['seo_meta_description'];
                }
                if ($field == 'has_custom_keywords') {
                    $p->meta_keywords = $item['seo_meta_keywords'];
                }
                $p->update();
            }
        }else{
            $productCategories = Db::getInstance()->executeS("select * from `" . _DB_PREFIX_ . "category_product` 
        where `id_product`=" . $productId);
$categoryId = null;
            $rules = Db::getInstance()->executeS("select * from `" . _DB_PREFIX_ . "category_seo_rule` as `csr`
            LEFT JOIN `"._DB_PREFIX_."seo_rule_lang` as `srl`
            on `csr`.`id_seoptimize`=`srl`.`id_seoptimize`");
            foreach ($productCategories as $category){
                foreach ($rules as $rule){
                    if($rule['id_category']==$category['id_category']){
                        $categoryId=$rule['id_category'];
                    }
                }
            }

            if ($field == 'has_custom_alt') {
                foreach ($rules as $item) {
                    $id_image    = Db::getInstance()->getRow("SELECT `id_image` FROM `" . _DB_PREFIX_ . "image`
                                 WHERE `id_product` = " . (int)($productId) . "
                                 AND `cover` = 1");
                    $img         = new Image((int)$id_image['id_image'], (int)$item['id_lang']);
                    $img->legend = $item['seo_image_alt'];
                    $img->update();
                }
            }
            foreach ($rules as $item) {
                $p = new Product((int)$productId, false,
                    (int)$item['id_lang']);
                if ($field == 'has_custom_title') {
                    $p->meta_title = $item['seo_meta_title'];
                }
                if ($field == 'has_custom_description') {
                    $p->meta_description = $item['seo_meta_description'];
                }
                if ($field == 'has_custom_keywords') {
                    $p->meta_keywords = $item['seo_meta_keywords'];
                }
                $p->update();
            }
        }
    }
}

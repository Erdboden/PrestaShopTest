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

use PrestaShop\PrestaShop\Core\Product\ProductExtraContentFinder;

if (!defined('_PS_VERSION_')) {
    exit;
}

include_once _PS_MODULE_DIR_ . 'iconsforfeatures/classes/FeaturesIcons.php';

class Iconsforfeatures extends Module
{
    protected $config_form = false;
    protected $table_name = 'feature';

    public function __construct()
    {
        $this->name          = 'iconsforfeatures';
        $this->tab           = 'administration';
        $this->version       = '1.0.0';
        $this->author        = 'terranetpro.com';
        $this->need_instance = 0;
        $this->module_key    = '2bca8724a3b061fe7804b2f76c6764d9';

        /**
         * Set $this->bootstrap to true if your module is compliant with bootstrap (PrestaShop 1.6)
         */
        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->l('Icons for Features');
        $this->description = $this->l('Decorate your products features');

        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => _PS_VERSION_);
    }

    /**
     * Don't forget to create update methods if needed:
     * http://doc.prestashop.com/display/PS16/Enabling+the+Auto-Update
     */
    public function install()
    {
        Configuration::updateValue('ICONSFORFEATURES_LEFT_MARGIN', '0');
        Configuration::updateValue('ICONSFORFEATURES_RIGHT_MARGIN', '10');
        Configuration::updateValue('ICONSFORFEATURES_IMAGE_WIDTH', '0');
        Configuration::updateValue('ICONSFORFEATURES_IMAGE_HEIGHT', '0');
        Configuration::updateValue('ICONSFORFEATURES_FEATURES_TITLE', 'true');
        Configuration::updateValue('ICONSFORFEATURES_ALT', 'true');

        return parent::install() &&
            FeaturesIcons::installDB() &&
            $this->registerHook('header')
            && $this->registerHook('backOfficeHeader')
            && $this->registerHook('displayProductExtraContent');
    }

    public function uninstall()
    {
        Configuration::deleteByName('ICONSFORFEATURES_LEFT_MARGIN');
        Configuration::deleteByName('ICONSFORFEATURES_RIGHT_MARGIN');
        Configuration::deleteByName('ICONSFORFEATURES_IMAGE_WIDTH');
        Configuration::deleteByName('ICONSFORFEATURES_IMAGE_HEIGHT');
        Configuration::deleteByName('ICONSFORFEATURES_FEATURES_TITLE');
        Configuration::deleteByName('ICONSFORFEATURES_ALT');

        return parent::uninstall() && FeaturesIcons::uninstallDB();
    }

    /**
     * Load the configuration form
     */
    public function getContent()
    {
        /**
         * If values have been submitted in the form, process.
         */
        if (((bool)Tools::isSubmit('submitIconsforfeaturesModule')) == true) {
            $this->postProcess();
        }

        $this->context->smarty->assign('module_dir', $this->_path);

        if (count($this->_errors) > 0) {
            $this->displayErrors();
        }

        $output_messages = $this->context->smarty->fetch($this->local_path . 'views/templates/admin/configure.tpl');

        return $output_messages . $this->renderForm();
    }

    public function displayConfirmationMessage()
    {
        $this->context->smarty->assign('confirmations', $this->l('Configuration successfully saved'));
    }

    public function displayErrors()
    {
        $this->context->smarty->assign('errors', $this->_errors);
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
        $helper->submit_action = 'submitIconsforfeaturesModule';
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

    /**
     * Create the structure of your form.
     */
    protected function getConfigForm()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Settings'),
                    'icon'  => 'icon-cogs',
                ),
                'input'  => array(
                    array(
                        'col'   => 3,
                        'type'  => 'text',
                        'desc'  => $this->l('0 for original size or auto height'),
                        'name'  => 'ICONSFORFEATURES_IMAGE_HEIGHT',
                        'label' => $this->l('Image height (px)'),
                    ),
                    array(
                        'col'   => 3,
                        'type'  => 'text',
                        'desc'  => $this->l('0 for original size or auto width'),
                        'name'  => 'ICONSFORFEATURES_IMAGE_WIDTH',
                        'label' => $this->l('Image width (px)'),
                    ),
                    array(
                        'col'   => 3,
                        'type'  => 'text',
                        'desc'  => $this->l('Enter right margin'),
                        'name'  => 'ICONSFORFEATURES_RIGHT_MARGIN',
                        'label' => $this->l('Right margin (px)'),
                    ),
                    array(
                        'col'   => 3,
                        'type'  => 'text',
                        'desc'  => $this->l('Enter left margin'),
                        'name'  => 'ICONSFORFEATURES_LEFT_MARGIN',
                        'label' => $this->l('Left margin (px)'),
                    ),
                    array(
                        'col'     => 3,
                        'type'    => 'switch',
                        'desc'    => $this->l('Enable or disabled showing features title'),
                        'name'    => 'ICONSFORFEATURES_FEATURES_TITLE',
                        'label'   => $this->l('Show features title'),
                        'is_bool' => true,
                        'values'  => array(
                            array(
                                'id'    => 'feature_title_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id'    => 'feature_title_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                    array(
                        'col'     => 3,
                        'type'    => 'switch',
                        'desc'    => $this->l('Enable alt title for image'),
                        'name'    => 'ICONSFORFEATURES_ALT',
                        'label'   => $this->l('Image hint'),
                        'is_bool' => true,
                        'values'  => array(
                            array(
                                'id'    => 'alt_on',
                                'value' => true,
                                'label' => $this->l('Enabled')
                            ),
                            array(
                                'id'    => 'alt_off',
                                'value' => false,
                                'label' => $this->l('Disabled')
                            )
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }

    /**
     * Set values for the inputs.
     */
    protected function getConfigFormValues()
    {
        return array(
            'ICONSFORFEATURES_RIGHT_MARGIN'   => Configuration::get('ICONSFORFEATURES_RIGHT_MARGIN', null),
            'ICONSFORFEATURES_LEFT_MARGIN'    => Configuration::get('ICONSFORFEATURES_LEFT_MARGIN', null),
            'ICONSFORFEATURES_IMAGE_WIDTH'    => Configuration::get('ICONSFORFEATURES_IMAGE_WIDTH', null),
            'ICONSFORFEATURES_IMAGE_HEIGHT'   => Configuration::get('ICONSFORFEATURES_IMAGE_HEIGHT', null),
            'ICONSFORFEATURES_FEATURES_TITLE' => Configuration::get('ICONSFORFEATURES_FEATURES_TITLE', null),
            'ICONSFORFEATURES_ALT'            => Configuration::get('ICONSFORFEATURES_ALT', null),
        );
    }

    /**
     * Save form data.
     */
    protected function postProcess()
    {
        $form_values = $this->getConfigFormValues();

        foreach (array_keys($form_values) as $key) {
            if (ctype_digit(Tools::getValue($key)) || Tools::getValue($key) == "") {
                Configuration::updateValue($key, Tools::getValue($key));
            } else {
                $this->_errors[] = $this->l('Enter numbers only');
                break;
            }
        }
        if ($this->_errors == null) {
            $this->displayConfirmationMessage();
        }
    }

    /**
     * Add the CSS & JavaScript files you want to be added on the FO.
     */
    public function hookHeader()
    {
        $this->context->controller->addJS($this->_path . '/views/js/front.js');
    }

    public function hookDisplayProductExtraContent($params)
    {
        $array        = array();
        $featureIcons = array();
        $templateFile = 'module:iconsforfeatures/views/templates/hook/product-details.tpl';
        $product      = new Product($params['product']->id);
        $features     = $product->getFrontFeatures(Tools::getValue('id_lang'));

        foreach ($features as $feature) {
            $iconModel = $this->getModel($feature);

            if (!empty($iconModel)) {
                $icon = __PS_BASE_URI__ . 'img/feature_icons/' . $iconModel[0]['image'];
            } else {
                $icon = '';
            }
            array_push(
                $featureIcons,
                array(
                    'name'       => $feature['name'],
                    'value'      => $feature['value'],
                    'id_feature' => $feature['id_feature'],
                    'icon'       => $icon,
                )
            );
        }
        $this->context->smarty->assign('grouped_features', $featureIcons);

        $array[] = (new PrestaShop\PrestaShop\Core\Product\ProductExtraContent())
            ->setTitle('Product Details')
            ->setContent($this->fetch($templateFile));
        $this->context->controller->addJS($this->_path . 'views/js/front.js');

        return $array;
    }

    public function getModel($obj)
    {
        $sql = new DbQuery();
        $sql->select('*');
        $sql->from('features_icons', 'fi');
        $sql->where('fi.id_feature = ' . (int)$obj['id_feature']);

        return Db::getInstance()->executeS($sql);
    }
}

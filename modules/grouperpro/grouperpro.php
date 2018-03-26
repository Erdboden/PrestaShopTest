<?php
/**
 * 2016 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2016 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

use PrestaShop\PrestaShop\Core\Addon\Module\ModuleManagerBuilder;

if (!defined('_PS_VERSION_')) {
    exit;
}

class GrouperPro extends Module
{
    protected $tabs;

    public function __construct()
    {
        $this->name = 'grouperpro';
        $this->tab = 'administration';
        $this->author = 'Terranet';
        $this->version = '2.0.0';
        $this->ps_versions_compliancy = array('min' => '1.7', 'max' => '1.7');
        $this->bootstrap = true;
        $this->module_key = 'a71c8e842d5950ae590fcc0ac706bae0';

        parent::__construct();

        $this->displayName = $this->l('Grouper PRO');
        $this->description = $this->l(
            'The only module that gives you ability to build extended customers groups. Create Groups of Customers by: age, gender, location, registration, opt-ins, their shopping and carreers experience and much more... Grouper PRO allows you to schedule Groups re-build: Every Group may have its own schedule settings.'
        );

        $this->tabs = array(
            array(
                'class_name' => 'AdminGrouper',
                'name' => $this->trans('Grouper PRO', array(), 'Modules.GrouperPro.Admin'),
                'ParentClassName' => 'AdminParentCustomer',
                'visible' => true,
                'icon' => 'icon-signal'
            )
        );

        $this->confirmUninstall = $this->l('Are you sure you want to uninstall it?');
    }

    public function install()
    {
        Configuration::updateValue('GROUPER_CRON', false);

        if (Shop::isFeatureActive()) {
            Shop::setContext(Shop::CONTEXT_ALL);
        }

        return parent::install() && $this->createTables();
    }

    protected function createTables()
    {
        $result = true;
        $result &= Db::getInstance()->execute('
			CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . $this->name . '` (
				`id_grouperpro` int(10) unsigned NOT NULL AUTO_INCREMENT,
				`filter` longtext,
				`id_group` int(10),
				`id_shop` int(10) unsigned NOT NULL,
				PRIMARY KEY (`id_' . pSQL($this->name) . '`, `id_shop`)
			) ENGINE=' . _MYSQL_ENGINE_ . ' DEFAULT CHARSET=UTF8;
		')
            && Db::getInstance()->execute('
			CREATE TABLE IF NOT EXISTS `' . _DB_PREFIX_ . $this->name . '_cron` (
			`id_cronjob` int(10) unsigned NOT NULL AUTO_INCREMENT,
			`id_grouperpro` INTEGER(10) DEFAULT NULL,
			`active` TINYINT NOT NULL DEFAULT \'0\',
			`description` TEXT DEFAULT NULL,
			`task` TEXT DEFAULT NULL,
			`hour` INTEGER DEFAULT \'-1\',
			`day` INTEGER DEFAULT \'-1\',
			`month` INTEGER DEFAULT \'-1\',
			`day_of_week` INTEGER DEFAULT \'-1\',
			`id_shop` INTEGER DEFAULT \'0\',
			`id_shop_group` INTEGER DEFAULT \'0\',
			PRIMARY KEY(`id_cronjob`),
			INDEX (`id_grouperpro`))
			ENGINE=' . _MYSQL_ENGINE_ . ' default CHARSET=utf8');

        return $result;
    }

    public function uninstall()
    {
        Configuration::deleteByName('GROUPER_CRON');

        return (parent::uninstall() && $this->uninstallTab() && $this->deleteTables());
    }

    public function uninstallTab()
    {
        $parentClassName = 'AdminGrouper';

        return Tab::getInstanceFromClassName($parentClassName)->delete();
    }

    protected function deleteTables()
    {
        $sql = 'SELECT `id_cronjob`, `id_grouperpro` FROM `' . _DB_PREFIX_ . $this->name . '_cron`';
        $content_crons = Db::getInstance()->executeS($sql);
        if ($content_crons && count($content_crons) > 0) {
            foreach ($content_crons as $content_cron) {
                if (!empty($content_cron['id_grouperpro'])) {
                    Db::getInstance()->delete($this->name . '_cron', 'id_grouperpro = ' . (int)$content_cron['id_grouperpro']);
                }
                if (!empty($content_cron['id_cronjob'])) {
                    Db::getInstance()->delete('cronjobs', 'id_cronjob = ' . (int)$content_cron['id_cronjob']);
                }
            }
        }

        return Db::getInstance()->execute('
			DROP TABLE IF EXISTS `' . _DB_PREFIX_ . $this->name . '`;
			DROP TABLE IF EXISTS `' . _DB_PREFIX_ . $this->name . '_cron`;');
    }

    public function getContent()
    {
        if (Tools::isSubmit('submitCronSwitch') && Tools::isSubmit('GROUPER_CRON')) {
            Configuration::updateValue('GROUPER_CRON', Tools::getValue('GROUPER_CRON'));
        }

        return $this->renderSwitchFormCron();
    }

    protected function renderSwitchFormCron()
    {
        $helper = new HelperForm();
        $helper->show_toolbar = false;
        $helper->default_form_language = $this->context->language->id;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitCronSwitch';
        $helper->module = $this;
        $helper->tpl_vars = array(
            'fields_value' => array('GROUPER_CRON' => Configuration::get('GROUPER_CRON')),
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id
        );
        $helper_temp = $this->getConfigSwitchFormCron();

        $moduleManagerBuilder = ModuleManagerBuilder::getInstance();
        $moduleManager = $moduleManagerBuilder->build();

        if (!$moduleManager->isInstalled('cronjobs') || !$moduleManager->isEnabled('cronjobs')) {
            $added = array('type' => 'needmodule',
                'label' => $this->l('Attention!'),
                'desc' => $this->l('"Cron Tasks Manager" module is required, but not installed! Please install the module: "Cron Tasks Manager" by PrestaShop'),
                'name' => 'mod_inst',
                'values' => 'cronjobs');
            array_push($helper_temp['form']['input'], $added);
        }

        return $helper->generateForm(array($helper_temp));
    }

    protected function getConfigSwitchFormCron()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->l('Grouper Cron Settings'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->l('Enable cronjob'),
                        'name' => 'GROUPER_CRON',
                        'is_bool' => true,
                        'desc' => $this->l('Use this setting to disable or enable whole Grouper scheduled tasks'),
                        'values' => array(
                            array(
                                'id' => 'active_on',
                                'value' => true,
                            ),
                            array(
                                'id' => 'active_off',
                                'value' => false,
                            ),
                        ),
                    ),
                ),
                'submit' => array(
                    'title' => $this->l('Save'),
                ),
            ),
        );
    }
}

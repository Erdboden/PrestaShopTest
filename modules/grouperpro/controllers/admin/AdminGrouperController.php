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

if (!defined('_PS_VERSION_')) {
    exit;
}

require_once _PS_MODULE_DIR_ . 'grouperpro/classes/cron_manager.php';

class AdminGrouperController extends AdminController
{
    public $table = 'grouperpro';
    protected $_list = array();
    protected $_listTotal = 0;

    public function __construct()
    {
        $this->bootstrap = true;
        $this->table = 'grouperpro';
        $this->name = 'grouperpro';
        $this->className = '';
        $this->lang = false;

        parent::__construct();
    }

    public function postProcess()
    {
        if (Tools::isSubmit('submitCronAction') && Tools::isSubmit('id_grouperpro') && !empty(Tools::getValue('id_grouperpro'))) {
            if ((Tools::isSubmit('description') == true) &&
                (Tools::isSubmit('hour') == true) &&
                (Tools::isSubmit('day') == true) &&
                (Tools::isSubmit('month') == true) &&
                (Tools::isSubmit('day_of_week') == true)
            ) {
                $description = Tools::getValue('description');

                if (empty($description)) {
                    $description = $this->trans('Grouper cron service for Group: ' . Tools::getValue('id_grouperpro'), array(), 'Modules.Grouperpro.Admin');
                }

                $config = array('id_grouperpro' => (int)Tools::getValue('id_grouperpro'),
                    'hour' => Tools::getValue('hour'),
                    'active' => Tools::getValue('active'),
                    'day' => Tools::getValue('day'),
                    'month' => Tools::getValue('month'),
                    'day_of_week' => Tools::getValue('day_of_week'),
                    'description' => $description);

                if ($this->setCronGrouper($config)) {
                    $this->confirmations[] = $this->trans('Cron configuration was updated.', array(), 'Modules.Grouperpro.Admin');
                } else {
                    $this->errors[] = $this->trans('Error occurred diring updating cron configuration.', array(), 'Modules.Grouperpro.Admin');
                }
            } else {
                $this->errors[] = $this->trans('Error occurred diring updating cron configuration.', array(), 'Modules.Grouperpro.Admin');
            }
        }

        if (Tools::isSubmit('submitAddForm') || Tools::isSubmit('submitUpdateForm')) {
            if (!empty(Tools::getValue('filterName')) && Validate::isGenericName(Tools::getValue('filterName')) && Tools::strlen(Tools::getValue('filterName')) < 32) {
                $filter = array();

                if (!empty(Tools::getValue('id_gender'))) {
                    $filter['id_gender'] = Tools::getValue('id_gender');
                }
                if (!empty(Tools::getValue('birthday_from'))) {
                    if (is_numeric(Tools::getValue('birthday_from'))) {
                        $filter['birthday_from'] = (int)Tools::getValue('birthday_from');
                    } else {
                        $this->displayWarning($this->trans('User age must be an integer: ', array(), 'Modules.Grouperpro.Admin') . Tools::getValue('birthday_from'));
                    }
                }
                if (!empty(Tools::getValue('birthday_to'))) {
                    if (is_numeric(Tools::getValue('birthday_to'))) {
                        $filter['birthday_to'] = (int)Tools::getValue('birthday_to');
                    } else {
                        $this->displayWarning($this->trans('User age must be an integer: ', array(), 'Modules.Grouperpro.Admin') . Tools::getValue('birthday_to'));
                    }
                }
                if (!empty(Tools::getValue('registration_from'))) {
                    $filter['registration_from'] = AdminGrouperController::checkMergeDates(Tools::getValue('registration_from'));
                    if (empty($filter['registration_from'])) {
                        $this->displayWarning($this->trans('Invalid registration date [From]: ', array(), 'Modules.Grouperpro.Admin') . Tools::getValue('registration_from'));
                    }
                }
                if (!empty(Tools::getValue('registration_to'))) {
                    $filter['registration_to'] = AdminGrouperController::checkMergeDates(Tools::getValue('registration_to'));
                    if (empty($filter['registration_to'])) {
                        $this->displayWarning($this->trans('Invalid registration date [To]: ', array(), 'Modules.Grouperpro.Admin') . Tools::getValue('registration_to'));
                    }
                }
                if (!empty(Tools::getValue('last_login'))) {
                    $filter['last_login'] = AdminGrouperController::checkMergeDates(Tools::getValue('last_login'));
                    if (empty($filter['last_login'])) {
                        $this->displayWarning($this->trans('Invalid Last Login date: ', array(), 'Modules.Grouperpro.Admin') . Tools::getValue('last_login'));
                    }
                }
                $filter['auth_active'] = (int)Tools::getValue('auth_active');
                $filter['newsletter'] = (int)Tools::getValue('newsletter');
                $filter['optin'] = (int)Tools::getValue('optin');
                $filter['groupBox'] = Tools::getValue('groupBox');
                $filter['id_default_group'] = Tools::getValue('id_default_group');
                $filter['user_location'] = Tools::getValue('user_location');
                $filter['user_language'] = Tools::getValue('user_language');
                if (!empty(Tools::getValue('num_orders'))) {
                    $filter['num_orders'] = (int)Tools::getValue('num_orders');
                }
                $filter['id_carrier'] = Tools::getValue('id_carrier');
                $filter['id_shop'] = Tools::getValue('id_shop');
                if (!empty(Tools::getValue('id_grouperpro'))) {
                    $filter['id_grouperpro'] = Tools::getValue('id_grouperpro');
                }
                if (!empty(Tools::getValue('id_group'))) {
                    $filter['id_group'] = Tools::getValue('id_group');
                }
                if (!empty(Tools::getValue('order_from'))) {
                    $filter['order_from'] = Tools::getValue('order_from');
                }

                if (!empty(Tools::getValue('order_to')) || Validate::isInt(Tools::getValue('order_to'))) {
                    $filter['order_to'] = Tools::getValue('order_to');
                }

                if (!empty(Tools::getValue('order_status'))) {
                    $filter['order_status'] = Tools::getValue('order_status');
                }

                if (!empty(Tools::getValue('order_sum_from'))) {
                    $filter['order_sum_from'] = Tools::getValue('order_sum_from');
                }
                if (!empty(Tools::getValue('order_sum_to'))) {
                    $filter['order_sum_to'] = Tools::getValue('order_sum_to');
                }
                $filter['order_currency'] = Tools::getValue('order_currency');
                $filter['order_sum_status'] = Tools::getValue('order_sum_status');

                if (Tools::isSubmit('submitAddForm')) {
                    $this->addFilterConfigure($filter);
                } else {
                    $this->addFilterConfigure($filter, 'update');
                }
            } else {
                if (!empty(Tools::getValue('filterName'))) {
                    if (Tools::strlen(Tools::getValue('filterName')) >= 32) {
                        $this->errors[] = sprintf(Tools::displayError('Name must have less than 32 symbols'));
                    } else {
                        $this->errors[] = sprintf(Tools::displayError('Invalid name "%s"'), Tools::getValue('filterName'));
                    }
                } else {
                    $this->errors[] = $this->trans('Name can not be empty', array(), 'Modules.Grouperpro.Admin');
                }
            }
        }

        if (Tools::isSubmit('deletegrouperpro') && Tools::getValue('id_grouperpro')) {
            if ($this->removeGrouperItem(Tools::getValue('id_grouperpro'))) {
                $this->confirmations[] = $this->trans('Group has been removed.', array(), 'Modules.Grouperpro.Admin');
            }
        }

        if (Tools::isSubmit('submitBulkdeletegrouperpro') && Tools::getValue('grouperproBox')) {
            if (is_array(Tools::getValue('grouperproBox')) && count(Tools::getValue('grouperproBox')) > 0) {
                $error = '';
                foreach (Tools::getValue('grouperproBox') as $item) {
                    if (!$this->removeGrouperItem((int)$item)) {
                        $error .= $item;
                    }
                }
                if (empty($error)) {
                    $this->confirmations[] = $this->trans('Groups have been removed.', array(), 'Modules.Grouperpro.Admin');
                } else {
                    $this->errors[] = $this->trans('An error occurred during groups deletion. ' . $error, array(), 'Modules.Grouperpro.Admin');
                }
            }
        }

        if (Tools::isSubmit('submitBulkgenerationgrouperpro') && Tools::getValue('grouperproBox')) {
            $groupList = Tools::getValue('grouperproBox');
            if (is_array($groupList) && count($groupList) > 0) {
                $error_gr = 0;
                foreach ($groupList as $id_group) {
                    if (!$this->processGenerationGroup((int)$id_group)) {
                        $error_gr = $id_group;
                        break;
                    }
                }
                if (!$error_gr) {
                    Tools::redirectAdmin(self::$currentIndex . '&conf=4&token=' . $this->token);
                } else {
                    $this->errors[] = $this->trans('An error occurred during rebuilding groups. id_group: ' . $error_gr, array(), 'Modules.Grouperpro.Admin');
                }
            }
        }

        if (Tools::isSubmit('generationgrouperpro') && Tools::getValue('id_grouperpro')) {
            $groupList = Tools::getValue('id_grouperpro');
            if (is_numeric($groupList) && $groupList > 0) {
                $result = $this->processGenerationGroup((int)$groupList);
                if ($result) {
                    Tools::redirectAdmin(self::$currentIndex . '&conf=4&token=' . $this->token);
                } else {
                    $this->errors[] = $this->trans('An error occurred during rebuilding group.', array(), 'Modules.Grouperpro.Admin');
                }
            }
        }
    }

    public function processGenerationGroup($groupList)
    {
        $Group = new GrouperCronManager();

        return $Group->generationGroup($groupList);
    }

    public function setCronGrouper($configuration = array())
    {
        if (isset($configuration['id_grouperpro']) && is_numeric($configuration['id_grouperpro']) && $configuration['id_grouperpro'] > 0) {
            $isFrequencyValid = $this->isFrequencyValid($configuration['hour'], $configuration['day'], $configuration['month'], $configuration['day_of_week']);
            if ($isFrequencyValid) {
                $this->_path = __PS_BASE_URI__ . 'modules/' . $this->name . '/';
                $module_url = Tools::getProtocol(Tools::usingSecureMode()) . $_SERVER['HTTP_HOST'] . $this->_path;
                $cron = urlencode($module_url . 'cron.php' . '?grouperpro=' . (int)$configuration['id_grouperpro'] . '&token=' . Tools::substr(Tools::encrypt('grouperpro/index'), 0, 10));

                $id_shop = (int)Context::getContext()->shop->id;
                $id_shop_group = (int)Context::getContext()->shop->id_shop_group;

                $InsertCronVar = array(
                    'description' => $configuration['description'],
                    'task' => $cron,
                    'hour' => $configuration['hour'],
                    'day' => $configuration['day'],
                    'month' => $configuration['month'],
                    'day_of_week' => $configuration['day_of_week'],
                    'active' => ($configuration['active']) ? 1 : 0,
                    'id_shop' => $id_shop,
                    'id_shop_group' => $id_shop_group,
                );

                $CronData = array_merge($InsertCronVar, array('id_grouperpro' => (int)$configuration['id_grouperpro'], 'task' => $cron));
                $sql = 'SELECT `id_grouperpro`, `id_cronjob`, `active` FROM `' . _DB_PREFIX_ . $this->name . '_cron` WHERE `id_grouperpro` = "' . (int)$configuration['id_grouperpro'] . '" ';
                $ExistCron = Db::getInstance()->getRow($sql);
                $CronId = 0;
                if (!$ExistCron || empty($ExistCron)) {
                    Db::getInstance()->insert($this->table . '_cron', $CronData, false, true);
                } else {
                    $result = Db::getInstance()->update($this->table . '_cron', $CronData, '`id_grouperpro` = "' . (int)$configuration['id_grouperpro'] . '"');
                    if ($result) {
                        $CronId = (int)$ExistCron['id_cronjob'];
                    }
                }

                if ($CronId == 0 && $configuration['active']) {
                    $query = Db::getInstance()->insert('cronjobs', $InsertCronVar, false, true);

                    if ($query != false) {
                        $cronJBId = (int)Db::getInstance()->Insert_ID();
                        $result = Db::getInstance()->update($this->table . '_cron', array('id_cronjob' => $cronJBId), '`id_grouperpro` = "' . (int)$configuration['id_grouperpro'] . '"');
                        if ($result) {
                            $this->confirmations[] = $this->trans('A new task has been created.', array(), 'Modules.Grouperpro.Admin');
                        }

                        return $result;
                    }

                    $this->showCantCreateTaskError();

                    return false;
                }

                if ($CronId > 0 && $configuration['active']) {
                    $sql = 'SELECT `id_cronjob` FROM `' . _DB_PREFIX_ . 'cronjobs` WHERE `id_cronjob` = "' . (int)$CronId . '" ';
                    $ExistCron = Db::getInstance()->getRow($sql);
                    if ($ExistCron) {
                        $query = Db::getInstance()->update('cronjobs', $InsertCronVar, '`id_cronjob` = "' . (int)$CronId . '"');
                        Db::getInstance()->update($this->table . '_cron', $InsertCronVar, '`id_grouperpro` = "' . (int)$configuration['id_grouperpro'] . '"');
                    } else {
                        $query = Db::getInstance()->insert('cronjobs', array_merge($InsertCronVar, array('id_cronjob' => (int)$CronId)), false, true);
                        Db::getInstance()->update($this->table . '_cron', $InsertCronVar, '`id_grouperpro` = "' . (int)$configuration['id_grouperpro'] . '"');
                    }

                    if ($query) {
                        return $query;
                    }
                    $this->showCantCreateTaskError();

                    return false;
                }

                if ($CronId > 0) {
                    Db::getInstance()->delete('cronjobs', 'id_cronjob = ' . $CronId);
                }

                $query = Db::getInstance()->update($this->table . '_cron', $InsertCronVar, '`id_grouperpro` = "' . (int)$configuration['id_grouperpro'] . '"');

                if ($query) {
                    return $query;
                }

                $this->showCantCreateTaskError();

                return false;
            }

            return false;
        }

        return false;
    }

    protected function getCronConfiguration($uidCJobs = 0)
    {
        $Configuration = array();
        if (!empty($uidCJobs) && is_numeric($uidCJobs) && $uidCJobs > 0) {
            $sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'grouperpro_cron` WHERE `id_grouperpro` = "' . (int)$uidCJobs . '" ';
            $CronResult = Db::getInstance()->getRow($sql);
            if ($CronResult && count($CronResult) > 0) {
                $Configuration = array(
                    'id_grouperpro' => (int)$CronResult['id_grouperpro'],
                    'active' => ($CronResult['active']) ? 1 : 0,
                    'description' => $CronResult['description'],
                    'hour' => (int)$CronResult['hour'],
                    'day' => (int)$CronResult['day'],
                    'month' => (int)$CronResult['month'],
                    'day_of_week' => (int)$CronResult['day_of_week'],
                );
            } else {
                $Configuration = array(
                    'id_grouperpro' => (int)$uidCJobs,
                    'active' => 0,
                    'description' => '',
                    'hour' => '',
                    'day' => '',
                    'month' => '',
                    'day_of_week' => '',
                );
            }
        }

        return $Configuration;
    }

    protected function isFrequencyValid($hour, $day, $month, $day_of_week)
    {
        $success = true;

        if ((($hour >= -1) && ($hour < 24)) == false) {
            $success = false;
            $this->errors[] = $this->trans('The value you chose for the hour is not valid. It should be between 00:00 and 23:59.', array(), 'Modules.Grouperpro.Admin');
        }
        if ((($day >= -1) && ($day <= 31)) == false) {
            $success = false;
            $this->errors[] = $this->trans('The value you chose for the day is not valid.', array(), 'Modules.Grouperpro.Admin');
        }
        if ((($month >= -1) && ($month <= 31)) == false) {
            $success = false;
            $this->errors[] = $this->trans('The value you chose for the month is not valid.', array(), 'Modules.Grouperpro.Admin');
        }
        if ((($day_of_week >= -1) && ($day_of_week < 7)) == false) {
            $success = false;
            $this->errors[] = $this->trans('The value you chose for the day of the week is not valid.', array(), 'Modules.Grouperpro.Admin');
        }

        return $success;
    }

    public function initContent()
    {
        if (!$this->viewAccess()) {
            $this->errors[] = $this->trans('You do not have permission to view this.', array(), 'Modules.Grouperpro.Admin');

            return;
        }

        if (Configuration::get('GROUPER_CRON')) {
            $this->_path = __PS_BASE_URI__ . 'modules/' . $this->name . '/';
            $module_url = Tools::getProtocol(Tools::usingSecureMode()) . $_SERVER['HTTP_HOST'] . $this->_path;
            $cron = $module_url . 'cron.php' . '?token=' . Tools::substr(Tools::encrypt('grouperpro/index'), 0, 10);

            if ($this->display == 'edit' && Tools::isSubmit('id_grouperpro') && Tools::getValue('id_grouperpro')) {
                $cron .= '&grouperpro=' . (int)Tools::getValue('id_grouperpro');
            }

            $this->informations[] = $this->trans('Comment: if standard Prestashop module - "Cron tasks manager" don\'t work. ', array(), 'Modules.Grouperpro.Admin');
            $this->informations[] = $this->trans('URL for external cronjob:', array(), 'Modules.Grouperpro.Admin');
            $this->informations[] = $this->trans($cron, array(), 'Modules.Grouperpro.Admin');
        }

        $this->getLanguages();
        $this->initToolbar();
        $this->initTabModuleList();
        $this->initPageHeaderToolbar();

        $this->context = Context::getContext();

        if (Tools::isSubmit('exportgrouperpro') && Tools::getValue('id_grouperpro')) {
            $id_group = (int)Tools::getValue('id_grouperpro');
            $groupInf = $this->generationXLSFile($id_group);
            $this->context->smarty->assign('download_path', _MODULE_DIR_ . $this->name . '/export/');
            $this->context->smarty->assign('download_name', $groupInf);
            $this->content .= $this->context->smarty->fetch(_PS_MODULE_DIR_ . $this->name . '/' . 'views/templates/admin/download.tpl');
        }

        if (Tools::isSubmit('submitBulkexportgrouperpro') && Tools::getValue('grouperproBox')) {
            if (is_array(Tools::getValue('grouperproBox')) && count(Tools::getValue('grouperproBox')) > 0) {
                foreach (Tools::getValue('grouperproBox') as $item) {
                    if (!empty($item) && is_numeric($item)) {
                        $groupInf[] = $this->generationXLSFile((int)$item);
                    }
                }
                if (!empty($groupInf)) {
                    $this->context->smarty->assign('download_path', _MODULE_DIR_ . $this->name . '/export/');
                    $this->context->smarty->assign('download_name', $groupInf);
                    $this->content .= $this->context->smarty->fetch(_PS_MODULE_DIR_ . $this->name . '/' . 'views/templates/admin/download.tpl');
                }
            }
        }

        if ($this->display == 'edit' || $this->display == 'add') {
            $this->content .= $this->renderForm();
            if ($this->display == 'edit' && Configuration::get('GROUPER_CRON')) {
                $this->content .= $this->renderFormSelectCron();
            }
        } elseif ($this->display == 'view') {
            if (Tools::isSubmit('id_grouperpro') && Tools::getValue('id_grouperpro')) {
                $uid_grouper = (int)Tools::getValue('id_grouperpro');

                if ($uid_grouper > 0) {
                    $urlRedirectView = $this->context->link->getAdminLink('AdminGroups');
                    if (!empty($urlRedirectView)) {
                        $resUidRedirect = $this->getFilterFieldIdGroup($uid_grouper);
                        if ($resUidRedirect && !empty($resUidRedirect[0]['id_group']) && $resUidRedirect[0]['id_group'] > 0) {
                            $urlRedirectView .= '&id_group=' . (int)$resUidRedirect[0]['id_group'] . '&viewgroup';
                            Tools::redirectAdmin($urlRedirectView);
                        } else {
                            $this->errors[] = $this->trans('Unable receive the reference', array(), 'Modules.Grouperpro.Admin');
                        }
                    } else {
                        $this->errors[] = $this->trans('Unable receive the reference', array(), 'Modules.Grouperpro.Admin');
                    }
                }
            } else {
                $this->errors[] = $this->trans('Wrong query.', array(), 'Modules.Grouperpro.Admin');
            }
        } elseif (!$this->ajax) {
            $this->content .= $this->renderList();
        }

        $this->context->smarty->assign(array(
            'maintenance_mode' => !(bool)Configuration::get('PS_SHOP_ENABLE'),
            'content' => $this->content,
            'lite_display' => $this->lite_display,
            'url_post' => self::$currentIndex . '&token=' . $this->token,
            'show_page_header_toolbar' => $this->show_page_header_toolbar,
            'page_header_toolbar_title' => $this->page_header_toolbar_title,
            'title' => $this->page_header_toolbar_title,
            'toolbar_btn' => $this->page_header_toolbar_btn,
            'page_header_toolbar_btn' => $this->page_header_toolbar_btn,
        ));
    }

    public function renderList()
    {
        $this->addRowAction('edit');
        $this->addRowAction('generation');
        $this->addRowAction('export');
        $this->addRowAction('view');
        $this->addRowAction('delete');

        $this->bulk_actions = array(
            'delete' => array(
                'text' => $this->trans('Delete selected', array(), 'Modules.Grouperpro.Admin'),
                'confirm' => $this->trans('Delete selected items?', array(), 'Modules.Grouperpro.Admin'),
                'icon' => 'icon-trash',
            ),
            'generation' => array(
                'text' => $this->trans('Rebuild Groups', array(), 'Modules.Grouperpro.Admin'),
                'confirm' => $this->trans('Re-build groups. You are sure?', array(), 'Modules.Grouperpro.Admin'),
            ),
            'export' => array(
                'text' => $this->trans('Export Groups', array(), 'Modules.Grouperpro.Admin'),
                'confirm' => $this->trans('Export groups. You are sure?', array(), 'Modules.Grouperpro.Admin'),
            ),
        );

        $this->fields_list = array(
            'id_grouperpro' => array(
                'title' => $this->trans('ID', array(), 'Modules.Grouperpro.Admin'),
                'align' => 'text-center',
                'class' => 'fixed-width-xs',
                'search' => false,
            ),
            'name' => array(
                'title' => $this->trans('Name', array(), 'Modules.Grouperpro.Admin'),
                'class' => 'fixed-width-md',
                'search' => false,
            ),
            'filter' => array(
                'title' => $this->trans('Attributes', array(), 'Modules.Grouperpro.Admin'),
                'search' => false,
            ),
        );

        if (!($this->fields_list && is_array($this->fields_list))) {
            return false;
        }

        $this->getGrouperList();

        $helper = new HelperList();

        if (!is_array($this->_list)) {
            $this->displayWarning($this->trans('Bad query', array(), 'Modules.Grouperpro.Admin') . '<br />' . htmlspecialchars($this->_list_error));

            return false;
        }

        $this->setHelperDisplay($helper);
        $helper->_default_pagination = $this->_default_pagination;
        $helper->_pagination = $this->_pagination;
        $helper->tpl_vars = $this->getTemplateListVars();
        $helper->tpl_delete_link_vars = $this->tpl_delete_link_vars;
        $helper->simple_header = false;

        foreach ($this->actions_available as $action) {
            if (!in_array($action, $this->actions) && isset($this->$action) && $this->$action) {
                $this->actions[] = $action;
            }
        }

        $list = $helper->generateList($this->_list, $this->fields_list);

        return $list;
    }

    protected function getGrouperList()
    {
        $returnData = array();

        $sql = 'SELECT * FROM `' . _DB_PREFIX_ . $this->table . '` ';
        $content = Db::getInstance()->executeS($sql);

        $GroupListConv = self::getGroupList();
        $this->_listTotal = count($content);

        $CarrierList = Carrier::getCarriers($this->context->language->id);
        $CarrierVal = array();
        if (!empty($CarrierList) && is_array($CarrierList)) {
            foreach ($CarrierList as $item) {
                $CarrierVal[$item['id_carrier']] = $item['name'];
            }
        }

        $ShopList = Shop::getShops();
        $k = 0;

        foreach ($content as $item) {
            $returnData[$k]['id_grouperpro'] = $item['id_grouperpro'];
            $returnData[$k]['name'] = $GroupListConv[$item['id_group']]['name'];
            if (!empty($item['filter'])) {
                $filterDecode = json_decode($item['filter']);

                $filterBlock = array();
                foreach ($filterDecode as $itemDecodeKey => $itemDecode) {
                    if (empty($itemDecode)) {
                        continue;
                    }

                    switch ($itemDecodeKey) {
                        case 'id_gender':
                            $Gender = $this->getGenders($itemDecode);
                            foreach ($Gender as $item) {
                                $filterBlock[] = $this->trans('Gender: ', array(), 'Modules.Grouperpro.Admin') . $item['label'];
                            }
                            break;
                        case 'birthday_from':
                            $filterBlock[] = $this->trans('Age from: ', array(), 'Modules.Grouperpro.Admin') . $itemDecode;
                            break;
                        case 'birthday_to':
                            $filterBlock[] = $this->trans('Age to: ', array(), 'Modules.Grouperpro.Admin') . $itemDecode;
                            break;
                        case 'registration_from':
                            $filterBlock[] = $this->trans('SignUp from: ', array(), 'Modules.Grouperpro.Admin') . $itemDecode;
                            break;
                        case 'registration_to':
                            $filterBlock[] = $this->trans('SignUp to: ', array(), 'Modules.Grouperpro.Admin') . $itemDecode;
                            break;
                        case 'last_login':
                            $filterBlock[] = $this->trans('Last login: ', array(), 'Modules.Grouperpro.Admin') . $itemDecode;
                            break;
                        case 'auth_active':
                            $filterBlock[] = ($itemDecode > 0 && $itemDecode == 1) ? $this->trans('Active', array(), 'Modules.Grouperpro.Admin') : $this->trans('Locked', array(), 'Modules.Grouperpro.Admin');
                            break;
                        case 'newsletter':
                            $filterBlock[] = ($itemDecode > 0 && $itemDecode == 1) ? $this->trans('Newsletter Enabled', array(), 'Modules.Grouperpro.Admin') : $this->trans('Newsletter Disabled', array(), 'Modules.Grouperpro.Admin');
                            break;
                        case 'optin':
                            $filterBlock[] = ($itemDecode > 0 && $itemDecode == 1) ? $this->trans('Opt-in Enabled', array(), 'Modules.Grouperpro.Admin') : $this->trans('Opt-in Disabled', array(), 'Modules.Grouperpro.Admin');
                            break;
                        case 'groupBox':
                            $filterBlockGroupSel = array();
                            if (is_array($itemDecode)) {
                                foreach ($itemDecode as $item) {
                                    $filterBlockGroupSel[] = $GroupListConv[$item]['name'];
                                }
                            }
                            if (!empty($filterBlockGroupSel)) {
                                $filterBlock[] = $this->trans('Belongs to: ', array(), 'Modules.Grouperpro.Admin') . join(', ', $filterBlockGroupSel);
                            }
                            break;
                        case 'id_default_group':
                            $filterBlockGroupSel = array();
                            if (is_array($itemDecode)) {
                                foreach ($itemDecode as $item) {
                                    $filterBlockGroupSel[] = $GroupListConv[$item]['name'];
                                }
                            }
                            if (!empty($filterBlockGroupSel)) {
                                $filterBlock[] = $this->trans('Default Group: ', array(), 'Modules.Grouperpro.Admin') . join(', ', $filterBlockGroupSel);
                            }
                            break;
                        case 'user_location':
                            $filterBlockCountrySel = array();
                            if (is_array($itemDecode)) {
                                foreach ($itemDecode as $item) {
                                    $filterBlockCountrySel[] = Country::getNameById($this->context->language->id, (int)$item);
                                }
                            }
                            if (!empty($filterBlockCountrySel)) {
                                $filterBlock[] = $this->trans('Location: ', array(), 'Modules.Grouperpro.Admin') . join(', ', $filterBlockCountrySel);
                            }
                            break;
                        case 'user_language':
                            $filterBlockLangSel = array();
                            if (is_array($itemDecode)) {
                                foreach ($itemDecode as $item) {
                                    $lang = Language::getLanguage((int)$item);
                                    $filterBlockLangSel[] = $lang['iso_code'];
                                }
                            }
                            if (!empty($filterBlockCountrySel)) {
                                $filterBlock[] = $this->trans('Language: ', array(), 'Modules.Grouperpro.Admin') . join(', ', $filterBlockLangSel);
                            }
                            break;
                        case 'id_carrier':
                            $filterBlockCarrierSel = array();
                            if (is_array($itemDecode)) {
                                foreach ($itemDecode as $item) {
                                    if (!empty($CarrierVal[$item])) {
                                        $filterBlockCarrierSel[] = $CarrierVal[$item];
                                    }
                                }
                            }
                            if (!empty($filterBlockCountrySel)) {
                                $filterBlock[] = $this->trans('Carrier: ', array(), 'Modules.Grouperpro.Admin') . join(', ', $filterBlockCarrierSel);
                            }
                            break;
                        case 'id_shop':
                            $filterBlockShopSel = array();
                            if (is_array($itemDecode)) {
                                foreach ($itemDecode as $item) {
                                    if (!empty($CarrierVal[$item])) {
                                        $filterBlockShopSel[] = $ShopList[$item]['name'];
                                    }
                                }
                            }
                            if (!empty($filterBlockCountrySel)) {
                                $filterBlock[] = $this->trans('Shop: ', array(), 'Modules.Grouperpro.Admin') . join(', ', $filterBlockShopSel);
                            }
                            break;
                        case 'order_from':
                            $filterBlock[] = ($itemDecode) ? $this->trans('Has orders min', array(), 'Modules.Grouperpro.Admin') . $itemDecode : '';
                            break;
                        case 'order_to':
                            $filterBlock[] = ($itemDecode) ? $this->trans('Has orders max', array(), 'Modules.Grouperpro.Admin') . $itemDecode : '';
                            break;
                        case 'order_status':
                            $OrderStatuses = $this->getStatusesOrderIn($this->context->language->id, $itemDecode);
                            $st_name = array();
                            foreach ($OrderStatuses as $item) {
                                $st_name[] = $item['name'];
                            }
                            $filterBlock[] = ($itemDecode) ? $this->trans('Of status', array(), 'Modules.Grouperpro.Admin') . join(', ', $st_name) : '';
                            break;
                    }
                }
                $returnData[$k]['filter'] = join(' | ', $filterBlock);
            }
            $k++;
        }
        $this->_list = $returnData;
        dump($this->_list);
        exit();
    }

    protected static function getGroupList()
    {
        $GroupListConv = array();
        $GroupList = Group::getGroups(Context::getContext()->language->id);
        if (!empty($GroupList)) {
            foreach ($GroupList as $item) {
                $GroupListConv[$item['id_group']] = $item;
            }
        }

        return $GroupListConv;
    }

    protected function getConfigSwitchFormCron()
    {
        return array(
            'form' => array(
                'legend' => array(
                    'title' => $this->trans('Grouper Cron Settings', array(), 'Modules.Grouperpro.Admin'),
                    'icon' => 'icon-cogs',
                ),
                'input' => array(
                    array(
                        'type' => 'switch',
                        'label' => $this->trans('Enable cronjob', array(), 'Modules.Grouperpro.Admin'),
                        'name' => 'GROUPER_CRON',
                        'is_bool' => true,
                        'desc' => $this->trans('Use this setting to disable or enable whole Grouper scheduled tasks', array(), 'Modules.Grouperpro.Admin'),
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
                    'title' => $this->trans('Save', array(), 'Modules.Grouperpro.Admin'),
                ),
            ),
        );
    }

    public function renderFormSelectCron()
    {
        if (!Module::isInstalled('cronjobs') || !Module::isEnabled('cronjobs')) {
            $formHelper = array(
                'form' => array(
                    'legend' => array(
                        'title' => $this->trans('Cron Settings', array(), 'Modules.Grouperpro.Admin'),
                        'icon' => 'icon-cogs',
                    ),
                    'input' => array(
                        array('type' => 'needmodule',
                            'label' => $this->trans('Attention!', array(), 'Modules.Grouperpro.Admin'),
                            'name' => 'mod_inst',
                            'values' => 'cronjobs'),
                    ),
                ),
            );
        } else {
            $formHelper = array(
                'form' => array(
                    'legend' => array(
                        'title' => $this->trans('Particular Group Cron Settings', array(), 'Modules.Grouperpro.Admin'),
                        'icon' => 'icon-cogs',
                    ),
                    'input' => array(
                        array(
                            'type' => 'hidden',
                            'name' => 'id_grouperpro',
                            'col' => '4',
                        ),
                        array(
                            'type' => 'switch',
                            'label' => $this->trans('Enable cronjob', array(), 'Modules.Grouperpro.Admin'),
                            'name' => 'active',
                            'is_bool' => true,
                            'desc' => $this->trans('Allow group re-build by a cronjob task', array(), 'Modules.Grouperpro.Admin'),
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
                        array(
                            'type' => 'text',
                            'label' => $this->trans('Task description', array(), 'Modules.Grouperpro.Admin'),
                            'name' => 'description',
                            'col' => '4',
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'hour',
                            'label' => $this->trans('Task frequency', array(), 'Modules.Grouperpro.Admin'),
                            'desc' => $this->trans('At what time should this task be executed?', array(), 'Modules.Grouperpro.Admin'),
                            'options' => array(
                                'query' => $this->getHoursFormOptions(),
                                'id' => 'id', 'name' => 'name',
                            ),
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'day',
                            'desc' => $this->trans('On which day of the month should this task be executed?', array(), 'Modules.Grouperpro.Admin'),
                            'options' => array(
                                'query' => $this->getDaysFormOptions(),
                                'id' => 'id', 'name' => 'name',
                            ),
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'month',
                            'desc' => $this->trans('On what month should this task be executed?', array(), 'Modules.Grouperpro.Admin'),
                            'options' => array(
                                'query' => $this->getMonthsFormOptions(),
                                'id' => 'id', 'name' => 'name',
                            ),
                        ),
                        array(
                            'type' => 'select',
                            'name' => 'day_of_week',
                            'desc' => $this->trans('On which day of the week should this task be executed?', array(), 'Modules.Grouperpro.Admin'),
                            'options' => array(
                                'query' => $this->getDaysofWeekFormOptions(),
                                'id' => 'id', 'name' => 'name',
                            ),
                        ),
                    ),
                    'submit' => array(
                        'title' => $this->trans('Save', array(), 'Modules.Grouperpro.Admin'),
                    ),
                ),
            );
        }

        $helper = new HelperForm();
        $this->setHelperDisplay($helper);
        $helper->module = $this;
        $helper->show_toolbar = false;
        $helper->default_form_language = $this->context->language->id;
        $helper->identifier = $this->identifier;
        $helper->submit_action = 'submitCronAction';
        $helper->currentIndex = self::$currentIndex . '&id_grouperpro=' . (int)Tools::getValue('id_grouperpro') . '&updategrouperpro' . '&token=' . $this->token;
        $helper->token = $this->token;
        if (!Module::isInstalled('cronjobs') || !Module::isEnabled('cronjobs')) {
            $fields_value = array();
        } else {
            $fields_value = $this->getCronConfiguration(Tools::getValue('id_grouperpro'));
        }

        $helper->tpl_vars = array(
            'fields_value' => $fields_value,
            'languages' => $this->context->controller->getLanguages(),
            'id_language' => $this->context->language->id,
        );

        return $helper->generateForm(array($formHelper));
    }


    public function renderForm()
    {
        $this->renderFormHelper();
        if ($this->fields_form && is_array($this->fields_form)) {
            if (!$this->multiple_fieldsets) {
                $this->fields_form = array(array('form' => $this->fields_form));
            }

            if ($this->display == 'edit') {
                $id_grouper = Tools::getValue('id_grouperpro');

                $fields_value = $this->getFilterFieldsValue($id_grouper);
                $fields_value['id_grouperpro'] = $id_grouper;
            } else {
                $groupList = self::getGroupList();
                if (!empty($groupList) && is_array($groupList)) {
                    foreach ($groupList as $item) {
                        $fields_value['groupBox_' . $item['id_group']] = 0;
                    }
                }
                $fields_value['id_grouperpro'] = '';
                $fields_value['id_group'] = '';
                $fields_value['filterName'] = '';
                $fields_value['id_gender'] = '';
                $fields_value['birthday_from'] = '';
                $fields_value['birthday_to'] = '';
                $fields_value['registration_from'] = '';
                $fields_value['registration_to'] = '';
                $fields_value['last_login'] = '';
                $fields_value['auth_active'] = '';
                $fields_value['newsletter'] = '';
                $fields_value['optin'] = '';
                $fields_value['id_default_group[]'] = '';
                $fields_value['user_location[]'] = '';
                $fields_value['id_shop[]'] = '';
                $fields_value['id_carrier[]'] = '';
                $fields_value['user_language[]'] = '';
            }

            $helper = new HelperForm($this);
            $this->setHelperDisplay($helper);
            $helper->fields_value = $fields_value;

            if ($this->display == 'edit') {
                $helper->submit_action = 'submitUpdateForm';
            } elseif ($this->display == 'add') {
                $helper->submit_action = 'submitAddForm';
            } else {
                $helper->submit_action = $this->submit_action;
            }

            $helper->tpl_vars = array();
            $helper->show_cancel_button = (isset($this->show_form_cancel_button)) ? $this->show_form_cancel_button : ($this->display == 'add' || $this->display == 'edit');
            $back = Tools::safeOutput(Tools::getValue('back', ''));
            if (empty($back)) {
                $back = self::$currentIndex . '&token=' . $this->token;
            }
            if (!Validate::isCleanHtml($back)) {
                die(Tools::displayError());
            }
            $helper->back_url = $back;
            !is_null($this->base_tpl_form) ? $helper->base_tpl = $this->base_tpl_form : '';
            if ($this->tabAccess['view']) {
                if (Tools::getValue('back')) {
                    $helper->tpl_vars['back'] = Tools::safeOutput(Tools::getValue('back'));
                } else {
                    $helper->tpl_vars['back'] = Tools::safeOutput(Tools::getValue(self::$currentIndex . '&token=' . $this->token));
                }
            }

            $helper->show_toolbar = false;
            $helper->table = $this->table;
            $helper->module = $this;
            $form = $helper->generateForm($this->fields_form);
        }
        return $form;
    }

    protected function renderFormHelper()
    {
        $list_genders = $this->getGenders();

        $groups = Group::getGroups($this->context->language->id, true);
        $this->fields_form = array(
            'legend' => array(
                'title' => $this->trans('Extended Group', array(), 'Modules.Grouperpro.Admin'),
                'icon' => 'icon-user',
            ),
            'input' => array(
                array(
                    'type' => 'hidden',
                    'name' => 'id_grouperpro',
                ),
                array(
                    'type' => 'hidden',
                    'name' => 'id_group',
                ),
                array(
                    'type' => 'text',
                    'label' => $this->trans('Name', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'filterName',
                    'placeholder' => 'Women btw 25 and 40',
                    'col' => '4',
                ),
                array(
                    'type' => 'radio',
                    'label' => $this->trans('Gender', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'id_gender',
                    'required' => false,
                    'values' => $list_genders,
                ),
                array(
                    'type' => 'text',
                    'label' => $this->trans('Age between', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'birthday_from',
                    'col' => 1,
                    'placeholder' => 25,
                ),
                array(
                    'type' => 'text',
                    'name' => 'birthday_to',
                    'col' => 1,
                    'placeholder' => 45,
                ),
                array(
                    'type' => 'date',
                    'label' => $this->trans('Signed in between', array(), 'Modules.Grouperpro.Admin'),
//                    'desc' => $this->trans('Start of period', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'registration_from',
                ),
                array(
                    'type' => 'date',
                    'name' => 'registration_to',
//                    'desc' => $this->trans('End of period', array(), 'Modules.Grouperpro.Admin'),
                ),
                array(
                    'type' => 'date',
                    'label' => $this->trans('Last login', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'last_login',
                    'desc' => $this->trans('Include all members which were logged in after this date.', array(), 'Modules.Grouperpro.Admin'),
                ),
                array(
                    'type' => 'select',
                    'label' => $this->trans('Active status', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'auth_active',
                    'required' => false,
                    'options' => array(
                        'query' => array(
                            array('auth_switch' => '0', 'name' => $this->trans('--Any--', array(), 'Modules.Grouperpro.Admin')),
                            array('auth_switch' => '1', 'name' => $this->trans('Active', array(), 'Modules.Grouperpro.Admin')),
                            array('auth_switch' => '2', 'name' => $this->trans('Locked', array(), 'Modules.Grouperpro.Admin')),
                        ),
                        'id' => 'auth_switch',
                        'name' => 'name',
                    ),
                ),
                array(
                    'type' => 'select',
                    'label' => $this->trans('Newsletter', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'newsletter',
                    'required' => false,
                    'options' => array(
                        'query' => array(
                            array('auth_switch' => '0', 'name' => $this->trans('--Any--', array(), 'Modules.Grouperpro.Admin')),
                            array('auth_switch' => '1', 'name' => $this->trans('Enabled', array(), 'Modules.Grouperpro.Admin')),
                            array('auth_switch' => '2', 'name' => $this->trans('Disabled', array(), 'Modules.Grouperpro.Admin')),
                        ),
                        'id' => 'auth_switch',
                        'name' => 'name',
                    ),
                    'hint' => $this->trans('Customers that enabled receiving newsletter via email.', array(), 'Modules.Grouperpro.Admin'),
                ),
                array(
                    'type' => 'select',
                    'label' => $this->trans('Opt-in', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'optin',
                    'required' => false,
                    'options' => array(
                        'query' => array(
                            array('auth_switch' => '0', 'name' => $this->trans('--Any--', array(), 'Modules.Grouperpro.Admin')),
                            array('auth_switch' => '1', 'name' => $this->trans('Enabled', array(), 'Modules.Grouperpro.Admin')),
                            array('auth_switch' => '2', 'name' => $this->trans('Disabled', array(), 'Modules.Grouperpro.Admin')),
                        ),
                        'id' => 'auth_switch',
                        'name' => 'name',
                    ),
                    'disabled' => (bool)!Configuration::get('PS_CUSTOMER_OPTIN'),
                    'hint' => $this->trans('Customer that enabled receiving your ads via email.', array(), 'Modules.Grouperpro.Admin'),
                ),
                array(
                    'type' => 'group',
                    'label' => $this->trans('Belongs to', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'groupBox',
                    'values' => $groups,
                    'col' => '6',
                    'hint' => $this->trans('Select all the groups that customer may belong to.', array(), 'Modules.Grouperpro.Admin'),
                ),
                array(
                    'type' => 'select',
                    'class' => 'chosen',
                    'multiple' => true,
                    'label' => $this->trans('Default group', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'id_default_group',
                    'options' => array(
                        'query' => $groups,
                        'id' => 'id_group',
                        'name' => 'name',
                    ),
                    'col' => '4',
//                    'desc' => $this->trans('Attention! If it is chosen like group by default which isn\'t in the block of accesses of group, then it won\'t be active', array(), 'Modules.Grouperpro.Admin'),
                ),
                array(
                    'type' => 'select',
                    'class' => 'chosen',
                    'multiple' => true,
                    'label' => $this->trans('Location', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'user_location',
                    'options' => array(
                        'query' => Country::getCountries($this->context->language->id),
                        'id' => 'id_country',
                        'name' => 'name',
                    ),
                    'col' => '4',
                ),
                array(
                    'type' => 'select',
                    'label' => $this->trans('Language', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'user_language',
                    'class' => 'chosen',
                    'multiple' => true,
                    'options' => array(
                        'query' => Language::getLanguages(false),
                        'id' => 'id_lang',
                        'name' => 'name',
                    ),
                    'col' => '4',
                ),
                array(
                    'type' => 'range_status',
                    'label' => 'Shopping experience',
                    'name' => 'orders_range',
                    'orders_status_list' => $this->getStatusesOrder($this->context->language->id),
                    'currencies' => Currency::getCurrencies(),
                ),
                array(
                    'type' => 'select',
                    'class' => 'chosen',
                    'multiple' => true,
                    'label' => $this->trans('Used carriers', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'id_carrier[]',
                    'options' => array(
                        'query' => Carrier::getCarriers($this->context->language->id),
                        'id' => 'id_carrier',
                        'name' => 'name',
                    ),
                    'col' => '4',
                ),
                array(
                    'type' => 'select',
                    'class' => 'chosen',
                    'multiple' => true,
                    'label' => $this->trans('Belongs to Shop', array(), 'Modules.Grouperpro.Admin'),
                    'name' => 'id_shop',
                    'options' => array(
                        'query' => Shop::getShops(),
                        'id' => 'id_shop',
                        'name' => 'name',
                    ),
                    'col' => '4',
                ),
            ),
        );
        $this->fields_form['submit'] = array(
            'title' => $this->trans('Save', array(), 'Modules.Grouperpro.Admin'),
        );
    }

    public function getCustomersData($id_group = '')
    {
        $dbquery = new DbQueryCore();
        $dbquery->select('
            c.`id_customer` AS `id`,
            grlg.`name` AS `group_name`,
            grlg_default.`name` AS `group_name_default`,
            s.`name` AS `shop_name`,
            gl.`name` AS `gender`,
            c.`lastname`,
            c.`firstname`,
            c.`email`,
            c.`newsletter` AS `subscribed`,
            c.`birthday`,
            c.`optin`,
            c.`active`,
            c.`date_add`,
            c.`date_upd`');

        $dbquery->from('grouperpro', 'gr');
        $dbquery->leftJoin('customer_group', 'csg', 'csg.id_group = gr.id_group');
        $dbquery->leftJoin('group_lang', 'grlg', 'grlg.id_group = gr.id_group AND grlg.`id_lang` = ' . $this->context->language->id);
        $dbquery->leftJoin('customer', 'c', 'c.id_customer = csg.id_customer');
        $dbquery->leftJoin('group_lang', 'grlg_default', 'grlg_default.id_group = c.id_default_group AND grlg_default.`id_lang` = ' . $this->context->language->id);
        $dbquery->leftJoin('shop', 's', 'c.id_shop = s.id_shop');
        $dbquery->leftJoin('gender', 'g', 'g.id_gender = c.id_gender');
        $dbquery->leftJoin('gender_lang', 'gl', 'g.id_gender = gl.id_gender');
        $dbquery->where('gr.`id_grouperpro` = ' . (int)$id_group);
        $dbquery->groupBy('c.`id_customer`');
        $customers = Db::getInstance(_PS_USE_SQL_SLAVE_)->executeS($dbquery->build());

        return $customers;
    }

    public function getCustomersGroupList($id_customer)
    {
        $query = Db::getInstance()->executeS(
            'SELECT glang.name FROM `' . _DB_PREFIX_ . 'customer_group` AS cg
                LEFT JOIN `' . _DB_PREFIX_ . 'group_lang` AS glang ON glang.id_group = cg.id_group
                    AND glang.id_lang = ' . $this->context->language->id . '
                WHERE cg.id_customer = ' . (int)$id_customer
        );
        $result = array();
        if ($query && is_array($query)) {
            foreach ($query as $item) {
                if (isset($item['name']) && !empty($item['name'])) {
                    $result[] = $item['name'];
                }
            }
        }

        return $result;
    }

    public function getCustomersCountryList($id_customer)
    {
        $query = Db::getInstance()->executeS(
            'SELECT `name` FROM `' . _DB_PREFIX_ . 'address` AS address
                LEFT JOIN `' . _DB_PREFIX_ . 'country_lang` AS country
                    ON address.`id_country` = country.id_country
                        AND country.id_lang = ' . $this->context->language->id . '
                WHERE address.id_customer = ' . (int)$id_customer
        );

        $result = array();
        if ($query && is_array($query)) {
            foreach ($query as $item) {
                if (isset($item['name']) && !empty($item['name'])) {
                    $result[] = $item['name'];
                }
            }
        }

        return $result;
    }

    public function calculateAge($birthday)
    {
        $birthday_timestamp = strtotime($birthday);
        $age = date('Y') - date('Y', $birthday_timestamp);
        if (date('md', $birthday_timestamp) > date('md')) {
            $age--;
        }

        return $age;
    }

    public function generationXLSFile($id_group)
    {
        $exportData = array();
        $exportData[0] = array(
            'groupname' => $this->trans('Group name', array(), 'Modules.Grouperpro.Admin'),
            'name' => $this->trans('User name', array(), 'Modules.Grouperpro.Admin'),
            'email' => $this->trans('Email', array(), 'Modules.Grouperpro.Admin'),
            'gender' => $this->trans('Genders', array(), 'Modules.Grouperpro.Admin'),
            'age' => $this->trans('Age', array(), 'Modules.Grouperpro.Admin'),
            'date_add' => $this->trans('Signed', array(), 'Modules.Grouperpro.Admin'),
            'last_login' => $this->trans('Last login', array(), 'Modules.Grouperpro.Admin'),
            'active_status' => $this->trans('Active status', array(), 'Modules.Grouperpro.Admin'),
            'newsletter' => $this->trans('Newsletter', array(), 'Modules.Grouperpro.Admin'),
            'opt_in' => $this->trans('Opt-in', array(), 'Modules.Grouperpro.Admin'),
            'grops_in' => $this->trans('Grops in', array(), 'Modules.Grouperpro.Admin'),
            'default_group' => $this->trans('Default group', array(), 'Modules.Grouperpro.Admin'),
            'location' => $this->trans('Location', array(), 'Modules.Grouperpro.Admin'),
            'shop_name' => $this->trans('Shop name', array(), 'Modules.Grouperpro.Admin'),
        );

        $CustomerInfo = $this->getCustomersData($id_group);
        foreach ($CustomerInfo as $item) {
            $customerGroupsReq = $this->getCustomersGroupList($item['id']);
            $customerCountryReq = $this->getCustomersCountryList($item['id']);

            $exportData[] = array(
                'groupname' => $item['group_name'],
                'name' => $item['lastname'] . ' ' . $item['firstname'],
                'email' => $item['email'],
                'gender' => $item['gender'],
                'age' => $this->calculateAge($item['birthday']),
                'date_add' => $item['date_add'],
                'last_login' => $item['date_upd'],
                'active_status' => $item['active'],
                'newsletter' => $item['subscribed'],
                'opt_in' => $item['optin'],
                'grops_in' => join(',', $customerGroupsReq),
                'default_group' => $item['group_name_default'],
                'location' => join(',', $customerCountryReq),
                'shop_name' => $item['shop_name']);
        }

        return $this->processGenerationCSV($exportData);
    }

    private function processGenerationCSV($array_to_export)
    {
        if (is_array($array_to_export) && count($array_to_export) > 0) {
            $line = array();
            $groupName = (isset($array_to_export[1]['groupname']) && !empty($array_to_export[1]['groupname'])) ? $array_to_export[1]['groupname'] : $this->trans('GroupCSV', array(), 'Modules.Grouperpro.Admin');
            $groupName = str_replace('.', '', $groupName);
            $groupName = str_replace('"', '', $groupName);
            $groupName .= time();
            $fd = fopen(_PS_MODULE_DIR_ . '/grouperpro/export/' . $groupName . '.csv', 'w+');
            foreach ($array_to_export as $export_key => $export) {
                fputcsv($fd, array_values($export), ';', '"');
            }
            fclose($fd);
        }

        return $groupName;
    }

    protected function getGenders($getGender = null)
    {
        $genders = Gender::getGenders();

        $list_genders = array();

        if (empty($getGender) || $getGender == 0) {
            $list_genders = array('0' => array('id' => 'gender_0', 'value' => 'all', 'label' => $this->trans('--Any--', array(), 'Modules.Grouperpro.Admin')));
        }

        $k = 1;
        foreach ($genders as $key => $gender) {
            /** @var Gender $gender */
            if (empty($getGender)) {
                $list_genders[$k]['id'] = 'gender_' . $gender->id;
                $list_genders[$k]['value'] = $gender->id;
                $list_genders[$k]['label'] = $gender->name;
            } elseif (is_numeric($getGender) && $getGender == $gender->id) {
                $list_genders[$k]['id'] = 'gender_' . $gender->id;
                $list_genders[$k]['value'] = $gender->id;
                $list_genders[$k]['label'] = $gender->name;
            }
            $k++;
        }

        return $list_genders;
    }

    protected function getStatusesOrder($lang)
    {
        $result = Db::getInstance()->executeS(
            'SELECT state_lang.name, state.id_order_state FROM `' . _DB_PREFIX_ . 'order_state` AS state
                LEFT JOIN `' . _DB_PREFIX_ . 'order_state_lang` AS state_lang ON state.id_order_state = state_lang.id_order_state
                WHERE state_lang.id_lang = ' . (int)$lang
        );

        return (!empty($result) && is_array($result)) ? $result : array();
    }

    protected function addFilterConfigure($filter = array(), $type = 'add')
    {
        if (empty($filter) && !in_array($filter)) {
            return false;
        }

        switch ($type) {
            case 'add':
                $my_group = new Group();

                foreach (Language::getLanguages(false) as $lang) {
                    $my_group->name[$lang['id_lang']] = Tools::getValue('filterName');
                }

                $my_group->price_display_method = 1;
                $my_group->add();
                if (Validate::isLoadedObject($my_group)) {
                    $id_group = (int)$my_group->id;
                }

                $filterJsonEncode = Tools::jsonEncode($filter);
                $id_shop = (int)Context::getContext()->shop->id;
                $filter_cl = array('id_group' => (int)$id_group, 'filter' => $filterJsonEncode, 'id_shop' => $id_shop);

                $result = Db::getInstance()->insert($this->table, $filter_cl, false, true);

                if ($result) {
                    $this->confirmations[] = $this->trans('Item has been created.', array(), 'Modules.Grouperpro.Admin');
                } else {
                    $this->errors[] = $this->trans('Item has not been created.', array(), 'Modules.Grouperpro.Admin');
                }

                break;
            case 'update':
                $id_grouper = (int)$filter['id_grouperpro'];
                $id_group = (int)$filter['id_group'];
                $result = 0;
                if ($id_grouper > 0 && $id_group > 0) {
                    $rs = $this->updateNameGroup(Tools::getValue('filterName'), $id_group);
                    if ($rs) {
                        $filterJsonEncode = Tools::jsonEncode($filter);
                        $where = 'id_grouperpro = ' . (int)$id_grouper;
                        $result = Db::getInstance()->update($this->table, array('filter' => $filterJsonEncode), $where);
                    }
                }

                if ($result) {
                    $this->confirmations[] = $this->trans('Item has been updated.', array(), 'Modules.Grouperpro.Admin');
                } else {
                    $this->errors[] = $this->trans('Item has not been updated!', array(), 'Modules.Grouperpro.Admin');
                }

                break;
        }

        return $result;
    }

    protected function updateNameGroup($name = '', $uidGroup = '')
    {
        $result = false;
        if (!empty($name) && is_numeric($uidGroup) && $uidGroup > 0) {
            $where = 'id_group = ' . (int)$uidGroup;
            $result = Db::getInstance()->update('group_lang', array('name' => $name), $where);
        }

        return $result;
    }

    protected function removeGrouperItem($uid = 0)
    {
        if (is_numeric($uid) && $uid > 0) {
            $sql = 'SELECT `id_grouperpro`, `id_group` FROM `' . _DB_PREFIX_ . $this->table . '` WHERE `id_grouperpro` = ' . (int)$uid;
            $content = Db::getInstance()->executeS($sql);
            if (!empty($content[0]['id_grouperpro']) && $content[0]['id_grouperpro'] > 0
                && !empty($content[0]['id_group']) && $content[0]['id_group'] > 0
            ) {
                $sql = 'SELECT `id_cronjob` FROM `' . _DB_PREFIX_ . $this->table . '_cron` WHERE `id_grouperpro` = ' . (int)$uid;
                $content_cron = Db::getInstance()->getRow($sql);
                if ($content_cron && count($content_cron) > 0 && !empty($content_cron['id_cronjob'])) {
                    Db::getInstance()->delete($this->table . '_cron', 'id_grouperpro = ' . (int)$uid);
                    Db::getInstance()->delete('cronjobs', 'id_cronjob = ' . (int)$content_cron['id_cronjob']);
                }

                $my_group = new Group($content[0]['id_grouperpro']);
                $my_group->id = $content[0]['id_group'];
                $my_group->delete();

                return Db::getInstance()->delete($this->table, 'id_grouperpro = ' . (int)$content[0]['id_grouperpro']);
            }
        }
    }

    public function getFilterFieldsValue($uid)
    {
        $fields_value = $fields_filter = array();

        $groupList = self::getGroupList();
        if (!empty($groupList) && is_array($groupList)) {
            foreach ($groupList as $item) {
                $fields_value['groupBox_' . $item['id_group']] = 0;
            }
        }
        $fields_value['id_grouperpro'] = '';
        $fields_value['id_group'] = '';
        $fields_value['filterName'] = '';
        $fields_value['id_gender'] = '';
        $fields_value['birthday_from'] = '';
        $fields_value['birthday_to'] = '';
        $fields_value['registration_from'] = '';
        $fields_value['registration_to'] = '';
        $fields_value['last_login'] = '';
        $fields_value['auth_active'] = '';
        $fields_value['newsletter'] = '';
        $fields_value['optin'] = '';
        $fields_value['id_default_group[]'] = '';
        $fields_value['user_location[]'] = '';
        $fields_value['id_shop[]'] = '';
        $fields_value['id_carrier[]'] = '';
        $fields_value['user_language[]'] = '';

        $fields_value['order_sum_from'] = '';
        $fields_value['order_sum_to'] = '';
        $fields_value['order_currency'] = '';
        $fields_value['order_sum_status'] = '';

        $filterField = Db::getInstance()->executeS('SELECT * FROM `' . _DB_PREFIX_ . 'grouperpro`
                                                                WHERE `id_grouperpro` = ' . (int)$uid);
        $groupList = self::getGroupList();
        $fields_value['filterName'] = $groupList[$filterField[0]['id_group']]['name'];
        $fields_value['id_group'] = (!empty($filterField[0]['id_group'])) ? (int)$filterField[0]['id_group'] : '';

        if (!empty($filterField[0]['filter'])) {
            $fields_filter = (array)Tools::jsonDecode($filterField[0]['filter']);

            $fields_value['id_gender'] = (!empty($fields_filter['id_gender'])) ? (int)$fields_filter['id_gender'] : '';
            if (!empty($fields_filter['birthday_from'])) {
                $fields_value['birthday_from'] = $fields_filter['birthday_from'];
            }
            if (!empty($fields_filter['birthday_to'])) {
                $fields_value['birthday_to'] = $fields_filter['birthday_to'];
            }
            if (!empty($fields_filter['registration_from'])) {
                $fields_value['registration_from'] = $fields_filter['registration_from'];
            }
            if (!empty($fields_filter['registration_to'])) {
                $fields_value['registration_to'] = $fields_filter['registration_to'];
            }
            if (!empty($fields_filter['last_login'])) {
                $fields_value['last_login'] = $fields_filter['last_login'];
            }
            $fields_value['auth_active'] = (!empty($fields_filter['auth_active'])) ? (int)$fields_filter['auth_active'] : '';
            $fields_value['newsletter'] = (!empty($fields_filter['newsletter'])) ? (int)$fields_filter['newsletter'] : '';
            $fields_value['optin'] = (!empty($fields_filter['optin'])) ? (int)$fields_filter['optin'] : '';
            if (!empty($fields_filter['groupBox'])) {
                foreach ($fields_filter['groupBox'] as $item) {
                    $fields_value['groupBox_' . $item] = 1;
                }
            }
            if (!empty($fields_filter['id_default_group'])) {
                $fields_value['id_default_group[]'] = $fields_filter['id_default_group'];
            } else {
                $fields_value['id_default_group[]'] = '';
            }
            if (!empty($fields_filter['user_location'])) {
                $fields_value['user_location[]'] = $fields_filter['user_location'];
            } else {
                $fields_value['user_location[]'] = '';
            }
            if (!empty($fields_filter['user_language'])) {
                $fields_value['user_language[]'] = $fields_filter['user_language'];
            } else {
                $fields_value['user_language[]'] = '';
            }
            $fields_value['num_orders'] = (!empty($fields_filter['num_orders'])) ? (int)$fields_filter['num_orders'] : '';
            if (!empty($fields_filter['id_carrier'])) {
                $fields_value['id_carrier[]'] = $fields_filter['id_carrier'];
            } else {
                $fields_value['id_carrier[]'] = '';
            }
            if (!empty($fields_filter['id_shop'])) {
                $fields_value['id_shop[]'] = $fields_filter['id_shop'];
            } else {
                $fields_value['id_shop[]'] = '';
            }
            if (!empty($fields_filter['order_from'])) {
                $fields_value['order_from'] = $fields_filter['order_from'];
            } else {
                $fields_value['order_from'] = '';
            }

            if (!empty($fields_filter['order_to']) || isset($fields_filter['order_to']) && Validate::isInt($fields_filter['order_to'])) {
                $fields_value['order_to'] = $fields_filter['order_to'];
            } else {
                $fields_value['order_to'] = '';
            }

            if (!empty($fields_filter['order_status'])) {
                $fields_value['order_status'] = $fields_filter['order_status'];
            } else {
                $fields_value['order_status'] = array();
            }
            if (!empty($fields_filter['order_sum_from'])) {
                $fields_value['order_sum_from'] = $fields_filter['order_sum_from'];
            } else {
                $fields_value['order_sum_from'] = array();
            }
            if (!empty($fields_filter['order_sum_to'])) {
                $fields_value['order_sum_to'] = $fields_filter['order_sum_to'];
            } else {
                $fields_value['order_sum_to'] = array();
            }
            if (!empty($fields_filter['order_currency'])) {
                $fields_value['order_currency'] = $fields_filter['order_currency'];
            } else {
                $fields_value['order_currency'] = '';
            }
            if (!empty($fields_filter['order_sum_status'])) {
                $fields_value['order_sum_status'] = $fields_filter['order_sum_status'];
            } else {
                $fields_value['order_sum_status'] = '';
            }
        }
        return $fields_value;
    }

    public function getFilterFieldIdGroup($uid)
    {
        return Db::getInstance()->executeS(
            'SELECT id_group FROM `' . _DB_PREFIX_ . 'grouperpro`
                WHERE `id_grouperpro` = ' . (int)$uid
        );
    }

    protected function getStatusesOrderIn($lang, $UIds = array())
    {
        $uid_return = $result = array();
        if (!empty($UIds) && is_array($UIds)) {
            foreach ($UIds as $uid) {
                if (is_numeric($uid)) {
                    $uid_return[] = (int)$uid;
                }
            }
        }
        if (!empty($uid_return)) {
            $result = Db::getInstance()->executeS(
                'SELECT state_lang.name, state.id_order_state FROM `' . _DB_PREFIX_ . 'order_state` AS state
                    LEFT JOIN `' . _DB_PREFIX_ . 'order_state_lang` AS state_lang ON state.id_order_state = state_lang.id_order_state
                    WHERE state_lang.id_lang = ' . (int)$lang . ' AND state.id_order_state IN(' . join(', ', $uid_return) . ')'
            );
        }

        return (!empty($result) && is_array($result)) ? $result : array();
    }

    protected static function checkMergeDates($data, $format = 'Y-m-d')
    {
        $d = date("d", strtotime($data));
        $m = date("m", strtotime($data));
        $Y = date("Y", strtotime($data));

        if (checkdate((int)$m, (int)$d, (int)$Y)) {
            $dateReturn = date("Y-m-d", strtotime($data));
        } else {
            $dateReturn = '';
        }

        return $dateReturn;
    }

    public function displayGenerationLink($token = '', $id = '')
    {
        if (!empty($id)) {
            $tpl = $this->createTemplate('helpers/list/list_action_edit.tpl');
            if (!array_key_exists('Generation', self::$cache_lang)) {
                self::$cache_lang['Generation'] = $this->trans('Rebuild', array(), 'Modules.Grouperpro.Admin');
            }

            $href = self::$currentIndex . '&' . $this->identifier . '=' . $id . '&generation' . $this->table . '&generation' . $this->table . '&token=' . ($token != null ? $token : $this->token);

            $tpl->assign(array(
                'href' => $href,
                'action' => self::$cache_lang['Generation'],
                'id' => $id,
            ));

            return $tpl->fetch();
        } else {
            return '';
        }
    }

    public function displayExportLink($token = '', $id = '')
    {
        if (!empty($id)) {
            $tpl = $this->createTemplate('helpers/list/list_action_edit.tpl');
            if (!array_key_exists('Export', self::$cache_lang)) {
                self::$cache_lang['Export'] = $this->trans('Export .csv', array(), 'Modules.Grouperpro.Admin');
            }

            $href = self::$currentIndex . '&' . $this->identifier . '=' . $id . '&export' . $this->table . '&export' . $this->table . '&token=' . ($token != null ? $token : $this->token);

            $tpl->assign(array(
                'href' => $href,
                'action' => self::$cache_lang['Export'],
                'id' => $id,
            ));

            return $tpl->fetch();
        } else {
            return '';
        }
    }

    protected function getHoursFormOptions()
    {
        $data = array(array('id' => '-1', 'name' => $this->trans('Every hour', array(), 'Modules.Grouperpro.Admin')));

        for ($hour = 0; $hour < 24; $hour += 1) {
            $data[] = array('id' => $hour, 'name' => date('H:i', mktime($hour, 0, 0, 0, 1)));
        }

        return $data;
    }

    protected function getDaysFormOptions()
    {
        $data = array(array('id' => '-1', 'name' => $this->trans('Every day of the month', array(), 'Modules.Grouperpro.Admin')));

        for ($day = 1; $day <= 31; $day += 1) {
            $data[] = array('id' => $day, 'name' => $day);
        }

        return $data;
    }

    protected function getMonthsFormOptions()
    {
        $data = array(array('id' => '-1', 'name' => $this->trans('Every month', array(), 'Modules.Grouperpro.Admin')));

        for ($month = 1; $month <= 12; $month += 1) {
            $data[] = array('id' => $month, 'name' => $this->trans(date('F', mktime(0, 0, 0, $month, 1)), array(), 'Modules.Grouperpro.Admin'));
        }

        return $data;
    }

    protected function getDaysofWeekFormOptions()
    {
        $data = array(array('id' => '-1', 'name' => $this->trans('Every day of the week', array(), 'Modules.Grouperpro.Admin')));

        for ($day = 1; $day <= 7; $day += 1) {
            $data[] = array('id' => $day, 'name' => $this->trans(date('l', strtotime('Sunday +' . $day . ' days')), array(), 'Modules.Grouperpro.Admin'));
        }

        return $data;
    }

    protected function showCantCreateTaskError()
    {
        $this->errors[] = ('Can not create new cronjob task.');
    }
}

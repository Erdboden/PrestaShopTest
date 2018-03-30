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

require_once _PS_MODULE_DIR_ . 'discountfollower/classes/FollowList.php';

class AdminDiscountFollowerController extends ModuleAdminControllerCore
{
    public $name = 'discountfollower';
    public $bootstrap = true;
    public $local_path;
    public $statisticType;

    public function __construct()
    {
        parent::__construct();

        $this->local_path = _PS_MODULE_DIR_ . $this->name . '/';
        $this->postProcess();
    }

    public function postProcess()
    {
        $this->processDateRange();

        if ((Tools::isSubmit('deleteproductCustomerList') || Tools::isSubmit('deleteproductCustomerMailList')) && Tools::getValue('id_df_product')) {
            $id_df_product = Tools::getValue('id_df_product');
            if (!empty($id_df_product) && is_numeric($id_df_product)) {
                $flExist = FollowList::existCustomerProductItem($id_df_product);
                if (!empty($flExist['id_df_product']) && FollowList::removeCustomerProductItem($id_df_product)) {
                    $this->confirmations[] = $this->l('Product remove success!');
                }
            }
        }

        if (Tools::isSubmit('submitBulkdeleteproductCustomerList') && Tools::getValue('productCustomerListBox')) {
            $BulkList = Tools::getValue('productCustomerListBox');
            if (is_array($BulkList) && count($BulkList) > 0) {
                $rm = false;
                foreach ($BulkList as $item) {
                    if (is_numeric($item) && $item > 0) {
                        $flExist = FollowList::existCustomerProductItem($item);
                        if (!empty($flExist['id_df_customer_product']) && FollowList::removeCustomerProductItem($item)) {
                            $rm = true;
                        }
                    }
                }
                if ($rm) {
                    $this->confirmations[] = $this->l('Product remove success!');
                }
            }
        }

        if (Tools::isSubmit('submitBulkdeleteproductCustomerMailList') && Tools::getValue('productCustomerMailListBox')) {
            $BulkList = Tools::getValue('productCustomerMailListBox');
            if (is_array($BulkList) && count($BulkList) > 0) {
                $rm = false;
                foreach ($BulkList as $item) {
                    if (is_numeric($item) && $item > 0) {
                        $flExist = FollowList::existCustomerProductItem($item);
                        if (!empty($flExist['id_df_customer_product']) && FollowList::removeCustomerProductItem($item)) {
                            $rm = true;
                        }
                    }
                }
                if ($rm) {
                    $this->confirmations[] = $this->l('Product remove success!');
                }
            }
        }

        if (Tools::isSubmit('deleteproductList') && Tools::getValue('id_product')) {
            $id_product = (int)Tools::getValue('id_product');
            if (!empty($id_product) && is_numeric($id_product)) {
                if (FollowList::removeProductItems((int)$id_product)) {
                    $this->confirmations[] = $this->l('Product remove success!');
                }
            }
        }

        if (Tools::isSubmit('submitBulkdeleteproductList') && Tools::getValue('productListBox')) {
            $BulkList = Tools::getValue('productListBox');
            if (is_array($BulkList) && count($BulkList) > 0) {
                $rm = false;
                foreach ($BulkList as $item) {
                    if (is_numeric($item) && $item > 0) {
                        if (FollowList::removeProductItems($item)) {
                            $rm = true;
                        }
                    }
                }
                if ($rm) {
                    $this->confirmations[] = $this->l('Product remove success!');
                }
            }
        }

        if (Tools::isSubmit('deletediscountfollower') && Tools::getValue('id_df_customer')) {
            $id_df_customer = Tools::getValue('id_df_customer');
            if (!empty($id_df_customer) && is_numeric($id_df_customer)) {
                if (FollowList::removeFollowCustomer($id_df_customer)) {
                    $link = new Link();
                    Tools::redirectAdmin($link->getAdminLink('AdminDiscountFollower', true));
                }
            }
        }
    }

    public function statisticToolbar()
    {
        $this->context->smarty->assign(
            array(
                'action' => $_SERVER['REQUEST_URI'],
                'active_statistic' => (int)$this->statisticType,
                'translations' => array(
                    'To' => $this->l('To'),
                    'From' => $this->l('From'),
                    'Calendar' => $this->l('Calendar'),
                    'Day' => $this->l('Today'),
                    'Month' => $this->l('Month'),
                    'Year' => $this->l('Year')
                ),
                'back' => AdminController::$currentIndex . '&configure=' . urlencode($this->name) . '&token=' . Tools::getAdminTokenLite('AdminModules'),
                'datepickerFrom' => Tools::getValue('datepickerFrom', $this->context->employee->stats_date_from),
                'datepickerTo' => Tools::getValue('datepickerTo', $this->context->employee->stats_date_to)
            )
        );

        return $this->context->smarty->fetch($this->local_path . 'views/templates/admin/form_date_range_picker.tpl');
    }

    public function processDateRange()
    {
        if (Tools::isSubmit('submitAllStaticList') || Tools::isSubmit('submitProductGroupStaticList') || Tools::isSubmit('submitGroupStaticList')) {
            if (Tools::isSubmit('submitProductGroupStaticList')) {
                $this->statisticType = 1;
            } elseif (Tools::isSubmit('submitAllStaticList')) {
                $this->statisticType = 2;
            } else {
                $this->statisticType = 3;
            }
            $this->context->cookie->statisticTypeBlock = $this->statisticType;
        } else {
            $this->statisticType = (!isset($this->context->cookie->statisticTypeBlock)
            && !Validate::isInt($this->context->cookie->statisticTypeBlock)
            && !in_array((int)$this->context->cookie->statisticTypeBlock, array(1, 2)) ? 1 : (int)$this->context->cookie->statisticTypeBlock);
            if (!isset($this->context->cookie->statisticTypeBlock) && !in_array((int)$this->context->cookie->statisticTypeBlock, array(1, 2))) {
                $this->context->cookie->statisticTypeBlock = 1;
                $this->statisticType = 1;
            }
        }

        if (Tools::isSubmit('submitDatePicker')) {
            if ((!Validate::isDate($from = Tools::getValue('datepickerFrom')) || !Validate::isDate($to = Tools::getValue('datepickerTo'))) || (strtotime($from) > strtotime($to))) {
                $this->errors[] = Tools::displayError('The specified date is invalid.');
            }
        }
        if (Tools::isSubmit('submitDateDay')) {
            $from = date('Y-m-d');
            $to = date('Y-m-d');
        }
        if (Tools::isSubmit('submitDateDayPrev')) {
            $yesterday = time() - 60 * 60 * 24;
            $from = date('Y-m-d', $yesterday);
            $to = date('Y-m-d', $yesterday);
        }
        if (Tools::isSubmit('submitDateMonth')) {
            $from = date('Y-m-01');
            $to = date('Y-m-t');
        }
        if (Tools::isSubmit('submitDateMonthPrev')) {
            $m = (date('m') == 1 ? 12 : date('m') - 1);
            $y = ($m == 12 ? date('Y') - 1 : date('Y'));
            $from = $y . '-' . $m . '-01';
            $to = $y . '-' . $m . date('-t', mktime(12, 0, 0, $m, 15, $y));
        }
        if (Tools::isSubmit('submitDateYear')) {
            $from = date('Y-01-01');
            $to = date('Y-12-31');
        }
        if (Tools::isSubmit('submitDateYearPrev')) {
            $from = (date('Y') - 1) . date('-01-01');
            $to = (date('Y') - 1) . date('-12-31');
        }

        if (isset($from) && isset($to) && !count($this->errors)) {
            $this->context->employee->stats_date_from = $from;
            $this->context->employee->stats_date_to = $to;
            $this->context->employee->update();
            if (!$this->isXmlHttpRequest()) {
                Tools::redirectAdmin($_SERVER['REQUEST_URI']);
            }
        }
    }

    public function isXmlHttpRequest()
    {
        return (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && Tools::strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest');
    }

    public function initContent()
    {
        if (!$this->viewAccess()) {
            $this->errors[] = Tools::displayError('You do not have permission to view this.');
            return;
        }

        $this->getLanguages();
        $this->initToolbar();
        $this->initTabModuleList();
        $this->initPageHeaderToolbar();
        $this->content .= $this->statisticToolbar();
        if ($this->statisticType == 1) {
            if (Tools::isSubmit('viewdiscountfollower') && Tools::getValue('id_df_customer')) {
                $id_df_customer = (int)Tools::getValue('id_df_customer');
                if (is_numeric($id_df_customer) && $id_df_customer > 0) {
                    $this->content .= $this->renderViewCustomerProductList((int)$id_df_customer);
                }
            } elseif (Tools::isSubmit('viewproductList') && Tools::getValue('id_product')) {
                $id_product = (int)Tools::getValue('id_product');
                if (is_numeric($id_product) && $id_product > 0) {
                    $this->content .= $this->renderViewProductList($id_product);
                }
            } else {
                $this->content .= $this->renderList() . $this->renderProductsList();
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
                'page_header_toolbar_btn' => $this->page_header_toolbar_btn
            ));
        } elseif ($this->statisticType == 2) {
            $this->content .= $this->renderAllStaticList();
            $this->context->smarty->assign(array(
                'maintenance_mode' => !(bool)Configuration::get('PS_SHOP_ENABLE'),
                'content' => $this->content,
                'lite_display' => $this->lite_display,
                'url_post' => self::$currentIndex . '&token=' . $this->token,
                'show_page_header_toolbar' => $this->show_page_header_toolbar,
                'page_header_toolbar_title' => $this->page_header_toolbar_title,
                'title' => $this->page_header_toolbar_title,
                'toolbar_btn' => $this->page_header_toolbar_btn,
                'page_header_toolbar_btn' => $this->page_header_toolbar_btn
            ));
        } elseif ($this->statisticType == 3) {
            $this->content .= $this->renderProductGroupStaticList();
            $this->context->smarty->assign(array(
                'maintenance_mode' => !(bool)Configuration::get('PS_SHOP_ENABLE'),
                'content' => $this->content,
                'lite_display' => $this->lite_display,
                'url_post' => self::$currentIndex . '&token=' . $this->token,
                'show_page_header_toolbar' => $this->show_page_header_toolbar,
                'page_header_toolbar_title' => $this->page_header_toolbar_title,
                'title' => $this->page_header_toolbar_title,
                'toolbar_btn' => $this->page_header_toolbar_btn,
                'page_header_toolbar_btn' => $this->page_header_toolbar_btn
            ));
        }
    }

    public function renderProductGroupStaticList()
    {
        $from = $this->context->employee->stats_date_from;
        $to = $this->context->employee->stats_date_to;
        $stat = FollowerStatistic::getProductGroupStatistic($from, $to);

        if ($stat && is_array($stat) && count($stat) > 0) {
            $image_type_default = '';
            $image_types = ImageType::getImagesTypes('products');
            $size = 0;
            foreach ($image_types as $image_type) {
                if ($size == 0 || $size > $image_type['width']) {
                    $size = $image_type['width'];
                    $image_type_default = $image_type['name'];
                }
            }

            $use_container = array(
                'link' => new Link(),
                'protocol' => Tools::getCurrentUrlProtocolPrefix(),
                'from' => $from,
                'to' => $to,
                'image_types' => $image_type_default
            );

            $stat = array_map(function ($item) use (&$use_container) {
                $item['product_link'] = $use_container['link']->getProductLink($item['id_product'], $item['link_rewrite']);
                $cover_id = Image::getGlobalCover($item['id_product']);
                if ($cover_id) {
                    $item['default_image'] = (isset($cover_id['id_image'])) ? $cover_id['id_image'] : 0;
                    if ($item['default_image'] && Validate::isInt($item['default_image']) && $item['default_image'] > 0) {
                        $item['image_url'] = $use_container['protocol'].$use_container['link']->getImageLink($item['link_rewrite'], $item['default_image'], $use_container['image_types']);
                    }
                }

                $item['mails'] = FollowerStatistic::getGroupMailsByProduct($item['id_product'], $use_container['from'], $use_container['to']);
                return $item;
            }, $stat);
        }

        $this->context->smarty->assign(
            array(
                'statistic' => $stat,
                'count' => count($stat)
            )
        );

        return $this->context->smarty->fetch($this->local_path . 'views/templates/admin/product_form_statistic_data.tpl');
    }

    public function renderAllStaticList()
    {
        $from = $this->context->employee->stats_date_from;
        $to = $this->context->employee->stats_date_to;
        $stat = FollowerStatistic::getAllStatistic($from, $to);

        if ($stat && is_array($stat) && count($stat) > 0) {
            $th = $this;
            $stat = array_map(function ($variable) use ($th) {
                switch ($variable['type_send']) {
                    case 'change_price':
                        $variable['type_name'] = $th->l('Follow the discount price');
                        break;
                    case 'promo':
                        $variable['type_name'] = $th->l('Follow the specific price for the product');
                        break;
                    case 'lower_quantity':
                        $variable['type_name'] = $th->l('Lower quantity in stock');
                        break;
                    case 'quantity_null':
                        $variable['type_name'] = $th->l('No availability in stock');
                        break;
                    case 'additional_products':
                        $variable['type_name'] = $th->l('Follow the accessories added for the product');
                        break;
                    case 'new_review':
                        $variable['type_name'] = $th->l('Follow the comments added for the product');
                        break;
                }
                return $variable;
            }, $stat);
        }

        $this->context->smarty->assign(
            array(
                'statistic' => $stat,
                'count' => count($stat)
            )
        );

        return $this->context->smarty->fetch($this->local_path . 'views/templates/admin/form_statistic_data.tpl');
    }

    public function renderList()
    {
        $this->fields_list = array();
        $this->fields_list['id_customer'] = array('title' => $this->l('Customer Id'),
            'type' => 'text',
            'search' => false,
            'orderby' => true,
            'class' => 'fixed-width-xs');
        $this->fields_list['firstname'] = array('title' => $this->l('Firstname'),
            'type' => 'text',
            'search' => false,
            'orderby' => true,
            'class' => 'fixed-width-md');
        $this->fields_list['lastname'] = array('title' => $this->l('Lastname'),
            'type' => 'text',
            'search' => false,
            'orderby' => true,
            'class' => 'fixed-width-md');
        $this->fields_list['email'] = array('title' => $this->l('Email'),
            'type' => 'text',
            'search' => true,
            'orderby' => true,
            'class' => 'fixed-width-md');
        $this->fields_list['auth'] = array(
            'title' => $this->l('Authorized'),
            'active' => 'auth',
            'align' => 'text-center',
            'type' => 'bool',
            'class' => 'fixed-width-sm');
        $this->fields_list['quantity'] = array(
            'title' => $this->l('Quantity of the products'),
            'align' => 'text-center',
            'type' => 'text',
            'class' => 'fixed-width-sm');
        $helper = new HelperList();
        $helper->module = $this;
        $helper->simple_header = false;
        $helper->title = $this->l('Users list');
        $helper->identifier = 'id_df_customer';
        $helper->actions = array('view', 'delete');
        $helper->show_toolbar = true;
        $helper->shopLinkType = '';
        $helper->listTotal = FollowList::getCountCustomers();
        $helper->token = $this->token;
        $helper->table = 'discountfollower';
        $helper->table_id = 'module-discountfollower';
        $helper->currentIndex = self::$currentIndex . '&token=' . $this->token;

        return $helper->generateList($this->getListContent(), $this->fields_list);
    }

    protected function getListContent()
    {
        return FollowList::getCustomers();
    }

    protected function renderProductsList()
    {
        $this->fields_list = array();
        $this->fields_list['id_product'] = array('title' => $this->l('Product Id'),
            'type' => 'text',
            'search' => true,
            'orderby' => true,
            'class' => 'fixed-width-xs');
        $this->fields_list['image'] = array(
            'title' => $this->l('Image'),
            'align' => 'center',
            'image' => 'p',
            'class' => 'fixed-width-md',
            'orderby' => false,
            'filter' => false,
            'search' => false
        );
        $this->fields_list['name'] = array('title' => $this->l('Name'),
            'type' => 'text',
            'search' => true,
            'orderby' => true,);
        $this->fields_list['qty'] = array('title' => $this->l('Quantity'),
            'type' => 'text',
            'search' => true,
            'orderby' => true,
            'class' => 'fixed-width-md center');

        $helper = new HelperList();
        $helper->module = $this;
        $helper->imageType = 'jpg';
        $helper->table = 'productList';
        $helper->table_id = 'module-discountfollower';
        $helper->title = $this->l('Product list');
        $helper->simple_header = false;
        $helper->identifier = 'id_product';
        $helper->actions = array('view', 'delete');
        $helper->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'icon' => 'icon-trash',
                'confirm' => $this->l('Delete selected items?'),
            )
        );

        $helper->show_toolbar = true;
        $helper->shopLinkType = '';
        $helper->listTotal = FollowList::getCountProductsList($this->context->language->id, Shop::getContextShopID());
        $helper->token = $this->token;
        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . urlencode($this->name);

        return $helper->generateList($this->getProductsListContent(), $this->fields_list);
    }

    protected function getProductsListContent($filter = '')
    {
        return FollowList::getProductsList($filter, (int)$this->context->language->id, Shop::getContextShopID());
    }

    protected function renderViewCustomerProductList($id_df_customer)
    {
        $filter = array();
        $filter['inner'] = ' INNER JOIN  `' . _DB_PREFIX_ . 'df_customer` AS dfl
          ON dfl.id_df_customer = pl.id_df_customer AND dfl.id_df_customer = ' . (int)$id_df_customer;

        $this->fields_list = array();

        $this->fields_list['id_product'] = array('title' => $this->l('Product Id'),
            'type' => 'text',
            'search' => true,
            'orderby' => true,
            'class' => 'fixed-width-xs');
        $this->fields_list['name'] = array('title' => $this->l('Name'),
            'type' => 'text',
            'search' => true,
            'orderby' => true,
            'class' => 'fixed-width-xxl');
        $this->fields_list['qty'] = array('title' => $this->l('Quantity'),
            'type' => 'text',
            'search' => true,
            'orderby' => true,
            'class' => 'fixed-width-md');

        $helper = new HelperList();
        $helper->module = $this;
        $helper->table = 'productCustomerList';
        $helper->table_id = 'module-discountfollower';
        $helper->title = $this->l('Product list');
        $helper->simple_header = false;
        $helper->identifier = 'id_df_product';
        $helper->actions = array('delete');

        $helper->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'icon' => 'icon-trash',
                'confirm' => $this->l('Delete selected items?'),
            )
        );

        $helper->show_toolbar = true;
        $helper->shopLinkType = '';
        $helper->token = $this->token;

        $helper->toolbar_btn['back'] = array(
            'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . $this->token,
            'desc' => $this->l('Back')
        );

        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name . '&id_df_customer=' . (int)Tools::getValue('id_df_customer') . '&viewdiscountfollower';

        return $helper->generateList($this->getProductsListContent($filter), $this->fields_list);
    }

    protected function renderViewProductList($id_product)
    {
        $this->fields_list = array();

        $this->fields_list['id_customer'] = array('title' => $this->l('Customer Id'),
            'type' => 'text',
            'search' => false,
            'orderby' => true,
            'class' => 'fixed-width-xs');
        $this->fields_list['firstname'] = array('title' => $this->l('Firstname'),
            'type' => 'text',
            'search' => false,
            'orderby' => true,
            'class' => 'fixed-width-md');
        $this->fields_list['lastname'] = array('title' => $this->l('Lastname'),
            'type' => 'text',
            'search' => false,
            'orderby' => true,
            'class' => 'fixed-width-md');
        $this->fields_list['mail'] = array('title' => $this->l('Email'),
            'type' => 'text',
            'search' => true,
            'orderby' => true,
            'class' => 'fixed-width-md');
        $this->fields_list['auth'] = array(
            'title' => $this->l('Authorized'),
            'active' => 'auth',
            'align' => 'text-center',
            'type' => 'bool',
            'class' => 'fixed-width-sm');
        $this->fields_list['date_add'] = array(
            'title' => $this->l('Data added'),
            'align' => 'text-center',
            'type' => 'text',
            'class' => 'fixed-width-sm',
            'search' => false);

        $this->fields_list['price'] = array(
            'title' => $this->l('Price'),
            'align' => 'text-center',
            'type' => 'text',
            'class' => 'fixed-width-sm');

        $this->fields_list['quantity'] = array(
            'title' => $this->l('Quantity'),
            'align' => 'text-center',
            'type' => 'text',
            'class' => 'fixed-width-sm');

        $helper = new HelperList();
        $helper->module = $this;
        $helper->table = 'productCustomerMailList';
        $helper->table_id = 'module-discountfollower';
        $helper->title = $this->l('Product list');
        $helper->simple_header = false;
        $helper->identifier = 'id_df_product';
        $helper->actions = array('delete');
        $helper->bulk_actions = array(
            'delete' => array(
                'text' => $this->l('Delete selected'),
                'icon' => 'icon-trash',
                'confirm' => $this->l('Delete selected items?'),
            )
        );

        $helper->show_toolbar = true;
        $helper->shopLinkType = '';
        $helper->token = $this->token;

        $helper->toolbar_btn['back'] = array(
            'href' => AdminController::$currentIndex . '&configure=' . $this->name . '&token=' . $this->token,
            'desc' => $this->l('Back')
        );

        $helper->currentIndex = AdminController::$currentIndex . '&configure=' . $this->name . '&id_product=' . (int)Tools::getValue('id_product') . '&viewproductList';

        return $helper->generateList(FollowList::getCustomersForProduct($id_product), $this->fields_list);
    }
}

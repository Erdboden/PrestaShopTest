<?php
/**
 * 2016 Terranet
 *
 * NOTICE OF LICENSE
 *
 * @author    Terranet
 * @copyright 2016 Terranet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class GshoppingfeedGetListModuleFrontController extends ModuleFrontController
{
    public function __construct()
    {
        $token = Tools::getValue('token');
        if (!Tools::getValue('token') || empty($token)
            || !Tools::getValue('key')
            || md5(_COOKIE_KEY_ . Tools::getValue('key')) != Tools::getValue('token')
        ) {
            Tools::redirect('index.php?controller=index');
        }

        parent::__construct();
    }

    public function initContent()
    {
        if (Tools::getValue('key')
            && Validate::isInt(Tools::getValue('key'))
            && (int)Tools::getValue('key') > 0) {
            $ret = array();
            $sql = 'SELECT * FROM `' . _DB_PREFIX_ . 'gshoppingfeed` WHERE `id_gshoppingfeed` = ' . (int)Tools::getValue('key');
            $gshoppingfeed = Db::getInstance(_PS_USE_SQL_SLAVE_)->getRow($sql);
            if ($gshoppingfeed && count($gshoppingfeed) > 0) {
                $ret['name_feed'] = !empty($gshoppingfeed['name']) ? $gshoppingfeed['name'] : Configuration::get('PS_SHOP_NAME');
                $ret['mpn_type'] = $gshoppingfeed['mpn_type'];
                $ret['only_active'] = (int)$gshoppingfeed['only_active'];
                $ret['export_attributes'] = $gshoppingfeed['export_attributes'];
                $ret['export_attribute_prices'] = $gshoppingfeed['export_attribute_prices'];
                $ret['export_attribute_images'] = $gshoppingfeed['export_attribute_images'];
                $ret['export_feature'] = $gshoppingfeed['export_feature'];
                $ret['type_image'] = $gshoppingfeed['type_image'];
                $ret['type_description'] = $gshoppingfeed['type_description'];
                $ret['id_currency'] = $gshoppingfeed['id_currency'];
                $ret['id_country'] = $gshoppingfeed['id_country'];
                $ret['id_carrier'] = json_decode($gshoppingfeed['id_carrier']);
                $ret['select_lang'] = $gshoppingfeed['select_lang'];
                $ret['get_features_gender'] = $gshoppingfeed['get_features_gender'];
                $ret['get_features_age_group'] = $gshoppingfeed['get_features_age_group'];
                $ret['get_attribute_size'] = json_decode($gshoppingfeed['get_attribute_size']);
                $ret['get_attribute_color'] = json_decode($gshoppingfeed['get_attribute_color']);
                $ret['get_attribute_pattern'] = json_decode($gshoppingfeed['get_attribute_pattern']);
                $ret['get_attribute_material'] = json_decode($gshoppingfeed['get_attribute_material']);
                $ret['unique_product'] = $gshoppingfeed['unique_product'];
                $ret['identifier_exists'] = $gshoppingfeed['identifier_exists'];
                $ret['export_non_available'] = $gshoppingfeed['export_non_available'];
                $ret['export_product_quantity'] = $gshoppingfeed['export_product_quantity'];
                $ret['additional_image'] = $gshoppingfeed['additional_image'];
                $ret['min_price'] = $gshoppingfeed['min_price_filter'];
                $ret['max_price'] = $gshoppingfeed['max_price_filter'];
                $ret['select_manufacturers'] = json_decode($gshoppingfeed['manufacturers_filter']);
                $ret['category_filter'] = json_decode($gshoppingfeed['category_filter']);
                $ret['id_gshoppingfeed'] = $gshoppingfeed['id_gshoppingfeed'];

                if (Tools::getValue('only_rebuild', false) == 1) {
                    return $this->module->generationList($ret, 'only_rebuild');
                }

                if (Tools::getValue('only_download')) {
                    $generate_path = _PS_MODULE_DIR_ . $this->module->name . DIRECTORY_SEPARATOR . 'export' . DIRECTORY_SEPARATOR . (int)Tools::getValue('key');
                    $generate_file = 'export.xml';
                    $generate_path_file = $generate_path . DIRECTORY_SEPARATOR . $generate_file;

                    $download_file_name = Date('m-d-y') . '_google';
                    header('Content-disposition: attachment; filename="' . $download_file_name . '.xml"');
                    header('Content-type: "text/xml"; charset="utf8"');
                    readfile($generate_path_file);

                    exit();
                }

                return $this->module->generationList($ret);
            }
        }
        return false;
    }
}

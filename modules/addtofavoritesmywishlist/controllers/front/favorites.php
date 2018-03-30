<?php
/**
 * 2007-2017 PrestaShop
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
 * @copyright 2007-2017 PrestaShop SA
 * @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 */

class AddToFavoritesMyWishListFavoritesModuleFrontController extends ModuleFrontController
{
    public function init()
    {
        parent::init();
    }

    public function initContent()
    {
        parent::initContent();

        $products = (new Favorite($this->context))->generateFavoriteProducts();
        $favorite_name = Configuration::get('FAVORITES_NAME', $this->context->language->id);
        $favorite_no_item_title = Configuration::get('FAVORITES_NO_ITEMS_TITLE', $this->context->language->id);
        $favorite_no_item_description = Configuration::get(
            'FAVORITES_NO_ITEMS_DESCRIPTION',
            $this->context->language->id
        );

        $this->context->smarty->assign(array(
            'products' => $products,
            'no_item_title' => $favorite_no_item_title,
            'no_item_description' => $favorite_no_item_description,
            'title' => $this->trans('My ' . $favorite_name, array(), 'Modules.Addtofavoritesmywishlist.Shop'),
            'base_url' => $this->context->link->getBaseLink(),
            'favorite_token' => Tools::substr(Tools::hash('addtofavoritesmywishlist/index'), 0, 10),
        ));

        $this->setTemplate('module:addtofavoritesmywishlist/views/templates/front/favorite_page.tpl');
    }

    private function getImageURL($image)
    {
        return $this->context->link->getMediaLink(
            __PS_BASE_URI__ . 'modules/' . $this->context->controller->module->name . '/views/img/' . $image
        );
    }

    public function getBreadcrumbLinks()
    {
        $breadcrumb = parent::getBreadcrumbLinks();
        $favorite_name = Configuration::get('FAVORITES_NAME', $this->context->language->id);

        $breadcrumb['links'][] = array(
            'title' => $this->trans('My ' . $favorite_name, array(), 'Modules.Addtofavoritesmywishlist.Shop'),
            'url' => $this->context->link->getModuleLink('addtofavoritesmywishlist', 'favorites')
        );

        return $breadcrumb;
    }
}

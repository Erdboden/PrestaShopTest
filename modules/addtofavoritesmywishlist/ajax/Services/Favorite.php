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

require('FavoriteStatistic.php');

use PrestaShop\PrestaShop\Adapter\Image\ImageRetriever;
use PrestaShop\PrestaShop\Adapter\Product\PriceFormatter;
use PrestaShop\PrestaShop\Adapter\Product\ProductColorsRetriever;
use PrestaShop\PrestaShop\Core\Product\ProductListingPresenter;

class Favorite
{
    protected $parameters;
    protected $context;
    protected $statisticService;

    public function __construct($context, array $parameters = array())
    {
        $this->context = $context;
        $this->parameters = (object)$parameters;
        $this->statisticService = new FavoriteStatistic();
    }

    public function save()
    {
        $checkFavorite = Db::getInstance()
            ->ExecuteS('SELECT `product_id` 
                            FROM `' . _DB_PREFIX_ . 'addtofavoritesmywishlist` 
                            WHERE `user_id` = ' . (int)$this->context->customer->id . '
                            AND `product_id` = ' . (int)$this->productID() . '
            ');

        if (count($checkFavorite) > 0) {
            return false;
        }

        Db::getInstance()->insert('addtofavoritesmywishlist', array(
            'user_id' => (int)$this->context->customer->id,
            'product_id' => (int)$this->productID()
        ));

        $this->statisticService->added((int) $this->productID());

        return true;
    }

    public function productID()
    {
        return (int)$this->parameters->product_id;
    }

    public function saveToCookie()
    {
        $favorites = array();

        if ($this->context->cookie->exists('favorites')) {
            $favorites = json_decode($this->context->cookie->favorites);
        }

        $favorites[] = $this->productID();

        $this->context->cookie->favorites = json_encode(array_unique($favorites));
    }

    public function transferCookieToDB()
    {
        if (!$this->context->cookie->exists('favorites')) {
            return false;
        }

        $favorites = json_decode($this->context->cookie->favorites);
        if (empty($favorites)) {
            return false;
        }

        $alreadyFavorite = $this->favorites();
        if (!empty($alreadyFavorite)) {
            $alreadyFavorite = call_user_func_array('array_merge_recursive', $alreadyFavorite);
        }

        foreach ($favorites as $favorite) {
            if (isset($alreadyFavorite['product_id']) && in_array($favorite, (array)$alreadyFavorite['product_id'])) {
                continue;
            }

            Db::getInstance()->insert('addtofavoritesmywishlist', array(
                'user_id' => (int)$this->context->customer->id,
                'product_id' => (int)$favorite
            ));

            $this->statisticService->added((int) $favorite);
        }

        $this->context->cookie->favorites = '';
    }

    protected function favorites()
    {
        return Db::getInstance()
            ->ExecuteS(
                'SELECT `product_id` 
                      FROM `' . _DB_PREFIX_ . 'addtofavoritesmywishlist` 
                      WHERE `user_id` = ' . (int)$this->context->customer->id
            );
    }

    public function favoriteCount()
    {
        if ($this->context->customer && $this->context->customer->isLogged()) {
            return $this->countFavoriteByUser($this->context->customer->id);
        }

        return (int)$this->countFavoriteByCookie();
    }

    protected function countFavoriteByUser($userID)
    {
        return Db::getInstance()->getValue('
                SELECT COUNT(*) 
                FROM `' . _DB_PREFIX_ . 'addtofavoritesmywishlist` 
                WHERE `user_id` = ' . (int)$userID . '
        ');
    }

    protected function countFavoriteByCookie()
    {
        if (!$this->context->cookie->exists('favorites')) {
            return 0;
        }

        $favorites = json_decode($this->context->cookie->favorites);

        return count($favorites);
    }

    public function favoriteStatus()
    {
        $this->checkParameters();

        if ($this->context->customer && $this->context->customer->isLogged()) {
            return $this->checkFavoriteByUser();
        }

        return $this->checkFavoriteByCookie();
    }

    public function checkParameters()
    {
        if (empty($this->parameters)) {
            throw new PrestaShopException('No parameters');
        }
    }

    protected function checkFavoriteByUser()
    {
        $checkFavorite = Db::getInstance()
            ->ExecuteS('SELECT `product_id` 
                            FROM `' . _DB_PREFIX_ . 'addtofavoritesmywishlist` 
                            WHERE `user_id` = ' . (int)$this->context->customer->id . '
                            AND `product_id` = ' . (int)$this->productID() . '
            ');

        if (count($checkFavorite) > 0) {
            return true;
        }
        return false;
    }

    protected function checkFavoriteByCookie()
    {
        if (!$this->context->cookie->exists('favorites')) {
            return true;
        }

        $favorites = json_decode($this->context->cookie->favorites);

        if (!empty($favorites) && in_array($this->productID(), $favorites)) {
            return true;
        }

        return false;
    }

    public function generateFavoriteProducts()
    {
        $products = $this->getFavoritesProducts();

        $products_for_template = array();

        $assembler = new ProductAssembler($this->context);
        $presenterFactory = new ProductPresenterFactory($this->context);
        $presentationSettings = $presenterFactory->getPresentationSettings();
        $presenter = new ProductListingPresenter(
            new ImageRetriever(
                $this->context->link
            ),
            $this->context->link,
            new PriceFormatter(),
            new ProductColorsRetriever(),
            $this->context->getTranslator()
        );

        if (is_array($products)) {
            foreach ($products as $product) {
                $assembler_prod = $assembler->assembleProduct(array('id_product' => $product));
                if ($assembler_prod) {
                    $products_for_template[$product] = $presenter->present(
                        $presentationSettings,
                        $assembler_prod,
                        $this->context->language
                    );
                    $products_for_template[$product]['remove_uri'] = $this->context->link->getModuleLink(
                        $this->context->controller->module->name,
                        'compare',
                        array('delete' => $product)
                    );
                }
            }

            return $products_for_template;
        }

        return array();
    }

    public function getFavoritesProducts()
    {
        if ($this->context->customer && $this->context->customer->isLogged()) {
            return $this->getProductsByUser();
        }

        return $this->getProductsByCookie();
    }

    protected function getProductsByUser()
    {
        $products = $this->favorites();
        if (!empty($products)) {
            $products = call_user_func_array('array_merge_recursive', $products);
            return (array)$products['product_id'];
        }

        return array();
    }

    protected function getProductsByCookie()
    {
        if (!$this->context->cookie->exists('favorites')) {
            return array();
        }

        $products = json_decode($this->context->cookie->favorites);

        if (empty($products)) {
            return array();
        }

        return $products;
    }

    public function remove()
    {
        $sql = 'DELETE FROM `' . _DB_PREFIX_ . 'addtofavoritesmywishlist` 
                WHERE `user_id` = ' . (int)$this->context->customer->id . ' 
                AND `product_id` = ' . (int)$this->productID();
        $res = Db::getInstance()->query($sql);

        $this->statisticService->removed((int) $this->productID());

        return (bool)$res;
    }

    public function removeFromCookie()
    {
        if (!$this->context->cookie->exists('favorites')) {
            return false;
        }

        $products = json_decode($this->context->cookie->favorites);

        if (empty($products)) {
            return false;
        }

        $remainFavorites = array_diff((array)$products, array($this->productID()));

        $this->context->cookie->favorites = json_encode(array_values($remainFavorites));

        return true;
    }
}

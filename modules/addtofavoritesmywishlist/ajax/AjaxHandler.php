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

require_once('Services/Favorite.php');

class AjaxHandler
{
    public function __call($name, $arguments)
    {
        echo "Calling inaccessible object method '$name' "
            . implode(', ', $arguments) . "\n";
    }

    public function addToFavorites(array $parameters = array())
    {
        $context = Context::getContext();
        $favoriteService = new Favorite($context, $parameters);
        $favoriteService->checkParameters();

        if ($context->customer && $context->customer->isLogged()) {
            $favoriteService->save();
        } else {
            $favoriteService->saveToCookie();
        }
    }

    public function removeFavorites(array $parameters = array())
    {
        $context = Context::getContext();
        $favoriteService = new Favorite($context, $parameters);
        $favoriteService->checkParameters();

        if ($context->customer && $context->customer->isLogged()) {
            $favoriteService->remove();
        } else {
            $favoriteService->removeFromCookie();
        }
    }
}

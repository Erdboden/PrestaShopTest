{*
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
*  @author    PrestaShop SA <contact@prestashop.com>
*  @copyright 2007-2018 PrestaShop SA
*  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
*  International Registered Trademark & Property of PrestaShop SA
*}

{if isset($errors) && count($errors)}
    <div class="bootstrap">
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">&times;</button>

            {l s='%d errors' sprintf=$errors|count mod='iconsforfeatures' }
            <br/>
            <ol>
                {foreach $errors as $error}
                    <li>{$error|escape:'htmlall':'UTF-8'}</li>
                {/foreach}
            </ol>

        </div>
    </div>
{/if}

{if isset($confirmations) && count($confirmations)}
    <div class="bootstrap">
        <div class="alert alert-success" style="display:block;">
            {foreach $confirmations as $conf}
                {$conf|escape:'htmlall':'UTF-8'}
            {/foreach}
        </div>
    </div>
{/if}
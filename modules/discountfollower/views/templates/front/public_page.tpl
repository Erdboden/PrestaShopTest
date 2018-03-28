{*
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{extends file='page.tpl'}

{block name="page_content"}
    {if isset($message) && !empty($message)}
        {$message|escape:'htmlall':'UTF-8'}
    {/if}

    <h1>{l s='Follower - Intelligent Products Wishlist & Notifier' mod='discountfollower'}</h1>

    <p class="followCustomerInfo">
        <span> {$follow_email|escape:'htmlall':'UTF-8'} </span>
        <a style="padding: 5px;" class="button button-medium" href="{$follow_logout|escape:'quotes':'UTF-8'}">
            <i class="icon-lock left"></i>
            {l s='Logout' mod='discountfollower'}
        </a>
    </p>

    <div id="follow_list">
        {block name='product_list'}
            {include file='module:discountfollower/views/templates/front/product.tpl' listing=$listing}
        {/block}
    </div>
    <input type="hidden" value="{l s='Are you sure you want to delete this item?' mod='discountfollower'}" class="follow_remove_notification">
    <script type="text/javascript">
      var dfollower_url = "{$dfollower_url|escape:'htmlall':'UTF-8' nofilter}";
    </script>
{/block}


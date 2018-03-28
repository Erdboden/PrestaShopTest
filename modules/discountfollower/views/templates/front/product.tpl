{*
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{block name='product_miniature'}
    {if (isset($listing) && count($listing) > 0)}
        <div class="follow-list row">
            {foreach from=$listing item="product"}
                {block name='product_miniature'}
                    {include file='module:discountfollower/views/templates/front/product_item.tpl' product=$product}
                {/block}
            {/foreach}
        </div>
    {/if}
{/block}

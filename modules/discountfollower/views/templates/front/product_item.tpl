{*
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{block name='product_miniature_item'}
    {if (isset($product) && count($product) > 0)}
    <article class="follow-miniature js-product-miniature item" data-id-product="{$product.id_product|intval}" itemscope
             itemtype="http://schema.org/Product">
        <div class="thumbnail-container">
            <div class="remove-follow-product">
                <a class="remove-from-follow" rel="nofollow" data-link-action="delete-from-follow" data-id-product="{$product.id_product|intval}">
                    <i class="material-icons pull-xs-left">delete</i>
                </a>
            </div>
            {block name='product_thumbnail'}
                <a href="{$product.current.url|escape:'htmlall':'UTF-8'}" class="thumbnail follow-thumbnail">
                    <img src="{$product.current.images.bySize.home_default.url|escape:'htmlall':'UTF-8'}"
                         alt="{$product.current.images.legend|escape:'htmlall':'UTF-8'}"
                         data-full-size-image-url="{$product.current.images.large.url|escape:'htmlall':'UTF-8'}">
                </a>
            {/block}
            <div class="product-description">
                {block name='product_name'}
                    <h1 class="h3 product-title" itemprop="name">
                        <a href="{$product.current.url|escape:'htmlall':'UTF-8'}">
                            {$product.current.name|escape:'htmlall':'UTF-8'|truncate:30:'...'}
                        </a>
                    </h1>
                {/block}
                {block name='product_price_and_shipping'}
                    {if $product.current.show_price}
                        <div class="product-price-and-shipping">
                            {if $product.current.discount.has_discount}
                                <span class="regular-price">{$product.current.regular_price|escape:'htmlall':'UTF-8'}</span>
                                {if $product.current.discount.discount_type === 'percentage'}
                                    <span class="discount-percentage">{$product.current.discount.discount_percentage|escape:'htmlall':'UTF-8'}</span>
                                {/if}
                            {/if}
                            <span itemprop="price" class="price">{$product.current.price_formated|escape:'htmlall':'UTF-8'}</span>
                        </div>
                    {/if}
                {/block}
            </div>
            <div class="highlighted-informations no-variants hidden-sm-down">
                {block name='quick_view'}
                    <a class="quick-view" href="#" data-link-action="quickview">
                        <i class="material-icons search">&#xE8B6;</i>
                        {l s='Quick view' mod='discountfollower'}
                    </a>
                {/block}
            </div>
        </div>
    </article>
    {/if}
{/block}

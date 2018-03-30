{**
* 2017 TerraNet
*
* NOTICE OF LICENSE
*
* @author    TerraNet
* @copyright 2017 TerraNet
* @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{extends file=$layout}

{block name='content'}
    <div class="favorite-page">
        <header class="page-header">
            <h1>
                {$title|escape:'htmlall':'UTF-8'}
            </h1>
        </header>
        {if count($products) > 0}
        <section class="featured-products  clearfix favorites">
            <div class="products">
                {foreach from=$products item="product"}
                    {block name='product_miniature'}
                        {include file='catalog/_partials/miniatures/product.tpl' product=$product}
                    {/block}
                {/foreach}
            </div>
        </section>
        {else}
            <section id="content" class="page-content no-favorites">
                <aside id="notifications">
                    <div class="container">
                        <article class="alert alert-warning" role="alert" data-alert="warning">
                            <ul>
                                <li>{$no_item_title|escape:'htmlall':'UTF-8'}</li>
                            </ul>
                        </article>
                    </div>
                </aside>
                <h6>{$no_item_description|escape:'htmlall':'UTF-8'}</h6>
            </section>
        {/if}
    </div>
    <script type="text/javascript">
      var baseUrl = "{$base_url|escape:'htmlall':'UTF-8'}";
      var favorite_token = "{$favorite_token|escape:'htmlall':'UTF-8'}";
    </script>
{/block}


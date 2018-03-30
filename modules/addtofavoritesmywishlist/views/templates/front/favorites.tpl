{**
* 2017 TerraNet
*
* NOTICE OF LICENSE
*
* @author    TerraNet
* @copyright 2017 TerraNet
* @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<div class="favorites-block">
    {if $favorite}
        <div class="to-favorites-block">
            <i class="material-icons">done</i>
            {l s='In ' mod='addtofavoritesmywishlist'}{$favorites_name|escape:'htmlall':'UTF-8'}
        </div>
    {else}
        <div class="add-to-favorites-block">
            <a class="add-to-favorites" data-id="{$id_product|intval}" href="#">
                <img src="{$favorites_img|escape:'html':'UTF-8'}">
                {l s='Add to ' mod='addtofavoritesmywishlist'}{$favorites_name|escape:'htmlall':'UTF-8'}
            </a>
        </div>
        <div class="to-favorites-block hide">
            <i class="material-icons">done</i>
            {l s='In ' mod='addtofavoritesmywishlist'}{$favorites_name|escape:'htmlall':'UTF-8'}
        </div>
    {/if}
</div>
<input type="hidden" value="{$favorite_token|escape:'htmlall':'UTF-8'}" class="favorite_token">
<script type="text/javascript">
    var baseUrl = "{$base_url|escape:'htmlall':'UTF-8'}";
    var favorite_token = "{$favorite_token|escape:'htmlall':'UTF-8'}";
</script>

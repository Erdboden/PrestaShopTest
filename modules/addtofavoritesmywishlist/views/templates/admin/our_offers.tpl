{**
* 2017 TerraNet
*
* NOTICE OF LICENSE
*
* @author    TerraNet
* @copyright 2017 TerraNet
* @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<div class="panel">
	<h3><i class="icon icon-tags"></i> {l s='Basket/Cart UpSale module ELEMENTS' mod='addtofavoritesmywishlist'}</h3>
	<div class="row">
		<div class="col-md-4">
			<div class="mod-description">
				<img class="module-logo" src="{$module_dir|escape:'htmlall':'UTF-8'}views/img/compare.png" alt="">
				<p class="desc">
					{l s='Add to compare products' mod='addtofavoritesmywishlist'}<br/>
					{l s='(from Basket/Cart UpSale)' mod='addtofavoritesmywishlist'}
				</p>
				{if isset($compare_is_installed) && $compare_is_installed}
					<span class="status_on"></span>
				{else}
					<span class="status_off"></span>
				{/if}
			</div>
			<p class="basket_free">
                {l s='Free for Premium' mod='addtofavoritesmywishlist'}
			</p>
		</div>
		<div class="col-md-4">
			<div class="mod-description">
				<img src="{$module_dir|escape:'htmlall':'UTF-8'}views/img/favorite.png" alt="">
				<p class="desc">
					{l s='Add to favorites /My Wishlist ' mod='addtofavoritesmywishlist'}<br/>
					{l s='(from Basket/Cart UpSale)' mod='addtofavoritesmywishlist'}
				</p>
                {if isset($favorite_is_installed) && $favorite_is_installed}
					<span class="status_on"></span>
                {else}
					<span class="status_off"></span>
                {/if}
			</div>
			<p class="basket_free">
                {l s='Free for Premium' mod='addtofavoritesmywishlist'}
			</p>
		</div>
		<div class="col-md-4">
			<div class="mod-description">
				<img src="{$module_dir|escape:'htmlall':'UTF-8'}views/img/basketsale.png" alt="">
				<p class="desc">
					<br/>
                    {l s='Basket/Cart UpSale (3 in 1)' mod='addtofavoritesmywishlist'}
				</p>
                {if isset($basketupsale_is_installed) && $basketupsale_is_installed}
					<span class="status_on"></span>
                {else}
					<span class="status_off"></span>
                {/if}
			</div>
			<p class="basket_premium">
                {l s='Premium' mod='addtofavoritesmywishlist'}
				<a class="discover_link btn btn-default pull-right" target="_blank" href="https://addons.prestashop.com/en/product.php?id_product=29918">
                    {l s='Discover' mod='addtofavoritesmywishlist'}
				</a>
			</p>
		</div>
	</div>
</div>

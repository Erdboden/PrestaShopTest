{*
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<div id="add-to-follower-or-refuse">
    <div class="product-add-to-follower">
        <button onclick="return false;" class="btn btn-primary update-d-follower" data-product="{$id_product|intval}">
            {if (isset($followed) && $followed)}
                {l s='Remove follower' mod='discountfollower'}
            {else}
                {l s='Add to discount follow list' mod='discountfollower'}
            {/if}
        </button>
    </div>
</div>

<script type="text/javascript">
  var dfollower_url = "{$dfollower_url|escape:'html':'UTF-8' nofilter}";
  var dfollower_add = "{l s='Add to discount follow list' mod='discountfollower' js=1}";
  var dfollower_remove = "{l s='Remove follower' mod='discountfollower' js=1}";
  var loggin_follow_required = "{l s='You must be logged in to manage your Follow list.' mod='discountfollower' js=1}";
</script>
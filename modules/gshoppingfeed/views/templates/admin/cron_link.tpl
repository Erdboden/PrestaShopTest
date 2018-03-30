{*
 * 2016 Terranet
 *
 * NOTICE OF LICENSE
 *
 * @author    Terranet
 * @copyright 2016 Terranet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}


<div class="panel topLoaderScroll">
    <h3>
        {l s='Fast generation link:' mod='gshoppingfeed'}
    </h3>

    <h4>
        {l s='Copy this link and insert it in Google Merchant Center' mod='gshoppingfeed'}
    </h4>

    {l s='Rebuild & Download link:' mod='gshoppingfeed'}


    <a target="_blank" href="{$cron_link|escape:'html':'UTF-8'}">
        {$cron_link|escape:'html':'UTF-8'}
    </a>

    <hr/>
    <h4>
        {l s='For more products quantity' mod='gshoppingfeed'}
    </h4>
    <p> {l s='Rebuild (for cronjob):' mod='gshoppingfeed'}
        <a target="_blank" href="{$cron_link_rebuild|escape:'html':'UTF-8'}">
            {$cron_link_rebuild|escape:'html':'UTF-8'}
        </a>
    </p>
    <p> {l s='Download (for Google Merchant Center):' mod='gshoppingfeed'}
        <a target="_blank" href="{$cron_link_download|escape:'html':'UTF-8'}">
            {$cron_link_download|escape:'html':'UTF-8'}
        </a>
    </p>
</div>


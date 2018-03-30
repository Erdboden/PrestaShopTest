{**
* 2016 Terranet
*
* NOTICE OF LICENSE
*
* @author    Terranet
* @copyright 2016 Terranet
* @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{if (isset($statistic) && count($statistic) > 0)}

<div class="panel">
    <form action="{$action|escape:'htmlall':'UTF-8'}" method="post" id="statistic_form" name="statistic_form"
          class="statistic-inline">
        <div class="panel-heading">
            {l s='All statistics' mod='discountfollower'}
            <strong>({if isset($count) && $count > 0}{$count|intval}{else}0{/if})</strong>
        </div>
        <table class="table">
            <thead>
            <tr>
                <th><span class="title_box active">{l s='Image' mod='discountfollower'}</span></th>
                <th><span class="title_box active">{l s='Product name' mod='discountfollower'}</span></th>
                <th><span class="title_box active">{l s='Mail conversions' mod='discountfollower'}</span></th>
                <th class="center"><span class="title_box active">{l s='Link' mod='discountfollower'}</span></th>
                <th class="center"><span class="title_box active center">{l s='Quantity product viewed' mod='discountfollower'}</span></th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$statistic item=stat}
                <tr>
                    <td class="col-md-1">
                        {if (isset($stat.image_url) && !empty($stat.image_url))}
                            <img src="{$stat.image_url|escape:'html':'UTF-8'}" alt="">
                        {/if}
                    </td>
                    <td class="col-md-4">
                        {$stat.name|escape:'html':'UTF-8'}
                    </td>
                    <td class="col-md-3">
                        {if ($stat.mails && is_array($stat.mails) && count($stat.mails))}
                            {foreach from=$stat.mails item=mail}
                                <p>
                                    {$mail.from_mail|escape:'html':'UTF-8'}
                                    {if ($mail.qty > 1)}
                                        ({$mail.qty|intval})
                                    {/if}
                                </p>
                            {/foreach}
                        {/if}
                    </td>
                    <td class="col-md-2 center">
                        <a target="_blank" href="{$stat.product_link|escape:'html':'UTF-8'}">
                            {l s='Link' mod='discountfollower'}
                        </a>
                    </td>
                    <td class="col-md-2 center">
                        <b>
                            {$stat.qty|intval}
                        </b>
                    </td>
                </tr>
            {/foreach}
            </tbody>
        </table>
    </form>
</div>
{else}
<div class="panel">
    <form action="{$action|escape:'htmlall':'UTF-8'}" method="post" id="statistic_form" name="statistic_form"
          class="statistic-inline">
            <div class="panel-heading">
                {l s='All statistics' mod='discountfollower'}
                <strong>(0)</strong>
            </div>
            <table class="table">
                <thead>
                <tr>
                    <th><span class="title_box active">{l s='Image' mod='discountfollower'}</span></th>
                    <th><span class="title_box active">{l s='Product name' mod='discountfollower'}</span></th>
                    <th><span class="title_box active">{l s='Mail conversions' mod='discountfollower'}</span></th>
                    <th class="center"><span class="title_box active">{l s='Link' mod='discountfollower'}</span></th>
                    <th class="center"><span class="title_box active center">{l s='Quantity product viewed' mod='discountfollower'}</span></th>
                </tr>
                </thead>
            </table>
    </form>
    <h4 align="center">
        {l s='No exist statistic items' mod='discountfollower'}
    </h4>
</div>
{/if}
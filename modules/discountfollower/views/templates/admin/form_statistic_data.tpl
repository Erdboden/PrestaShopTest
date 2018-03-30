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
                <th><span class="title_box active">{l s='Email send' mod='discountfollower'}</span></th>
                <th><span class="title_box active">{l s='Type send' mod='discountfollower'}</span></th>
                <th><span class="title_box active">{l s='Viewed' mod='discountfollower'}</span></th>
                <th><span class="title_box active">{l s='Date' mod='discountfollower'}</span></th>
            </tr>
            </thead>
            <tbody>
            {foreach from=$statistic item=stat}
                <tr>
                    <td class="col-md-3">
                        {$stat.from_mail|escape:'html':'UTF-8'}
                    </td>
                    <td class="col-md-3">
                        {$stat.type_name|escape:'html':'UTF-8'}
                    </td>
                    <td class="col-md-3">
                        {if ($stat.viewed == 1)}
                            {l s='Viewed' mod='discountfollower'}
                            <br/>
                            {$stat.viewed_data|escape:'html':'UTF-8'}
                        {else}
                            {l s='-' mod='discountfollower'}
                        {/if}
                    </td>
                    <td class="col-md-3">
                        {$stat.date_add|escape:'html':'UTF-8'}
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
                    <th><span class="title_box active">{l s='Email send' mod='discountfollower'}</span></th>
                    <th><span class="title_box active">{l s='Type send' mod='discountfollower'}</span></th>
                    <th><span class="title_box active">{l s='Viewed' mod='discountfollower'}</span></th>
                    <th><span class="title_box active">{l s='Date' mod='discountfollower'}</span></th>
                </tr>
                </thead>
            </table>
    </form>
    <h4 align="center">
        {l s='No exist statistic items' mod='discountfollower'}
    </h4>
</div>

{/if}
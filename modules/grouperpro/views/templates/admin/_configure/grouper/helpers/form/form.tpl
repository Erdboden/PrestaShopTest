{*
 * 2016 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2016 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{extends file="helpers/form/form.tpl"}
{block name="input"}
    {if $input.type == 'range_status'}
        <div class="form-group row">
            <div class="col-md-12">
                <p class="control-label pull-left"><strong>{l s='For quantity orders:' mod='grouperpro'}</strong></p>
            </div>
            <div class="col-md-3 col-lg-3">
                <label class="control-label" for="order_from">{l s='Has at least X orders' mod='grouperpro'}</label>
                </br>
                <input placeholder="10" type="text" name="order_from" id="order_from" value="{if isset($fields_value.order_from)}{$fields_value.order_from|escape:'html':'UTF-8'}{/if}" class="fixed-width-lg">
            </div>
            <div class="col-md-3 col-lg-3">
                <label class="control-label" for="order_to">{l s='Has max Y orders' mod='grouperpro'}</label>
                </br>
                <input placeholder="20" type="text" name="order_to" id="order_to" value="{if isset($fields_value.order_to)}{$fields_value.order_to|escape:'html':'UTF-8'}{/if}" class="fixed-width-lg">
            </div>
            <div class="col-md-3 col-lg-3">
                <label class="control-label" for="order_status">{l s='Of status' mod='grouperpro'} {l s='(if empty then all)' mod='grouperpro'}</label>
                </br>
                <select multiple name="order_status[]" id="order_status" class="chosen fixed-width-xl">
                    {if isset($input.orders_status_list) && $input.orders_status_list}
                        {foreach from=$input.orders_status_list item=value}
                            <option {if isset($fields_value.order_status) && in_array($value.id_order_state, $fields_value.order_status)}selected="selected"{/if} value="{$value.id_order_state|escape:'htmlall':'UTF-8'}">
                                {$value.name|escape:'htmlall':'UTF-8'}
                            </option>
                        {/foreach}
                    {/if}
                </select>
            </div>
            <div class="col-md-3 col-lg-3">&nbsp;</div>
        </div>
        <div class="form-group row">
            <div class="col-md-12">
                <p class="control-label pull-left"><strong>{l s='Or Orders sum:' mod='grouperpro'}</strong></p>
            </div>
            <div class="col-md-3 col-lg-3">
                <label class="control-label" for="order_sum_from">{l s='Has min Х' mod='grouperpro'}</label>
                </br>
                <input placeholder="10" type="text" name="order_sum_from" id="order_sum_from" value="{if isset($fields_value.order_sum_from) && !empty($fields_value.order_sum_from)}{$fields_value.order_sum_from|escape:'html':'UTF-8'}{/if}" class="fixed-width-lg">
            </div>
            <div class="col-md-3 col-lg-3">
                <label class="control-label" for="order_sum_to">{l s='Has max Y' mod='grouperpro'}</label>
                </br>
                <input placeholder="20" type="text" name="order_sum_to" id="order_sum_to" value="{if isset($fields_value.order_sum_to) && !empty($fields_value.order_sum_to)}{$fields_value.order_sum_to|escape:'html':'UTF-8'}{/if}" class="fixed-width-lg">
            </div>
            <div class="col-md-3 col-lg-3">
                <label class="control-label" for="order_currency">{l s='In Currency' mod='grouperpro'}</label>
                </br>
                <select multiple name="order_currency[]" id="order_currency" class="chosen fixed-width-xl">
                    {if isset($input.currencies) && $input.currencies}
                        {foreach from=$input.currencies item=value}
                            <option {if isset($fields_value.order_currency) && !empty($fields_value.order_currency) && in_array($value.id_currency, $fields_value.order_currency)}selected="selected"{/if} value="{$value.id_currency|escape:'htmlall':'UTF-8'}">
                                {$value.name|escape:'htmlall':'UTF-8'}
                            </option>
                        {/foreach}
                    {/if}
                </select>
            </div>
            <div class="col-md-3 col-lg-3">
                <label class="control-label" for="order_sum_status">{l s='Of status' mod='grouperpro'}</label>
                </br>
                <select multiple name="order_sum_status[]" id="order_sum_status" class="chosen fixed-width-xl">
                    {if isset($input.orders_status_list) && $input.orders_status_list}
                        {foreach from=$input.orders_status_list item=value}
                            <option {if isset($fields_value.order_sum_status) && !empty($fields_value.order_sum_status) && in_array($value.id_order_state, $fields_value.order_sum_status)}selected="selected"{/if} value="{$value.id_order_state|escape:'htmlall':'UTF-8'}">
                                {$value.name|escape:'htmlall':'UTF-8'}
                            </option>
                        {/foreach}
                    {/if}
                </select>
            </div>
        </div>

    {elseif $input.type == 'needmodule'}
        <div class="form-group">
            <div class="col-md-8 col-lg-8 control-label">
                <p align="left">
                    {l s='"Cron Tasks Manager" module is required, but not installed!' mod='grouperpro'}
                </p>
                <p align="left">
                    {l s='Please install the module: "Cron Tasks Manager" by PrestaShop' mod='grouperpro'}
                </p>
            </div>
        </div>
    {else}
        {$smarty.block.parent}
    {/if}
{/block}
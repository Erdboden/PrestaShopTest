{*
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{extends file="helpers/form/form.tpl"}

{block name="script"}
    function followerManagementActivationAuthorization() {
        if ($('input[name=DISCOUNTFOLLOWER_AUTH_REQUIRED]:checked').val()) {
            $('#DISCOUNTFOLLOWER_MAIL_REQUIRED_on').attr('disabled', true)
            $('#DISCOUNTFOLLOWER_MAIL_REQUIRED_off').attr('disabled', true)
        } else {
            $('#DISCOUNTFOLLOWER_MAIL_REQUIRED_on').attr('disabled', false)
            $('#DISCOUNTFOLLOWER_MAIL_REQUIRED_off').attr('disabled', false)
        }
    }
    $(function(){
        followerManagementActivationAuthorization();
    })
{/block}

{block name="input"}
    {if $input.type == 'switch_js'}
        <span class="switch prestashop-switch fixed-width-lg">
            {foreach $input.values as $value}
                <input type="radio" name="{$input.name|escape:'htmlall':'UTF-8'}"{if $value.value == 1} id="{$input.name|escape:'htmlall':'UTF-8'}_on"{else} id="{$input.name|escape:'htmlall':'UTF-8'}_off"{/if} value="{$value.value|escape:'htmlall':'UTF-8'}"{if $fields_value[$input.name] == $value.value} checked="checked"{/if} {if isset($input['js']['change']) && !empty($input['js']['change'])}onchange="{$input['js']['change']|escape:'html':'UTF-8'}"{/if} {if (isset($input.disabled) && $input.disabled) or (isset($value.disabled) && $value.disabled)} disabled="disabled"{/if}/>
            {strip}
                <label {if $value.value == 1} for="{$input.name|escape:'htmlall':'UTF-8'}_on"{else} for="{$input.name|escape:'htmlall':'UTF-8'}_off"{/if}>
                {if $value.value == 1}
                    {l s='Yes' mod='discountfollower'}
                {else}
                    {l s='No' mod='discountfollower'}
                {/if}
            </label>
            {/strip}
            {/foreach}
            <a class="slide-button btn"></a>
        </span>
    {elseif $input.type == 'hr'}
        {literal}
            <style>
                .clearLine {
                    display: block;
                    width: 100%;
                    border-top: 1px solid #363A41;
                }
            </style>
        {/literal}
        <div class="clearLine col-md-9"></div>
    {else}
        {$smarty.block.parent}
    {/if}
{/block}

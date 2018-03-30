{*
 * 2016 Terranet
 *
 * NOTICE OF LICENSE
 *
 * @author    Terranet
 * @copyright 2016 Terranet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{extends file="helpers/form/form.tpl"}

{block name="script"}

{/block}

{block name='after'}
    {if $submit_action == 'submitGshoppingfeedModule'}
        <div class="panel text-center rev_before">
            <span data-tab="gshoppingfeed_action" class="step-title tab">{l s='Step 2' mod='gshoppingfeed'}</span>
            <p class="help-block">
                {l s='Configuration and filter generation template' mod='gshoppingfeed'}
            </p>
        </div>
        {if (isset($fields.form.form.anchor) && $fields.form.form.anchor == 1)}
            <script type="text/javascript">
                openGSFConfigurationList({if (isset($fields.form.form.getLink) && $fields.form.form.getLink == 1)}1{else}0{/if});
            </script>
        {elseif (isset($fields.form.form.newForm) && $fields.form.form.newForm == 1)}
            <script type="text/javascript">
                openGSFConfigurationNewList();
            </script>
        {/if}

    {/if}
{/block}
{*
 * 2016 Terranet
 *
 * NOTICE OF LICENSE
 *
 * @author    Terranet
 * @copyright 2016 Terranet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{if isset($taxonomyLists) && count($taxonomyLists) > 0}
    <select class="chosen taxonomy_option_list" name="">
    {foreach from=$taxonomyLists item=list}
        <option {if (isset($taxonomySelected) && isset($taxonomySelected.id_taxonomy) && $taxonomySelected.id_taxonomy==$list.key|intval)}selected="selected"{/if} value="{$list.key|escape:'htmlall':'UTF-8'}">
            {$list.name|escape:'htmlall':'UTF-8'}
        </option>
    {/foreach}
    </select>
{else}
    <span class="label color_field" style="background-color:red;color:white;min-width: 120px; display: inline-block">
        <p class="help-block">
            {l s='No exist' mod='gshoppingfeed'}
        </p>
    </span>
{/if}
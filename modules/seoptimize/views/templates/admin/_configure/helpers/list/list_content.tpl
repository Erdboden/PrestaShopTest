{*
 * 2016 Terranet
 *
 * NOTICE OF LICENSE
 *
 * @author    Terranet
 * @copyright 2016 Terranet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{extends file="helpers/list/list_content.tpl"}
{block name="td_content"}
    {foreach from=$tr item=itm}
        {dump($itm.id_seoptimize)}
        <b>{$itm.iso|escape:'html':'UTF-8'}</b>
        : {$itm.item|escape:'html':'UTF-8'}
        <br/>
    {/foreach}
{/block}

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
    {if isset($params.type) && $params.type =='categories_list'}
        {foreach $tr[0] as $item}
            {$commaSeparated[] = $item.name}
        {/foreach}
        {implode(", ",$commaSeparated)}
        {$commaSeparated = null}
    {else}
        {$smarty.block.parent}
    {/if}
{/block}

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

    {if isset($params.type) && $params.type == 'category_name'}
        {foreach $tr[0] as $item}
            {$commaSeparated[] = $item.name}
        {/foreach}
        {implode(", ",$commaSeparated)}
        {$commaSeparated = null}
    {/if}


    {if isset($params.type) && $params.type == 'rules_meta'}
        {if $tr.id_seoptimize_lang==null}
            No rule
        {else}
            <b>title:</b>
            <br>
            {$tr.seo_meta_title}
            <br>
            <b>description:</b>
            <br>
            {$tr.seo_meta_description}
            <br>
            <b>keywords:</b>
            <br>
            {$tr.seo_meta_keywords}
            <br>
            <b>image alt:</b>
            <br>
            {$tr.seo_image_alt}
        {/if}
    {/if}

    {if isset($params.type) && $params.type == 'custom_meta'}
        <b>title:</b>
        <br>
        {$tr.meta_title}
        <br>
        <b>description:</b>
        <br>
        {$tr.meta_description}
        <br>
        <b>keywords:</b>
        <br>
        {$tr.meta_keywords}
        <br>
        <b>image alt:</b>
        <br>
        {$tr.legend}
    {/if}
{/block}

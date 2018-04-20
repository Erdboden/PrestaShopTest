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

    {if isset($params.type) && $params.type == 'product'}
        <br>
        {$tr.product_name}
        <br>
        <img src="{$tr[1]}" class="imgm img-thumbnail" height="63" width="63">
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
            <input type="hidden" value="{$tr.$identifier|intval}" class="ind">
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
        <div class="edit-meta">
            <input type="hidden" value="{$tr.$identifier|intval}" name="ind" class="ind">
            {if $tr.custom_title==null}
            no custom meta
                {else}
            <b>title:</b><br>
            <div class="mtitle">
                {if $tr.has_custom_title}
                    <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                           name="has_custom_title" checked>
                {else}
                    <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                           name="has_custom_title">
                {/if}
                {$tr.custom_title}
            </div>
            <b>description:</b>
            <div class="mdescription">
                <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                       name="has_custom_description" value="{$tr.has_custom_description}">
                {$tr.custom_description}
            </div>
            <b>keywords:</b>
            <br>
            <div class="mkeywords">
                <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                       name="has_custom_keywords" value="{$tr.has_custom_keywords}">
                {$tr.custom_keywords}
            </div>
            <b>image alt:</b>
            <br>
            <div class="mlegend">
                <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta" name="has_custom_alt"
                       value="{$tr.has_custom_alt}">
                {$tr.custom_alt}
            </div>
                {/if}
        </div>
    {/if}
{/block}

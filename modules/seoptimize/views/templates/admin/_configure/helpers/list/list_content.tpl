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


    {*{if isset($params.type) && $params.type == 'rules_meta'}*}
    {*{if $tr.id_seoptimize_lang==null}*}
    {*No rule*}
    {*{else}*}
    {*<input type="hidden" value="{$tr.$identifier|intval}" class="ind">*}
    {*<b>title:</b>*}
    {*<br>*}
    {*{$tr.seo_meta_title}*}
    {*<br>*}
    {*<b>description:</b>*}
    {*<br>*}
    {*{$tr.seo_meta_description}*}
    {*<br>*}
    {*<b>keywords:</b>*}
    {*<br>*}
    {*{$tr.seo_meta_keywords}*}
    {*<br>*}
    {*<b>image alt:</b>*}
    {*<br>*}
    {*{$tr.seo_image_alt}*}
    {*{/if}*}
    {*{/if}*}

    {if isset($params.type) && $params.type == 'custom_meta'}
        <div class="edit-meta">
            <input type="hidden" value="{$tr.$identifier|intval}" name="ind" class="ind">

            <b>title:</b>
            <br>
            <div class="mtitle">
                <input type="hidden" class="custom-meta" value="{$tr.custom_title}">
                {if $tr.has_custom_title}
                    <input type="hidden" class="rules-meta" value="{$tr.seo_meta_title}">
                    <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                           name="seo_meta_title" checked>
                    <span class="meta-text">
                {$tr.custom_title}
                    </span>
                    <div class="btn edit-custom-meta"> / Edit</div>
                {else}
                    <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                           name="seo_meta_title">

                    <span class="meta-text">
                {$tr.seo_meta_title}
                    </span>
                {/if}


            </div>
            <b>description:</b>
            <div class="mdescription">
                {if $tr.has_custom_description}
                    <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                           name="seo_meta_description" checked>
                    <span class="meta-text">
                    {$tr.custom_description}
                    </span>
                    <div class="btn edit-custom-meta"> / Edit</div>
                {else}
                    <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                           name="seo_meta_description">
                    <span class="meta-text">
                    {$tr.seo_meta_description}
                    </span>
                {/if}


            </div>
            <b>keywords:</b>
            <br>
            <div class="mkeywords">
                {if $tr.has_custom_keywords}
                    <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                           name="seo_meta_keywords" checked>
                    <span class="meta-text">
                    {$tr.custom_keywords}
                    </span>
                    <div class="btn edit-custom-meta"> / Edit</div>
                {else}
                    <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                           name="seo_meta_keywords">
                    <span class="meta-text">
                    {$tr.seo_meta_keywords}
                    </span>
                {/if}
            </div>
            <b>image alt:</b>
            <br>
            <div class="mlegend">
                {if $tr.has_custom_alt}
                    <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                           name="seo_image_alt" checked>
                    <span class="meta-text">
                    {$tr.custom_alt}
                    </span>
                    <div class="btn edit-custom-meta"> / Edit</div>
                {else}
                    <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                           name="seo_image_alt">
                    <span class="meta-text">
                    {$tr.seo_image_alt}
                    </span>
                {/if}

            </div>
        </div>
    {/if}
{/block}

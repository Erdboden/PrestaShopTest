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
        {foreach $tr[0] as $item}
            {$commaSeparated[] = $item.name}
        {/foreach}
        {implode(", ",$commaSeparated)}
        {$commaSeparated = null}
        <br>
        <img src="{$tr[1]}" class="imgm img-thumbnail" height="63" width="63">
    {/if}

    {*{if isset($params.type) && $params.type == 'category_name'}*}
    {*{foreach $tr[0] as $item}*}
    {*{$commaSeparated[] = $item.name}*}
    {*{/foreach}*}
    {*{implode(", ",$commaSeparated)}*}
    {*{$commaSeparated = null}*}
    {*{/if}*}


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
        <div class="meta-content">
            <table style="width:100%" class="rules-table">
                <tr>
                    <td class="meta-info">
                        <input type="hidden" value="{$tr.$identifier|intval}" name="ind" class="ind">
                        <input type="hidden" class="custom-meta" value="{$tr.custom_title}">
                        <input type="hidden" class="rules-meta" value="{$tr.seo_meta_title}">
                        Title
                    </td>
                    {if $tr.has_custom_title}
                        <td class="meta-to-use">
                            <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                                   name="seo_meta_title" checked>
                        </td>
                        <td class="table-meta-content">
                        <span class="meta-text">
                {$tr.custom_title}
                    </span>
                            <a class="edit-custom-meta"> / Edit</a>
                        </td>
                    {else}
                        <td class="meta-to-use">
                            <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                                   name="seo_meta_title">
                        </td>
                        <td class="table-meta-content">
                        <span class="meta-text">
                {$tr.seo_meta_title}
                    </span>
                        </td>
                    {/if}
                </tr>
                <tr>
                    <td  class="meta-info">
                        <input type="hidden" value="{$tr.$identifier|intval}" name="ind" class="ind">
                        <input type="hidden" class="custom-meta" value="{$tr.custom_description}">
                        <input type="hidden" class="rules-meta" value="{$tr.seo_meta_description}">
                        Description
                    </td>
                    {if $tr.has_custom_description}
                        <td class="meta-to-use">
                            <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                                   name="seo_meta_description" checked>
                        </td>
                        <td class="table-meta-content">
                            <span class="meta-text">
                                {$tr.custom_description}
                            </span>
                            <a class="edit-custom-meta"> / Edit</a>
                        </td>
                    {else}
                        <td class="meta-to-use">
                            <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                                   name="seo_meta_description">
                        </td>
                        <td class="table-meta-content">
                            <span class="meta-text">
                    {$tr.seo_meta_description}
                    </span>
                        </td>
                    {/if}
                </tr>
                <tr>
                    <td  class="meta-info">
                        <input type="hidden" value="{$tr.$identifier|intval}" name="ind" class="ind">
                        <input type="hidden" class="custom-meta" value="{$tr.custom_keywords}">
                        <input type="hidden" class="rules-meta" value="{$tr.seo_meta_keywords}">
                        Keywords
                    </td>
                    {if $tr.has_custom_keywords}
                        <td class="meta-to-use">
                            <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                                   name="seo_meta_keywords" checked>
                        </td>
                        <td class="table-meta-content">
                        <span class="meta-text">
                    {$tr.custom_keywords}
                    </span>
                            <a class="edit-custom-meta"> / Edit</a>
                        </td>
                    {else}
                        <td class="meta-to-use">
                            <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                                   name="seo_meta_keywords">
                        </td>
                        <td class="table-meta-content">
                        <span class="meta-text">
                    {$tr.seo_meta_keywords}
                    </span>
                        </td>
                    {/if}
                </tr>
                <tr>
                    <td  class="meta-info">
                        <input type="hidden" value="{$tr.$identifier|intval}" name="ind" class="ind">
                        <input type="hidden" class="custom-meta" value="{$tr.custom_alt}">
                        <input type="hidden" class="rules-meta" value="{$tr.seo_image_alt}">
                        Image alt
                    </td>
                    {if $tr.has_custom_alt}
                        <td class="meta-to-use">
                            <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                                   name="seo_image_alt" checked>
                        </td>
                        <td class="table-meta-content">
                        <span class="meta-text">
                        {$tr.custom_alt}
                        </span>
                            <a class="edit-custom-meta"> / Edit</a>
                        </td>
                    {else}
                        <td class="meta-to-use">
                            <input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"
                                   name="seo_image_alt">
                        </td>
                        <td class="table-meta-content">
                        <span class="meta-text">
                        {$tr.seo_image_alt}
                        </span>
                        </td>
                    {/if}
                </tr>
            </table>


            {*<span class="meta-labels">*}
            {*<label>Title</label>*}
            {*<label>Description</label>*}
            {*<label>Keywords</label>*}
            {*<label>Image alt</label>*}
        {*</span>*}
            {*<span class="edit-meta">*}
            {*<input type="hidden" value="{$tr.$identifier|intval}" name="ind" class="ind">*}

                {*<div class="d-inline">*}
                {*<span class="mtitle meta-inputs">*}
                {*<input type="hidden" class="custom-meta" value="{$tr.custom_title}">*}
                {*<input type="hidden" class="rules-meta" value="{$tr.seo_meta_title}">*}
                {*{if $tr.has_custom_title}*}

                {*<input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"*}
                {*name="seo_meta_title" checked>*}
                {*<span class="meta-text">*}
                {*{$tr.custom_title}*}
                {*</span>*}
                {*<a class="edit-custom-meta"> / Edit</a>*}
                {*{else}*}
                {*<input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"*}
                {*name="seo_meta_title">*}
                {*<span class="meta-text">*}
                {*{$tr.seo_meta_title}*}
                {*</span>*}
                {*{/if}*}
                {*</span>*}
                {*</div>*}
                {*<div class="d-inline">*}
            {*<span class="mdescription meta-inputs">*}
                {*{if $tr.has_custom_description}*}
                    {*<input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"*}
                           {*name="seo_meta_description" checked>*}
                    {*<span class="meta-text">*}
                    {*{$tr.custom_description}*}
                    {*</span>*}
                    {*<a class="edit-custom-meta"> / Edit</a>*}



{*{else}*}



                    {*<input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"*}
                           {*name="seo_meta_description">*}
                    {*<span class="meta-text">*}
                    {*{$tr.seo_meta_description}*}
                    {*</span>*}
                {*{/if}*}
            {*</span>*}
            {*</div>*}
            {*<div class="d-inline">*}
            {*<span class="mkeywords meta-inputs">*}
                {*{if $tr.has_custom_keywords}*}
                    {*<input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"*}
                           {*name="seo_meta_keywords" checked>*}
                    {*<span class="meta-text">*}
                    {*{$tr.custom_keywords}*}
                    {*</span>*}
                    {*<a class="edit-custom-meta"> / Edit</a>*}



{*{else}*}



                    {*<input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"*}
                           {*name="seo_meta_keywords">*}
                    {*<span class="meta-text">*}
                    {*{$tr.seo_meta_keywords}*}
                    {*</span>*}
                {*{/if}*}
            {*</span>*}
            {*</div>*}
            {*<div class="d-inline">*}
                {*<span class="mlegend meta-inputs">*}
                    {*{if $tr.has_custom_alt}*}
                        {*<input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"*}
                               {*name="seo_image_alt" checked>*}
                        {*<span class="meta-text">*}
                        {*{$tr.custom_alt}*}
                        {*</span>*}
                        {*<a class="edit-custom-meta"> / Edit</a>*}



{*{else}*}



                        {*<input type="checkbox" onclick="event.stopPropagation()" class="use-rules-meta"*}
                               {*name="seo_image_alt">*}
                        {*<span class="meta-text">*}
                        {*{$tr.seo_image_alt}*}
                        {*</span>*}
                    {*{/if}*}
                {*</span>*}
            {*</div>*}
        {*</span>*}
        </div>
    {/if}
{/block}

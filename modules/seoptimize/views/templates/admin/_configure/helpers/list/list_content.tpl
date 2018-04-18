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
        <div class="edit-meta" contenteditable>
            <input type="hidden" value="{$tr.$identifier|intval}" name="ind" class="ind">
            <b>title:</b><br>
            <div class="mtitle">
            {$tr.meta_title}
            </div>
            <br>
            <b>description:</b>
            <br>
            <div class="mdescription">
            {$tr.meta_description}
            </div>
            <br>
            <b>keywords:</b>
            <br>
            <div class="mkeywords">
            {$tr.meta_keywords}
            </div>
            <br>
            <b>image alt:</b>
            <br>
            <div class="mlegend">
            {$tr.legend}
            </div>
        </div>
    {/if}
{/block}

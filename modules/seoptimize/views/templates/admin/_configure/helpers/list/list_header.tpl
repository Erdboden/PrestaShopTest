{extends file="helpers/list/list_header.tpl"}
{block name="preTable"}
    {if $list_id == 'seoptimize_category_seo_rule'}
        {if isset($back_to_add)}
            <a class="btn btn-info pull-right" href="{$back_to_add}&newRule=1" id="new_rule_from_edit">New rule</a>
        {else}
            <a class="btn btn-info pull-right" href="#" id="new_rule">New rule</a>
        {/if}
    {/if}

    {if $list_id == 'seoptimize_products'}
        {strip}
            {addJsDef reloadProductsUri=$update_path}
        {/strip}
        <div class="form-group">
            <div class="col-lg-3">
                {if $languages|count > 1}
                <div class="form-group">
                    {/if}
                    <select class="lang_google_lists" id="change_google_lists" name="lang_google_lists">
                        {foreach $languages as $language}
                            <option {if isset($id_language) && $id_language == $language.id_lang}selected="selected"{/if} value="{$language.id_lang|escape:'htmlall':'UTF-8'}">{$language.name|escape:'htmlall':'UTF-8'}
                                - ({$language.language_code|escape:'htmlall':'UTF-8'})
                            </option>
                        {/foreach}
                    </select>
                    {if $languages|count > 1}
                </div>
                {/if}
            </div>
        </div>
    {/if}

{/block}
{extends file="helpers/list/list_header.tpl"}
{block name="preTable"}
    {if $list_id == 'seoptimize_category_seo_rule'}
        {*{strip}*}
            {*{dump($back_to_add)}*}
        {*{/strip}*}
        {if isset($back_to_add)}
            <a class="btn btn-info pull-right" href="{$back_to_add}" id="new_rule_from_edit">New rule</a>
        {else}
            <a class="btn btn-info pull-right" href="#" id="new_rule">New rule</a>
        {/if}
    {/if}

{/block}
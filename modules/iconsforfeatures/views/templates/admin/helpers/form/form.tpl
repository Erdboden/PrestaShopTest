{block name="input"}
    {if $input.type == 'file' && $input.name == 'icon'}
    {if isset($input.display_icon) && $input.display_icon}
        {if isset($fields_value.icon) && $fields_value.icon}
            <div id="icon">
                {$fields_value.icon}
                <p>{l s='File size' mod='iconsforfeatures'} {$fields_value.icon_size|intval}kb</p>
                <a class="btn btn-default" href="{$current|escape:'htmlall':'UTF-8'}&{$identifier|escape:'htmlall':'UTF-8'}={$form_id|intval}&token={$token|escape:'htmlall':'UTF-8'}&deleteCover=1" style="margin-bottom:12px">
                    <i class="icon-trash"></i> {l s='Delete' mod='iconsforfeatures'}
                </a>
            </div>
        {/if}
    {/if}
{/block}
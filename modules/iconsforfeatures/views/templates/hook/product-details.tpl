{block name='product_features'}
    {if $grouped_features}
        <section class="product-features">
            <h3 class="h6">{l s='Data sheet' d='Shop.Theme.Catalog'}</h3>
            <dl class="data-sheet">
                {foreach from=$grouped_features item=feature}
                    <dt class="name">
                        {if Configuration::get('ICONSFORFEATURES_ALT', null)}
                            <img src="{$feature.icon}"
                                 style="padding-right: {Configuration::get('ICONSFORFEATURES_RIGHT_PADDING', null)}"
                                 title="{$feature.name}"
                                 alt="{$feature.name}">
                        {else}
                            <img src="{$feature.icon}"
                                 style="padding-right: {Configuration::get('ICONSFORFEATURES_RIGHT_PADDING', null)}">
                        {/if}
                        {if Configuration::get('ICONSFORFEATURES_FEATURES_TITLE', null)}
                            {$feature.name}
                        {/if}
                    </dt>
                    <dd class="value">{$feature.value|escape:'htmlall'|nl2br nofilter}</dd>
                {/foreach}
            </dl>
        </section>
    {/if}
{/block}


{**
 * NOTICE OF LICENSE
 *
 * This file is licenced under the Software License Agreement.
 * With the purchase or the installation of the software in your application
 * you accept the licence agreement.
 *
 * You must not modify, adapt or create derivative works of this source code
 *
 *  @author    Your Name
 *  @copyright 2018 Terranet
 *  @license   LICENSE.txt
 *}
{block name='product_features'}
    {if $grouped_features}
        <section class="product-features">
            <h3 class="h6">{l s='Data sheet' d='Shop.Theme.Catalog'}</h3>
            <dl class="data-sheet">
                {foreach from=$grouped_features item=feature}
                    <dt class="name">
                        {if $feature.icon!=''}
                            {if Configuration::get('ICONSFORFEATURES_ALT', null)}
                                {if Configuration::get('ICONSFORFEATURES_IMAGE_WIDTH', null)==0 && Configuration::get('ICONSFORFEATURES_IMAGE_HEIGHT', null)==0}
                                    <img src="{$feature.icon}"
                                         style="margin-right: {Configuration::get('ICONSFORFEATURES_RIGHT_MARGIN', null)}px;
                                                 margin-left: {Configuration::get('ICONSFORFEATURES_LEFT_MARGIN', null)}px;"
                                         title="{$feature.name}"
                                         alt="{$feature.name}">
                                {elseif Configuration::get('ICONSFORFEATURES_IMAGE_WIDTH', null)==0}
                                    <img src="{$feature.icon}"
                                         style="margin-right: {Configuration::get('ICONSFORFEATURES_RIGHT_MARGIN', null)}px;
                                                 margin-left: {Configuration::get('ICONSFORFEATURES_LEFT_MARGIN', null)}px;
                                                 height: {Configuration::get('ICONSFORFEATURES_IMAGE_HEIGHT', null)}px;
                                                 width: auto"
                                         title="{$feature.name}"
                                         alt="{$feature.name}">
                                {elseif Configuration::get('ICONSFORFEATURES_IMAGE_HEIGHT', null)==0}
                                    <img src="{$feature.icon}"
                                         style="margin-right: {Configuration::get('ICONSFORFEATURES_RIGHT_MARGIN', null)}px;
                                                 margin-left: {Configuration::get('ICONSFORFEATURES_LEFT_MARGIN', null)}px;
                                                 height: auto;
                                                 width: {Configuration::get('ICONSFORFEATURES_IMAGE_WIDTH', null)}px;"
                                         title="{$feature.name}"
                                         alt="{$feature.name}">
                                {else}
                                    <img src="{$feature.icon}"
                                         style="margin-right: {Configuration::get('ICONSFORFEATURES_RIGHT_MARGIN', null)}px;
                                                 margin-left: {Configuration::get('ICONSFORFEATURES_LEFT_MARGIN', null)}px;
                                                 width: {Configuration::get('ICONSFORFEATURES_IMAGE_WIDTH', null)}px;
                                                 height: {Configuration::get('ICONSFORFEATURES_IMAGE_HEIGHT', null)}px;"
                                         title="{$feature.name}"
                                         alt="{$feature.name}">
                                {/if}
                            {else}
                                {if Configuration::get('ICONSFORFEATURES_IMAGE_WIDTH', null)==0 && Configuration::get('ICONSFORFEATURES_IMAGE_HEIGHT', null)==0}
                                    <img src="{$feature.icon}"
                                         style="margin-right: {Configuration::get('ICONSFORFEATURES_RIGHT_MARGIN', null)}px;
                                                 margin-left: {Configuration::get('ICONSFORFEATURES_LEFT_MARGIN', null)}px;">
                                {elseif Configuration::get('ICONSFORFEATURES_IMAGE_WIDTH', null)==0}
                                    <img src="{$feature.icon}"
                                         style="margin-right: {Configuration::get('ICONSFORFEATURES_RIGHT_MARGIN', null)}px;
                                                 margin-left: {Configuration::get('ICONSFORFEATURES_LEFT_MARGIN', null)}px;
                                                 height: {Configuration::get('ICONSFORFEATURES_IMAGE_HEIGHT', null)}px;
                                                 width: auto">
                                {elseif Configuration::get('ICONSFORFEATURES_IMAGE_HEIGHT', null)==0}
                                    <img src="{$feature.icon}"
                                         style="margin-right: {Configuration::get('ICONSFORFEATURES_RIGHT_MARGIN', null)}px;
                                                 margin-left: {Configuration::get('ICONSFORFEATURES_LEFT_MARGIN', null)}px;
                                                 height: auto;
                                                 width: {Configuration::get('ICONSFORFEATURES_IMAGE_WIDTH', null)}px;">
                                {else}
                                    <img src="{$feature.icon}"
                                         style="margin-right: {Configuration::get('ICONSFORFEATURES_RIGHT_MARGIN', null)}px;
                                                 margin-left: {Configuration::get('ICONSFORFEATURES_LEFT_MARGIN', null)}px;
                                                 width: {Configuration::get('ICONSFORFEATURES_IMAGE_WIDTH', null)}px;
                                                 height: {Configuration::get('ICONSFORFEATURES_IMAGE_HEIGHT', null)}px;">
                                {/if}
                            {/if}
                            {if Configuration::get('ICONSFORFEATURES_FEATURES_TITLE', null)}
                                {$feature.name}
                            {/if}
                        {else}
                            {$feature.name}
                        {/if}
                    </dt>
                    <dd class="value" style="display: flex; align-items: center">{$feature.value}</dd>
                {/foreach}
            </dl>
        </section>
    {/if}
{/block}
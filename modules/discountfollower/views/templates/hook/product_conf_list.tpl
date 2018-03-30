{*
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<table width="100%" bgcolor="#e8eaed" cellpadding="0" cellspacing="0" border="0" id="backgroundTable">
    <tbody>
    <tr>
        <td>
            <table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
                <tbody>
                <tr>
                    <td width="100%">
                        <table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center"
                               class="devicewidth">
                            <tbody>
                            <tr>
                                <td>
                                    {assign var=i value=0}
                                    {foreach $list as $product}
                                    {if $i%2 == 0}
                                </td>
                            </tr>
                            <tr>
                                <td {if ((($i+1) == (count($list)))) && ((count($list)%2) != 0)} colspan="2" {/if}>
                                    {/if}
                                    <table {if ((($i+1) == (count($list)))) && ((count($list)%2) != 0)} width="100%" {else} width="50%" {/if}
                                            align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
                                        <tbody>
                                        <!-- Spacing -->
                                        <tr>
                                            <td width="100%" height="10"></td>
                                        </tr>
                                        <!-- Spacing -->
                                        <tr>
                                            <td>
                                                <!-- start of text content table -->
                                                <table width="270" align="center" border="0" cellpadding="0"
                                                       cellspacing="0" class="devicewidthinner">
                                                    <tbody>
                                                    <!-- image -->
                                                    <tr>
                                                        <td width="270" align="center" class="devicewidth">
                                                            {if !empty({$product['image']})}
                                                                <a style="position: relative; display: inline-block;" href="{$product['link']|escape:'htmlall':'UTF-8'}">
                                                                    {if isset($product['presentedDiscountProduct']['discount_percentage']) && !empty($product['presentedDiscountProduct']['discount_percentage'])}
                                                                        <span style="position: absolute; top: 0; left: 0; color: #ffffff; background: #2fb5d2; display: inline-block; padding: 5px; font-family: Open-sans, sans-serif; font-size: 12px;">
                                                                        {$product['presentedDiscountProduct']['discount_percentage']|escape:'htmlall':'UTF-8'}
                                                                    </span>
                                                                    {/if}
                                                                    <img src="{$product['image']|escape:'htmlall':'UTF-8'}"
                                                                         alt="" width="270"
                                                                         style="display:block; border: 1px solid #f6f6f6; border-radius: 5px; outline:none; text-decoration:none;"
                                                                         class="colimg2">
                                                                </a>
                                                            {/if}
                                                        </td>
                                                    </tr>
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="10"></td>
                                                    </tr>
                                                    <!-- /Spacing -->
                                                    <!-- title -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; font-weight:bold; color: #333333; text-align:left;line-height: 24px;">
                                                            <a href="{$product['link']|escape:'htmlall':'UTF-8'}">
                                                                {$product['name']|escape:'htmlall':'UTF-8'}
                                                            </a>
                                                            <br/>
                                                            <font size="2" face="Open-sans, sans-serif" color="#555454">
                                                                {l s='Quantity: ' mod='discountfollower'} {$product['quantity']|escape:'htmlall':'UTF-8'}
                                                            </font>
                                                            <br/>
                                                            {if isset($product['discount_this']) && $product['discount_this'] && isset($product['price_without_discount'])
                                                            && !empty($product['price_without_discount'])}
                                                                <span style="text-decoration: line-through; padding-right: 10px; color: #c3c3c3; font-family: Open-sans, sans-serif; font-size: 13px;">
                                                                    {$product['price_without_discount']|escape:'htmlall':'UTF-8'}
                                                                </span>
                                                                <span style="color: #555454; font-family: Open-sans, sans-serif; font-size: 14px;">
                                                                    {$product['price']|escape:'htmlall':'UTF-8'}
                                                                </span>
                                                            {else}
                                                                <span style="color: #555454; font-family: Open-sans, sans-serif; font-size: 14px;">
                                                                    {$product['price']|escape:'htmlall':'UTF-8'}
                                                                </span>
                                                            {/if}
                                                        </td>
                                                    </tr>
                                                    <!-- end of title -->
                                                    <!-- Spacing -->
                                                    <tr>
                                                        <td width="100%" height="10"></td>
                                                    </tr>
                                                    <!-- /Spacing -->
                                                    <!-- content -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 13px; color: #333333; text-align:left;line-height: 15px;">
                                                            {$product['description_short']|escape:'htmlall':'UTF-8'}
                                                        </td>
                                                    </tr>
                                                    <!-- end of content -->
                                                    <!-- button -->
                                                    <tr>
                                                        <td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; font-weight:bold; color: #333333; text-align:left;line-height: 24px;">
                                                            <a href="{$product['link']|escape:'htmlall':'UTF-8'}"
                                                               style="color:#9ec459;text-decoration:none;font-weight:bold;">{l s='Read More' mod='discountfollower'}</a>
                                                        </td>
                                                    </tr>
                                                    <!-- /button -->
                                                    </tbody>
                                                </table>
                                            </td>
                                        </tr>
                                        <!-- end of text content table -->
                                        <!-- Spacing -->
                                        <tr>
                                            <td width="100%" height="10"></td>
                                        </tr>
                                        <!-- Spacing -->
                                        </tbody>
                                    </table>
                                    {$i=$i+1}
                                    {/foreach}
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </td>
                </tr>
                </tbody>
            </table>
        </td>
    </tr>
    </tbody>
</table>
<!-- End of 2-columns -->
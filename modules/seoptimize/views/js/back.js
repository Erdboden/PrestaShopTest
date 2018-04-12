/**
 * 2007-2018 PrestaShop
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Academic Free License (AFL 3.0)
 * that is bundled with this package in the file LICENSE.txt.
 * It is also available through the world-wide-web at this URL:
 * http://opensource.org/licenses/afl-3.0.php
 * If you did not receive a copy of the license and are unable to
 * obtain it through the world-wide-web, please send an email
 * to license@prestashop.com so we can send you a copy immediately.
 *
 * DISCLAIMER
 *
 * Do not edit or add to this file if you wish to upgrade PrestaShop to newer
 * versions in the future. If you wish to customize PrestaShop for your
 * needs please refer to http://www.prestashop.com for more information.
 *
 *  @author    PrestaShop SA <contact@prestashop.com>
 *  @copyright 2007-2018 PrestaShop SA
 *  @license   http://opensource.org/licenses/afl-3.0.php  Academic Free License (AFL 3.0)
 *  International Registered Trademark & Property of PrestaShop SA
 *
 * Don't forget to prefix your containers with your own identifier
 * to avoid any conflicts with others containers.
 */
$(function () {
    $('#new_rule').click(e => {
        if (!$('#seoptimize_rules_form').is(':visible')) {
            $('#seoptimize_rules_form').show(500);
            $('#new_rule').text('Hide');
        } else {
            $('#seoptimize_rules_form').hide(500);
            $('#new_rule').text('New rule');
        }
    });

    $('#change_google_lists').change(function () {
        reloadProductsContent($(this).val(), reloadProductsUri);
    });

    function reloadProductsContent(lang, reloadProductsUri) {
        if (lang > 0) {
            $.ajax({
                type: "POST",
                headers: {"cache-control": "no-cache"},
                url: reloadProductsUri,
                data: {
                    ajax: 'true',
                    reloadProductsList: 1,
                    language: lang
                },
                beforeSend: function () {
                    $('.lang_google_lists').prop("disabled", true);
                },
                success: function (msg) {
                    var fm_table = $(msg).find('.table.seoptimize_products').html();
                    $('.table.seoptimize_products').html('').html(fm_table);
                    $('.lang_google_lists').prop("disabled", false);
                },
                error: function () {
                    $('.lang_google_lists').prop("disabled", false);
                }
            });
        }
        return false;
    }
});


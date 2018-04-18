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


    $('.edit-meta').click(e => {
        let target = e.currentTarget;
        let oldData = $(target).html();
        let ind = parseInt($(target).children('.ind').val());
        let oldTitle = $(target).children('.mtitle').text();
        let oldDescription = $(target).children('.mdescription').text();
        let oldKeywords = $(target).children('.mkeywords').text();
        let oldLegend = $(target).children('.mlegend').text();
        $(target).text('');
        $(target).append("<input type='text' id='meta_title' name='meta_title' placeholder='title' value='" + $.trim(oldTitle) + "'>");
        $(target).append("<input type='text' id='meta_description' name='meta_description' placeholder='description' value='" + $.trim(oldDescription) + "'>");
        $(target).append("<input type='text' id='meta_keywords' name='meta_keywords' placeholder='keywords' value='" + $.trim(oldKeywords) + "'>");
        $(target).append("<input type='text' id='legend' name='legend' placeholder='image alt' value='" + $.trim(oldLegend) + "'>");
        $(target).append("<div id='save-meta' class='btn btn-info'>save</div>");
        // $('input').click(e => e.stopPropagation());

        $('#save-meta').click(e => {
            e.stopPropagation();
            let title = $(target).find('input:eq(0)').val();
            let description = $(target).find('input:eq(1)').val();
            let keywords = $(target).find('input:eq(2)').val();
            let legend = $(target).find('input:eq(3)').val();
            let language = $('#change_google_lists').val();
            $(target).text('');
            editProductMeta(language, ind, title, description, keywords, legend, target, oldData);
        });
    });


    $('#change_google_lists').change(function () {
        reloadProductsContent($(this).val(), reloadProductsUri);
    });

    function editProductMeta(language, ind, title, description, keywords, legend, target, oldData) {
        $.ajax({
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: reloadProductsUri,
            data: {
                ajax: 'true',
                ajaxEditProductMeta: 1,
                language: language,
                product_id: ind,
                title: title,
                description: description,
                keywords: keywords,
                legend: legend,
            },
            beforeSend: function () {
                // $('.lang_google_lists').prop("disabled", true);
            },
            success: function (msg) {
                $(target).html(
                    "<input type='hidden' value='" + ind + "' name='ind' class='ind'>" +
                    "<b>title:</b><br><div class='mtitle'>" + title + "</div><br>" +
                    "<b>description:</b><br><div class='mdescription'>" + description + "</div><br>" +
                    "<b>keywords:</b><br><div class='mkeywords'>" + keywords + "</div><br>" +
                    "<b>image alt:</b><br><div class='mlegend'>" + legend + "</div>");
            },
            error: function () {
                $(target).html(oldData);
            }
        });
    }

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
}).on('focusout', '.edit-meta', function (e) {
    let target = e.currentTarget;
    console.log($(target).has(document.activeElement).length);
    if ($(target).has(document.activeElement).length === 0) {

    let ind = parseInt($(target).children('.ind').val());
    let title = $(target).find('input:eq(0)').val();
    let description = $(target).find('input:eq(1)').val();
    let keywords = $(target).find('input:eq(2)').val();
    let legend = $(target).find('input:eq(3)').val();
    let language = $('#change_google_lists').val();
    $(target).html(
        "<input type='hidden' value='" + ind + "' name='ind' class='ind'>" +
        "<b>title:</b><br><div class='mtitle'>" + title + "</div><br>" +
        "<b>description:</b><br><div class='mdescription'>" + description + "</div><br>" +
        "<b>keywords:</b><br><div class='mkeywords'>" + keywords + "</div><br>" +
        "<b>image alt:</b><br><div class='mlegend'>" + legend + "</div>");
    }
});


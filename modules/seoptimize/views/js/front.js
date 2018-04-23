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
    $('.use-rules-meta').change(e => {
        getMetaToUse(e);
    });

    $('#change_google_lists').change(function () {
        reloadProductsContent($(this).val(), reloadProductsUri);
    });

    $('.edit-custom-meta').click(e => {
        let target = e.currentTarget;
        target = $(target).siblings('.use-rules-meta');
        let ind = $(target).parents('.edit-meta').find('input:eq(0)').val();
        let name = $(target).attr("name");

        let oldMetaText = $(target).siblings('.meta-text').text();
        let metaTitleInput = "<input type='text' id='meta_" + name + "' name='meta_" + name + "' placeholder='title' value='" + $.trim(oldMetaText) + "'>";
        editButtonClicked(target, metaTitleInput, ind, name, oldMetaText);
    });

    function getMetaToUse(e) {
        let target = e.currentTarget;
        let ind = $(target).parents('.edit-meta').find('input:eq(0)').val();
        let check = $(target).is(":checked");
        let name = $(target).attr("name");
        metaToUse(ind, check, name, target);
    }

    function metaToUse(ind, check, name, target) {
        $.ajax({
            type: "POST",
            header: {"cache-control": "no-cache"},
            url: reloadProductsUri,
            data: {
                ajax: "true",
                ajaxChangeMetaToUse: 1,
                product_id: ind,
                checked: check,
                name: name,
            },
            success: function (msg) {
                if (check === true) {
                    isCustomMeta(target, ind, name);
                } else {
                    let editBtn = $(target).parent();
                    $(editBtn).find('.meta-text').text($(editBtn).find(".rules-meta").val());

                    $(editBtn).find(".edit-custom-meta").remove();
                }
            }
        });
    }

    function editProductMeta(id, language, field, meta, target, oldTitle) {
        $.ajax({
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: reloadProductsUri,
            data: {
                ajax: 'true',
                ajaxEditProductMeta: 1,
                language: language,
                product_id: id,
                meta: meta,
                field: field
            },
            success: function (msg) {
                let titleDiv = $(target).parent();
                $(titleDiv).find("#meta_" + field).remove();
                $(titleDiv).find(".save-custom-meta").remove();
                $(titleDiv).append("<span class='meta-text'>" + oldTitle + "</span>");
                // $(titleDiv).append("<div class='btn edit-custom-meta'> /Edit</a>");

                isCustomMeta(target, id, field);
            }
        })
    }

    function isCustomMeta(target, ind, name) {
        let oldMetaText = $(target).siblings('.custom-meta').val();
        $(target).siblings('.meta-text').text(oldMetaText);
        let metaTitleEditBtn = "<div class='btn edit-custom-meta'> /Edit</a>";
        let metaTitleInput = "<input type='text' id='meta_" + name + "' name='meta_" + name + "' placeholder='title' value='" + $.trim(oldMetaText) + "'>";
        $(target).parent().append(metaTitleEditBtn);
        let editBtnClick = $(target).parent().find('.edit-custom-meta');
        $(editBtnClick).click(e => {
            editButtonClicked(target, metaTitleInput, ind, name, oldMetaText);
        });
    }

    function editButtonClicked(target, metaTitleInput, ind, name, oldMetaText) {
        let metaTitleSaveBtn = "<div class='btn save-custom-meta'> /Save</div>";
        let titleDiv = $(target).parent();
        $(titleDiv).find(".meta-text").remove();
        $(titleDiv).find(".edit-custom-meta").remove();
        $(titleDiv).append(metaTitleInput);
        $(titleDiv).append(metaTitleSaveBtn);

        let saveBtnClick = $(target).parent().find('.save-custom-meta');

        $(saveBtnClick).click(e => {
            let title = $(target).parent().find('input:eq(3)').val();
            let language = $('#change_google_lists').val();

            editProductMeta(ind, language, name, title, target, oldMetaText);
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
                    $('.use-rules-meta').change(e => {
                        getMetaToUse(e);
                    });
                    $('.edit-custom-meta').click(e => {
                        let target = e.currentTarget;
                        target = $(target).siblings('.use-rules-meta');
                        let ind = $(target).parents('.edit-meta').find('input:eq(0)').val();
                        let name = $(target).attr("name");

                        let oldMetaText = $(target).siblings('.meta-text').text();
                        let metaTitleInput = "<input type='text' id='meta_" + name + "' name='meta_" + name + "' placeholder='title' value='" + $.trim(oldMetaText) + "'>";
                        editButtonClicked(target, metaTitleInput, ind, name, oldMetaText);
                    });
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

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
        onCustomMetaClick(e);
    });

$('.use-rules-meta').change(e=>{
    getMetaToUse(e);
});

    $('#change_google_lists').change(function () {
        reloadProductsContent($(this).val(), reloadProductsUri);
    });

    function editProductMeta(language, ind, title, description, keywords, legend, target, oldData, hasTitle, hasDescription, hasKeywords, hasLegend) {
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
                let titleH, descriptionH, keywordsH, legendH = null;
                console.log(hasTitle);
                if(hasTitle){
                    titleH = "<input type='hidden' value='" + ind + "' name='ind' class='ind'><b>title:</b><div class='mtitle'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_title' checked>" + title + "</div>";
                }else{
                    titleH = "<input type='hidden' value='" + ind + "' name='ind' class='ind'><b>title:</b><div class='mtitle'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_title'>" + title + "</div>";
                }

                if(hasDescription){
                    descriptionH = "<b>description:</b><div class='mdescription'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_description' checked>" + description + "</div>";
                }else{
                    descriptionH = "<b>description:</b><div class='mdescription'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_description'>" + description + "</div>";
                }
                if(hasKeywords){
                    keywordsH = "<b>keywords:</b><div class='mkeywords'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_keywords' checked>" + keywords + "</div>";
                }else{
                    keywordsH = "<b>keywords:</b><div class='mkeywords'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_keywords'>" + keywords + "</div>";
                }
                if(hasLegend){
                    legendH = "<b>image alt:</b><div class='mlegend'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_alt' checked>" + legend + "</div>";
                }else{
                    legendH = "<b>image alt:</b><div class='mlegend'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_alt'>" + legend + "</div>";
                }
                console.log(titleH);
                console.log(title);
                $(target).html(titleH + descriptionH + keywordsH + legendH);
                    // $(target).html(
                    // "<input type='hidden' value='" + ind + "' name='ind' class='ind'>" +
                    // "<b>title:</b><div class='mtitle'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_title'>" + title + "</div>" +
                    // "<b>description:</b><div class='mdescription'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_description'>" + description + "</div>" +
                    // "<b>keywords:</b><div class='mkeywords'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_keywords'>" + keywords + "</div>" +
                    // "<b>image alt:</b><div class='mlegend'><input type='checkbox' onclick='event.stopPropagation()' class='use-rules-meta' name='has_custom_alt'>" + legend + "</div>");
                $('.use-rules-meta').change(e=>{
                    getMetaToUse(e);
                });
                },
            error: function () {
                $(target).html(oldData);
            }
        });
    }

    function metaToUse(ind, check, name){
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
            success: function(msg){

            }
        })
    }

    function getMetaToUse(e) {
        let target = e.currentTarget;
        let ind = $(target).parents('.edit-meta').find('input:eq(0)').val();
        let check = $(target).is(":checked");
        let name = $(target).attr("name");
        console.log(ind);
        console.log(check);
        console.log(name);
        metaToUse(ind, check, name);
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
                    $('.edit-meta').click(e => {
                        onCustomMetaClick(e);
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

    function getInputValues(target) {
        let ind = $(target).find('input:eq(4)').val();
        let title = $(target).find('input:eq(5)').val();
        let description = $(target).find('input:eq(6)').val();
        let keywords = $(target).find('input:eq(7)').val();
        let legend = $(target).find('input:eq(8)').val();
        let language = $('#change_google_lists').val();

        return {ind, title, description, keywords, legend, language};
    }

    function getOldData(target) {
        let ind = parseInt($(target).children('.ind').val());
        let oldTitle = $(target).children('.mtitle').text();
        let oldDescription = $(target).children('.mdescription').text();
        let oldKeywords = $(target).children('.mkeywords').text();
        let oldLegend = $(target).children('.mlegend').text();
        return {ind, oldTitle, oldDescription, oldKeywords, oldLegend};
    }
    function onCustomMetaClick(e) {
        $('.clicked-edit-meta').each(function (i, obj) {

            console.log($(obj).children('.ind').val());
            let oldData = $(obj).html();
            let {ind, title, description, keywords, legend, language} = getInputValues(obj);
            $(obj).text('');
            console.log(obj);
            console.log(title);
            let{hasTitle, hasDescription, hasKeywords, hasLegend} = getCheckboxValues(obj);

            editProductMeta(language, ind, title, description, keywords, legend, obj, oldData, hasTitle, hasDescription, hasKeywords, hasLegend);
            $(obj).attr('class', 'edit-meta');
        });
        let target = e.currentTarget;
        let oldData = $(target).html();
        $(target).attr('class', 'clicked-edit-meta');
        let {ind, oldTitle, oldDescription, oldKeywords, oldLegend} = getOldData(target);
        let{hasTitle, hasDescription, hasKeywords, hasLegend} = getCheckboxValues(target);
        $(target).text('');
        if(hasTitle){
            $(target).append("<input type='hidden' id='custom_title' name='custom_title' checked>");
        }else{
            $(target).append("<input type='hidden' id='custom_title' name='custom_title'>");
        }
        if(hasDescription){
            $(target).append("<input type='hidden' id='custom_description' name='custom_description' checked>");
        }else{
            $(target).append("<input type='hidden' id='custom_description' name='custom_description'>");
        }
        if(hasKeywords){
            $(target).append("<input type='hidden' id='custom_keywords' name='custom_keywords' checked>");
        }else{
            $(target).append("<input type='hidden' id='custom_keywords' name='custom_keywords'>");
        }
        if(hasLegend){
            $(target).append("<input type='hidden' id='custom_legend' name='custom_legend' checked>");
        }else{
            $(target).append("<input type='hidden' id='custom_legend' name='custom_legend'>");
        }
        $(target).append("<input type='hidden' id='ind' name='ind' value='" + $.trim(ind) + "'>");
        $(target).append("<input type='text' id='meta_title' name='meta_title' placeholder='title' value='" + $.trim(oldTitle) + "'>");
        $(target).append("<input type='text' id='meta_description' name='meta_description' placeholder='description' value='" + $.trim(oldDescription) + "'>");
        $(target).append("<input type='text' id='meta_keywords' name='meta_keywords' placeholder='keywords' value='" + $.trim(oldKeywords) + "'>");
        $(target).append("<input type='text' id='legend' name='legend' placeholder='image alt' value='" + $.trim(oldLegend) + "'>");
        $(target).append("<div id='save-meta' class='btn btn-info'>save</div>");
        $('input').click(e => e.stopPropagation())
            .keypress(e=>{
                console.log('asd');
                if(e.which == 13){
                    // e.stopPropagation();
                    let {ind, title, description, keywords, legend, language} = getInputValues(target);
                    $(target).text('');
                    editProductMeta(language, ind, title, description, keywords, legend, target, oldData, hasTitle, hasDescription, hasKeywords, hasLegend);
                    $(target).attr('class', 'edit-meta');
                }
            });

        $('#save-meta').click(e => {
            e.stopPropagation();
            let {ind, title, description, keywords, legend, language} = getInputValues(target);
            $(target).text('');
            editProductMeta(language, ind, title, description, keywords, legend, target, oldData, hasTitle, hasDescription, hasKeywords, hasLegend);
            $(target).attr('class', 'edit-meta');
        });
    }
    function getCheckboxValues(target) {
        let hasTitle = $(target).children('.mtitle').children('input').is(':checked');
        let hasDescription = $(target).children('.mdescription').children('input').is(':checked');
        let hasKeywords = $(target).children('.mkeywords').children('input').is(':checked');
        let hasLegend = $(target).children('.mlegend').children('input').is(':checked');
        return {hasTitle, hasDescription, hasKeywords, hasLegend}
    }
});


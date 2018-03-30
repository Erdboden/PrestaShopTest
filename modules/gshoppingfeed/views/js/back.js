/**
 * 2016 TN
 *
 * NOTICE OF LICENSE
 *
 *  @author    TN
 *  @copyright 2016 TN
 *  @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$(function () {
    $('.nav-tabs a[href="#set_filter"]').on('click', function () {
        categoryChosenReload();
    });

    $('.tab.step-title').on('click', function () {
        var tab_name = $(this).data('tab');
        if (!$('#form-' + tab_name).is(':visible')) {

            $('#form-' + tab_name).slideDown(function () {
                var topAnchor = parseInt($('#form-' + tab_name).offset().top) - (parseInt($('.page-head').height()) + parseInt($('.navbar-header').height()));
                $.scrollTo(topAnchor, 400);
            });

            $('.tab.step-title').each(function () {
                if (tab_name != $(this).data('tab') && $('#form-' + $(this).data('tab')).is(':visible')) {
                    $('#form-' + $(this).data('tab')).slideUp();
                }
            });

            reloadAllChosen();
        } else {
            $('#form-' + tab_name).slideUp();
        }
    });

    $('#change_google_lists').change(function () {
        reloadTaxonomyContent($(this).val(), reloadTaxonomyUri);
    });

    $(document).on('click', '.change_taxonomy', function(e) {
        var lang = parseInt($('.lang_google_lists').val());
        var ind = parseInt($(this).siblings('.ind').val());
        var list_container = $(this).parent(0).siblings('.taxonomy_breadcrumb');
        getTaxonomyOptionsContent(lang, reloadTaxonomyUri, ind, list_container, $(this));
    });

  $(document).on('click', '.change_taxonomy_save', function(e) {
        var lang = parseInt($('.lang_google_lists').val());
        var ind = parseInt($(this).siblings('.ind').val());
        var taxonomy_selected = parseInt($(this).parent(0).siblings('.taxonomy_breadcrumb').find('select.taxonomy_option_list').val());
        setTaxonomyOptionsContent(lang, reloadTaxonomyUri, ind, taxonomy_selected, $(this));
    });

    $('.rev_before').insertBefore('#form-gshoppingfeed_action');
});

function openGSFConfigurationList(scrollOn) {
    var tab_name = 'gshoppingfeed_action';
    $('#form-' + tab_name).slideDown(function () {
        var topAnchor = parseInt($('#form-' + tab_name).offset().top) - (parseInt($('.page-head').height()) + parseInt($('.navbar-header').height()));
        if(!scrollOn) {
            $.scrollTo(topAnchor, 400);
        }
    });

    $('.tab.step-title').each(function () {
        if (tab_name != $(this).data('tab') && $('#form-' + $(this).data('tab')).is(':visible')) {
            $('#form-' + $(this).data('tab')).slideUp();
        }
    });
    reloadAllChosen();
}

function openGSFConfigurationNewList() {
    var tab_name = 'gshoppingfeed_taxonomy';
    $('#form-' + tab_name).slideDown(function () {
        var topAnchor = parseInt($('#form-' + tab_name).offset().top) - (parseInt($('.page-head').height()) + parseInt($('.navbar-header').height()));
            $.scrollTo(topAnchor, 400);
    });

    $('.tab.step-title').each(function () {
        if (tab_name != $(this).data('tab') && $('#form-' + $(this).data('tab')).is(':visible')) {
            $('#form-' + $(this).data('tab')).slideUp();
        }
    });
    reloadAllChosen();
}

function setTaxonomyOptionsContent(lang, reloadTaxonomyUri, ind, taxonomy_selected, obj) {
    if (lang > 0) {
        $.ajax({
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: reloadTaxonomyUri,
            data: {
                ajax: 'true',
                setTaxonomyOptionsLists: 1,
                setTaxonomyLang: lang,
                setInd: ind,
                taxonomy_selected: taxonomy_selected
            },
            beforeSend: function () {
                $('.lang_google_lists').prop("disabled", true);
            },
            success: function (res) {
                objRes = $.parseJSON(res);

                if ((typeof objRes != 'undefined') && (objRes !== null) && (typeof objRes === "object")) {
                    $(obj).parent().siblings('.td_taxonomy_id').html('<b>' + objRes.language + '</b>: ' + objRes.taxonomy_id);
                    $(obj).parent().siblings('.taxonomy_breadcrumb').html('<b>' + objRes.language + '</b>: ' + objRes.name_taxonomy);
                    $(obj).css('display', 'none').siblings('.change_taxonomy').css('display', 'inline-block');
                } else {
                    alert('Error save object!');
                    console.log(res);
                }
                $('.lang_google_lists').prop("disabled", false);
            },
            error: function () {
                $('.lang_google_lists').prop("disabled", false);
            }
        });
    }
    return false;
}

function getTaxonomyOptionsContent(lang, reloadTaxonomyUri, ind, obj, th) {
    if (lang > 0) {
        $.ajax({
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: reloadTaxonomyUri,
            data: {
                ajax: 'true',
                getTaxonomyOptionsLists: 1,
                getTaxonomyLang: lang,
                setInd: ind
            },
            beforeSend: function () {
                $('.lang_google_lists').prop("disabled", true);
            },
            success: function (msg) {
                if (msg.length) {
                    obj.html(msg);
                    reloadChosen($(obj).find('.chosen'));
                    $(th).css('display', 'none').siblings('.change_taxonomy_save').removeClass('hidden').css('display', 'inline-block');
                }
                $('.lang_google_lists').prop("disabled", false);
            },
            error: function () {
                $('.lang_google_lists').prop("disabled", false);
            }
        });
    }
    return false;
}

function reloadTaxonomyContent(lang, reloadTaxonomyUri) {
    if (lang > 0) {
        $.ajax({
            type: "POST",
            headers: {"cache-control": "no-cache"},
            url: reloadTaxonomyUri,
            data: {
                ajax: 'true',
                reloadTaxonomyLists: 1,
                getTaxonomy: lang
            },
            beforeSend: function () {
                $('.lang_google_lists').prop("disabled", true);
            },
            success: function (msg) {
                var fm_table = $(msg).find('.table.gshoppingfeed_taxonomy').html();
                $('.table.gshoppingfeed_taxonomy').html('').html(fm_table);
                $('.lang_google_lists').prop("disabled", false);
            },
            error: function () {
                $('.lang_google_lists').prop("disabled", false);
            }
        });
    }
    return false;
}

function categoryChosenReload() {
    $('#set_filter .chosen').chosen('destroy');
    $('#set_filter .chosen').chosen({
        disable_search_threshold: 10,
        search_contains: true
    });
}

function reloadChosen(obj) {
    $(obj).chosen('destroy');
    $(obj).chosen({
        disable_search_threshold: 10,
        search_contains: true
    });
}

function reloadAllChosen() {
    $('.chosen').chosen('destroy');
    $('.chosen').chosen({
        disable_search_threshold: 10,
        search_contains: true
    });
}
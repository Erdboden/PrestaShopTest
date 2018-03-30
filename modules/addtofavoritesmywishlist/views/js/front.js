/**
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$(document).ready(function() {
    $('.favorite-page .thumbnail-container').each(function(){
        $("<span class='product-image'><i class=\"material-icons float-xs-left\">delete</i></span>").prependTo($(this));
    });

    $(document).on('click', '.product-image', function(){

        if (favorite_token == undefined) {
          let favorite_token = $('.favorite_token').attr('href')
        }

        let parent = $(this).parents('.product-miniature');
        let data = {method: "removeFavorites", parameters: { product_id: parent.data('id-product') }};

        $.ajax({
            type: 'POST',
            url: baseUrl + 'modules/addtofavoritesmywishlist/ajax.php?token=' + favorite_token,
            data: data,
            dataType: 'text',
            contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
            cache: false,
        }).done(function(data){
            let favorites = parseInt($('.favorites-nr').data('nr')) - parseInt(1);
            $('.favorites-nr').data('nr', favorites);
            $('.favorites-nr').text(favorites);
            parent.remove();
        });
    });

    $(document).on('click', '.add-to-favorites', function(e){
       e.preventDefault();

      if (favorite_token == undefined){
        let favorite_token = $('.favorite_token').attr('href');
      }

       $(this).parent().siblings(".to-favorites-block").show();
       $(this).parent().remove();

       let data = {method: "addToFavorites", parameters: { product_id: $(this).data('id') }};

       $.ajax({
           type: 'POST',
           url: baseUrl + 'modules/addtofavoritesmywishlist/ajax.php?token=' + favorite_token,
           data: data,
           dataType: 'text',
           contentType: 'application/x-www-form-urlencoded; charset=UTF-8',
           cache: false,
       }).done(function(data){
           let favorites = parseInt($('.favorites-nr').data('nr')) + parseInt(1);
           $('.favorites-nr').data('nr', favorites);
           $('.favorites-nr').text(favorites);
       });
    });
});
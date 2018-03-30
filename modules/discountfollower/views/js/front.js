/**
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

$(document).ready(function () {
   var follower_cart = new DiscountFollowerCart()
   follower_cart.init()
})

var DiscountFollowerCart
DiscountFollowerCart = function () {
  this.update_button = '.update-d-follower'
  this.remove_button = '.remove-from-follow'

  this.init = function () {
    var that = this
    $(document).on('click', this.update_button, function () {
      var this_clicked = $(this)
      var id_product_clicked = $(this).data('product')

      if (typeof dfollower_url !== 'undefined') {
        var requestData = 'id_product=' + id_product_clicked
        requestData += '&update=1'

        $.ajax({
          url: decodeURIComponent(dfollower_url),
          method: 'POST',
          data: requestData,
          dataType: 'json',
          beforeSend: function (jqXHR) {
            $(this_clicked).css('opacity', 0.5)
          }
        }).then(function (resp) {
          if (resp.response.resolved == 1
            && resp.response.action == 'added') {

            // append & change-name to remove
            $(this_clicked).html(dfollower_remove)
            if (typeof(resp.response.success_content) != 'undefined' && resp.response.success_content.length > 0) {
              $.fancybox.open([
                {
                  type: 'inline',
                  autoScale: true,
                  minHeight: 30,
                  content: resp.response.success_content
                }
              ], {
                padding: 0
              })
            }

          } else if (resp.response.resolved == 1
            && resp.response.action == 'removed') {

            // removed & change-name to add
            $(this_clicked).html(dfollower_add)
          } else if (resp.response.resolved == 0
            && resp.response.action == 'authorization') {

            // popap -> where user compels auth
            if (!!$.prototype.fancybox) {
              $.fancybox.open([
                {
                  type: 'inline',
                  autoScale: true,
                  minHeight: 30,
                  content: '<p class="fancybox-error">' + loggin_follow_required + '</p>'
                }
              ], {
                padding: 0
              })
            } else {
              alert(loggin_follow_required)
            }

          } else if (resp.response.resolved == 0
            && resp.response.action == 'validation_email') {

            if (!!$.prototype.fancybox && typeof resp.response.content != 'undefined') {
              $.fancybox.open([
                {
                  type: 'inline',
                  autoScale: true,
                  minHeight: 30,
                  content: resp.response.content
                }
              ], {
                padding: 0
              })

              that.submitEmailAttachments(id_product_clicked)

            } else {
              alert(loggin_follow_required)
            }

          } else if (resp.response.resolved == 0
            && resp.response.action == 'request_free_email') {

            if (!!$.prototype.fancybox && typeof resp.response.content != 'undefined') {
              $.fancybox.open([
                {
                  type: 'inline',
                  autoScale: true,
                  minHeight: 30,
                  content: resp.response.content
                }
              ], {
                padding: 0
              })

              that.submitEmailAttachments(id_product_clicked)
            } else {
              alert(loggin_follow_required)
            }

          } else {
            console.log(resp)
          }

          $(this_clicked).css('opacity', 1)
        })
      }
    })

    this.submitEmailAttachments = function (id_product_clicked) {
      $('#create-follow_form').on('submit', function (e) {
        e.stopPropagation()
        e.preventDefault()

        var mail = $('input#email_create').val()
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i
        if (pattern.test(mail)) {
          $('#create_follow_error.alert-danger').css('display', 'none')
          that.sendFollowMailRequest(mail, 0, id_product_clicked)
        } else {
          $('#create_follow_error.alert-danger').fadeIn()
        }
        return false
      })

      $('#create-free-follow_form').on('submit', function (e) {
        e.stopPropagation()
        e.preventDefault()

        var mail = $('input#email_create').val()
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i
        if (pattern.test(mail)) {
          $('#create_follow_error.alert-danger').css('display', 'none')
          that.sendFollowMailRequest(mail, 1, id_product_clicked)
        } else {
          $('#create_follow_error.alert-danger').fadeIn()
        }
        return false
      })
    }

    this.signDiscountFollower = function () {
      $('#follow_sign_form').on('submit', function (e) {
        e.stopPropagation()
        e.preventDefault()

        var mail = $('input#email_create').val()
        var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i
        if (pattern.test(mail)) {
          $('#create_follow_error.alert-danger').css('display', 'none')

          that.onlyAuthWRequest(mail)

        } else {
          $('#create_follow_error.alert-danger').fadeIn()
        }
        return false
      })
    }

    this.onlyAuthWRequest = function (mail) {
      $.ajax({
        type: 'POST',
        url: dfollower_url,
        headers: {'cache-control': 'no-cache'},
        async: true,
        cache: false,
        data: 'action=only_auth' + '&email=' + mail,
        beforeSend: function (jqXHR) {
          $('#SubmitCreate').attr('disabled', true)
        },
        success: function (req) {
          if (req.response.action == 'send_verification' && req.response.resolved == 1) {
            if (typeof(req.response.message) != 'undefined' && req.response.message.length > 0) {
              $('.follow_sign_form').fadeOut(function () {
                $('#discountfollower .follow_sign_form').remove();
                $('#discountfollower .this_message').html(req.response.message).fadeIn();
              })
            } else {
              location.reload()
            }
          } else if(req.response.action == 'free_customer' && req.response.resolved == 1) {
            location.reload()
          }
        }
      }).done(function() {
        $('#SubmitCreate').attr('disabled', false)
      });
    }

    this.sendFollowMailRequest = function (mail, free, id_product) {
      $.ajax({
        type: 'POST',
        url: dfollower_url,
        headers: {'cache-control': 'no-cache'},
        async: true,
        cache: false,
        data: 'action=email_verification' + '&email=' + mail + '&free=' + free + '&id_product=' + id_product,
        beforeSend: function (jqXHR) {
          $('#SubmitCreate').attr('disabled', true)
        },
        success: function (req) {
          if (req.response.action == 'free_customer' && req.response.resolved == 1) {
            if (typeof(req.response.success_content) != 'undefined' && req.response.success_content.length > 0) {
              $('.df_form.box').fadeOut(function () {
                $.fancybox.close()
                $.fancybox.open([
                  {
                    type: 'inline',
                    autoScale: true,
                    minHeight: 30,
                    content: req.response.success_content
                  }
                ], {
                  padding: 0
                })
              })
            } else {
              location.reload()
            }
          } else if (req.response.action == 'send_verification' && req.response.resolved == 1) {
            if (typeof(req.response.message) != 'undefined' && req.response.message.length > 0) {
              $('.df_form.box').fadeOut(function () {
                $(this).html(req.response.message)
                $(this).fadeIn()
                setTimeout(function () {
                  $.fancybox.close()
                }, 2000)
              })
            } else {
              location.reload()
            }
          }
        }
      })
    }

    that.positionPercentage()
    that.removeFollowProduct()
    that.signDiscountFollower()
  }

  this.positionPercentage = function () {
    $('.follow-miniature').each((index, element) => {
      const FLAG_MARGIN = 10
      let $percent = $(element).find('.discount-percentage')
      let $onsale = $(element).find('.on-sale')
      let $new = $(element).find('.new')
      if ($percent.length) {
        $new.css('top', $percent.height() * 2 + FLAG_MARGIN)
        $percent.css('top', -$(element).find('.thumbnail-container').height() + $(element).find('.product-description').height() + FLAG_MARGIN)
        $percent.fadeIn(200)
      }
      if ($onsale.length) {
        $percent.css('top', parseFloat($percent.css('top')) + $onsale.height() + FLAG_MARGIN)
        $new.css('top', ($percent.height() * 2 + $onsale.height()) + FLAG_MARGIN * 2)
      }
      if ($(element).find('.color').length > 5) {
        let count = 0
        $(element).find('.color').each((index, element) => {
          if (index > 4) {
            $(element).hide()
            count++
          }
        })
        $(element).find('.js-count').append(`+${count}`)
      }
    })
  }

  this.removeFollowProduct = function () {
    $(this.remove_button).on('click', function (event) {
      let obj = $(event.target).closest('.js-product-miniature')
      let item = $(obj).data()
      if (typeof(item.idProduct) !== 'undefined' && item.idProduct > 0) {
        if (confirm($('.follow_remove_notification').val())) {
          $.ajax({
            type: 'POST',
            url: dfollower_url,
            headers: {'cache-control': 'no-cache'},
            async: true,
            cache: false,
            data: 'action=remove_item' + '&id_product=' + item.idProduct,
            beforeSend: function () {
              $(obj).css('opacity', 0.5)
            },
            success: function (data) {
              if (data.response.resolved == 1) {
                $(obj).fadeOut(300, function () {
                  $(this).remove()
                })
              } else {
                location.reload()
              }
            }
          })
        }
      }
    })
  }

}
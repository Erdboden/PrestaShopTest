{*
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<form action="" method="post" id="{if isset($request_free_mail) && $request_free_mail == 1}create-free-follow_form{else}create-follow_form{/if}" class="df_form box">
    <h3 class="page-subheading">{l s='Please enter your mail' mod='discountfollower'}</h3>
    <div class="form_content clearfix">
        <div class="description">
        {if isset($request_mail) && $request_mail == 1}
            <p>{l s='Enter your email, later confirm it' mod='discountfollower'}</p>
        {else}
            <p>{l s='It is necessary to enter your Email' mod='discountfollower'}</p>
        {/if}
        </div>
        <div class="alert alert-danger" id="create_follow_error" style="display:none">
            <p>
                {l s='The email isn\'t correct' mod='discountfollower'}
            </p>
        </div>
        <div class="form-group">
            <input type="email" class="is_required validate form-control" data-validate="isEmail" id="email_create" name="email_create" value="">
        </div>
        <div class="submit">
            <button class="btn btn-primary button button-medium exclusive w100" type="submit" id="SubmitCreate" name="SubmitCreate">
                <span>
                    <i class="icon-user left"></i>
                    {l s='Add to my Follow list' mod='discountfollower'}
                </span>
            </button>
            <input type="hidden" class="hidden" name="SubmitCreateFollowMail" value="{l s='Add me' mod='discountfollower'}">
        </div>
    </div>
</form>

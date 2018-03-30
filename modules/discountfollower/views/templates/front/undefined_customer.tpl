{*
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{extends file='page.tpl'}

{block name="page_content"}
    <h1>{l s='Follower - Intelligent Products Wishlist & Notifier' mod='discountfollower'}</h1>

    <div id="discountfollower">
        <div class="this_message">
            {if isset($message) && !empty($message)}
                {$message|escape:'htmlall':'UTF-8'}
            {/if}
        </div>
        {if ($required_auth !== true)}
            <form class="follow_sign_form df_form" id="follow_sign_form" action="#">
                <div class="alert alert-danger" id="create_follow_error" style="display:none">
                    <p>
                        {l s='The email isn\'t correct' mod='discountfollower'}
                    </p>
                </div>

                <div class="form-group">
                    <label for="email_create">
                        {l s='Email address' mod='discountfollower'}
                    </label>
                    <input type="email" class="form-control" id="email_create" name="email_create"
                           placeholder="{l s='Enter Email' mod='discountfollower'}">
                    <small id="email" class="form-text text-muted">
                        {if isset($request_mail) && $request_mail == 1}
                            <p>{l s='Enter your email, later confirm it' mod='discountfollower'}</p>
                        {else}
                            <p>{l s='It is necessary to enter your Email' mod='discountfollower'}</p>
                        {/if}
                    </small>
                </div>
                <button type="submit" id="SubmitCreate" class="btn btn-primary">
                    {l s='Submit' mod='discountfollower'}
                </button>
            </form>
        {/if}
    </div>
    <script type="text/javascript">
      var dfollower_url = "{$dfollower_url|escape:'htmlall':'UTF-8' nofilter}"
    </script>
{/block}


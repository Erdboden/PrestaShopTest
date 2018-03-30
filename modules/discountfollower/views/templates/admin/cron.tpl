{*
 * 2016 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2016 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<div class="alert alert-info">
    <p>{l s='To execute your cron tasks, please insert the following line in your cron tasks manager:' mod='discountfollower'}</p>
    <p>{l s='We recommend to set it on nightime, or early in the morning.' mod='discountfollower'}</p>
    <br>
    <ul class="list-unstyled">
        <li>
            <code>
            <a target="_blank" href="{$cron_all_url|escape:'htmlall':'UTF-8'}">
                {$cron_all_url|escape:'htmlall':'UTF-8'}
            </a>
            </code>
        </li>
    </ul>
</div>
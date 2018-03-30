{**
* 2016 Terranet
*
* NOTICE OF LICENSE
*
* @author    Terranet
* @copyright 2016 Terranet
* @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<div id="calendar" class="panel">
    <form action="{$action|escape:'htmlall':'UTF-8'}" method="post" id="changeStaticForm" name="changeStaticForm"
          class="form-inline">
        <div class="row">
            <div class="col-lg-6">
                <div class="btn-group">
                    <button type="submit" name="submitProductGroupStaticList"
                            class="btn btn-default {if (!isset($active_statistic) || $active_statistic == 1)}active{/if} submitProductGroupStaticList">
                        {l s='User information' mod='discountfollower'}
                    </button>
                    <button type="submit" name="submitAllStaticList"
                            class="btn btn-default {if (isset($active_statistic) && $active_statistic == 2)}active{/if} submitAllStaticList">
                        {l s='All statistics' mod='discountfollower'}
                    </button>
                    <button type="submit" name="submitGroupStaticList"
                            class="btn btn-default {if (isset($active_statistic) && $active_statistic == 3)}active{/if} submitGroupStaticList">
                        {l s='Product group statistics' mod='discountfollower'}
                    </button>
                </div>
            </div>
        </div>
    </form>
{if (isset($active_statistic) && $active_statistic != 1)}
    <br/>
    <form action="{$action|escape:'htmlall':'UTF-8'}" method="post" id="calendar_form" name="calendar_form"
          class="form-inline">
        <div class="row">
            <div class="col-lg-6">
                <div class="btn-group">
                    <button type="submit" name="submitDateDay"
                            class="btn btn-default submitDateDay">{$translations.Day|escape:'htmlall':'UTF-8'}</button>
                    <button type="submit" name="submitDateMonth"
                            class="btn btn-default submitDateMonth">{$translations.Month|escape:'htmlall':'UTF-8'}</button>
                    <button type="submit" name="submitDateYear"
                            class="btn btn-default submitDateYear">{$translations.Year|escape:'htmlall':'UTF-8'}</button>
                    <button type="submit" name="submitDateDayPrev"
                            class="btn btn-default submitDateDayPrev">{$translations.Day|escape:'htmlall':'UTF-8'}-1
                    </button>
                    <button type="submit" name="submitDateMonthPrev"
                            class="btn btn-default submitDateMonthPrev">{$translations.Month|escape:'htmlall':'UTF-8'}-1
                    </button>
                    <button type="submit" name="submitDateYearPrev"
                            class="btn btn-default submitDateYearPrev">{$translations.Year|escape:'htmlall':'UTF-8'}-1
                    </button>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <label class="input-group-addon">{if isset($translations.From)}{$translations.From|escape:'htmlall':'UTF-8'}{else}{l s='From:' mod='discountfollower'}{/if}</label>
                                    <input type="text" name="datepickerFrom" id="datepickerFrom"
                                           value="{$datepickerFrom|escape:'htmlall':'UTF-8'}"
                                           class="datepicker  form-control">
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="input-group">
                                    <label class="input-group-addon">{if isset($translations.To)}{$translations.To|escape:'htmlall':'UTF-8'}{else}{l s='From:' mod='discountfollower'}{/if}</label>
                                    <input type="text" name="datepickerTo" id="datepickerTo"
                                           value="{$datepickerTo|escape:'htmlall':'UTF-8'}"
                                           class="datepicker  form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="row">
                            <button type="submit" name="submitDatePicker" id="submitDatePicker" class="btn btn-default">
                                <i class="icon-save"></i> {l s='Save' mod='discountfollower'}</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <script type="text/javascript">
        $(document).ready(function () {
            if ($("form#calendar_form .datepicker").length > 0) {
                $("form#calendar_form .datepicker").datepicker({
                    prevText: '',
                    nextText: '',
                    dateFormat: 'yy-mm-dd'
                });
            }
        });
    </script>
    {/if}
</div>

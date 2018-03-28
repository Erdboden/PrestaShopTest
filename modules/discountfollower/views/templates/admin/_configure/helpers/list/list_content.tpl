{*
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

{extends file="helpers/list/list_content.tpl"}

{block name="td_content"}
	{if isset($params.type) && $params.type == 'link'}
		<a href="{$tr.$key|escape:'html':'UTF-8'}" target="_blank">{$tr.$key|escape:'html':'UTF-8'}</a>
	{else}
		{$smarty.block.parent}
	{/if}
{/block}

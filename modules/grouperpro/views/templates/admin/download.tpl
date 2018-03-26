{*
 * 2016 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2016 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<div class="panel">
	<h3><i class="icon icon-tags"></i> {l s='Download' mod='grouperpro'}</h3>
	<p>
		&raquo; {l s='Download generated CSV:' mod='grouperpro'}
		<ul>
		{if !is_array($download_name) && !empty($download_name)}
			<li><a href="{$download_path|escape:'html':'UTF-8'}{$download_name|escape:'html':'UTF-8'}.csv" target="_blank">{$download_name|escape:'html':'UTF-8'}</a></li>
		{elseif (is_array($download_name) && count($download_name) > 0)}
			{foreach from=$download_name item=name}
				<li><a href="{$download_path|escape:'html':'UTF-8'}{$name|escape:'html':'UTF-8'}.csv" target="_blank">{$name|escape:'html':'UTF-8'}</a></li>
			{/foreach}
		{/if}
		</ul>
	</p>
</div>

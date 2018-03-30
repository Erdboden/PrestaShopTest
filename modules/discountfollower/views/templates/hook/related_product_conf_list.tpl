{*
 * 2017 TerraNet
 *
 * NOTICE OF LICENSE
 *
 * @author    TerraNet
 * @copyright 2017 TerraNet
 * @license   http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
*}

<table width="100%" bgcolor="#e8eaed" cellpadding="0" cellspacing="0" border="0" id="backgroundTable">
	<tbody>
	<tr>
		<td>
			<table width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
				<tbody>
				<tr>
					<td width="100%">
						<p bgcolor="#e8eaed" align="center" style="font-weight:500;font-size:16px;text-transform:uppercase; line-height:45px; color:#555454;font-family:'Open-sans', sans-serif;">
							{l s='Related products' mod='discountfollower'}
						</p>
						<table bgcolor="#ffffff" width="600" cellpadding="0" cellspacing="0" border="0" align="center" class="devicewidth">
							<tbody>
							<tr>
								<td>
									{assign var=i value=0}
									{foreach $list as $product}
									<table {if (count($list) == ($i+1)) && ((count($list)-1)%3==0)} width="100%" {elseif ((count($list)+1)%3 == 0) && ($i+3)>(count($list))} width="50%" {else} width="33.2%" {/if} align="left" border="0" cellpadding="0" cellspacing="0" class="devicewidth">
										<tbody>
										<tr>
											<td width="100%" height="10"></td>
										</tr>
										<tr>
											<td>
												<table width="100%" align="center" border="0" cellpadding="0" cellspacing="0" class="devicewidthinner">
													<tbody>
													<tr>
														<td width="180" align="center" class="devicewidth">
															{if !empty({$product['image']})}
																<a style="position: relative; display: inline-block;" href="{$product['link']|escape:'htmlall':'UTF-8'}">
                                                                    {if isset($product['presentedDiscountProduct']['discount_percentage']) && !empty($product['presentedDiscountProduct']['discount_percentage'])}
																		<span style="position: absolute; top: 0; left: 0; color: #ffffff; background: #2fb5d2; display: inline-block; padding: 5px; font-family: Open-sans, sans-serif; font-size: 12px;">
                                                                        {$product['presentedDiscountProduct']['discount_percentage']|escape:'htmlall':'UTF-8'}
                                                                    </span>
                                                                    {/if}
																	<img src="{$product['image']|escape:'htmlall':'UTF-8'}" alt="" width="175" style="border: 1px solid #f6f6f6; border-radius: 5px; display:block; outline:none; text-decoration:none;" class="colimg2">
																</a>
															{/if}
														</td>
													</tr>
													<tr>
														<td width="100%" height="10"></td>
													</tr>
													<tr>
														<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; font-weight:bold; color: #333333; text-align:left;line-height: 24px; padding: 0 10px;">
															<a href="{$product['link']|escape:'htmlall':'UTF-8'}">
																{$product['name']|escape:'htmlall':'UTF-8'}
															</a>
															<br/>
                                                            {if isset($product['discount_this']) && $product['discount_this'] && isset($product['price_without_discount'])
                                                            && !empty($product['price_without_discount'])}
																<span style="text-decoration: line-through; padding-right: 10px; color: #c3c3c3; font-family: Open-sans, sans-serif; font-size: 13px;">
                                                                    {$product['price_without_discount']|escape:'htmlall':'UTF-8'}
                                                                </span>
																<span style="color: #555454; font-family: Open-sans, sans-serif; font-size: 14px;">
                                                                    {$product['price']|escape:'htmlall':'UTF-8'}
                                                                </span>
                                                            {else}
																<span style="color: #555454; font-family: Open-sans, sans-serif; font-size: 14px;">
                                                                    {$product['price']|escape:'htmlall':'UTF-8'}
                                                                </span>
                                                            {/if}
														</td>
													</tr>
													<tr>
														<td width="100%" height="10"></td>
													</tr>
													<tr>
														<td style="font-family: Helvetica, arial, sans-serif; font-size: 14px; font-weight:bold; color: #333333; text-align:left;line-height: 24px; padding: 0 10px;">
															<a href="{$product['link']|escape:'htmlall':'UTF-8'}" style="color:#9ec459;text-decoration:none;font-weight:bold;">{l s='Read More' mod='discountfollower'}</a>
														</td>
													</tr>
													</tbody>
												</table>
											</td>
										</tr>
										<tr>
											<td width="100%" height="10"></td>
										</tr>
										</tbody>
									</table>
									{$i=$i+1}
									{if $i%3 == 0}
								</td>
							</tr>
							<tr>
								<td {if ((($i+1) == (count($list)))) && ((count($list)%3) != 0) && (count($list)>3)} colspan="3" {/if}>
									{/if}
									{/foreach}
								</td>
							</tr>
							</tbody>
						</table>
					</td>
				</tr>
				</tbody>
			</table>
		</td>
	</tr>
	</tbody>
</table>

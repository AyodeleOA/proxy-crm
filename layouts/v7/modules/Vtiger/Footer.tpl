{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
<!--
<footer class="app-footer">
	<p>
		Powered by	<a href="http://www.proxynetgroup.com" target="_blank"> Proxynet Communications Limited</a>
	</p>
</footer>
-->

{if $MODULE eq 'Users' && $VIEW eq 'Login'}
			
{else}
 </main>
{/if}
 


<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:500px;">
									<li class="title" style="padding: 5px 0 0 15px;">
										<strong>{vtranslate('LBL_QUICK_CREATE',$MODULE)}</strong>
									</li>
									<hr/>
									
									<li id="quickCreateModules" style="padding: 0 5px;">
										<div class="col-lg-12" style="padding-bottom:15px;">
											{assign var='count' value=0}
											{foreach key=moduleName item=moduleModel from=$QUICK_CREATE_MODULES}
												{if $moduleModel->isPermitted('CreateView') || $moduleModel->isPermitted('EditView')}
													{assign var='quickCreateModule' value=$moduleModel->isQuickCreateSupported()}
													{assign var='singularLabel' value=$moduleModel->getSingularLabelKey()}
													{assign var=hideDiv value={!$moduleModel->isPermitted('CreateView') && $moduleModel->isPermitted('EditView')}}
													{if $quickCreateModule == '1'}
														{if $count % 3 == 0}
															<div class="row">
															{/if}
															{* Adding two links,Event and Task if module is Calendar *}
															{if $singularLabel == 'SINGLE_Calendar'}
																{assign var='singularLabel' value='LBL_TASK'}
																<div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4 col-xs-4{/if}">
																	<a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events"
																	   data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)">{$moduleModel->getModuleIcon('Event')}<span class="quick-create-module">{vtranslate('LBL_EVENT',$moduleName)}</span></a>
																</div>
																{if $count % 3 == 2}
																	</div>
																	<br>
																	<div class="row">
																{/if}
																<div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4 col-xs-4{/if}">
																	<a id="menubar_quickCreate_{$moduleModel->getName()}" class="quickCreateModule" data-name="{$moduleModel->getName()}"
																	   data-url="{$moduleModel->getQuickCreateUrl()}" href="javascript:void(0)">{$moduleModel->getModuleIcon('Task')}<span class="quick-create-module">{vtranslate($singularLabel,$moduleName)}</span></a>
																</div>
																{if !$hideDiv}
																	{assign var='count' value=$count+1}
																{/if}
															{else if $singularLabel == 'SINGLE_Documents'}
																<div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4 col-xs-4{/if} dropdown">
																	<a id="menubar_quickCreate_{$moduleModel->getName()}" class="quickCreateModuleSubmenu dropdown-toggle" data-name="{$moduleModel->getName()}" data-toggle="dropdown" 
																	   data-url="{$moduleModel->getQuickCreateUrl()}" href="javascript:void(0)">
																		{$moduleModel->getModuleIcon()}
																		<span class="quick-create-module">
																			{vtranslate($singularLabel,$moduleName)}
																			<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i>
																		</span>
																	</a>
																	<ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_{$moduleModel->getName()}">
																		<li class="dropdown-header"><i class="fa fa-upload"></i> {vtranslate('LBL_FILE_UPLOAD', $moduleName)}</li>
																		<li id="VtigerAction">
																			<a href="javascript:Documents_Index_Js.uploadTo('Vtiger')">
																				<img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="layouts/v7/skins//images/Vtiger.png">
																				{vtranslate('LBL_TO_SERVICE', $moduleName, {vtranslate('LBL_VTIGER', $moduleName)})}
																			</a>
																		</li>
																		<li class="dropdown-header"><i class="fa fa-link"></i> {vtranslate('LBL_LINK_EXTERNAL_DOCUMENT', $moduleName)}</li>
																		<li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; {vtranslate('LBL_FROM_SERVICE', $moduleName, {vtranslate('LBL_FILE_URL', $moduleName)})}</a></li>
																		<li role="separator" class="divider"></li>
																		<li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> {vtranslate('LBL_CREATE_NEW', $moduleName, {vtranslate('SINGLE_Documents', $moduleName)})}</a></li>
																	</ul>
																</div>
															{else}
																<div class="{if $hideDiv}create_restricted_{$moduleModel->getName()} hide{else}col-lg-4 col-xs-4{/if}">
																	<a id="menubar_quickCreate_{$moduleModel->getName()}" class="quickCreateModule" data-name="{$moduleModel->getName()}"
																	   data-url="{$moduleModel->getQuickCreateUrl()}" href="javascript:void(0)">
																		{$moduleModel->getModuleIcon()}
																		<span class="quick-create-module">{vtranslate($singularLabel,$moduleName)}</span>
																	</a>
																</div>
															{/if}
															{if $count % 3 == 2}
																</div>
																<br>
															{/if}
														{if !$hideDiv}
															{assign var='count' value=$count+1}
														{/if}
													{/if}
												{/if}
											{/foreach}
										</div>
									</li>
								</ul>
 
</div>
</div>

<!-- </div> -->
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint">{Zend_Json::encode($LANGUAGE_STRINGS)}</div>
<div id="maxListFieldsSelectionSize" class="hide noprint">{$MAX_LISTFIELDS_SELECTION_SIZE}</div>
<div class="modal myModal fade"></div>

<script src="{vresource_url("layouts/v7/lib/newui/js/dashboard.js?v=98")}'></script>
{include file='JSResources.tpl'|@vtemplate_path}

<script>

	$(document).delegate('.dropdown-toggle2', 'click', function(event){
			console.log("clicked");
			const dropdownToggle = document.querySelector('.dropdown-toggle2');
			const dropdownMenu = document.querySelector('.dropdown-menuu');
	
			if (dropdownMenu.style.display === 'block') {
			  dropdownMenu.style.display = 'none';
			  
			  $(".sidebar").removeClass("overflowy");
			  this.querySelector('.dropdown-icon').textContent = '▼ More resources';
			} else {
			  dropdownMenu.style.display = 'block';
			  this.querySelector('.dropdown-icon').textContent = '▲ More resources';
			  $(".sidebar").addClass("overflowy");
			}		
	});
	
</script>
</body>

</html>

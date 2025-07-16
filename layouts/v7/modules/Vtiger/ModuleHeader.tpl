{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
*************************************************************************************}

{strip}
	<div class="col-sm-12 col-xs-11 padding1 module-action-bar clearfix coloredBorderTop">
		<div class="module-action-content clearfix {$MODULE}-module-action-content">
			
	
			
			<div class="col-lg-12 col-md-6 col-sm-12 col-xs-1 padding0 pull-right">
				<div id="appnav" class="">
					<nav class="navbar navbar-inverse navbar-rightt border0 margin0">
						{if $MODULE_BASIC_ACTIONS|@count gt 0}
						<div class="container-fluid ">
							<div class="navbar-header bg-white marginTop5px">
								<button type="button" class="navbar-toggle collapsed margin0" data-toggle="collapse" data-target="#appnavcontent" aria-expanded="false">
									<i class="fa fa-ellipsis-v"></i>
								</button>
							</div>

							<div class="navbar-collapse collapse navbar-right" id="appnavcontent" aria-expanded="false" style="height: 1px;">
								<ul class="nav navbar-nav">
									{foreach item=BASIC_ACTION from=$MODULE_BASIC_ACTIONS}
										{if $BASIC_ACTION->getLabel() == 'LBL_IMPORT'}
											<li>
												<button id="{$MODULE}_basicAction_{Vtiger_Util_Helper::replaceSpaceWithUnderScores($BASIC_ACTION->getLabel())}" type="button" class="btn addButton btn-default module-buttons"
														{if stripos($BASIC_ACTION->getUrl(), 'javascript:')===0}
													onclick='{$BASIC_ACTION->getUrl()|substr:strlen("javascript:")};'
														{else}
													onclick="Vtiger_Import_Js.triggerImportAction('{$BASIC_ACTION->getUrl()}')"
														{/if}>
													<div class="fa {$BASIC_ACTION->getIcon()}" aria-hidden="true"></div>&nbsp;&nbsp;
													{vtranslate($BASIC_ACTION->getLabel(), $MODULE)}
												</button>
											</li>
										{else}
											<li>
												<button id="{$MODULE}_listView_basicAction_{Vtiger_Util_Helper::replaceSpaceWithUnderScores($BASIC_ACTION->getLabel())}" type="button" class="btn addButton btn-default module-buttons"
														{if stripos($BASIC_ACTION->getUrl(), 'javascript:')===0}
													onclick='{$BASIC_ACTION->getUrl()|substr:strlen("javascript:")};'
														{else}
													onclick='window.location.href = "{$BASIC_ACTION->getUrl()}&app={$SELECTED_MENU_CATEGORY}"'
														{/if}>
													<div class="fa {$BASIC_ACTION->getIcon()}" aria-hidden="true"></div>&nbsp;&nbsp;
													{vtranslate($BASIC_ACTION->getLabel(), $MODULE)}
												</button>
											</li>
										{/if}
									{/foreach}
									{if $MODULE_SETTING_ACTIONS|@count gt 0}
										<li>
											<div class="settingsIcon">
												<button type="button" class="btn btn-default module-buttons dropdown-toggle" data-toggle="dropdown" aria-expanded="false" title="{vtranslate('LBL_SETTINGS', $MODULE)}">
													<span class="fa fa-wrench" aria-hidden="true"></span>&nbsp;{vtranslate('LBL_CUSTOMIZE', 'Reports')}&nbsp; <span class="caret"></span>
												</button>
												<ul class="detailViewSetting dropdown-menu">
													{foreach item=SETTING from=$MODULE_SETTING_ACTIONS}
														<li id="{$MODULE_NAME}_listview_advancedAction_{$SETTING->getLabel()}"><a href={$SETTING->getUrl()}>{vtranslate($SETTING->getLabel(), $MODULE_NAME ,vtranslate($MODULE_NAME, $MODULE_NAME))}</a></li>
													{/foreach}
												</ul>
											</div>
										</li>
									{/if}
									
								</ul>

							</div><!-- /.navbar-collapse -->
						</div><!-- /.container-fluid -->
						{/if}
					</nav>
				</div>
			</div>
		</div>
		{if $FIELDS_INFO neq null}
			<script type="text/javascript">
				var uimeta = (function () {
					var fieldInfo = {$FIELDS_INFO};
					return {
						field: {
							get: function (name, property) {
								if (name && property === undefined) {
									return fieldInfo[name];
								}
								if (name && property) {
									return fieldInfo[name][property]
								}
							},
							isMandatory: function (name) {
								if (fieldInfo[name]) {
									return fieldInfo[name].mandatory;
								}
								return false;
							},
							getType: function (name) {
								if (fieldInfo[name]) {
									return fieldInfo[name].type
								}
								return false;
							}
						},
					};
				})();
			</script>
		{/if}
	</div>     
{/strip}

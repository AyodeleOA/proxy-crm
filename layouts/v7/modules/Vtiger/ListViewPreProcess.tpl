{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
{include file="modules/Vtiger/Header.tpl"}



{include file="modules/Vtiger/partials/SidebarAppMenu.tpl"}



{*
<div class="container-fluid app-nav">
	<div class="row">
		{include file="partials/SidebarHeader.tpl"|vtemplate_path:$MODULE}
		{include file="ModuleHeader.tpl"|vtemplate_path:$MODULE}
	</div>
</div>
</nav>
*}

<div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
	<div class="data">
	</div>
	<div class="modal-dialog">
	</div>
</div> 

 
<div class="headerr">
  <div class="header-background no-padding">
	<img src='{vresource_url("layouts/v7/lib/newui/css/image/header-bg.png")}' alt="Header Background" class="header-img no-radius" />


	
	<nav class="navbar navbar-inverse navbar-fixed-top app-fixed-navbar">
		<div class="container-fluid global-nav">
			<div class="row">	
<div id="navbar" class="col-md-11 collapse navbar-collapse navbar-right global-actions">
		<ul class="nav navbar-nav">
						<li>
							<div class="dropdown pull-right">
								<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<a href="#" id="menubar_quickCreate" class="qc-button fa fa-plus-circle" title="{vtranslate('LBL_QUICK_CREATE',$MODULE)}" aria-hidden="true"></a>
								</div>
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
						</li>
						{assign var=USER_PRIVILEGES_MODEL value=Users_Privileges_Model::getCurrentUserPrivilegesModel()}
						{assign var=CALENDAR_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Calendar')}
						{if $USER_PRIVILEGES_MODEL->hasModulePermission($CALENDAR_MODULE_MODEL->getId())}
							<li><div><a href="index.php?module=Calendar&view={$CALENDAR_MODULE_MODEL->getDefaultViewName()}" class="fa fa-calendar" title="{vtranslate('Calendar','Calendar')}" aria-hidden="true"></a></div></li>
						{/if}
						{assign var=REPORTS_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Reports')}
						{if $USER_PRIVILEGES_MODEL->hasModulePermission($REPORTS_MODULE_MODEL->getId())}
							<li><div><a href="index.php?module=Reports&view=List" class="fa fa-bar-chart" title="{vtranslate('Reports','Reports')}" aria-hidden="true"></a></div></li>
						{/if}
						{if $USER_PRIVILEGES_MODEL->hasModulePermission($CALENDAR_MODULE_MODEL->getId())}
							<li><div><a href="#" class="taskManagement vicon vicon-task" title="{vtranslate('Tasks','Vtiger')}" aria-hidden="true"></a></div></li>
						{/if}
						<li class="dropdown">
							<div>
								<a href="#" class="userName dropdown-toggle pull-right" data-toggle="dropdown" role="button">
									<span class="fa fa-user" aria-hidden="true" title="{$USER_MODEL->get('userlabel')}
										  ({$USER_MODEL->get('user_name')})"></span>
									<span class="link-text-xs-only hidden-lg hidden-md hidden-sm">{$USER_MODEL->getName()}</span>
								</a>
								<div class="dropdown-menu logout-content" role="menu">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<div class="profile-img-container">
												{assign var=IMAGE_DETAILS value=$USER_MODEL->getImageDetails()}
												{if $IMAGE_DETAILS neq '' && $IMAGE_DETAILS[0] neq '' && $IMAGE_DETAILS[0].path eq ''}
													<i class='vicon-vtigeruser' style="font-size:90px"></i>
												{else}
													{foreach item=IMAGE_INFO from=$IMAGE_DETAILS}
														{if !empty($IMAGE_INFO.url)}
															<img src="{$IMAGE_INFO.url}" width="100px" height="100px">
														{/if}
													{/foreach}
												{/if}
											</div>
										</div>
										<div class="col-lg-8 col-sm-8">
											<div class="profile-container">
												<h4>{$USER_MODEL->get('first_name')} {$USER_MODEL->get('last_name')}</h4>
												<h5 class="textOverflowEllipsis" title='{$USER_MODEL->get('user_name')}'>{$USER_MODEL->get('user_name')}</h5>
												<p>{$USER_MODEL->getUserRoleName()}</p>
											</div>
										</div>
									</div>
									<div id="logout-footer" class="logout-footer clearfix">
										<hr style="margin: 10px 0 !important">
										<div class="">
											<span class="pull-left">
												<span class="fa fa-cogs"></span>
												<a id="menubar_item_right_LBL_MY_PREFERENCES" href="{$USER_MODEL->getPreferenceDetailViewUrl()}">{vtranslate('LBL_MY_PREFERENCES')}</a>
											</span>
											<span class="pull-right">
												<span class="fa fa-power-off"></span>
												<a id="menubar_item_right_LBL_SIGN_OUT" href="index.php?module=Users&action=Logout">{vtranslate('LBL_SIGN_OUT')}</a>
											</span>
										</div>
									</div>
								</div>
							</div>
						</li>
					</ul>
	
	</div>
	</div>
	</div>
	</nav>
	
	<div class="header-content">
	  <!--
	  <h1>Welcome, {$USER_MODEL->get('user_name')}!</h1>
	  -->
			
			
			
	  		<div class="col-lg-7 col-md-6 col-sm-5 col-xs-11 padding0 module-breadcrumb module-breadcrumb-{$REQ->get('view')} transitionsAllHalfSecond">
				{assign var=MODULE_MODEL value=Vtiger_Module_Model::getInstance($MODULE)}
				{if $MODULE_MODEL->getDefaultViewName() neq 'List'}
					{assign var=DEFAULT_FILTER_URL value=$MODULE_MODEL->getDefaultUrl()}
				{else}
					{assign var=DEFAULT_FILTER_ID value=$MODULE_MODEL->getDefaultCustomFilter()}
					{if $DEFAULT_FILTER_ID}
						{assign var=CVURL value="&viewname="|cat:$DEFAULT_FILTER_ID}
						{assign var=DEFAULT_FILTER_URL value=$MODULE_MODEL->getListViewUrl()|cat:$CVURL}
					{else}
						{assign var=DEFAULT_FILTER_URL value=$MODULE_MODEL->getListViewUrlWithAllFilter()}
					{/if}
				{/if}
				
				<h4 class="module-title pull-left text-white"> {vtranslate({$SELECTED_MENU_CATEGORY}, {$SELECTED_MENU_CATEGORY})} </h4>&nbsp;&nbsp;</a>
				
				<p class="current-filter-name filter-name pull-left cursorPointer" title="{$CVNAME}">
					<span class="long-slash">/</span>
				</p>
					
					
				
				<a title="{vtranslate($MODULE, $MODULE)}" href='{$DEFAULT_FILTER_URL}&app={$SELECTED_MENU_CATEGORY}'>
				
					
				
				<h4 class="module-title pull-left  text-white"> {vtranslate($MODULE, $MODULE)} </h4>&nbsp;&nbsp;</a>
				
				<p class="current-filter-name filter-name pull-left cursorPointer" title="{$CVNAME}">
					<span class="long-slash">/</span>
				</p>
				
                {if isset($smarty.session.lvs) && isset($smarty.session.lvs.$MODULE) && isset($smarty.session.lvs.$MODULE.viewname)}
					{assign var=VIEWID value=$smarty.session.lvs.$MODULE.viewname}
				{/if}
				
				{if isset($VIEWID) && $VIEWID}
					{foreach item=FILTER_TYPES from=$CUSTOM_VIEWS}
						{foreach item=FILTERS from=$FILTER_TYPES}
							{if $FILTERS->get('cvid') eq $VIEWID}
								{assign var=CVNAME value=$FILTERS->get('viewname')}
								{break}
							{/if}
						{/foreach}
					{/foreach}
					
					<p class="current-filter-name filter-name pull-left cursorPointer" title="{$CVNAME}">
					
					<a class="text-white" href='{$MODULE_MODEL->getListViewUrl()}&viewname={$VIEWID}&app={$SELECTED_MENU_CATEGORY}'>&nbsp;&nbsp;{$CVNAME}&nbsp;&nbsp;</a> </p>
				{/if}
				
				{assign var=SINGLE_MODULE_NAME value='SINGLE_'|cat:$MODULE}
				{if isset($RECORD) && $RECORD and $REQ->get('view') eq 'Edit'}
					<p class="current-filter-name filter-name pull-left ">
					<span class="fa fa-angle-right pull-left" aria-hidden="true"></span>
					
					<a title="{$RECORD->get('label')}">&nbsp;&nbsp;{vtranslate('LBL_EDITING', $MODULE)} : {$RECORD->get('label')} &nbsp;&nbsp;</a></p>
				{else if $REQ->get('view') eq 'Edit'}
					<p class="current-filter-name filter-name pull-left "><span class="fa fa-angle-right pull-left" aria-hidden="true"></span><a>&nbsp;&nbsp;{vtranslate('LBL_ADDING_NEW', $MODULE)}&nbsp;&nbsp;</a></p>
				{/if}
				{if $REQ->get('view') eq 'Detail'}
					<p class="current-filter-name filter-name pull-left">
					<span class="fa fa-angle-right pull-left" aria-hidden="true"></span>
					<a title="{$RECORD->get('label')}">&nbsp;&nbsp;{$RECORD->get('label')} &nbsp;&nbsp;</a></p>
				{/if}
			</div>
			
			
	  
	  
			  <div class="header-search">
				<!-- <input type="text" placeholder="Search..." /> -->
				
				<div id="search-links-container" class="keyword-input search-links-container collapse navbar-collapse">
					<div class="search-link">
						<span class="fa fa-search" aria-hidden="true"></span>
						<input class="keyword-input" type="text" placeholder="{vtranslate('LBL_TYPE_SEARCH')}" value="{$GLOBAL_SEARCH_VALUE}">
						<span id="adv-search" class="adv-search fa fa-chevron-circle-down pull-right cursorPointer" aria-hidden="true"></span>
					</div>
				</div>
			  </div>

	  
	</div>
	
	<div>
		  
	
	</div>
	
  </div>
</div>

  
<div class="main-container main-container-{$MODULE}">
		{assign var=LEFTPANELHIDE value=$CURRENT_USER_MODEL->get('leftpanelhide')}
		{*
		<div id="modnavigator" class="module-nav">
			
			<div class="hidden-xs hidden-sm mod-switcher-container">
			
				{include file="partials/Menubar.tpl"|vtemplate_path:$MODULE}
			
			</div>
			
		
		</div>
		*}
		
		<div id="sidebar-essentials" class="sidebar-essentials {if $LEFTPANELHIDE eq '1'} hide {/if}">
			{include file="partials/SidebarEssentials.tpl"|vtemplate_path:$MODULE}
		</div>
		<div class="listViewPageDiv content-area {if $LEFTPANELHIDE eq '1'} full-width {/if}" id="listViewContent">
		
		<div class="row">
					{include file="ModuleHeader.tpl"|vtemplate_path:$MODULE}
					
					
		</div> 
		


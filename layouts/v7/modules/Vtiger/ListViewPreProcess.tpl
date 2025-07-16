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

  
<div class="row main-container main-container-{$MODULE}">
		{assign var=LEFTPANELHIDE value=$CURRENT_USER_MODEL->get('leftpanelhide')}
		{*
		<div id="modnavigator" class="module-nav">
			
			<div class="hidden-xs hidden-sm mod-switcher-container">
			
				{include file="partials/Menubar.tpl"|vtemplate_path:$MODULE}
			
			</div>
			
		
		</div>
		*}
		
		<div id="sidebar-essentials" class="col-md-2 sidebar-essentialss {if $LEFTPANELHIDE eq '1'} hide {/if}">
			{include file="partials/SidebarEssentials.tpl"|vtemplate_path:$MODULE}
		</div>
		<div class="col-md-10 listViewPageDiv content-areaa {if $LEFTPANELHIDE eq '1'} col-md-12 full-width {/if}" id="listViewContent">
		
		<div class="row">
					{include file="ModuleHeader.tpl"|vtemplate_path:$MODULE}
					
					
		</div> 
		


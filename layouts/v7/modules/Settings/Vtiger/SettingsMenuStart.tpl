{*+**********************************************************************************
 * The contents of this file are subject to the vtiger CRM Public License Version 1.1
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is: vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ************************************************************************************}
{* modules/Settings/Vtiger/views/Index.php *}

{* START YOUR IMPLEMENTATION FROM BELOW. Use {debug} for information *}

{*
{include file="modules/Vtiger/partials/Topbar.tpl"}

<div class="container-fluid app-nav">
    <div class="row">
        {include file="modules/Settings/Vtiger/SidebarHeader.tpl"}
        {include file="modules/Settings/Vtiger/ModuleHeader.tpl"}
    </div>
</div>
</nav>
*}

{include file="modules/Vtiger/Header.tpl"}
{include file="modules/Vtiger/partials/SidebarAppMenu.tpl"}

<div class="headerr">
  <div class="header-background no-padding">
	<img src='{vresource_url("layouts/v7/lib/newui/css/image/header-bg.png")}' alt="Header Background" class="header-img no-radius" />
	<div class="header-content">

	  		<div class="col-lg-7 col-md-6 col-sm-5 col-xs-11 padding0 module-breadcrumb module-breadcrumb-{$REQ->get('view')} transitionsAllHalfSecond">
				{assign var=MODULE_MODEL value=Vtiger_Module_Model::getInstance($MODULE)}
				
				<h4 class="module-title pull-left text-white"> SETTINGS</h4>&nbsp;&nbsp;</a>
				
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
  </div>
</div>

<div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-300' tabindex='-1' role='dialog' aria-hidden='true'>
        <div class="data">
        </div>
        <div class="modal-dialog">
        </div>
</div>
 
{if isset($FIELDS_INFO) && $FIELDS_INFO neq null}
    <script type="text/javascript">
        var uimeta = (function() {
            var fieldInfo  = {$FIELDS_INFO};
            return {
                field: {
                    get: function(name, property) {
                        if(name && property === undefined) {
                            return fieldInfo[name];
                        }
                        if(name && property) {
                            return fieldInfo[name][property]
                        }
                    },
                    isMandatory : function(name){
                        if(fieldInfo[name]) {
                            return fieldInfo[name].mandatory;
                        }
                        return false;
                    },
                    getType : function(name){
                        if(fieldInfo[name]) {
                            return fieldInfo[name].type
                        }
                        return false;
                    }
                },
            };
        })();
    </script>
{/if}
<div class="main-container clearfix">
		{assign var=LEFTPANELHIDE value=$USER_MODEL->get('leftpanelhide')}
        <div class="module-nav clearfix settingsNav" id="modnavigator">
            <div class="hidden-xs hidden-sm height100Per">
                {include file="modules/Settings/Vtiger/Sidebar.tpl"}
            </div>
        </div>
        <div class="settingsPageDiv content-area clearfix">

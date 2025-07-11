{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}

					<!-- Sidebar -->
					<aside class="sidebar">
					  <div class="Sidebar_container">
					  <div class="sidebar-header">
					  
						<img src='{vresource_url("layouts/v7/lib/newui/css/image/logo.png")}' alt="Proxynet" class="logo"/>
						<!--
						<a href="index.php" class="company-logoo">
									<img class="logo" src="{$COMPANY_LOGO->get('imagepath')}" alt="{$COMPANY_LOGO->get('alt')}"/>
						</a>
						-->
						<img src='{vresource_url("layouts/v7/lib/newui/css/image/toggle.png")}' alt="" width="30px" class="logo2">
					  </div>

					  <div class="search-bar">
						<img src='{vresource_url("layouts/v7/lib/newui/css/image/Vector@3x.png")}' alt="Search" class="search-icon" />
						<!-- <input type="text" placeholder="Search..." /> -->
						<input class="keyword-input" type="text" placeholder="{vtranslate('LBL_TYPE_SEARCH')}" value="{$GLOBAL_SEARCH_VALUE}">
					  </div>	
					   



		{assign var=APP_IMAGE_MAP value=Vtiger_MenuStructure_Model::getAppIcons()}
		{assign var=USER_PRIVILEGES_MODEL value=Users_Privileges_Model::getCurrentUserPrivilegesModel()}
		{assign var=HOME_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Home')}
		{assign var=DASHBOARD_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Dashboard')}
					<nav class="menu1">
						<ul>
						{if $USER_PRIVILEGES_MODEL->hasModulePermission($DASHBOARD_MODULE_MODEL->getId())}
						  <li id="menuItem"><span class="app-icon-list fa fa-dashboard bigger-icon"></span>
							<a href="?" style="color: black; text-decoration: none;">
						  {vtranslate('LBL_DASHBOARD',$MODULE)}
						  </a>
						  </li>
						{/if}
						
						{assign var=APP_GROUPED_MENU value=Settings_MenuEditor_Module_Model::getAllVisibleModules()}
						{assign var=APP_LIST value=Vtiger_MenuStructure_Model::getAppMenuList()}
						{foreach item=APP_NAME from=$APP_LIST}
							{if $APP_NAME eq 'ANALYTICS'} {continue}{/if}
							{if !empty($APP_GROUPED_MENU.$APP_NAME)}
							  <li class="expandable" id="menuItem">
							  <span class="app-icon-list fa {$APP_IMAGE_MAP.$APP_NAME} bigger-icon"></span> {vtranslate("LBL_$APP_NAME")}
	
									<ul class="sub-menu" id="submenu">
									<li class="submenu-heading"><h4>{vtranslate("LBL_$APP_NAME")}</h4> <hr class="default-hr"></li>
									 
										{foreach item=moduleModel key=moduleName from=$APP_GROUPED_MENU[$APP_NAME]}
											{assign var='translatedModuleLabel' value=vtranslate($moduleModel->get('label'),$moduleName )}
										
											 <li>
												<span class="module-icon ">{$moduleModel->getModuleIcon()}</span>
												<a href="{$moduleModel->getDefaultUrl()}&app={$APP_NAME}" title="{$translatedModuleLabel}" style="color: black; text-decoration: none;">{$translatedModuleLabel}</a>
											 </li>
										{/foreach}
									</ul>
								
								</li>
							{/if}
						{/foreach}
						
						
						</ul>
				</nav>
				<!-- Dropdown Section -->
						<div class="menu-section">
						  <div class="dropdown-toggle2">
							<span class="dropdown-icon">▼ More resources</span>
						  </div>
						  <ul class="dropdown-menuu">
							{assign var=MAILMANAGER_MODULE_MODEL value=Vtiger_Module_Model::getInstance('MailManager')}
							{if $USER_PRIVILEGES_MODEL->hasModulePermission($MAILMANAGER_MODULE_MODEL->getId())}
							<li class="list-none" >
								<a href="index.php?module=MailManager&view=List"">
								<span class="app-icon-list fa">{$MAILMANAGER_MODULE_MODEL->getModuleIcon()}</span> {vtranslate('MailManager')}
								</a>
							</li>
							
							{/if}
							{assign var=DOCUMENTS_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Documents')}
							{if $USER_PRIVILEGES_MODEL->hasModulePermission($DOCUMENTS_MODULE_MODEL->getId())}
							<li class="list-none" >
								<a href="index.php?module=Documents&view=List">
								<span class="app-icon-list fa">{$DOCUMENTS_MODULE_MODEL->getModuleIcon()}</span> {vtranslate('Documents')}
								</a>
							</li>
							
							{/if}
							{if $USER_MODEL->isAdminUser()}
								{if vtlib_isModuleActive('ExtensionStore')}
								<!--
								<li class="list-none" id="menu-item">
									<a href="index.php?module=ExtensionStore&parent=Settings&view=ExtensionStore">
									<span class="vicon-null app-icon-list fa fa-shopping-cart"></span>
									<span class="app-name textOverflowEllipsis"> {vtranslate('LBL_EXTENSION_STORE', 'Settings:Vtiger')}</span>
									</a>
								</li>
								-->
								{/if}
							{/if}
							{if $USER_MODEL->isAdminUser()}
								
								<li class="list-none">
									<a href="?module=Vtiger&parent=Settings&view=Index">
										<span class="vicon-null fa fa-cog module-icon "></span>
										<span class="module-name textOverflowEllipsis"> {vtranslate('LBL_CRM_SETTINGS','Vtiger')}</span>
									</a>
								</li>
								<li class="list-none">
									<a href="?module=Users&parent=Settings&view=List">
										<span class="vicon-null fa fa-user module-icon"></span>
										<span class="module-name textOverflowEllipsis"> {vtranslate('LBL_MANAGE_USERS','Vtiger')}</span>
									</a>
								</li>
									
								
								
							{/if}
			
						  </ul>
						</div>



<div class="app-menu hide" id="app-menu">
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm-2 col-xs-2 cursorPointer app-switcher-container">
				<div class="row app-navigator">
					<span id="menu-toggle-action" class="app-icon fa fa-bars"></span>
				</div>
			</div>
		</div>
		{assign var=USER_PRIVILEGES_MODEL value=Users_Privileges_Model::getCurrentUserPrivilegesModel()}
		{assign var=HOME_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Home')}
		{assign var=DASHBOARD_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Dashboard')}
		<div class="app-list row">
			{if $USER_PRIVILEGES_MODEL->hasModulePermission($DASHBOARD_MODULE_MODEL->getId())}
				<div class="menu-item app-item dropdown-toggle" data-default-url="{$HOME_MODULE_MODEL->getDefaultUrl()}">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa fa-dashboard"></span>
						<span class="app-name textOverflowEllipsis"> {vtranslate('LBL_DASHBOARD',$MODULE)}</span>
					</div>
				</div>
			{/if}
			
			{assign var=APP_GROUPED_MENU value=Settings_MenuEditor_Module_Model::getAllVisibleModules()}
			{assign var=APP_LIST value=Vtiger_MenuStructure_Model::getAppMenuList()}
			{foreach item=APP_NAME from=$APP_LIST}
				{if $APP_NAME eq 'ANALYTICS'} {continue}{/if}
				{if !empty($APP_GROUPED_MENU.$APP_NAME)}
					<div class="dropdown app-modules-dropdown-container">
						{foreach item=APP_MENU_MODEL from=$APP_GROUPED_MENU.$APP_NAME}
							{assign var=FIRST_MENU_MODEL value=$APP_MENU_MODEL}
							{if $APP_MENU_MODEL}
								{break}
							{/if}
						{/foreach}
						{* Fix for Responsive Layout Menu - Changed data-default-url to # *}
						<div class="menu-item app-item dropdown-toggle app-item-color-{$APP_NAME}" data-app-name="{$APP_NAME}" id="{$APP_NAME}_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa {$APP_IMAGE_MAP.$APP_NAME}"></span>
								<span class="app-name textOverflowEllipsis"> {vtranslate("LBL_$APP_NAME")}</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="{$APP_NAME}_modules_dropdownMenu">
							{foreach item=moduleModel key=moduleName from=$APP_GROUPED_MENU[$APP_NAME]}
								{assign var='translatedModuleLabel' value=vtranslate($moduleModel->get('label'),$moduleName )}
								<li>
									<a href="{$moduleModel->getDefaultUrl()}&app={$APP_NAME}" title="{$translatedModuleLabel}">
										<span class="module-icon">{$moduleModel->getModuleIcon()}</span>
										<span class="module-name textOverflowEllipsis"> {$translatedModuleLabel}</span>
									</a>
								</li>
							{/foreach}
						</ul>
					</div>
				{/if}
			{/foreach}
			
			<div class="app-list-divider"></div>
			{assign var=MAILMANAGER_MODULE_MODEL value=Vtiger_Module_Model::getInstance('MailManager')}
			{if $USER_PRIVILEGES_MODEL->hasModulePermission($MAILMANAGER_MODULE_MODEL->getId())}
				<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=MailManager&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa">{$MAILMANAGER_MODULE_MODEL->getModuleIcon()}</span>
						<span class="app-name textOverflowEllipsis"> {vtranslate('MailManager')}</span>
					</div>
				</div>
			{/if}
			{assign var=DOCUMENTS_MODULE_MODEL value=Vtiger_Module_Model::getInstance('Documents')}
			{if $USER_PRIVILEGES_MODEL->hasModulePermission($DOCUMENTS_MODULE_MODEL->getId())}
				<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=Documents&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa">{$DOCUMENTS_MODULE_MODEL->getModuleIcon()}</span>
						<span class="app-name textOverflowEllipsis"> {vtranslate('Documents')}</span>
					</div>
				</div>
			{/if}
			{if $USER_MODEL->isAdminUser()}
				{if vtlib_isModuleActive('ExtensionStore')}
					<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=ExtensionStore&parent=Settings&view=ExtensionStore">
						<div class="menu-items-wrapper">
							<span class="app-icon-list fa fa-shopping-cart"></span>
							<span class="app-name textOverflowEllipsis"> {vtranslate('LBL_EXTENSION_STORE', 'Settings:Vtiger')}</span>
						</div>
					</div>
				{/if}
			{/if}
			{if $USER_MODEL->isAdminUser()}

			
			<div class="menu-item app-item app-item-misc">
				<span class="app-icon-list fa fa-cog"></span>
				<span class="app-name textOverflowEllipsis"> {vtranslate('LBL_SETTINGS', 'Settings:Vtiger')}</span>
			</div>
			
			<div class="menu-items-wrapper app-menu-items-wrapper">
				<a href="?module=Vtiger&parent=Settings&view=Index">
					<span class="fa fa-cog module-icon"></span>
					<span class="module-name textOverflowEllipsis"> {vtranslate('LBL_CRM_SETTINGS','Vtiger')}</span>
				</a>
			</div>
			
			<div class="menu-items-wrapper app-menu-items-wrapper">
				<a href="?module=Users&parent=Settings&view=List">
					<span class="fa fa-user module-icon"></span>
					<span class="module-name textOverflowEllipsis"> {vtranslate('LBL_MANAGE_USERS','Vtiger')}</span>
				</a>
			</div>

				
			
				
			{/if}
		</div>
	</div>
</div>

  
  
</div>

						<!-- Spacer to push icons to the bottom -->
						<!-- <div style="flex-grow: 1;"></div> -->
					  
						<!-- Icon Bar (Always visible at the bottom) -->
						<div class="frame-10">
						  <div class="frame-11">
							<img class="mingcute-send-fill" src="https://c.animaapp.com/ma2f9rofdZW58f/img/flat-color-icons-plus.png" />
							<img class="mingcute-send-fill" src="https://c.animaapp.com/ma2f9rofdZW58f/img/lsicon-list-filled.svg" />
							<img class="mingcute-send-fill" src="https://c.animaapp.com/ma2f9rofdZW58f/img/mdi-leads.svg" />
							<img class="mingcute-send-fill" src="https://c.animaapp.com/ma2f9rofdZW58f/img/solar-calendar-bold.svg" />
							<!--
							<div class="staff">
							  <div class="frame-9">
								<img src="https://via.placeholder.com/40x40.png?text=U" alt="User Profile" style="border-radius: 50%; width: 40px; height: 40px;">
							  </div>
							</div>
							-->
						  </div>
						</div>
					  
					
					  
					  </aside>
					 

					<!-- Main content -->
					<main class="main-content">
					
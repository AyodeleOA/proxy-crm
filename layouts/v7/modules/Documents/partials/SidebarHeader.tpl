{*+**********************************************************************************
* The contents of this file are subject to the vtiger CRM Public License Version 1.1
* ("License"); You may not use this file except in compliance with the License
* The Original Code is: vtiger CRM Open Source
* The Initial Developer of the Original Code is vtiger.
* Portions created by vtiger are Copyright (C) vtiger.
* All Rights Reserved.
************************************************************************************}
{*

{include file="modules/Vtiger/partials/SidebarAppMenu.tpl"}

*}

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
						
					   {include file="modules/Vtiger/partials/SidebarAppMenu.tpl"}
					  
						
						
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
							<div class="staff">
							  <div class="frame-9">
								<img src="https://via.placeholder.com/40x40.png?text=U" alt="User Profile" style="border-radius: 50%; width: 40px; height: 40px;">
							  </div>
							</div>
						  </div>
						</div>
					  
					
					  
					  </aside>
					 

					<!-- Main content -->
					<main class="main-content">
{/strip}
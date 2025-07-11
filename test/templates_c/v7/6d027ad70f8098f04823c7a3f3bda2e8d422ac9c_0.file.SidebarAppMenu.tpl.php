<?php
/* Smarty version 4.5.4, created on 2025-06-10 14:01:52
  from 'C:\xampp\htdocs\proxy-crm\layouts\v7\modules\Vtiger\partials\SidebarAppMenu.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_68483ad015cc49_38651864',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6d027ad70f8098f04823c7a3f3bda2e8d422ac9c' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proxy-crm\\layouts\\v7\\modules\\Vtiger\\partials\\SidebarAppMenu.tpl',
      1 => 1749564094,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_68483ad015cc49_38651864 (Smarty_Internal_Template $_smarty_tpl) {
?>
					<!-- Sidebar -->
					<aside class="sidebar">
					  <div class="Sidebar_container">
					  <div class="sidebar-header">
					  
						<img src='<?php echo vresource_url("layouts/v7/lib/newui/css/image/logo.png");?>
' alt="Proxynet" class="logo"/>
						<!--
						<a href="index.php" class="company-logoo">
									<img class="logo" src="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('imagepath');?>
" alt="<?php echo $_smarty_tpl->tpl_vars['COMPANY_LOGO']->value->get('alt');?>
"/>
						</a>
						-->
						<img src='<?php echo vresource_url("layouts/v7/lib/newui/css/image/toggle.png");?>
' alt="" width="30px" class="logo2">
					  </div>

					  <div class="search-bar">
						<img src='<?php echo vresource_url("layouts/v7/lib/newui/css/image/Vector@3x.png");?>
' alt="Search" class="search-icon" />
						<!-- <input type="text" placeholder="Search..." /> -->
						<input class="keyword-input" type="text" placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH');?>
" value="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_SEARCH_VALUE']->value;?>
">
					  </div>	
					   



		<?php $_smarty_tpl->_assignInScope('APP_IMAGE_MAP', Vtiger_MenuStructure_Model::getAppIcons());?>
		<?php $_smarty_tpl->_assignInScope('USER_PRIVILEGES_MODEL', Users_Privileges_Model::getCurrentUserPrivilegesModel());?>
		<?php $_smarty_tpl->_assignInScope('HOME_MODULE_MODEL', Vtiger_Module_Model::getInstance('Home'));?>
		<?php $_smarty_tpl->_assignInScope('DASHBOARD_MODULE_MODEL', Vtiger_Module_Model::getInstance('Dashboard'));?>
					<nav class="menu1">
						<ul>
						<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['DASHBOARD_MODULE_MODEL']->value->getId())) {?>
						  <li id="menuItem"><span class="app-icon-list fa fa-dashboard bigger-icon"></span>
							<a href="?" style="color: black; text-decoration: none;">
						  <?php echo vtranslate('LBL_DASHBOARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>

						  </a>
						  </li>
						<?php }?>
						
						<?php $_smarty_tpl->_assignInScope('APP_GROUPED_MENU', Settings_MenuEditor_Module_Model::getAllVisibleModules());?>
						<?php $_smarty_tpl->_assignInScope('APP_LIST', Vtiger_MenuStructure_Model::getAppMenuList());?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['APP_LIST']->value, 'APP_NAME');
$_smarty_tpl->tpl_vars['APP_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['APP_NAME']->value) {
$_smarty_tpl->tpl_vars['APP_NAME']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['APP_NAME']->value == 'ANALYTICS') {?> <?php continue 1;
}?>
							<?php if (!empty($_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value])) {?>
							  <li class="expandable" id="menuItem">
							  <span class="app-icon-list fa <?php echo $_smarty_tpl->tpl_vars['APP_IMAGE_MAP']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value];?>
 bigger-icon"></span> <?php echo vtranslate("LBL_".((string)$_smarty_tpl->tpl_vars['APP_NAME']->value));?>

	
									<ul class="sub-menu" id="submenu">
									<li class="submenu-heading"><h4><?php echo vtranslate("LBL_".((string)$_smarty_tpl->tpl_vars['APP_NAME']->value));?>
</h4> <hr class="default-hr"></li>
									 
										<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value], 'moduleModel', false, 'moduleName');
$_smarty_tpl->tpl_vars['moduleModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->value => $_smarty_tpl->tpl_vars['moduleModel']->value) {
$_smarty_tpl->tpl_vars['moduleModel']->do_else = false;
?>
											<?php $_smarty_tpl->_assignInScope('translatedModuleLabel', vtranslate($_smarty_tpl->tpl_vars['moduleModel']->value->get('label'),$_smarty_tpl->tpl_vars['moduleName']->value));?>
										
											 <li>
												<span class="module-icon "><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>
</span>
												<a href="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getDefaultUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
" style="color: black; text-decoration: none;"><?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
</a>
											 </li>
										<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
									</ul>
								
								</li>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						
						
						</ul>
				</nav>
				<!-- Dropdown Section -->
						<div class="menu-section">
						  <div class="dropdown-toggle2">
							<span class="dropdown-icon">▼ More resources</span>
						  </div>
						  <ul class="dropdown-menuu">
							<?php $_smarty_tpl->_assignInScope('MAILMANAGER_MODULE_MODEL', Vtiger_Module_Model::getInstance('MailManager'));?>
							<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['MAILMANAGER_MODULE_MODEL']->value->getId())) {?>
							<li class="list-none" >
								<a href="index.php?module=MailManager&view=List"">
								<span class="app-icon-list fa"><?php echo $_smarty_tpl->tpl_vars['MAILMANAGER_MODULE_MODEL']->value->getModuleIcon();?>
</span> <?php echo vtranslate('MailManager');?>

								</a>
							</li>
							
							<?php }?>
							<?php $_smarty_tpl->_assignInScope('DOCUMENTS_MODULE_MODEL', Vtiger_Module_Model::getInstance('Documents'));?>
							<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['DOCUMENTS_MODULE_MODEL']->value->getId())) {?>
							<li class="list-none" >
								<a href="index.php?module=Documents&view=List">
								<span class="app-icon-list fa"><?php echo $_smarty_tpl->tpl_vars['DOCUMENTS_MODULE_MODEL']->value->getModuleIcon();?>
</span> <?php echo vtranslate('Documents');?>

								</a>
							</li>
							
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>
								<?php if (vtlib_isModuleActive('ExtensionStore')) {?>
								<!--
								<li class="list-none" id="menu-item">
									<a href="index.php?module=ExtensionStore&parent=Settings&view=ExtensionStore">
									<span class="vicon-null app-icon-list fa fa-shopping-cart"></span>
									<span class="app-name textOverflowEllipsis"> <?php echo vtranslate('LBL_EXTENSION_STORE','Settings:Vtiger');?>
</span>
									</a>
								</li>
								-->
								<?php }?>
							<?php }?>
							<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>
								
								<li class="list-none">
									<a href="?module=Vtiger&parent=Settings&view=Index">
										<span class="vicon-null fa fa-cog module-icon "></span>
										<span class="module-name textOverflowEllipsis"> <?php echo vtranslate('LBL_CRM_SETTINGS','Vtiger');?>
</span>
									</a>
								</li>
								<li class="list-none">
									<a href="?module=Users&parent=Settings&view=List">
										<span class="vicon-null fa fa-user module-icon"></span>
										<span class="module-name textOverflowEllipsis"> <?php echo vtranslate('LBL_MANAGE_USERS','Vtiger');?>
</span>
									</a>
								</li>
									
								
								
							<?php }?>
			
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
		<?php $_smarty_tpl->_assignInScope('USER_PRIVILEGES_MODEL', Users_Privileges_Model::getCurrentUserPrivilegesModel());?>
		<?php $_smarty_tpl->_assignInScope('HOME_MODULE_MODEL', Vtiger_Module_Model::getInstance('Home'));?>
		<?php $_smarty_tpl->_assignInScope('DASHBOARD_MODULE_MODEL', Vtiger_Module_Model::getInstance('Dashboard'));?>
		<div class="app-list row">
			<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['DASHBOARD_MODULE_MODEL']->value->getId())) {?>
				<div class="menu-item app-item dropdown-toggle" data-default-url="<?php echo $_smarty_tpl->tpl_vars['HOME_MODULE_MODEL']->value->getDefaultUrl();?>
">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa fa-dashboard"></span>
						<span class="app-name textOverflowEllipsis"> <?php echo vtranslate('LBL_DASHBOARD',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</span>
					</div>
				</div>
			<?php }?>
			
			<?php $_smarty_tpl->_assignInScope('APP_GROUPED_MENU', Settings_MenuEditor_Module_Model::getAllVisibleModules());?>
			<?php $_smarty_tpl->_assignInScope('APP_LIST', Vtiger_MenuStructure_Model::getAppMenuList());?>
			<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['APP_LIST']->value, 'APP_NAME');
$_smarty_tpl->tpl_vars['APP_NAME']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['APP_NAME']->value) {
$_smarty_tpl->tpl_vars['APP_NAME']->do_else = false;
?>
				<?php if ($_smarty_tpl->tpl_vars['APP_NAME']->value == 'ANALYTICS') {?> <?php continue 1;
}?>
				<?php if (!empty($_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value])) {?>
					<div class="dropdown app-modules-dropdown-container">
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value], 'APP_MENU_MODEL');
$_smarty_tpl->tpl_vars['APP_MENU_MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['APP_MENU_MODEL']->value) {
$_smarty_tpl->tpl_vars['APP_MENU_MODEL']->do_else = false;
?>
							<?php $_smarty_tpl->_assignInScope('FIRST_MENU_MODEL', $_smarty_tpl->tpl_vars['APP_MENU_MODEL']->value);?>
							<?php if ($_smarty_tpl->tpl_vars['APP_MENU_MODEL']->value) {?>
								<?php break 1;?>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<div class="menu-item app-item dropdown-toggle app-item-color-<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" data-app-name="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" id="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
_modules_dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true" data-default-url="#">
							<div class="menu-items-wrapper app-menu-items-wrapper">
								<span class="app-icon-list fa <?php echo $_smarty_tpl->tpl_vars['APP_IMAGE_MAP']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value];?>
"></span>
								<span class="app-name textOverflowEllipsis"> <?php echo vtranslate("LBL_".((string)$_smarty_tpl->tpl_vars['APP_NAME']->value));?>
</span>
								<span class="fa fa-chevron-right pull-right"></span>
							</div>
						</div>
						<ul class="dropdown-menu app-modules-dropdown" aria-labelledby="<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
_modules_dropdownMenu">
							<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['APP_GROUPED_MENU']->value[$_smarty_tpl->tpl_vars['APP_NAME']->value], 'moduleModel', false, 'moduleName');
$_smarty_tpl->tpl_vars['moduleModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->value => $_smarty_tpl->tpl_vars['moduleModel']->value) {
$_smarty_tpl->tpl_vars['moduleModel']->do_else = false;
?>
								<?php $_smarty_tpl->_assignInScope('translatedModuleLabel', vtranslate($_smarty_tpl->tpl_vars['moduleModel']->value->get('label'),$_smarty_tpl->tpl_vars['moduleName']->value));?>
								<li>
									<a href="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getDefaultUrl();?>
&app=<?php echo $_smarty_tpl->tpl_vars['APP_NAME']->value;?>
" title="<?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
">
										<span class="module-icon"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>
</span>
										<span class="module-name textOverflowEllipsis"> <?php echo $_smarty_tpl->tpl_vars['translatedModuleLabel']->value;?>
</span>
									</a>
								</li>
							<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
						</ul>
					</div>
				<?php }?>
			<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
			
			<div class="app-list-divider"></div>
			<?php $_smarty_tpl->_assignInScope('MAILMANAGER_MODULE_MODEL', Vtiger_Module_Model::getInstance('MailManager'));?>
			<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['MAILMANAGER_MODULE_MODEL']->value->getId())) {?>
				<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=MailManager&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa"><?php echo $_smarty_tpl->tpl_vars['MAILMANAGER_MODULE_MODEL']->value->getModuleIcon();?>
</span>
						<span class="app-name textOverflowEllipsis"> <?php echo vtranslate('MailManager');?>
</span>
					</div>
				</div>
			<?php }?>
			<?php $_smarty_tpl->_assignInScope('DOCUMENTS_MODULE_MODEL', Vtiger_Module_Model::getInstance('Documents'));?>
			<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['DOCUMENTS_MODULE_MODEL']->value->getId())) {?>
				<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=Documents&view=List">
					<div class="menu-items-wrapper">
						<span class="app-icon-list fa"><?php echo $_smarty_tpl->tpl_vars['DOCUMENTS_MODULE_MODEL']->value->getModuleIcon();?>
</span>
						<span class="app-name textOverflowEllipsis"> <?php echo vtranslate('Documents');?>
</span>
					</div>
				</div>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>
				<?php if (vtlib_isModuleActive('ExtensionStore')) {?>
					<div class="menu-item app-item app-item-misc" data-default-url="index.php?module=ExtensionStore&parent=Settings&view=ExtensionStore">
						<div class="menu-items-wrapper">
							<span class="app-icon-list fa fa-shopping-cart"></span>
							<span class="app-name textOverflowEllipsis"> <?php echo vtranslate('LBL_EXTENSION_STORE','Settings:Vtiger');?>
</span>
						</div>
					</div>
				<?php }?>
			<?php }?>
			<?php if ($_smarty_tpl->tpl_vars['USER_MODEL']->value->isAdminUser()) {?>

			
			<div class="menu-item app-item app-item-misc">
				<span class="app-icon-list fa fa-cog"></span>
				<span class="app-name textOverflowEllipsis"> <?php echo vtranslate('LBL_SETTINGS','Settings:Vtiger');?>
</span>
			</div>
			
			<div class="menu-items-wrapper app-menu-items-wrapper">
				<a href="?module=Vtiger&parent=Settings&view=Index">
					<span class="fa fa-cog module-icon"></span>
					<span class="module-name textOverflowEllipsis"> <?php echo vtranslate('LBL_CRM_SETTINGS','Vtiger');?>
</span>
				</a>
			</div>
			
			<div class="menu-items-wrapper app-menu-items-wrapper">
				<a href="?module=Users&parent=Settings&view=List">
					<span class="fa fa-user module-icon"></span>
					<span class="module-name textOverflowEllipsis"> <?php echo vtranslate('LBL_MANAGE_USERS','Vtiger');?>
</span>
				</a>
			</div>

				
			
				
			<?php }?>
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
					<?php }
}

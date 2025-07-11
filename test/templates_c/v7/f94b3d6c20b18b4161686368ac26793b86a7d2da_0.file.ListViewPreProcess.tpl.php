<?php
/* Smarty version 4.5.4, created on 2025-06-03 13:32:51
  from 'C:\xampp\htdocs\proxy-crm\layouts\v7\modules\Vtiger\ListViewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_683ef983b87068_36751387',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f94b3d6c20b18b4161686368ac26793b86a7d2da' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proxy-crm\\layouts\\v7\\modules\\Vtiger\\ListViewPreProcess.tpl',
      1 => 1748957560,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/Header.tpl' => 1,
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_683ef983b87068_36751387 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/Vtiger/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>




<div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
	<div class="data">
	</div>
	<div class="modal-dialog">
	</div>
</div> 

 
<div class="headerr">
  <div class="header-background no-padding">
	<img src='<?php echo vresource_url("layouts/v7/lib/newui/css/image/header-bg.png");?>
' alt="Header Background" class="header-img no-radius" />


	
	<nav class="navbar navbar-inverse navbar-fixed-top app-fixed-navbar">
		<div class="container-fluid global-nav">
			<div class="row">	
<div id="navbar" class="col-md-11 collapse navbar-collapse navbar-right global-actions">
		<ul class="nav navbar-nav">
						<li>
							<div class="dropdown pull-right">
								<div class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<a href="#" id="menubar_quickCreate" class="qc-button fa fa-plus-circle" title="<?php echo vtranslate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
" aria-hidden="true"></a>
								</div>
								<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:500px;">
									<li class="title" style="padding: 5px 0 0 15px;">
										<strong><?php echo vtranslate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong>
									</li>
									<hr/>
									<li id="quickCreateModules" style="padding: 0 5px;">
										<div class="col-lg-12" style="padding-bottom:15px;">
											<?php $_smarty_tpl->_assignInScope('count', 0);?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICK_CREATE_MODULES']->value, 'moduleModel', false, 'moduleName');
$_smarty_tpl->tpl_vars['moduleModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->value => $_smarty_tpl->tpl_vars['moduleModel']->value) {
$_smarty_tpl->tpl_vars['moduleModel']->do_else = false;
?>
												<?php if ($_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('CreateView') || $_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('EditView')) {?>
													<?php $_smarty_tpl->_assignInScope('quickCreateModule', $_smarty_tpl->tpl_vars['moduleModel']->value->isQuickCreateSupported());?>
													<?php $_smarty_tpl->_assignInScope('singularLabel', $_smarty_tpl->tpl_vars['moduleModel']->value->getSingularLabelKey());?>
													<?php ob_start();
echo !$_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('CreateView') && $_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('EditView');
$_prefixVariable1 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideDiv', $_prefixVariable1);?>
													<?php if ($_smarty_tpl->tpl_vars['quickCreateModule']->value == '1') {?>
														<?php if ($_smarty_tpl->tpl_vars['count']->value%3 == 0) {?>
															<div class="row">
															<?php }?>
																														<?php if ($_smarty_tpl->tpl_vars['singularLabel']->value == 'SINGLE_Calendar') {?>
																<?php $_smarty_tpl->_assignInScope('singularLabel', 'LBL_TASK');?>
																<div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?>">
																	<a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events"
																	   data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon('Event');?>
<span class="quick-create-module"><?php echo vtranslate('LBL_EVENT',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></a>
																</div>
																<?php if ($_smarty_tpl->tpl_vars['count']->value%3 == 2) {?>
																	</div>
																	<br>
																	<div class="row">
																<?php }?>
																<div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?>">
																	<a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModule" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
"
																	   data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon('Task');?>
<span class="quick-create-module"><?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></a>
																</div>
																<?php if (!$_smarty_tpl->tpl_vars['hideDiv']->value) {?>
																	<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
																<?php }?>
															<?php } elseif ($_smarty_tpl->tpl_vars['singularLabel']->value == 'SINGLE_Documents') {?>
																<div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?> dropdown">
																	<a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModuleSubmenu dropdown-toggle" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" data-toggle="dropdown" 
																	   data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)">
																		<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>

																		<span class="quick-create-module">
																			<?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>

																			<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i>
																		</span>
																	</a>
																	<ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
">
																		<li class="dropdown-header"><i class="fa fa-upload"></i> <?php echo vtranslate('LBL_FILE_UPLOAD',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</li>
																		<li id="VtigerAction">
																			<a href="javascript:Documents_Index_Js.uploadTo('Vtiger')">
																				<img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="layouts/v7/skins//images/Vtiger.png">
																				<?php ob_start();
echo vtranslate('LBL_VTIGER',$_smarty_tpl->tpl_vars['moduleName']->value);
$_prefixVariable2 = ob_get_clean();
echo vtranslate('LBL_TO_SERVICE',$_smarty_tpl->tpl_vars['moduleName']->value,$_prefixVariable2);?>

																			</a>
																		</li>
																		<li class="dropdown-header"><i class="fa fa-link"></i> <?php echo vtranslate('LBL_LINK_EXTERNAL_DOCUMENT',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</li>
																		<li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; <?php ob_start();
echo vtranslate('LBL_FILE_URL',$_smarty_tpl->tpl_vars['moduleName']->value);
$_prefixVariable3 = ob_get_clean();
echo vtranslate('LBL_FROM_SERVICE',$_smarty_tpl->tpl_vars['moduleName']->value,$_prefixVariable3);?>
</a></li>
																		<li role="separator" class="divider"></li>
																		<li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> <?php ob_start();
echo vtranslate('SINGLE_Documents',$_smarty_tpl->tpl_vars['moduleName']->value);
$_prefixVariable4 = ob_get_clean();
echo vtranslate('LBL_CREATE_NEW',$_smarty_tpl->tpl_vars['moduleName']->value,$_prefixVariable4);?>
</a></li>
																	</ul>
																</div>
															<?php } else { ?>
																<div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?>">
																	<a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModule" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
"
																	   data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)">
																		<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>

																		<span class="quick-create-module"><?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span>
																	</a>
																</div>
															<?php }?>
															<?php if ($_smarty_tpl->tpl_vars['count']->value%3 == 2) {?>
																</div>
																<br>
															<?php }?>
														<?php if (!$_smarty_tpl->tpl_vars['hideDiv']->value) {?>
															<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
														<?php }?>
													<?php }?>
												<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</div>
									</li>
								</ul>
							</div>
						</li>
						<?php $_smarty_tpl->_assignInScope('USER_PRIVILEGES_MODEL', Users_Privileges_Model::getCurrentUserPrivilegesModel());?>
						<?php $_smarty_tpl->_assignInScope('CALENDAR_MODULE_MODEL', Vtiger_Module_Model::getInstance('Calendar'));?>
						<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['CALENDAR_MODULE_MODEL']->value->getId())) {?>
							<li><div><a href="index.php?module=Calendar&view=<?php echo $_smarty_tpl->tpl_vars['CALENDAR_MODULE_MODEL']->value->getDefaultViewName();?>
" class="fa fa-calendar" title="<?php echo vtranslate('Calendar','Calendar');?>
" aria-hidden="true"></a></div></li>
						<?php }?>
						<?php $_smarty_tpl->_assignInScope('REPORTS_MODULE_MODEL', Vtiger_Module_Model::getInstance('Reports'));?>
						<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['REPORTS_MODULE_MODEL']->value->getId())) {?>
							<li><div><a href="index.php?module=Reports&view=List" class="fa fa-bar-chart" title="<?php echo vtranslate('Reports','Reports');?>
" aria-hidden="true"></a></div></li>
						<?php }?>
						<?php if ($_smarty_tpl->tpl_vars['USER_PRIVILEGES_MODEL']->value->hasModulePermission($_smarty_tpl->tpl_vars['CALENDAR_MODULE_MODEL']->value->getId())) {?>
							<li><div><a href="#" class="taskManagement vicon vicon-task" title="<?php echo vtranslate('Tasks','Vtiger');?>
" aria-hidden="true"></a></div></li>
						<?php }?>
						<li class="dropdown">
							<div>
								<a href="#" class="userName dropdown-toggle pull-right" data-toggle="dropdown" role="button">
									<span class="fa fa-user" aria-hidden="true" title="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('userlabel');?>

										  (<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
)"></span>
									<span class="link-text-xs-only hidden-lg hidden-md hidden-sm"><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getName();?>
</span>
								</a>
								<div class="dropdown-menu logout-content" role="menu">
									<div class="row">
										<div class="col-lg-4 col-sm-4">
											<div class="profile-img-container">
												<?php $_smarty_tpl->_assignInScope('IMAGE_DETAILS', $_smarty_tpl->tpl_vars['USER_MODEL']->value->getImageDetails());?>
												<?php if ($_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value != '' && $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value[0] != '' && $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value[0]['path'] == '') {?>
													<i class='vicon-vtigeruser' style="font-size:90px"></i>
												<?php } else { ?>
													<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['IMAGE_DETAILS']->value, 'IMAGE_INFO');
$_smarty_tpl->tpl_vars['IMAGE_INFO']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['IMAGE_INFO']->value) {
$_smarty_tpl->tpl_vars['IMAGE_INFO']->do_else = false;
?>
														<?php if (!empty($_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'])) {?>
															<img src="<?php echo $_smarty_tpl->tpl_vars['IMAGE_INFO']->value['url'];?>
" width="100px" height="100px">
														<?php }?>
													<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
												<?php }?>
											</div>
										</div>
										<div class="col-lg-8 col-sm-8">
											<div class="profile-container">
												<h4><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('first_name');?>
 <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('last_name');?>
</h4>
												<h5 class="textOverflowEllipsis" title='<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
'><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
</h5>
												<p><?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getUserRoleName();?>
</p>
											</div>
										</div>
									</div>
									<div id="logout-footer" class="logout-footer clearfix">
										<hr style="margin: 10px 0 !important">
										<div class="">
											<span class="pull-left">
												<span class="fa fa-cogs"></span>
												<a id="menubar_item_right_LBL_MY_PREFERENCES" href="<?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->getPreferenceDetailViewUrl();?>
"><?php echo vtranslate('LBL_MY_PREFERENCES');?>
</a>
											</span>
											<span class="pull-right">
												<span class="fa fa-power-off"></span>
												<a id="menubar_item_right_LBL_SIGN_OUT" href="index.php?module=Users&action=Logout"><?php echo vtranslate('LBL_SIGN_OUT');?>
</a>
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
	  <h1>Welcome, <?php echo $_smarty_tpl->tpl_vars['USER_MODEL']->value->get('user_name');?>
!</h1>
	  -->
			
			
			
	  		<div class="col-lg-7 col-md-6 col-sm-5 col-xs-11 padding0 module-breadcrumb module-breadcrumb-<?php echo $_smarty_tpl->tpl_vars['REQ']->value->get('view');?>
 transitionsAllHalfSecond">
				<?php $_smarty_tpl->_assignInScope('MODULE_MODEL', Vtiger_Module_Model::getInstance($_smarty_tpl->tpl_vars['MODULE']->value));?>
				<?php if ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultViewName() != 'List') {?>
					<?php $_smarty_tpl->_assignInScope('DEFAULT_FILTER_URL', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultUrl());?>
				<?php } else { ?>
					<?php $_smarty_tpl->_assignInScope('DEFAULT_FILTER_ID', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getDefaultCustomFilter());?>
					<?php if ($_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID']->value) {?>
						<?php $_smarty_tpl->_assignInScope('CVURL', ("&viewname=").($_smarty_tpl->tpl_vars['DEFAULT_FILTER_ID']->value));?>
						<?php $_smarty_tpl->_assignInScope('DEFAULT_FILTER_URL', ($_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl()).($_smarty_tpl->tpl_vars['CVURL']->value));?>
					<?php } else { ?>
						<?php $_smarty_tpl->_assignInScope('DEFAULT_FILTER_URL', $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrlWithAllFilter());?>
					<?php }?>
				<?php }?>
				
				<h4 class="module-title pull-left text-white"> <?php ob_start();
echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;
$_prefixVariable5 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;
$_prefixVariable6 = ob_get_clean();
echo vtranslate($_prefixVariable5,$_prefixVariable6);?>
 </h4>&nbsp;&nbsp;</a>
				
				<p class="current-filter-name filter-name pull-left cursorPointer" title="<?php echo $_smarty_tpl->tpl_vars['CVNAME']->value;?>
">
					<span class="long-slash">/</span>
				</p>
					
					
				
				<a title="<?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
" href='<?php echo $_smarty_tpl->tpl_vars['DEFAULT_FILTER_URL']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
'>
				
					
				
				<h4 class="module-title pull-left  text-white"> <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value);?>
 </h4>&nbsp;&nbsp;</a>
				
				<p class="current-filter-name filter-name pull-left cursorPointer" title="<?php echo $_smarty_tpl->tpl_vars['CVNAME']->value;?>
">
					<span class="long-slash">/</span>
				</p>
				
                <?php if ((isset($_SESSION['lvs'])) && (isset($_SESSION['lvs'][$_smarty_tpl->tpl_vars['MODULE']->value])) && (isset($_SESSION['lvs'][$_smarty_tpl->tpl_vars['MODULE']->value]['viewname']))) {?>
					<?php $_smarty_tpl->_assignInScope('VIEWID', $_SESSION['lvs'][$_smarty_tpl->tpl_vars['MODULE']->value]['viewname']);?>
				<?php }?>
				
				<?php if ((isset($_smarty_tpl->tpl_vars['VIEWID']->value)) && $_smarty_tpl->tpl_vars['VIEWID']->value) {?>
					<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['CUSTOM_VIEWS']->value, 'FILTER_TYPES');
$_smarty_tpl->tpl_vars['FILTER_TYPES']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FILTER_TYPES']->value) {
$_smarty_tpl->tpl_vars['FILTER_TYPES']->do_else = false;
?>
						<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['FILTER_TYPES']->value, 'FILTERS');
$_smarty_tpl->tpl_vars['FILTERS']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['FILTERS']->value) {
$_smarty_tpl->tpl_vars['FILTERS']->do_else = false;
?>
							<?php if ($_smarty_tpl->tpl_vars['FILTERS']->value->get('cvid') == $_smarty_tpl->tpl_vars['VIEWID']->value) {?>
								<?php $_smarty_tpl->_assignInScope('CVNAME', $_smarty_tpl->tpl_vars['FILTERS']->value->get('viewname'));?>
								<?php break 1;?>
							<?php }?>
						<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
					
					<p class="current-filter-name filter-name pull-left cursorPointer" title="<?php echo $_smarty_tpl->tpl_vars['CVNAME']->value;?>
">
					
					<a class="text-white" href='<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl();?>
&viewname=<?php echo $_smarty_tpl->tpl_vars['VIEWID']->value;?>
&app=<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
'>&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['CVNAME']->value;?>
&nbsp;&nbsp;</a> </p>
				<?php }?>
				
				<?php $_smarty_tpl->_assignInScope('SINGLE_MODULE_NAME', ('SINGLE_').($_smarty_tpl->tpl_vars['MODULE']->value));?>
				<?php if ((isset($_smarty_tpl->tpl_vars['RECORD']->value)) && $_smarty_tpl->tpl_vars['RECORD']->value && $_smarty_tpl->tpl_vars['REQ']->value->get('view') == 'Edit') {?>
					<p class="current-filter-name filter-name pull-left ">
					<span class="fa fa-angle-right pull-left" aria-hidden="true"></span>
					
					<a title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('label');?>
">&nbsp;&nbsp;<?php echo vtranslate('LBL_EDITING',$_smarty_tpl->tpl_vars['MODULE']->value);?>
 : <?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('label');?>
 &nbsp;&nbsp;</a></p>
				<?php } elseif ($_smarty_tpl->tpl_vars['REQ']->value->get('view') == 'Edit') {?>
					<p class="current-filter-name filter-name pull-left "><span class="fa fa-angle-right pull-left" aria-hidden="true"></span><a>&nbsp;&nbsp;<?php echo vtranslate('LBL_ADDING_NEW',$_smarty_tpl->tpl_vars['MODULE']->value);?>
&nbsp;&nbsp;</a></p>
				<?php }?>
				<?php if ($_smarty_tpl->tpl_vars['REQ']->value->get('view') == 'Detail') {?>
					<p class="current-filter-name filter-name pull-left">
					<span class="fa fa-angle-right pull-left" aria-hidden="true"></span>
					<a title="<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('label');?>
">&nbsp;&nbsp;<?php echo $_smarty_tpl->tpl_vars['RECORD']->value->get('label');?>
 &nbsp;&nbsp;</a></p>
				<?php }?>
			</div>
			
			
	  
	  
			  <div class="header-search">
				<!-- <input type="text" placeholder="Search..." /> -->
				
				<div id="search-links-container" class="keyword-input search-links-container collapse navbar-collapse">
					<div class="search-link">
						<span class="fa fa-search" aria-hidden="true"></span>
						<input class="keyword-input" type="text" placeholder="<?php echo vtranslate('LBL_TYPE_SEARCH');?>
" value="<?php echo $_smarty_tpl->tpl_vars['GLOBAL_SEARCH_VALUE']->value;?>
">
						<span id="adv-search" class="adv-search fa fa-chevron-circle-down pull-right cursorPointer" aria-hidden="true"></span>
					</div>
				</div>
			  </div>

	  
	</div>
	
	<div>
		  
	
	</div>
	
  </div>
</div>

  
<div class="main-container main-container-<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
">
		<?php $_smarty_tpl->_assignInScope('LEFTPANELHIDE', $_smarty_tpl->tpl_vars['CURRENT_USER_MODEL']->value->get('leftpanelhide'));?>
				
		<div id="sidebar-essentials" class="sidebar-essentials <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value == '1') {?> hide <?php }?>">
			<?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "partials/SidebarEssentials.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
		</div>
		<div class="listViewPageDiv content-area <?php if ($_smarty_tpl->tpl_vars['LEFTPANELHIDE']->value == '1') {?> full-width <?php }?>" id="listViewContent">
		
		<div class="row">
					<?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>
					
					
		</div> 
		

<?php }
}

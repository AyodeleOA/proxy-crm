<?php
/* Smarty version 4.5.4, created on 2025-07-14 20:56:39
  from 'C:\xampp\htdocs\proxy-crm\layouts\v7\modules\Vtiger\IndexViewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_68756f07d6f1f4_98740693',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'fcc5173ab9920632086908f07effcd167641e85d' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proxy-crm\\layouts\\v7\\modules\\Vtiger\\IndexViewPreProcess.tpl',
      1 => 1752442958,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/Header.tpl' => 1,
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_68756f07d6f1f4_98740693 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/Vtiger/Header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="headerr">
  <div class="header-background no-padding">
	<img src='<?php echo vresource_url("layouts/v7/lib/newui/css/image/header-bg.png");?>
' alt="Header Background" class="header-img no-radius" />
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
$_prefixVariable1 = ob_get_clean();
ob_start();
echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;
$_prefixVariable2 = ob_get_clean();
echo vtranslate($_prefixVariable1,$_prefixVariable2);?>
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
  </div>
</div>

<div id='overlayPageContent' class='fade modal overlayPageContent content-area overlay-container-60' tabindex='-1' role='dialog' aria-hidden='true'>
	<div class="data">
	</div>
	<div class="modal-dialog">
	</div>
</div>

<?php }
}

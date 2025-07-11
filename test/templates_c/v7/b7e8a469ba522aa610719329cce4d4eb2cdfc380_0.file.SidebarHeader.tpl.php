<?php
/* Smarty version 4.5.4, created on 2025-05-28 15:35:04
  from 'C:\xampp\htdocs\proxy-crm\layouts\v7\modules\Documents\partials\SidebarHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_68372d28c8e728_50747528',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b7e8a469ba522aa610719329cce4d4eb2cdfc380' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proxy-crm\\layouts\\v7\\modules\\Documents\\partials\\SidebarHeader.tpl',
      1 => 1748446501,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_68372d28c8e728_50747528 (Smarty_Internal_Template $_smarty_tpl) {
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
						
					   <?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
					  
						
						
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
<?php }
}

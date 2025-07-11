<?php
/* Smarty version 4.5.4, created on 2025-01-27 09:40:49
  from '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Reports/IndexViewPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_679754a10b3356_93039159',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'e4ed731377f5350ad67b3edf7e75cd17e0d825ce' => 
    array (
      0 => '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Reports/IndexViewPreProcess.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/Topbar.tpl' => 1,
    'file:modules/Reports/partials/SidebarHeader.tpl' => 1,
  ),
),false)) {
function content_679754a10b3356_93039159 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/Topbar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?><div class="container-fluid app-nav"><div class="row"><?php $_smarty_tpl->_subTemplateRender("file:modules/Reports/partials/SidebarHeader.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
$_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "ModuleHeader.tpl",$_smarty_tpl->tpl_vars['MODULE']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?></div></div></nav><div class="clearfix main-container"><div><div class="editViewPageDiv viewContent"><div class="reports-content-area"><?php }
}

<?php
/* Smarty version 4.5.4, created on 2025-02-28 19:18:19
  from '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Portal/SidebarHeader.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67c20bfbb57118_01617885',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd6e8fe19151f8b34ddfc631321ef1c40c66b3429' => 
    array (
      0 => '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Portal/SidebarHeader.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:modules/Vtiger/partials/SidebarAppMenu.tpl' => 1,
  ),
),false)) {
function content_67c20bfbb57118_01617885 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('APP_IMAGE_MAP', Vtiger_MenuStructure_Model::getAppIcons());?>
<div class="col-sm-12 col-xs-12 app-indicator-icon-container app-<?php echo $_smarty_tpl->tpl_vars['SELECTED_MENU_CATEGORY']->value;?>
">
    <div class="row" title="<?php echo vtranslate("Portal",$_smarty_tpl->tpl_vars['MODULE']->value);?>
">
        <span class="app-indicator-icon fa fa-desktop"></span>
    </div>
</div>
    
<?php $_smarty_tpl->_subTemplateRender("file:modules/Vtiger/partials/SidebarAppMenu.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

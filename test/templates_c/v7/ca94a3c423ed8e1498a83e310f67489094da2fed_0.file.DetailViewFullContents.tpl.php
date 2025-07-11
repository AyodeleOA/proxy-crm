<?php
/* Smarty version 4.5.4, created on 2025-01-26 18:02:56
  from '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Vtiger/DetailViewFullContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_679678d00df056_23573062',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ca94a3c423ed8e1498a83e310f67489094da2fed' => 
    array (
      0 => '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Vtiger/DetailViewFullContents.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679678d00df056_23573062 (Smarty_Internal_Template $_smarty_tpl) {
?>
<form id="detailView" method="POST"><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?></form>
<?php }
}

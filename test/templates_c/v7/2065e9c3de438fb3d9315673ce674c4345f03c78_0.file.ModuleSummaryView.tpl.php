<?php
/* Smarty version 4.5.4, created on 2025-02-12 18:07:49
  from '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Vtiger/ModuleSummaryView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67ace375b9fed2_74624595',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '2065e9c3de438fb3d9315673ce674c4345f03c78' => 
    array (
      0 => '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Vtiger/ModuleSummaryView.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67ace375b9fed2_74624595 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="recordDetails">
    <?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'DetailViewBlockView.tpl',$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('RECORD_STRUCTURE'=>$_smarty_tpl->tpl_vars['SUMMARY_RECORD_STRUCTURE']->value,'MODULE_NAME'=>$_smarty_tpl->tpl_vars['MODULE_NAME']->value), 0, true);
?>
</div><?php }
}

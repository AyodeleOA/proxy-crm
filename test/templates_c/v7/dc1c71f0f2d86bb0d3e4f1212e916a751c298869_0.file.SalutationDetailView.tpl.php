<?php
/* Smarty version 4.5.4, created on 2025-01-26 18:02:56
  from '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_679678d011e1c1_27294646',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dc1c71f0f2d86bb0d3e4f1212e916a751c298869' => 
    array (
      0 => '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Vtiger/uitypes/SalutationDetailView.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679678d011e1c1_27294646 (Smarty_Internal_Template $_smarty_tpl) {
echo $_smarty_tpl->tpl_vars['RECORD']->value->getDisplayValue('salutationtype');?>


<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getDisplayValue($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue'),$_smarty_tpl->tpl_vars['RECORD']->value->getId(),$_smarty_tpl->tpl_vars['RECORD']->value);
}
}

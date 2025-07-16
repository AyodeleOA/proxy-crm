<?php
/* Smarty version 4.5.4, created on 2025-02-10 14:02:00
  from '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/PriceBooks/uitypes/Boolean.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67aa06d8e44c29_09922419',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f09c4ea459af148d40bbe75de19e626ec8d879fa' => 
    array (
      0 => '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/PriceBooks/uitypes/Boolean.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67aa06d8e44c29_09922419 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO', Vtiger_Util_Helper::toSafeHTML(Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo())));
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name'));?><input type="hidden" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
" value="<?php if ((isset($_smarty_tpl->tpl_vars['IS_RELATION']->value)) && $_smarty_tpl->tpl_vars['IS_RELATION']->value == true) {?>1<?php } else { ?>0<?php }?>" /><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="checkbox" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName();?>
"data-validation-engine="validate[funcCall[Vtiger_Base_Validator_Js.invokeValidation]]" data-fieldinfo='<?php echo $_smarty_tpl->tpl_vars['FIELD_INFO']->value;?>
'<?php if ($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue') == true) {?> checked <?php }
if ((isset($_smarty_tpl->tpl_vars['IS_RELATION']->value)) && $_smarty_tpl->tpl_vars['IS_RELATION']->value == true) {?> disabled="disabled" <?php }
if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator=<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);
}?>/><?php }
}

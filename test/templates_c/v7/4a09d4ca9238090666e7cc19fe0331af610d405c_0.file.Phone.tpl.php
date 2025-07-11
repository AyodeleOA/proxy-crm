<?php
/* Smarty version 4.5.4, created on 2025-01-26 17:35:19
  from '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Vtiger/uitypes/Phone.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67967257910b77_79185248',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4a09d4ca9238090666e7cc19fe0331af610d405c' => 
    array (
      0 => '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Vtiger/uitypes/Phone.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67967257910b77_79185248 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('SPECIAL_VALIDATOR', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getValidator());
$_smarty_tpl->_assignInScope('FIELD_INFO', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo());
if ((!$_smarty_tpl->tpl_vars['FIELD_NAME']->value)) {
$_smarty_tpl->_assignInScope('FIELD_NAME', $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldName());
}?><input id="<?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
_editView_fieldName_<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
" type="text" class="inputElement" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_NAME']->value;?>
"value="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('fieldvalue');?>
" <?php if (!empty($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value)) {?>data-validator='<?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['SPECIAL_VALIDATOR']->value);?>
'<?php }
if ($_smarty_tpl->tpl_vars['FIELD_INFO']->value["mandatory"] == true) {?> data-rule-required="true" <?php }
if (php7_count($_smarty_tpl->tpl_vars['FIELD_INFO']->value['validator'])) {?>data-specific-rules='<?php echo ZEND_JSON::encode($_smarty_tpl->tpl_vars['FIELD_INFO']->value["validator"]);?>
'<?php }?>/>
<?php }
}

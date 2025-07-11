<?php
/* Smarty version 4.5.4, created on 2025-05-28 15:02:36
  from 'C:\xampp\htdocs\proxy-crm\layouts\v7\modules\Vtiger\uitypes\BooleanFieldSearchView.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6837258c41b300_21781282',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7d224650ef4b18b2d8538f694e4739d363506225' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proxy-crm\\layouts\\v7\\modules\\Vtiger\\uitypes\\BooleanFieldSearchView.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6837258c41b300_21781282 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_assignInScope('FIELD_INFO', Zend_Json::encode($_smarty_tpl->tpl_vars['FIELD_MODEL']->value->getFieldInfo()));
$_smarty_tpl->_assignInScope('SEARCH_VALUES', $_smarty_tpl->tpl_vars['SEARCH_INFO']->value['searchValue']);?><div class=""><select class="select2 listSearchContributor" name="<?php echo $_smarty_tpl->tpl_vars['FIELD_MODEL']->value->get('name');?>
" style="width:90px;" data-fieldinfo='<?php echo htmlspecialchars((string)$_smarty_tpl->tpl_vars['FIELD_INFO']->value, ENT_QUOTES, 'UTF-8', true);?>
'><option value=""><?php echo vtranslate('LBL_SELECT_OPTION','Vtiger');?>
</option><option value="1" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value == 1) {?> selected<?php }?>><?php echo vtranslate('LBL_YES',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option><option value="0" <?php if ($_smarty_tpl->tpl_vars['SEARCH_VALUES']->value == '0') {?> selected<?php }?>><?php echo vtranslate('LBL_NO',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</option></select></div><?php }
}

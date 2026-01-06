<?php
/* Smarty version 4.5.4, created on 2025-07-17 17:17:05
  from 'C:\xampp\htdocs\proxy-crm\layouts\v7\modules\Vtiger\Tag.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_687930114047a2_27276878',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9a5f78360407159816133cabb47ba79cafe8a780' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proxy-crm\\layouts\\v7\\modules\\Vtiger\\Tag.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_687930114047a2_27276878 (Smarty_Internal_Template $_smarty_tpl) {
?> 
 <span class="tag <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == true) {?> active <?php }?>" title="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
" data-type="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getType();?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getId();?>
">
    <i class="activeToggleIcon fa <?php if ($_smarty_tpl->tpl_vars['ACTIVE']->value == true) {?> fa-circle-o <?php } else { ?> fa-circle <?php }?>"></i>
    <span class="tagLabel display-inline-block textOverflowEllipsis" title="<?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
"><?php echo $_smarty_tpl->tpl_vars['TAG_MODEL']->value->getName();?>
</span>
    <?php if (!$_smarty_tpl->tpl_vars['NO_EDIT']->value) {?>
        <i class="editTag fa fa-pencil"></i>
    <?php }?>
    <?php if (!$_smarty_tpl->tpl_vars['NO_DELETE']->value) {?>
        <i class="deleteTag fa fa-times"></i>
    <?php }?>
</span><?php }
}

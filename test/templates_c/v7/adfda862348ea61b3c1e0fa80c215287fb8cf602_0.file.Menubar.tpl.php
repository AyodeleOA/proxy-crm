<?php
/* Smarty version 4.5.4, created on 2025-05-29 12:47:55
  from 'C:\xampp\htdocs\proxy-crm\layouts\v7\modules\MailManager\partials\Menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6838577bb09436_89446843',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'adfda862348ea61b3c1e0fa80c215287fb8cf602' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proxy-crm\\layouts\\v7\\modules\\MailManager\\partials\\Menubar.tpl',
      1 => 1737912558,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6838577bb09436_89446843 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="modules-menu" class="modules-menu mmModulesMenu" style="width: 100%;"><div><span><?php echo $_smarty_tpl->tpl_vars['MAILBOX']->value->username();?>
</span><span class="pull-right"><span class="cursorPointer mailbox_refresh" title="<?php echo vtranslate('LBL_Refresh',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-refresh"></i></span>&nbsp;<span class="cursorPointer mailbox_setting" title="<?php echo vtranslate('JSLBL_Settings',$_smarty_tpl->tpl_vars['MODULE']->value);?>
"><i class="fa fa-cog"></i></span></span></div><div id="mail_compose" class="cursorPointer"><i class="fa fa-pencil-square-o"></i>&nbsp;<?php echo vtranslate('LBL_Compose',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</div><div id='folders_list'></div></div><?php }
}

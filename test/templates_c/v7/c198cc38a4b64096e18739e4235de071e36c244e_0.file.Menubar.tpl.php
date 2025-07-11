<?php
/* Smarty version 4.5.4, created on 2025-02-27 03:51:43
  from '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Documents/partials/Menubar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67bfe14f312bb1_09439569',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c198cc38a4b64096e18739e4235de071e36c244e' => 
    array (
      0 => '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Documents/partials/Menubar.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67bfe14f312bb1_09439569 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['REQ']->value->get('view') == 'Detail') {?>
<div id="modules-menu" class="modules-menu">    
    <ul>
        <li class="active">
            <a href="<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getListViewUrl();?>
">
				<?php echo $_smarty_tpl->tpl_vars['MODULE_MODEL']->value->getModuleIcon();?>

                <span><?php echo $_smarty_tpl->tpl_vars['MODULE']->value;?>
</span>
            </a>
        </li>
    </ul>
</div>
<?php }
}
}

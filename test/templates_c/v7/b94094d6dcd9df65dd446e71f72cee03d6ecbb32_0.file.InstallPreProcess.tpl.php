<?php
/* Smarty version 4.5.4, created on 2025-01-26 17:22:51
  from '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Install/InstallPreProcess.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_67966f6be98096_12214336',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b94094d6dcd9df65dd446e71f72cee03d6ecbb32' => 
    array (
      0 => '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Install/InstallPreProcess.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_67966f6be98096_12214336 (Smarty_Internal_Template $_smarty_tpl) {
?>
<input type="hidden" id="module" value="Install" />
<input type="hidden" id="view" value="Index" />
<div class="container-fluid page-container">
	<div class="row">
		<div class="col-sm-6">
			<div class="logo">
				<img src="<?php echo call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vimage_path' ][ 0 ], array( 'logo.png' ));?>
"/>
			</div>
		</div>
		<div class="col-sm-6">
			<div class="head pull-right">
				<h3><?php echo vtranslate('LBL_INSTALLATION_WIZARD','Install');?>
</h3>
			</div>
		</div>
	</div>
<?php }
}

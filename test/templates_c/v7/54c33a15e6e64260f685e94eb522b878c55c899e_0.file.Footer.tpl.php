<?php
/* Smarty version 4.5.4, created on 2025-07-15 09:01:14
  from 'C:\xampp\htdocs\proxy-crm\layouts\v7\modules\Vtiger\Footer.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_687618da4542b7_93252396',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '54c33a15e6e64260f685e94eb522b878c55c899e' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proxy-crm\\layouts\\v7\\modules\\Vtiger\\Footer.tpl',
      1 => 1751910799,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_687618da4542b7_93252396 (Smarty_Internal_Template $_smarty_tpl) {
?><!--
<footer class="app-footer">
	<p>
		Powered by	<a href="http://www.proxynetgroup.com" target="_blank"> Proxynet Communications Limited</a>
	</p>
</footer>
-->

<?php if ($_smarty_tpl->tpl_vars['MODULE']->value == 'Users' && $_smarty_tpl->tpl_vars['VIEW']->value == 'Login') {?>
			
<?php } else { ?>
 </main>
<?php }?>
 


<ul class="dropdown-menu" role="menu" aria-labelledby="dropdownMenu1" style="width:500px;">
									<li class="title" style="padding: 5px 0 0 15px;">
										<strong><?php echo vtranslate('LBL_QUICK_CREATE',$_smarty_tpl->tpl_vars['MODULE']->value);?>
</strong>
									</li>
									<hr/>
									
									<li id="quickCreateModules" style="padding: 0 5px;">
										<div class="col-lg-12" style="padding-bottom:15px;">
											<?php $_smarty_tpl->_assignInScope('count', 0);?>
											<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['QUICK_CREATE_MODULES']->value, 'moduleModel', false, 'moduleName');
$_smarty_tpl->tpl_vars['moduleModel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['moduleName']->value => $_smarty_tpl->tpl_vars['moduleModel']->value) {
$_smarty_tpl->tpl_vars['moduleModel']->do_else = false;
?>
												<?php if ($_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('CreateView') || $_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('EditView')) {?>
													<?php $_smarty_tpl->_assignInScope('quickCreateModule', $_smarty_tpl->tpl_vars['moduleModel']->value->isQuickCreateSupported());?>
													<?php $_smarty_tpl->_assignInScope('singularLabel', $_smarty_tpl->tpl_vars['moduleModel']->value->getSingularLabelKey());?>
													<?php ob_start();
echo !$_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('CreateView') && $_smarty_tpl->tpl_vars['moduleModel']->value->isPermitted('EditView');
$_prefixVariable5 = ob_get_clean();
$_smarty_tpl->_assignInScope('hideDiv', $_prefixVariable5);?>
													<?php if ($_smarty_tpl->tpl_vars['quickCreateModule']->value == '1') {?>
														<?php if ($_smarty_tpl->tpl_vars['count']->value%3 == 0) {?>
															<div class="row">
															<?php }?>
																														<?php if ($_smarty_tpl->tpl_vars['singularLabel']->value == 'SINGLE_Calendar') {?>
																<?php $_smarty_tpl->_assignInScope('singularLabel', 'LBL_TASK');?>
																<div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?>">
																	<a id="menubar_quickCreate_Events" class="quickCreateModule" data-name="Events"
																	   data-url="index.php?module=Events&view=QuickCreateAjax" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon('Event');?>
<span class="quick-create-module"><?php echo vtranslate('LBL_EVENT',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></a>
																</div>
																<?php if ($_smarty_tpl->tpl_vars['count']->value%3 == 2) {?>
																	</div>
																	<br>
																	<div class="row">
																<?php }?>
																<div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?>">
																	<a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModule" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
"
																	   data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)"><?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon('Task');?>
<span class="quick-create-module"><?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span></a>
																</div>
																<?php if (!$_smarty_tpl->tpl_vars['hideDiv']->value) {?>
																	<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
																<?php }?>
															<?php } elseif ($_smarty_tpl->tpl_vars['singularLabel']->value == 'SINGLE_Documents') {?>
																<div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?> dropdown">
																	<a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModuleSubmenu dropdown-toggle" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" data-toggle="dropdown" 
																	   data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)">
																		<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>

																		<span class="quick-create-module">
																			<?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>

																			<i class="fa fa-caret-down quickcreateMoreDropdownAction"></i>
																		</span>
																	</a>
																	<ul class="dropdown-menu quickcreateMoreDropdown" aria-labelledby="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
">
																		<li class="dropdown-header"><i class="fa fa-upload"></i> <?php echo vtranslate('LBL_FILE_UPLOAD',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</li>
																		<li id="VtigerAction">
																			<a href="javascript:Documents_Index_Js.uploadTo('Vtiger')">
																				<img style="  margin-top: -3px;margin-right: 4%;" title="Vtiger" alt="Vtiger" src="layouts/v7/skins//images/Vtiger.png">
																				<?php ob_start();
echo vtranslate('LBL_VTIGER',$_smarty_tpl->tpl_vars['moduleName']->value);
$_prefixVariable6 = ob_get_clean();
echo vtranslate('LBL_TO_SERVICE',$_smarty_tpl->tpl_vars['moduleName']->value,$_prefixVariable6);?>

																			</a>
																		</li>
																		<li class="dropdown-header"><i class="fa fa-link"></i> <?php echo vtranslate('LBL_LINK_EXTERNAL_DOCUMENT',$_smarty_tpl->tpl_vars['moduleName']->value);?>
</li>
																		<li id="shareDocument"><a href="javascript:Documents_Index_Js.createDocument('E')">&nbsp;<i class="fa fa-external-link"></i>&nbsp;&nbsp; <?php ob_start();
echo vtranslate('LBL_FILE_URL',$_smarty_tpl->tpl_vars['moduleName']->value);
$_prefixVariable7 = ob_get_clean();
echo vtranslate('LBL_FROM_SERVICE',$_smarty_tpl->tpl_vars['moduleName']->value,$_prefixVariable7);?>
</a></li>
																		<li role="separator" class="divider"></li>
																		<li id="createDocument"><a href="javascript:Documents_Index_Js.createDocument('W')"><i class="fa fa-file-text"></i> <?php ob_start();
echo vtranslate('SINGLE_Documents',$_smarty_tpl->tpl_vars['moduleName']->value);
$_prefixVariable8 = ob_get_clean();
echo vtranslate('LBL_CREATE_NEW',$_smarty_tpl->tpl_vars['moduleName']->value,$_prefixVariable8);?>
</a></li>
																	</ul>
																</div>
															<?php } else { ?>
																<div class="<?php if ($_smarty_tpl->tpl_vars['hideDiv']->value) {?>create_restricted_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
 hide<?php } else { ?>col-lg-4 col-xs-4<?php }?>">
																	<a id="menubar_quickCreate_<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
" class="quickCreateModule" data-name="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getName();?>
"
																	   data-url="<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getQuickCreateUrl();?>
" href="javascript:void(0)">
																		<?php echo $_smarty_tpl->tpl_vars['moduleModel']->value->getModuleIcon();?>

																		<span class="quick-create-module"><?php echo vtranslate($_smarty_tpl->tpl_vars['singularLabel']->value,$_smarty_tpl->tpl_vars['moduleName']->value);?>
</span>
																	</a>
																</div>
															<?php }?>
															<?php if ($_smarty_tpl->tpl_vars['count']->value%3 == 2) {?>
																</div>
																<br>
															<?php }?>
														<?php if (!$_smarty_tpl->tpl_vars['hideDiv']->value) {?>
															<?php $_smarty_tpl->_assignInScope('count', $_smarty_tpl->tpl_vars['count']->value+1);?>
														<?php }?>
													<?php }?>
												<?php }?>
											<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
										</div>
									</li>
								</ul>
 
</div>
</div>

<!-- </div> -->
<div id='overlayPage'>
	<!-- arrow is added to point arrow to the clicked element (Ex:- TaskManagement), 
	any one can use this by adding "show" class to it -->
	<div class='arrow'></div>
	<div class='data'>
	</div>
</div>
<div id='helpPageOverlay'></div>
<div id="js_strings" class="hide noprint"><?php echo Zend_Json::encode($_smarty_tpl->tpl_vars['LANGUAGE_STRINGS']->value);?>
</div>
<div id="maxListFieldsSelectionSize" class="hide noprint"><?php echo $_smarty_tpl->tpl_vars['MAX_LISTFIELDS_SELECTION_SIZE']->value;?>
</div>
<div class="modal myModal fade"></div>

<?php echo '<script'; ?>
 src="<?php echo vresource_url("layouts/v7/lib/newui/js/dashboard.js?v=98");?>
'><?php echo '</script'; ?>
>
<?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( 'JSResources.tpl' )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>

<?php echo '<script'; ?>
>

	$(document).delegate('.dropdown-toggle2', 'click', function(event){
			console.log("clicked");
			const dropdownToggle = document.querySelector('.dropdown-toggle2');
			const dropdownMenu = document.querySelector('.dropdown-menuu');
	
			if (dropdownMenu.style.display === 'block') {
			  dropdownMenu.style.display = 'none';
			  
			  $(".sidebar").removeClass("overflowy");
			  this.querySelector('.dropdown-icon').textContent = '▼ More resources';
			} else {
			  dropdownMenu.style.display = 'block';
			  this.querySelector('.dropdown-icon').textContent = '▲ More resources';
			  $(".sidebar").addClass("overflowy");
			}		
	});
	
<?php echo '</script'; ?>
>
</body>

</html>
<?php }
}

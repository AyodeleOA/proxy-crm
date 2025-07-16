<?php
/* Smarty version 4.5.4, created on 2025-07-14 17:49:39
  from 'C:\xampp\htdocs\proxy-crm\layouts\v7\modules\Vtiger\dashboards\DashBoardTabContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_6875433301b2e0_44493007',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '607d72e7cc8285db3e58a7d9d7308cfa328b8feb' => 
    array (
      0 => 'C:\\xampp\\htdocs\\proxy-crm\\layouts\\v7\\modules\\Vtiger\\dashboards\\DashBoardTabContents.tpl',
      1 => 1752515374,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6875433301b2e0_44493007 (Smarty_Internal_Template $_smarty_tpl) {
?><div class='dashBoardTabContainer'><?php $_smarty_tpl->_subTemplateRender(call_user_func_array($_smarty_tpl->registered_plugins[ 'modifier' ][ 'vtemplate_path' ][ 0 ], array( "dashboards/DashBoardHeader.tpl",$_smarty_tpl->tpl_vars['MODULE_NAME']->value )), $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array('DASHBOARDHEADER_TITLE'=>vtranslate($_smarty_tpl->tpl_vars['MODULE']->value,$_smarty_tpl->tpl_vars['MODULE']->value)), 0, true);
?><br><div class="dashboardBanner"></div><div class="dashBoardTabContents clearfix"><div class="gridster_<?php echo $_smarty_tpl->tpl_vars['TABID']->value;?>
"><?php $_smarty_tpl->_assignInScope('ROWCOUNT', 0);
$_smarty_tpl->_assignInScope('COLCOUNT', 0);
$_smarty_tpl->_assignInScope('COLUMNS', 2);
$_smarty_tpl->_assignInScope('ROW', 1);?><div class="row"><?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['WIDGETS']->value, 'WIDGET', false, NULL, 'count', array (
  'index' => true,
));
$_smarty_tpl->tpl_vars['WIDGET']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['WIDGET']->value) {
$_smarty_tpl->tpl_vars['WIDGET']->do_else = false;
$_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']++;
$_smarty_tpl->_assignInScope('WIDGETDOMID', $_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid'));
if ($_smarty_tpl->tpl_vars['WIDGET']->value->getName() == 'MiniList' || $_smarty_tpl->tpl_vars['WIDGET']->value->getName() == 'Notebook') {
$_smarty_tpl->_assignInScope('WIDGETDOMID', ($_smarty_tpl->tpl_vars['WIDGET']->value->get('linkid')).('-').($_smarty_tpl->tpl_vars['WIDGET']->value->get('widgetid')));
}
$_smarty_tpl->_assignInScope('COLCOUNT', ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null)%$_smarty_tpl->tpl_vars['COLUMNS']->value)+1);
if ((isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null)%$_smarty_tpl->tpl_vars['COLUMNS']->value == 0 && (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null) != 0) {
$_smarty_tpl->_assignInScope('ROWCOUNT', $_smarty_tpl->tpl_vars['ROW']->value+1);
} else {
$_smarty_tpl->_assignInScope('ROWCOUNT', $_smarty_tpl->tpl_vars['ROW']->value);
}
$_smarty_tpl->_assignInScope('SIZEX', $_smarty_tpl->tpl_vars['WIDGET']->value->getSizeX());
$_smarty_tpl->_assignInScope('SIZEY', $_smarty_tpl->tpl_vars['WIDGET']->value->getSizeY());
$_smarty_tpl->_assignInScope('BOOTSTRAP_COL', $_smarty_tpl->tpl_vars['SIZEX']->value*6);
if ($_smarty_tpl->tpl_vars['WIDGETDOMID']->value) {?><div class="col-md-<?php echo $_smarty_tpl->tpl_vars['BOOTSTRAP_COL']->value;?>
 mb-4 dashboardWidgetWrapper"><div id="<?php echo $_smarty_tpl->tpl_vars['WIDGETDOMID']->value;?>
"data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROWCOUNT']->value);?>
"data-col="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionCol($_smarty_tpl->tpl_vars['COLCOUNT']->value);?>
"data-sizex="<?php echo $_smarty_tpl->tpl_vars['SIZEX']->value;?>
"data-sizey="<?php echo $_smarty_tpl->tpl_vars['SIZEY']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('position') == '') {?> data-position="false"<?php }?>class="dashboardWidget dashboardWidget_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null);?>
"data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
"data-mode="open"data-name="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getName();?>
"></div></div><?php } else {
$_smarty_tpl->_assignInScope('CHARTWIDGETDOMID', $_smarty_tpl->tpl_vars['WIDGET']->value->get('reportid'));
$_smarty_tpl->_assignInScope('WIDGETID', $_smarty_tpl->tpl_vars['WIDGET']->value->get('id'));?><div class="col-md-<?php echo $_smarty_tpl->tpl_vars['BOOTSTRAP_COL']->value;?>
 mb-4 dashboardWidgetWrapper"><div id="<?php echo $_smarty_tpl->tpl_vars['CHARTWIDGETDOMID']->value;?>
-<?php echo $_smarty_tpl->tpl_vars['WIDGETID']->value;?>
"data-row="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionRow($_smarty_tpl->tpl_vars['ROWCOUNT']->value);?>
"data-col="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getPositionCol($_smarty_tpl->tpl_vars['COLCOUNT']->value);?>
"data-sizex="<?php echo $_smarty_tpl->tpl_vars['SIZEX']->value;?>
"data-sizey="<?php echo $_smarty_tpl->tpl_vars['SIZEY']->value;?>
"<?php if ($_smarty_tpl->tpl_vars['WIDGET']->value->get('position') == '') {?> data-position="false"<?php }?>class="dashboardWidget dashboardWidget_<?php echo (isset($_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index']) ? $_smarty_tpl->tpl_vars['__smarty_foreach_count']->value['index'] : null);?>
"data-url="<?php echo $_smarty_tpl->tpl_vars['WIDGET']->value->getUrl();?>
"data-mode="open" data-name="ChartReportWidget"></div></div><?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?></div><input type="hidden" id=row value="<?php echo $_smarty_tpl->tpl_vars['ROWCOUNT']->value;?>
" /><input type="hidden" id=col value="<?php echo $_smarty_tpl->tpl_vars['COLCOUNT']->value;?>
" /><input type="hidden" id="userDateFormat" value="<?php echo $_smarty_tpl->tpl_vars['CURRENT_USER']->value->get('date_format');?>
" /></div></div></div>
<?php }
}

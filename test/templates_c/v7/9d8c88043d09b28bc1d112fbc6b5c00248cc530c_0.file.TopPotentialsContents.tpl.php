<?php
/* Smarty version 4.5.4, created on 2025-01-29 16:44:17
  from '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Potentials/dashboards/TopPotentialsContents.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.5.4',
  'unifunc' => 'content_679a5ae1515385_98172058',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9d8c88043d09b28bc1d112fbc6b5c00248cc530c' => 
    array (
      0 => '/home/attainablesite/public_html/proxycrm.attainables.net/layouts/v7/modules/Potentials/dashboards/TopPotentialsContents.tpl',
      1 => 1727638512,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_679a5ae1515385_98172058 (Smarty_Internal_Template $_smarty_tpl) {
?><div style='padding:5px'>
<?php if (php7_count($_smarty_tpl->tpl_vars['MODELS']->value) > 0) {?>
	<div>
        <div class='row'>
            <div class='col-lg-4'>
                <b><?php echo vtranslate('Potential Name',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
            </div>
            <div class='col-lg-4'>
                <b><?php echo vtranslate('Amount',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
            </div>
            <div class='col-lg-4'>
                <b><?php echo vtranslate('Related To',$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
</b>
            </div>
        </div>
		<hr>
		<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['MODELS']->value, 'MODEL');
$_smarty_tpl->tpl_vars['MODEL']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['MODEL']->value) {
$_smarty_tpl->tpl_vars['MODEL']->do_else = false;
?>
		<div class='row'>
			<div class='col-lg-4'>
				<a href="<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDetailViewUrl();?>
"><?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getName();?>
</a>
			</div>
			<div class='col-lg-4'>
				<?php echo CurrencyField::appendCurrencySymbol($_smarty_tpl->tpl_vars['MODEL']->value->getDisplayValue('amount'),$_smarty_tpl->tpl_vars['USER_CURRENCY_SYMBOL']->value);?>

			</div>
			<div class='col-lg-4'>
				<?php echo $_smarty_tpl->tpl_vars['MODEL']->value->getDisplayValue('related_to');?>

			</div>
		</div>
		<?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
	</div>
<?php } else { ?>
	<span class="noDataMsg">
		<?php echo vtranslate('LBL_NO');?>
 <?php echo vtranslate($_smarty_tpl->tpl_vars['MODULE_NAME']->value,$_smarty_tpl->tpl_vars['MODULE_NAME']->value);?>
 <?php echo vtranslate('LBL_MATCHED_THIS_CRITERIA');?>

	</span>
<?php }?>
</div><?php }
}

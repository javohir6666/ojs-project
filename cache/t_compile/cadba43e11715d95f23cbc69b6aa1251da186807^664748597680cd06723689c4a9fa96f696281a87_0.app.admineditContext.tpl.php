<?php
/* Smarty version 3.1.39, created on 2022-04-11 11:32:00
  from 'app:admineditContext.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6253e7808d0171_89541910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '664748597680cd06723689c4a9fa96f696281a87' => 
    array (
      0 => 'app:admineditContext.tpl',
      1 => 1646690766,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6253e7808d0171_89541910 (Smarty_Internal_Template $_smarty_tpl) {
?><div id="editContext">
	<?php if ($_smarty_tpl->tpl_vars['isAddingNewContext']->value) {?>
	<add-context-form
	<?php } else { ?>
	<pkp-form
	<?php }?>
		v-bind="components.<?php echo (defined('FORM_CONTEXT') ? constant('FORM_CONTEXT') : null);?>
"
		@set="set"
	/>
</div>
<?php echo '<script'; ?>
 type="text/javascript">
	pkp.registry.init('editContext', 'AddContextContainer', <?php echo json_encode($_smarty_tpl->tpl_vars['containerData']->value);?>
);
<?php echo '</script'; ?>
>
<?php }
}

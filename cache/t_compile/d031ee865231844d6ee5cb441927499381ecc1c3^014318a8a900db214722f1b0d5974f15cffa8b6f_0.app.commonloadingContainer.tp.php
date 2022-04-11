<?php
/* Smarty version 3.1.39, created on 2022-04-11 11:40:35
  from 'app:commonloadingContainer.tp' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6253e98358ab67_60388714',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '014318a8a900db214722f1b0d5974f15cffa8b6f' => 
    array (
      0 => 'app:commonloadingContainer.tp',
      1 => 1646690766,
      2 => 'app',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6253e98358ab67_60388714 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="pkp_loading">
	<span class="pkp_spinner"></span>
	<span class="message"><?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0], array( array('key'=>"common.loading"),$_smarty_tpl ) );?>
</span>
</div>
<?php }
}

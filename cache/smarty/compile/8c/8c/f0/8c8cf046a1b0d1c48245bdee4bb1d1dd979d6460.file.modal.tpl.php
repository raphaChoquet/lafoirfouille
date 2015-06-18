<?php /* Smarty version Smarty-3.1.19, created on 2015-06-16 11:49:00
         compiled from "C:\wamp\www\prestashop\admin355mu90jy\themes\default\template\helpers\modules_list\modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30197557ff10c2b2d22-03957146%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8c8cf046a1b0d1c48245bdee4bb1d1dd979d6460' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin355mu90jy\\themes\\default\\template\\helpers\\modules_list\\modal.tpl',
      1 => 1434354756,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30197557ff10c2b2d22-03957146',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557ff10c2c65a2_35142287',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557ff10c2c65a2_35142287')) {function content_557ff10c2c65a2_35142287($_smarty_tpl) {?><div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div><?php }} ?>

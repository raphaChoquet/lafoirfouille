<?php /* Smarty version Smarty-3.1.19, created on 2015-06-15 12:38:24
         compiled from "C:\wamp\www\prestashop\admin355mu90jy\themes\default\template\controllers\modules\tab_modules_list.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13382557eab2097fa46-18570292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '66fc8dee0b6f0ab76d6317bf2301e6f0f6fa3e38' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\admin355mu90jy\\themes\\default\\template\\controllers\\modules\\tab_modules_list.tpl',
      1 => 1434354766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13382557eab2097fa46-18570292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'tab_modules_list' => 0,
    'lang_iso' => 0,
    'host_mode' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557eab20ba66c3_24380202',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557eab20ba66c3_24380202')) {function content_557eab20ba66c3_24380202($_smarty_tpl) {?><?php if (!is_callable('smarty_function_cycle')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\function.cycle.php';
?>

<?php if (isset($_smarty_tpl->tpl_vars['tab_modules_list']->value)&&!empty($_smarty_tpl->tpl_vars['tab_modules_list']->value)) {?>
	<div class="row row-margin-bottom">
		<div class="col-lg-12">
			<ul class="nav nav-pills">
				<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])) {?>
					<li class="active">
						<a href="#tab_modules_list_not_installed" data-toggle="tab">
							<?php echo smartyTranslate(array('s'=>'Not Installed'),$_smarty_tpl);?>

						</a>
					</li>
				<?php }?>
				<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])) {?>
					<li <?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])==0) {?>class="active"<?php }?>>
						<a href="#tab_modules_list_installed" data-toggle="tab">
							<?php echo smartyTranslate(array('s'=>'Installed'),$_smarty_tpl);?>

						</a>
					</li>
				<?php }?>
			</ul>
		</div>
	</div>
	<div id="modules_list_container_content" class="tab-content modal-content-overflow">
		<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])) {?>
		<div class="tab-pane active" id="tab_modules_list_not_installed">
			<table id="tab_modules_list_not_installed" class="table">
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
					<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp1=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class_row'=>$_tmp1), 0);?>

				<?php } ?>
			</table>
		</div>
		<?php }?>
		<?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['installed'])) {?>
		<div class="tab-pane <?php if (count($_smarty_tpl->tpl_vars['tab_modules_list']->value['not_installed'])==0) {?>active<?php }?>" id="tab_modules_list_installed">
			<table id="tab_modules_list_installed" class="table">
				<?php  $_smarty_tpl->tpl_vars['module'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['module']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tab_modules_list']->value['installed']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['module']->key => $_smarty_tpl->tpl_vars['module']->value) {
$_smarty_tpl->tpl_vars['module']->_loop = true;
?>
					<?php ob_start();?><?php echo smarty_function_cycle(array('values'=>",rowalt"),$_smarty_tpl);?>
<?php $_tmp2=ob_get_clean();?><?php echo $_smarty_tpl->getSubTemplate ('controllers/modules/tab_module_line.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array('class_row'=>$_tmp2), 0);?>

				<?php } ?>
			</table>
		</div>
		<?php }?>
	</div>
<?php }?>
<div class="alert alert-addons row-margin-top">
	<a href="http://addons.prestashop.com/?utm_source=back-office&amp;utm_medium=dispatch&amp;utm_campaign=back-office-<?php echo mb_strtoupper($_smarty_tpl->tpl_vars['lang_iso']->value, 'UTF-8');?>
&amp;utm_content=<?php if ($_smarty_tpl->tpl_vars['host_mode']->value) {?>cloud<?php } else { ?>download<?php }?>" class="_blank"><?php echo smartyTranslate(array('s'=>'More modules on addons.prestashop.com'),$_smarty_tpl);?>
</a>
</div>
<?php }} ?>
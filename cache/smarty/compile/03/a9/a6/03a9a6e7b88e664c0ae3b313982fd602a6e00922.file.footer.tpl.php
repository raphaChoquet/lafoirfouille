<?php /* Smarty version Smarty-3.1.19, created on 2015-06-16 12:23:04
         compiled from "C:\wamp\www\prestashop\themes\theme948\footer.tpl" */ ?>
<?php /*%%SmartyHeaderCode:26767557ff9081af0e3-00542611%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03a9a6e7b88e664c0ae3b313982fd602a6e00922' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme948\\footer.tpl',
      1 => 1434370930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '26767557ff9081af0e3-00542611',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content_only' => 0,
    'right_column_size' => 0,
    'HOOK_RIGHT_COLUMN' => 0,
    'HOOK_FOOTER' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557ff908247663_55499172',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557ff908247663_55499172')) {function content_557ff908247663_55499172($_smarty_tpl) {?>
<?php if (!$_smarty_tpl->tpl_vars['content_only']->value) {?>
					</div><!-- #center_column -->
					<?php if (isset($_smarty_tpl->tpl_vars['right_column_size']->value)&&!empty($_smarty_tpl->tpl_vars['right_column_size']->value)) {?>
						<div id="right_column" class="col-xs-12 col-sm-<?php echo intval($_smarty_tpl->tpl_vars['right_column_size']->value);?>
 column"><?php echo $_smarty_tpl->tpl_vars['HOOK_RIGHT_COLUMN']->value;?>
</div>
					<?php }?>
					</div><!-- .row -->
				</div><!-- #columns -->
			</div><!-- .columns-container -->
			<!-- Footer -->
			<div class="footer-container">
				<footer id="footer"  class="container">
					<div class="row"><?php echo $_smarty_tpl->tpl_vars['HOOK_FOOTER']->value;?>
</div>
				</footer>
			</div><!-- #footer -->
		</div><!-- #page -->
        </div><!-- #main-wrap -->
        </div><!-- #main-wrap-center -->
<?php }?>
<?php echo $_smarty_tpl->getSubTemplate (((string)$_smarty_tpl->tpl_vars['tpl_dir']->value)."./global.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

	</body>
</html><?php }} ?>

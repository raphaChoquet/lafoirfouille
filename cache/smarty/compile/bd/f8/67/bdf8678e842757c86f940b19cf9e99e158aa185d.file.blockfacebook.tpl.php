<?php /* Smarty version Smarty-3.1.19, created on 2015-06-16 09:37:27
         compiled from "C:\wamp\www\prestashop\themes\theme948\modules\blockfacebook\blockfacebook.tpl" */ ?>
<?php /*%%SmartyHeaderCode:22755557fd23750e884-17439750%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'bdf8678e842757c86f940b19cf9e99e158aa185d' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme948\\modules\\blockfacebook\\blockfacebook.tpl',
      1 => 1434370930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '22755557fd23750e884-17439750',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'facebookurl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557fd237560900_69853106',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557fd237560900_69853106')) {function content_557fd237560900_69853106($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['facebookurl']->value!='') {?>
<div id="fb-root"></div>
<div id="facebook_block" class="col-xs-4">
<div class="facebook_block_inset">
	<h4 ><?php echo smartyTranslate(array('s'=>'Follow us on facebook','mod'=>'blockfacebook'),$_smarty_tpl);?>
</h4>
	<div class="facebook-fanbox">
		<div class="fb-like-box" data-href="http://www.facebook.com/<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['facebookurl']->value, ENT_QUOTES, 'UTF-8', true);?>
" data-height="185" data-colorscheme="light" data-show-faces="true" data-header="false" data-stream="false" data-show-border="false" connections="5">
		</div>
	</div>
</div>
</div>
<?php }?><?php }} ?>

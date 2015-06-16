<?php /* Smarty version Smarty-3.1.19, created on 2015-06-16 09:37:31
         compiled from "C:\wamp\www\prestashop\themes\theme948\modules\blockcontact\nav.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16595557fd23b19bb88-72370353%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '75c8d99083f263215afc7b1164c31aa3c00d99cf' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme948\\modules\\blockcontact\\nav.tpl',
      1 => 1434370930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16595557fd23b19bb88-72370353',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'link' => 0,
    'telnumber' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557fd23b2d8206_53504656',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557fd23b2d8206_53504656')) {function content_557fd23b2d8206_53504656($_smarty_tpl) {?>
<div id="contact-link">
	<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['link']->value->getPageLink('contact',true), ENT_QUOTES, 'UTF-8', true);?>
" title="<?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
"><?php echo smartyTranslate(array('s'=>'Contact Us','mod'=>'blockcontact'),$_smarty_tpl);?>
</a>
</div>
<?php if ($_smarty_tpl->tpl_vars['telnumber']->value) {?>
	<span class="shop-phone">
		<i class="icon-phone"></i><?php echo smartyTranslate(array('s'=>'Call us now toll free:','mod'=>'blockcontact'),$_smarty_tpl);?>
 <strong><?php echo $_smarty_tpl->tpl_vars['telnumber']->value;?>
</strong>
	</span>
<?php }?><?php }} ?>

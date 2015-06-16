<?php /* Smarty version Smarty-3.1.19, created on 2015-06-16 09:47:37
         compiled from "C:\wamp\www\prestashop\themes\theme948\modules\blockcmsinfo\blockcmsinfo.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3202557fd4992b3046-67090364%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8dd73c1049140bf0468e2fcba7c294ac109d09a0' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme948\\modules\\blockcmsinfo\\blockcmsinfo.tpl',
      1 => 1434370930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3202557fd4992b3046-67090364',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'infos' => 0,
    'info' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557fd499314ac5_81957229',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557fd499314ac5_81957229')) {function content_557fd499314ac5_81957229($_smarty_tpl) {?>
<?php if (count($_smarty_tpl->tpl_vars['infos']->value)>0) {?>

<!-- MODULE Block cmsinfo -->
<div id="cmsinfo_block" class="col-xs-8" >
<div class="clearfix row">
		<?php  $_smarty_tpl->tpl_vars['info'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['info']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['infos']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['info']->key => $_smarty_tpl->tpl_vars['info']->value) {
$_smarty_tpl->tpl_vars['info']->_loop = true;
?>
			<div class="col-xs-6"><div class="cmsinfo_block_inset"><?php echo $_smarty_tpl->tpl_vars['info']->value['text'];?>
</div></div>
		<?php } ?>
</div>
</div>
<!-- /MODULE Block cmsinfo -->
<?php }?><?php }} ?>

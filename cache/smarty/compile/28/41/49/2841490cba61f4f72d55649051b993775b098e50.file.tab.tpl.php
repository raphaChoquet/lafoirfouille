<?php /* Smarty version Smarty-3.1.19, created on 2015-06-16 09:37:27
         compiled from "C:\wamp\www\prestashop\themes\theme948\modules\blocknewproducts\tab.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6553557fd237a00285-87051270%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2841490cba61f4f72d55649051b993775b098e50' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\themes\\theme948\\modules\\blocknewproducts\\tab.tpl',
      1 => 1434370930,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6553557fd237a00285-87051270',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'active_li' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557fd237a46784_67584836',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557fd237a46784_67584836')) {function content_557fd237a46784_67584836($_smarty_tpl) {?><?php if (!is_callable('smarty_function_counter')) include 'C:\\wamp\\www\\prestashop\\tools\\smarty\\plugins\\function.counter.php';
?>
<?php echo smarty_function_counter(array('name'=>'active_li','assign'=>'active_li'),$_smarty_tpl);?>

<li<?php if ($_smarty_tpl->tpl_vars['active_li']->value==1) {?> class="active"<?php }?>><a data-toggle="tab" href="#blocknewproducts" class="blocknewproducts"><?php echo smartyTranslate(array('s'=>'New arrivals','mod'=>'blocknewproducts'),$_smarty_tpl);?>
</a></li><?php }} ?>

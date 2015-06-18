<?php /* Smarty version Smarty-3.1.19, created on 2015-06-16 12:22:57
         compiled from "C:\wamp\www\prestashop\modules\homeslider\views\templates\hook\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8550557ff901e4d865-39287793%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '30b98ac61bff335851dcf50277a1f346f89fb44d' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop\\modules\\homeslider\\views\\templates\\hook\\header.tpl',
      1 => 1434364692,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8550557ff901e4d865-39287793',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'homeslider' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_557ff901f30163_58578853',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_557ff901f30163_58578853')) {function content_557ff901f30163_58578853($_smarty_tpl) {?><?php if (isset($_smarty_tpl->tpl_vars['homeslider']->value)) {?>
<script type="text/javascript">
     var homeslider_loop=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['loop']);?>
;
     var homeslider_width=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['width']);?>
;
     var homeslider_speed=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['speed']);?>
;
     var homeslider_pause=<?php echo intval($_smarty_tpl->tpl_vars['homeslider']->value['pause']);?>
;
</script>
<?php }?><?php }} ?>

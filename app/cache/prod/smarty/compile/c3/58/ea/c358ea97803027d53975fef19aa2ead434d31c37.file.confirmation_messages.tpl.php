<?php /* Smarty version Smarty-3.1.19, created on 2017-07-04 17:36:09
         compiled from "/Applications/MAMP/htdocs/ESGI_PrestashopProject/admin1514qbb0y/themes/new-theme/template/components/layout/confirmation_messages.tpl" */ ?>
<?php /*%%SmartyHeaderCode:434356289595bb5e98f9e73-41161913%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c358ea97803027d53975fef19aa2ead434d31c37' => 
    array (
      0 => '/Applications/MAMP/htdocs/ESGI_PrestashopProject/admin1514qbb0y/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1499182029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '434356289595bb5e98f9e73-41161913',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'confirmations' => 0,
    'conf' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595bb5e991b8c9_59345426',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595bb5e991b8c9_59345426')) {function content_595bb5e991b8c9_59345426($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['confirmations']->value)&&count($_smarty_tpl->tpl_vars['confirmations']->value)&&$_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php  $_smarty_tpl->tpl_vars['conf'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['conf']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['confirmations']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->key => $_smarty_tpl->tpl_vars['conf']->value) {
$_smarty_tpl->tpl_vars['conf']->_loop = true;
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php } ?>
    </div>
  </div>
<?php }?>
<?php }} ?>

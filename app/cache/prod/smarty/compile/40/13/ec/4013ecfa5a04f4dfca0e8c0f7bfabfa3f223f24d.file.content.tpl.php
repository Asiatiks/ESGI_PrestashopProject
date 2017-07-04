<?php /* Smarty version Smarty-3.1.19, created on 2017-07-04 17:35:47
         compiled from "/Applications/MAMP/htdocs/ESGI_PrestashopProject/admin1514qbb0y/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2129676157595bb5d39a6096-64302242%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '4013ecfa5a04f4dfca0e8c0f7bfabfa3f223f24d' => 
    array (
      0 => '/Applications/MAMP/htdocs/ESGI_PrestashopProject/admin1514qbb0y/themes/default/template/content.tpl',
      1 => 1499182028,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2129676157595bb5d39a6096-64302242',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595bb5d39b7551_36763162',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595bb5d39b7551_36763162')) {function content_595bb5d39b7551_36763162($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>

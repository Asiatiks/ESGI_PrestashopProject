<?php /* Smarty version Smarty-3.1.19, created on 2017-07-04 17:35:48
         compiled from "/Applications/MAMP/htdocs/ESGI_PrestashopProject/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1668853195595bb5d4262be8-36390263%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e9d9b1a72f85d13afd6d4ad859cd78657c5227df' => 
    array (
      0 => '/Applications/MAMP/htdocs/ESGI_PrestashopProject/modules/welcome/views/templates/tooltip.tpl',
      1 => 1499182036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1668853195595bb5d4262be8-36390263',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595bb5d4277f50_13486060',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595bb5d4277f50_13486060')) {function content_595bb5d4277f50_13486060($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>

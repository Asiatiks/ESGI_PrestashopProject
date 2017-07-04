<?php /* Smarty version Smarty-3.1.19, created on 2017-07-04 17:35:48
         compiled from "/Applications/MAMP/htdocs/ESGI_PrestashopProject/modules/welcome/views/templates/lost.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1979855101595bb5d4222d27-57423042%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '96152f50fd7b5dc1bba0aaf5b562ddef047be86f' => 
    array (
      0 => '/Applications/MAMP/htdocs/ESGI_PrestashopProject/modules/welcome/views/templates/lost.tpl',
      1 => 1499182036,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1979855101595bb5d4222d27-57423042',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595bb5d424b240_20749054',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595bb5d424b240_20749054')) {function content_595bb5d424b240_20749054($_smarty_tpl) {?>

<div class="onboarding onboarding-popup bootstrap">
  <div class="content">
    <p><?php echo smartyTranslate(array('s'=>'Hey! Are you lost?','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <p><?php echo smartyTranslate(array('s'=>'To continue, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-primary onboarding-button-goto-current"><?php echo smartyTranslate(array('s'=>'Continue','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
    <p><?php echo smartyTranslate(array('s'=>'If you want to stop the tutorial for good, click here:','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</p>
    <div class="text-center">
      <button class="btn btn-alert onboarding-button-stop"><?php echo smartyTranslate(array('s'=>'Quit the Welcome tutorial','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
    </div>
  </div>
</div>
<?php }} ?>

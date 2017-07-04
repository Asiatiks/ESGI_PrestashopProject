<?php /* Smarty version Smarty-3.1.19, created on 2017-07-04 17:33:18
         compiled from "/Applications/MAMP/htdocs/ESGI_PrestashopProject/admin1514qbb0y/themes/default/template/helpers/modules_list/modal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1593106471595bb53e515a94-49956489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a4543f7520f77007a2b4f2480b00489d0686a7c6' => 
    array (
      0 => '/Applications/MAMP/htdocs/ESGI_PrestashopProject/admin1514qbb0y/themes/default/template/helpers/modules_list/modal.tpl',
      1 => 1499182029,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1593106471595bb53e515a94-49956489',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_595bb53e523df0_92619321',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_595bb53e523df0_92619321')) {function content_595bb53e523df0_92619321($_smarty_tpl) {?>
<div class="modal fade" id="modules_list_container">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
				<h3 class="modal-title"><?php echo smartyTranslate(array('s'=>'Recommended Modules and Services'),$_smarty_tpl);?>
</h3>
			</div>
			<div class="modal-body">
				<div id="modules_list_container_tab_modal" style="display:none;"></div>
				<div id="modules_list_loader"><i class="icon-refresh icon-spin"></i></div>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	$(document).ready(function(){
		$('.fancybox-quick-view').fancybox({
			type: 'ajax',
			autoDimensions: false,
			autoSize: false,
			width: 600,
			height: 'auto',
			helpers: {
				overlay: {
					locked: false
				}
			}
		});
	});
</script>
<?php }} ?>

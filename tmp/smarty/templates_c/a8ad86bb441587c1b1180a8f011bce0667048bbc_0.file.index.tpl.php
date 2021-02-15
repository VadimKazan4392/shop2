<?php
/* Smarty version 3.1.38, created on 2021-02-15 14:15:22
  from '/home/master/sites/shop2/views/default/index.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602a57ca6d4924_31545826',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'a8ad86bb441587c1b1180a8f011bce0667048bbc' => 
    array (
      0 => '/home/master/sites/shop2/views/default/index.tpl',
      1 => 1613387721,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:sidebar.tpl' => 1,
  ),
),false)) {
function content_602a57ca6d4924_31545826 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div class="content__inner">
    <?php $_smarty_tpl->_subTemplateRender("file:sidebar.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>

    <div class="content">
        content
    </div>
</div>






<?php }
}

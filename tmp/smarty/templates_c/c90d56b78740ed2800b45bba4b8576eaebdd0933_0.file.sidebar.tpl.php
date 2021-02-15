<?php
/* Smarty version 3.1.38, created on 2021-02-15 20:12:06
  from '/home/master/sites/shop2/views/default/sidebar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.38',
  'unifunc' => 'content_602aab66b65b31_89202877',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'c90d56b78740ed2800b45bba4b8576eaebdd0933' => 
    array (
      0 => '/home/master/sites/shop2/views/default/sidebar.tpl',
      1 => 1613409122,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_602aab66b65b31_89202877 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidebar">
    <div class="sidebar__title">Меню:</div>
    <div class="sidebar__menu">
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['rsCategories']->value, 'item');
$_smarty_tpl->tpl_vars['item']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->do_else = false;
?>
            <a href="" class="sidebar__menu-item"><?php echo $_smarty_tpl->tpl_vars['item']->value['name'];?>
</a>
            <?php if ((isset($_smarty_tpl->tpl_vars['item']->value['children']))) {?>
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['item']->value['children'], 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                    <a href="" class="sidebar__menu-item">--   <?php echo $_smarty_tpl->tpl_vars['child']->value['name'];?>
</a>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            <?php }?>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
</div><?php }
}

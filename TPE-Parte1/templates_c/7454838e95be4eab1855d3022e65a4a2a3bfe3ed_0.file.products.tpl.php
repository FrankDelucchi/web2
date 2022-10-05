<?php
/* Smarty version 4.2.1, created on 2022-10-05 08:28:03
  from 'D:\xampp\htdocs\Web2\TPE-Parte1\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_633d23f3b371f7_53886554',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7454838e95be4eab1855d3022e65a4a2a3bfe3ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web2\\TPE-Parte1\\templates\\products.tpl',
      1 => 1664951269,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_633d23f3b371f7_53886554 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\Web2\\TPE-Parte1\\libs\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
?>
<div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s uk-text-center" uk-grid>
    <ul>
        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
            <div>
                <div class="uk-card uk-card-default uk-card-body">
                    <a href="product"><img src="assets/images/adidas-dame-8.jpg"></a>
                    <h4><?php echo $_smarty_tpl->tpl_vars['product']->value->producto;?>
</h4>
                    <h5><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->descripcion,50);?>
</h5>
                </div>
            </div>
        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </ul>
</div>
<?php }
}

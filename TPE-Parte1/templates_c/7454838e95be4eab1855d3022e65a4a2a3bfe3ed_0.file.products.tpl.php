<?php
/* Smarty version 4.2.1, created on 2022-10-10 22:39:38
  from 'D:\xampp\htdocs\Web2\TPE-Parte1\templates\products.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '4.2.1',
  'unifunc' => 'content_6344830af0ff28_51917604',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '7454838e95be4eab1855d3022e65a4a2a3bfe3ed' => 
    array (
      0 => 'D:\\xampp\\htdocs\\Web2\\TPE-Parte1\\templates\\products.tpl',
      1 => 1665434363,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_6344830af0ff28_51917604 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_checkPlugins(array(0=>array('file'=>'D:\\xampp\\htdocs\\Web2\\TPE-Parte1\\libs\\smarty\\libs\\plugins\\modifier.truncate.php','function'=>'smarty_modifier_truncate',),));
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>



<div class="uk-grid-column-small uk-grid-row-large uk-child-width-1-3@s uk-text-center" uk-grid>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['products']->value, 'product');
$_smarty_tpl->tpl_vars['product']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['product']->value) {
$_smarty_tpl->tpl_vars['product']->do_else = false;
?>
        <div>
            <div class="uk-card uk-card-default uk-card-body" style="height:450px">
                <a href="producto/<?php echo $_smarty_tpl->tpl_vars['product']->value->id_producto;?>
"><img class="image-product" style="height:150px" src="<?php echo $_smarty_tpl->tpl_vars['product']->value->imagen;?>
"></a>
                <h4><?php echo $_smarty_tpl->tpl_vars['product']->value->producto;?>
</h4>
                <h5><?php echo smarty_modifier_truncate($_smarty_tpl->tpl_vars['product']->value->descripcion,100);?>
</h5>
            </div>
        </div>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</div>



<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

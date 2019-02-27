<?php
/* Smarty version 3.1.33, created on 2019-02-27 21:44:46
  from 'C:\xampp\htdocs\DWES_05_tienda\web\smarty\tarea\templates\listaproductos.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5c76f6be54e9a0_45479618',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '96a22f5c2cec803a0ef4593b7a1cd39d5c64dfec' => 
    array (
      0 => 'C:\\xampp\\htdocs\\DWES_05_tienda\\web\\smarty\\tarea\\templates\\listaproductos.tpl',
      1 => 1551286286,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c76f6be54e9a0_45479618 (Smarty_Internal_Template $_smarty_tpl) {
?>    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productos']->value, 'producto');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['producto']->value) {
?>
        <p><form id='<?php echo $_smarty_tpl->tpl_vars['producto']->value->getcodigo();?>
' action='productos.php' method='post'>
        <input type='hidden' name='cod' value='<?php echo $_smarty_tpl->tpl_vars['producto']->value->getcodigo();?>
'/>
        <input type='submit' name='enviar' value='Añadir'/>
                             <?php echo $_smarty_tpl->tpl_vars['producto']->value->toString();?>
 
              
                     </form></p>
    <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}

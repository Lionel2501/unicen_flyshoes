<?php
/* Smarty version 3.1.34-dev-7, created on 2020-10-24 01:04:49
  from 'C:\xampp\htdocs\TPEWeb2\templates\allMarcas.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_5f93619129eab3_50321772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '36ad165456ba222745011cbf7e9a22f5c0046f8a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\TPEWeb2\\templates\\allMarcas.tpl',
      1 => 1602091819,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_5f93619129eab3_50321772 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    <div class="container">
        <h1 class="justify-content-center">Tabla de todos las marcas de <?php echo $_smarty_tpl->tpl_vars['titulo']->value;?>
</h1>
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">Marca</th>
                    <th scope="col">Origen</th>
                    <th scope="col">Consultar</th>
                </tr>
            </thead>
            <tbody>
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['marcas']->value, 'i');
$_smarty_tpl->tpl_vars['i']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['i']->value) {
$_smarty_tpl->tpl_vars['i']->do_else = false;
?>
            <tr scope="row">
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value->nombre;?>
</td> 
            <td><?php echo $_smarty_tpl->tpl_vars['i']->value->origen;?>
</td>
            <td><button type="submit" class="btn btn-light"><a href="detallesMarca/<?php echo $_smarty_tpl->tpl_vars['i']->value->id_marca;?>
">+ info</a></button></td>
            </tr>
            <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </tbody>
        </table>
    </div>

    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}
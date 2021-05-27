<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 18:21:23
  from 'C:\xampp\htdocs\RecTandaPag\templates\administrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60afc703476174_71315181',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d8a488be2786d3d3836ac3b12e5ee5f190453ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RecTandaPag\\templates\\administrar.tpl',
      1 => 1622132480,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60afc703476174_71315181 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <div class="container">
        <div><a href="administrar.html">Cartoneros   </a>|</div>
        <div class="border-bottom">
            <h1 class="m-4">
                Administrar:
            </h1>
            <h2>Cartoneros:</h2>
        </div>
        <div>
            <table class="table table-hover">
                <thead>
                  <tr>
                    <th scope="col">Nombres</th>
                    <th scope="col">Kilos acopiados</th>
                    <th scope="col">Porcentaje</th>
                    <th scope="col">ABM</th>
                  </tr>
                </thead>
                <tbody>
                 <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['cartoneros']->value, 'cartonero');
$_smarty_tpl->tpl_vars['cartonero']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['cartonero']->value) {
$_smarty_tpl->tpl_vars['cartonero']->do_else = false;
?>
              <tr>
                <td><a href="detalleC"><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->nombre;?>
</a></td>
                <td><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->apellido;?>
</td>
                <td><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->direccion;?>
</td>
                <td>
                </span><button type="button" class="btn btn-outline-danger"><a href="delete/<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->dni;?>
">Borrar</a></button>
                <button type="button" class="btn btn-outline-info"><a href="editar/<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->dni;?>
">Editar</a></button></td>
                </td>
              </tr>
              <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </tbody>
              </table>
              <a href="añadirC.html" class="btn btn-success">Añadir Cartonero</a>
        </div>
    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

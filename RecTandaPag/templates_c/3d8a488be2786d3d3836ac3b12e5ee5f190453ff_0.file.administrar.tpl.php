<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-26 23:30:50
  from 'C:\xampp\htdocs\RecTandaPag\templates\administrar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aebe0abc23d3_99734016',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '3d8a488be2786d3d3836ac3b12e5ee5f190453ff' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RecTandaPag\\templates\\administrar.tpl',
      1 => 1622059046,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60aebe0abc23d3_99734016 (Smarty_Internal_Template $_smarty_tpl) {
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
                  <tr>
                    <th><a href="detalleC.html">Juan</a></th>
                    <td>200</td>
                    <td>25%</td>
                    <td>
                        <a href="administrar.html" class="btn btn-danger">Eliminar</a>
                        <a href="editarC.html" class="btn btn-info">Editar</a>
                    </td>
                  </tr>
                  <tr>
                    <th><a href="detalleC.html">Pedro</a></th>
                    <td>200</td>
                    <td>25%</td>
                    <td>
                        <a href="administrar.html" class="btn btn-danger">Eliminar</a>
                        <a href="editarC.html" class="btn btn-info">Editar</a>
                    </td>
                  </tr>
                  <tr>
                    <th><a href="detalleC.html">Jorge</a></th>
                    <td>200</td>
                    <td>25%</td>
                    <td>
                        <a href="administrar.html" class="btn btn-danger">Eliminar</a>
                        <a href="editarC.html" class="btn btn-info">Editar</a>
                    </td>
                  </tr>
                  <tr>
                    <th><a href="detalleC.html">Eduardo</a></th>
                    <td>200</td>
                    <td>25%</td>
                    <td>
                        <a href="administrar.html" class="btn btn-danger">Eliminar</a>
                        <a href="editarC.html" class="btn btn-info">Editar</a>
                    </td>
                  </tr>
                </tbody>
              </table>
              <a href="añadirC.html" class="btn btn-success">Añadir Cartonero</a>
        </div>
    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

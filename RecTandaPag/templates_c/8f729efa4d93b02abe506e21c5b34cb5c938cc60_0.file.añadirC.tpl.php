<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 20:05:43
  from 'C:\xampp\htdocs\RecTandaPag\templates\añadirC.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60afdf77e6e504_50329068',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '8f729efa4d93b02abe506e21c5b34cb5c938cc60' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RecTandaPag\\templates\\añadirC.tpl',
      1 => 1622138741,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60afdf77e6e504_50329068 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <div class="container">
        <div><a href="administrar.html">Cartoneros   </a>|</div>
            <h1 class="m-4">
                Administrar:
            </h1>
            <h2 class="p-3">Añadir cartonero:</h2>
            
            <div class="contentForm">
                <form action="añadircartonero" method="post">
                    <div class="row">
                      <div class="col">
                        <p>Nombre:</p>
                        <input type="text"  name="input_nombre" class="form-control" placeholder="Ingrese nombre">
                      </div>
                      
                      <div class="col">
                        <p>Apellido:</p>
                        <input type="text" name="input_apellido" class="form-control" placeholder="Ingrese apellido">
                      </div>
                    </div>
                    <div class="row p-1">
                        <div class="col ">
                            <p>Fecha de nacimiento:</p>
                            <input type="date" name="input_fecha_nacimiento" class="form-control">
                          </div>
                          <div class="col">
                              <p>DNI:</p>
                              <input type="text" class="form-control" name="input_dni" placeholder="DNI del cartonero">
                          </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Vehículo:</p>
                            <input type="text" class="form-control" placeholder="Vehículo en el cual se movilizará">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col ">
                            <p>Dirección:</p>
                            <input type="text" class="form-control" name="input_direccion" placeholder="Calle/Direccion">
                          </div>
                          <div class="col ">
                            <p>Tipo:</p>
                            <input type="text" class="form-control" name="input_tipo" placeholder="Tipo_volumen">
                          </div>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary ">Enviar</button>
                    </div>
                  </form>
            </div>
    </div>
    
    <?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

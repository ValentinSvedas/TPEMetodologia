<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 19:25:15
  from 'C:\xampp\htdocs\RecTandaPag\templates\editarC.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60afd5fb08df49_10088581',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd07da00b8b68e7a5ba46cb57ea6c7c4dce07d12a' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RecTandaPag\\templates\\editarC.tpl',
      1 => 1622136313,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60afd5fb08df49_10088581 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <div class="container">
        <div><a href="administrar">Cartoneros   </a>|</div>
            <h1 class="m-4">
                Administrar:
            </h1>
            <h2 class="p-3">Editar cartonero:</h2>

            <div class="contentForm">
                <form action="editcartonero" method="post">
                    <div class="row">
                      <div class="col">
                        <p>Nombre:</p>
                        <input type="text"  name="input_nombre" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->nombre;?>
">
                      </div>
                      
                      <div class="col">
                        <p>Apellido:</p>
                        <input type="text" name="input_apellido" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->apellido;?>
" >
                      </div>
                    </div>
                    <div class="row p-1">
                        <div class="col ">
                            <p>Fecha de nacimiento:</p>
                            <input type="date" name="input_fecha_nacimiento" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->fecha_nacimiento;?>
">
                          </div>
                          <div class="col">
                              <p>DNI:</p>
                              <input type="text" name="input_dni" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->dni;?>
">
                          </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Vehículo:</p>
                            <input type="text" name="input_vehículo" class="form-control" placeholder="Camión">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col ">
                            <p>Dirección:</p>
                            <input type="text" name="input_direccion" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->direccion;?>
">
                          </div>
                          <div class="col ">
                            <p>Tipo:</p>
                            <input type="text" name="input_tipo" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['cartonero']->value->tipo_volumen;?>
">
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

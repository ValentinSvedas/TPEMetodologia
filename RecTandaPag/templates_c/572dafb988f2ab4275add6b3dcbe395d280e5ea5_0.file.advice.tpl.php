<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-26 23:09:23
  from 'C:\xampp\htdocs\RecTandaPag\templates\advice.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aeb9037ff202_92032913',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '572dafb988f2ab4275add6b3dcbe395d280e5ea5' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RecTandaPag\\templates\\advice.tpl',
      1 => 1622059085,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60aeb9037ff202_92032913 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <div class="container">
        <div class="border-bottom">
            <h1 class="m-4">
                Para que sus materiales sean recolectados, porfavor rellene los datos a continuación:
            </h1>
        </div>
        <div class="contentForm">
            <form>
                <div class="row">
                  <div class="col">
                    <p>Nombre:</p>
                    <input type="text" class="form-control" placeholder="Ingrese el nombre">
                  </div>
                  
                  <div class="col">
                    <p>Apellido:</p>
                    <input type="text" class="form-control" placeholder="Ingrese el apellido">
                  </div>
                </div>
                <div class="row p-1">
                    <div class="col ">
                        <p>Teléfono:</p>
                        <input type="tel" class="form-control" placeholder="Ej: 223 123-4567">
                      </div>
                      <div class="col">
                          <p>Franja Horaria:</p>
                          <select class="form-control">
                            <option>9 a 12 hs</option>
                            <option>13 a 17 hs</option>
                          </select>
                      </div>
                </div>
                <div class="row">
                    <div class="col">
                        <p>Volumen a retirar:</p>
                        <select class="form-control">
                          <option>Entra en una caja</option>
                          <option>Entra en el baúl de un auto</option>
                          <option>Entra en la caja de una camioneta</option>
                          <option>Es necesario un camión</option>
                        </select>
                    </div>
                </div>
                <div class="row">
                    <div class="custom-file m-3">
                        <input type="file" class="custom-file-input" id="customFile">
                        <label class="custom-file-label" for="customFile">(Opcional) Foto de materiales a reciclar</label>
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

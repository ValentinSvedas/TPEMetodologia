<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-26 23:09:20
  from 'C:\xampp\htdocs\RecTandaPag\templates\reciclar.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aeb900a0d1b3_47407361',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '6b4a4dc2973a994e83da1db7c69dca97c9f56145' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RecTandaPag\\templates\\reciclar.tpl',
      1 => 1622063282,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60aeb900a0d1b3_47407361 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <div class="container">
        <div class="border-bottom">
            <h1 class="m-4">
                Sigue los pasos a continuación para reciclar:
            </h1>
            <p>Hay varias formasde poder reciclar, ya sea mediante nuestro sistema de recolectado o por nuestra cartelera
                donde te pondremos en contacto con algún vecino buena onda que te pueda alcanzar tus elementos reciclabes.
            </p>
        </div>
        <div>
            <ul>
                <li>Si quiere dar aviso de sus elementos reciclables para que un cartonero vaya a retirarlos: <a href="advice" class="btn btn-info">Dar aviso</a>
                </li>
                <li>Para ponerte en contacto con algún vecino o ciudadano tenemos una <span class="negrita">cartelera virtual</span>:</li>
            </ul>
            <table class="table">
                <thead class="bg-th">
                  <tr>
                    <th scope="col">Zona</th>
                    <th scope="col">Espacio disponible</th>
                    <th scope="col">Descripción</th>
                    <th scope="col">Contactar</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>Calvario</td>
                    <td>Caja camioneta</td>
                    <td>Voy a dejar unas botellas y me sobró espacio</td>
                    <td><a href="postularse.html" class="btn btn-secondary">Postularse</a></td>
                  </tr>
                  <tr>
                    <td>Calvario</td>
                    <td>Caja camioneta</td>
                    <td>Voy a dejar unas botellas y me sobró espacio</td>
                    <td><a href="postularse.html" class="btn btn-secondary">Postularse</a></td>
                  </tr>
                  <tr>
                    <td>Calvario</td>
                    <td>Caja camioneta</td>
                    <td>Voy a dejar unas botellas y me sobró espacio</td>
                    <td><a href="postularse.html" class="btn btn-secondary">Postularse</a></td>
                  </tr>
                </tbody>
              </table>
            <ul>
                <li>¿Queres ofrecer tu espacio sobrante en tu vehiculo y convertirte en ciudadano buena onda? </li>
                <a href="form-advice" class="btn btn-info">Quiero ser buena onda</a>
                <li>Si estás en un centro de acopio y querés dejar elementos reciclables, dirirgete a: </li>
                <a href="form-advice" class="btn btn-info">Centro acopio</a>
            </ul>
        </div>
    </div>
    
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

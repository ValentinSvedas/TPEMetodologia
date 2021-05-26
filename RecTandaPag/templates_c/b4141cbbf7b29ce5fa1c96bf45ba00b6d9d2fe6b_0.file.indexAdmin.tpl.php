<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-26 23:30:20
  from 'C:\xampp\htdocs\RecTandaPag\templates\indexAdmin.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aebdecbbb5a4_98752452',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b4141cbbf7b29ce5fa1c96bf45ba00b6d9d2fe6b' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RecTandaPag\\templates\\indexAdmin.tpl',
      1 => 1622063354,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60aebdecbbb5a4_98752452 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperadores urbanos Tandil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/css.css">
</head>
    <nav class="navbar navbar-light">
        <div class="container">
        
                <div class="col-8 w-25 p-0 border p-3" >
                    <a href="index">Recuperadores urbanos Tandil</a>
                </div>
                <div class="col border-bottom w-60 p-3 d-flex justify-content-end">
                    <div class="d-flex flex-row">
                        <div class="col-4">
                            <a href="reciclar">Reciclar</a>
                        </div>
                        <div class="col-6">
                            <a href="centroacopio">Centro de acopio</a>
                        </div> 
                        <div class="col-6">
                            <a href="administrar" class="btn btn-danger">Administrar</a>
                        </div>
                    </div>
                </div>
                <div class="w-100">
                    <a href="aboutus">Sobre nosotros</a>
                </div>
            </div>
    </nav>
<body>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

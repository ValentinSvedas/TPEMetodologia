<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-26 23:30:19
  from 'C:\xampp\htdocs\RecTandaPag\templates\login.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60aebdebd18e49_69188432',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'aed585579f3b50148fc8fc99acc964d8f12bfe8f' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RecTandaPag\\templates\\login.tpl',
      1 => 1622064616,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60aebdebd18e49_69188432 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Recuperadores urbanos Tandil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
	<div class="login">
		<div class="login-screen">
			<div class="app-title">
				<h1>Login</h1>
			</div>
			<div class="login-form">
				<form action="indexAdmin" method="post">
                    <div class="form-group">
                        <label for="user">Usuario</label>
                        <input type="text" class="form-control" id="user" name="input_user" >
                
                    </div>
                    <div class="form-group">
                        <label for="pass">Password</label>
                        <input type="password" class="form-control" id="pass" name="input_pass">
                    </div>

                    <button type="submit" class="btn btn-primary">Ingresar</button>
        		</form>
				<a class="login-link" href="#">Perdiste tu contraseña?</a>
			</div>
		</div>
	</div>
<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

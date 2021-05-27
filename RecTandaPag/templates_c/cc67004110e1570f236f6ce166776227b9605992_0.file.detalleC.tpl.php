<?php
/* Smarty version 3.1.34-dev-7, created on 2021-05-27 18:43:59
  from 'C:\xampp\htdocs\RecTandaPag\templates\detalleC.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.34-dev-7',
  'unifunc' => 'content_60afcc4f01bb92_14521910',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cc67004110e1570f236f6ce166776227b9605992' => 
    array (
      0 => 'C:\\xampp\\htdocs\\RecTandaPag\\templates\\detalleC.tpl',
      1 => 1622133810,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:header.tpl' => 1,
    'file:footer.tpl' => 1,
  ),
),false)) {
function content_60afcc4f01bb92_14521910 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->_subTemplateRender("file:header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
<body>
    <div class="container">
        <div><a href="administrar">Cartoneros   </a>|</div>
            <h1 class="m-4">
                Administrar:
            </h1>
            <h2 class="p-3">Cartoneros:</h2>
            <div class="contentForm">
                <h3><?php echo $_smarty_tpl->tpl_vars['cartonero']->value->nombre;?>
    <a href="editarC" class="btn btn-info">Editar</a></h3> 
                <p>DNI: <?php echo $_smarty_tpl->tpl_vars['cartonero']->value->dni;?>
</p>
                <p>Direccion: <?php echo $_smarty_tpl->tpl_vars['cartonero']->value->direccion;?>
</p>
                <p>Fecha nacimiento: <?php echo $_smarty_tpl->tpl_vars['cartonero']->value->fecha_nacimiento;?>
</p>    
            </div>
        </div>

<?php $_smarty_tpl->_subTemplateRender("file:footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
}
}

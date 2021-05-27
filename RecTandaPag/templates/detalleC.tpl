{include file="header.tpl"}
<body>
    <div class="container">
        <div><a href="administrar">Cartoneros   </a>|</div>
            <h1 class="m-4">
                Administrar:
            </h1>
            <h2 class="p-3">Cartoneros:</h2>
            <div class="contentForm">
                <h3>{$cartonero->nombre}    <a href="editarC" class="btn btn-info">Editar</a></h3> 
                <p>DNI: {$cartonero->dni}</p>
                <p>Direccion: {$cartonero->direccion}</p>
                <p>Fecha nacimiento: {$cartonero->fecha_nacimiento}</p>    
            </div>
        </div>

{include file="footer.tpl"}
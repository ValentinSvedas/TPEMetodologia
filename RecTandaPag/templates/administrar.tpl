{include file="header.tpl"}
<body>
    <div class="container">
        <div class="mr-2"></div>
        <nav class="nav">
          <a class="nav-link" href="administrar/cartoneros">Cartoneros</a>
          <a class="nav-link" href="administrar/materiales">Materiales</a>
          <a class="nav-link" href="administrar/pedidos">Pedidos</a>
          <a class="nav-link" href="home">Home</a>
        </nav>
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
                 {foreach from=$cartoneros item=cartonero}
              <tr>
                <td><a href="detalleC/{$cartonero->dni}">{$cartonero->nombre}</a></td>
                <td>0</td>
                <td>0</td>
                <td>
                </span><button type="button" class="btn btn-outline-danger"><a href="delete/{$cartonero->dni}">Borrar</a></button>
                <button type="button" class="btn btn-outline-info"><a href="editar/{$cartonero->dni}">Editar</a></button></td>
                </td>
              </tr>
              {/foreach}
                </tbody>
              </table>
              <a href="añadirC" class="btn btn-success">Añadir Cartonero</a>
        </div>
    </div>
    
    {include file="footer.tpl"}
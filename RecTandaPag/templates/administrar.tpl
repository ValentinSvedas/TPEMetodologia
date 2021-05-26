{include file="header.tpl"}
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
    
    {include file="footer.tpl"}
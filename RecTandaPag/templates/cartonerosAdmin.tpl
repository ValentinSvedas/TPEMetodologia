{include file="header.tpl"}
<body>
    <div class="container">
        {include file="adminNav.tpl"}
        <div class="border-bottom m-5">
            <h2>Cartoneros:</h2>
        </div>
        <div class="row">
          <div><a href="añadirC" class="btn btn-success">Añadir Cartonero</a>
              <br>
              <br>
          </div>
          <div class="col-lg-12">
            <!--id_pedido,id_ciudadano,id_horario vienen en los items para control a futuro-->
            <table class="table table-striped">
              <thead>
                <tr>
                  <th scope="col">Dni</th>
                  <th scope="col">Nombre</th>
                  <th scope="col">Apellido</th>
                  <th scope="col">Direccion</th>
                  <th scope="col">Fecha Nacimiento</th>
                  <th scope="col">Espacio disponible</th>
                  <th scope="col">Acciones</th>
                </tr>
              </thead>
              <tbody>
                {if isset($cartoneros)}
                  {foreach from=$cartoneros item=currentItem}
                    <tr>
                      <td>{$currentItem->dni}</td>
                      <td>{$currentItem->nombre}</td>
                      <td>{$currentItem->apellido}</td>
                      <td>{$currentItem->direccion}</td>
                      <td>{$currentItem->fecha_nacimiento}</td>
                      <td>{$currentItem->tamanio}</td>
                      <td>
                        </span><button type="button" class="btn btn-outline-danger"><a href="delete/{$currentItem->dni}">Borrar</a></button>
                        <button type="button" class="btn btn-outline-info"><a href="editar/{$currentItem->dni}">Editar</a></button></td>
                      </td>
                    </tr>
                  {/foreach}
                {/if}
              </tbody>
            </table>
          </div>
        </div>
    </div>
</body>
{include file="footer.tpl"}
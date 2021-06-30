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
        <div class="border-bottom m-5">
            <h2>Cartoneros:</h2>
        </div>
        <div class="row">
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
                    </tr>
                  {/foreach}
                {/if}
              </tbody>
            </table>
          </div>
        </div>
    </div>
{include file="footer.tpl"}
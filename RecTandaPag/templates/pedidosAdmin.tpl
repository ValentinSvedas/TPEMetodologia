{include file="header.tpl"}
<body>
    <div class="container">
        {include file="adminNav.tpl"}
        <div class="border-bottom m-5">
            <h2>Pedidos:</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            {if ($pedidos|@count) > 0}
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Nombre</th>
                    <th scope="col">Apellido</th>
                    <th scope="col">Direccion</th>
                    <th scope="col">Franja Horario</th>
                    <th scope="col">Tamaño</th>
                  </tr>
                </thead>
                <tbody>
                  {if isset($pedidos)}
                    {foreach from=$pedidos item=currentItem}
                      <tr>
                        <td>{$currentItem->nombre}</td>
                        <td>{$currentItem->apellido}</td>
                        <td>{$currentItem->direccion}</td>
                        <td>{$currentItem->franja_horario}</td>
                        <td>{$currentItem->tamanio}</td>
                      </tr>
                    {/foreach}
                  {/if}
                </tbody>
              </table>
            {else}
              <h3>Sin pedidos registrados</h3>
            {/if}
          </div>
        </div>
    </div>
</body>
{include file="footer.tpl"}
{include file="header.tpl"}
<body>
    <div class="container">
        {include file="adminNav.tpl"}
        <div class="border-bottom m-5">
            <h2>Recorridos cartoneros:</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            <!--id_pedido,id_ciudadano,id_horario vienen en los items para control a futuro-->
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Numero pedido</th>
                  <th scope="col">Dirección del pedido</th>
                  <th scope="col">Nombre y apellido del cartonero asignado</th>
                </tr>
              </thead class="thead-dark">
              <tbody>
                {if isset($cartoneros)}
                  {foreach from=$cartoneros item=cartonero}
                        {foreach from=$pedidos item=pedido}
                        {if $pedido->id_cartonero eq $cartonero->dni}
                    <tr>
                                <td >
                                    {$pedido->id_pedido}
                                </td>
                                <td >
                                    {$pedido->direccion}
                                </td>
                                {/if}
                        {/foreach}
                        <td></td>
                        <td></td>
                        <td>{$cartonero->nombre}
                        {$cartonero->apellido}</td>
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
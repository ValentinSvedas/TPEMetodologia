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
                <tr class="table-dark">
                  <th scope="col">#</th>
                  <th scope="col">Dirección del pedido</th>
                  <th scope="col">Horario</th>
                </tr>
              </thead>
              <tbody>
                {if isset($cartoneros)}
                  {foreach from=$cartoneros item=cartonero}
                    <tr class="table-active">
                        <td>Pedidos de {$cartonero->nombre} {$cartonero->apellido}:</td>
                        <td></td>
                        <td></td>
                        {foreach from=$pedidos item=pedido}
                        {if $pedido->id_cartonero eq $cartonero->dni}
                                <td >
                                    Numero pedido: {$pedido->id_pedido}
                                </td>
                                <td >
                                    {$pedido->direccion}
                                </td>
                                <td>{$pedido->franja_horario}</td>
                                {/if}
                    </tr>
                        {/foreach}
                        
                  {/foreach}
                {/if}
              </tbody>
            </table>
          </div>
        </div>
    </div>
</body>
{include file="footer.tpl"}
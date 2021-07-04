{include file="header.tpl"}
<body>
    <div class="container">
        {include file="adminNav.tpl"}
        <div class="border-bottom m-5">
            <h2>Acopios:</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            {if ($acopios|@count) > 0}
              <table class="table table-striped">
                <thead>
                  <tr>
                    <th scope="col">Dni</th>
                    <th scope="col">apellido</th>
                    <th scope="col">Tipo Material</th>
                    <th scope="col">Cantidad Acopiado</th>
                  </tr>
                </thead>
                <tbody>
                  {if isset($acopios)}
                    {foreach from=$acopios item=currentItem}
                      <tr>
                        <td>{$currentItem->dni}</td>
                        <td>{$currentItem->apellido}</td>
                        <td>{$currentItem->id_material}</td>
                        <td>{$currentItem->cantidad_acopiado}</td>
                      </tr>
                    {/foreach}
                  {/if}
                </tbody>
              </table>
            {else}
              <h3>Sin materiales Acopiados</h3>
            {/if}
          </div>
        </div>
    </div>
</body>
{include file="footer.tpl"}
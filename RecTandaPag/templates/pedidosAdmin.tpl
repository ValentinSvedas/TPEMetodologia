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
            <h2>Pedidos:</h2>
        </div>
        <div class="row">
          <div class="col-lg-12">
            {if isset($pedidos)}
              {foreach from=$pedidos item=currentItem}
                <div class="row">
                  <p>{$currentItem->id_ciudadano}</p>
                  <p>{$currentItem->id_pedido}</p>
                  <p>{$currentItem->tipo_franja_horaria}</p>
                  <p>{$currentItem->tipo_volumen}</p>
                  <p>{$currentItem->imagen_materiales}</p>                
                </div>
              {/foreach}
            {/if}
          </div>
        </div>
    </div>
{include file="footer.tpl"}
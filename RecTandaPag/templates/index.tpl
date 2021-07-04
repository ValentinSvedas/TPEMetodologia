{include file="header.tpl"}
<body>
<div class="container">
  <section>
  <div class="m-5">
    <h1>¡Bienvenido a la Cooperativa de Reciclaje!</h1>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img class="d-block w-100" src="https://www.zaragozarecicla.org/wp-content/uploads/2020/01/las_tres_erres_del_reciclaje.jpg" alt="First slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSSGxmMaXZN7DinWCS2_DAcH-xV1AHvS7CCXA&usqp=CAU" alt="Second slide">
        </div>
        <div class="carousel-item">
          <img class="d-block w-100" src="https://www.guaymallen.gob.ar/wp-content/uploads/2019/08/Centro-Verde-de-Guaymall%C3%A9n-1.jpg" alt="Third slide">
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only"></span>
      </a>
    </div>
  </div>
  </section>
  <section>
    <h3> Materiales que recibimos:</h3>
    <ul class="list-group mt-5">
      {foreach from=$materiales item=currentItem}
        <li class="list-group-item mb-2">
          <h2>{$currentItem->nombre}</h2>
          <p>{$currentItem->descripcion}<p>
        </li>
      {/foreach}
    </ul>
  </section<
</div>
</body>
{include file="footer.tpl"}
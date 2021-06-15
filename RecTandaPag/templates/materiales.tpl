{include file="header.tpl"}
<body>
<div class="container">
  {include file="adminNav.tpl"}
  <!--FORMULARIO PARA NUEVO MATERIAL-->
  <div class="row m-5">
    <div class="col-lg-12 border">
      <h3>Nuevo Material</h3>
      <form action="administrar/nuevoMaterial" method="post">
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="nombre_material">Nombre</label>
            <input type="text" class="form-control" id="nombre_material" placeholder="Nombre" name="nombre_material" required>
          </div>
        </div>
        <div class="form-group">
          <label for="descripcion_textarea">Descripcion</label>
          <textarea name="descripcion_material" class="form-control" id="descripcion_textarea" rows="3" required></textarea>
        </div>
        <button type="submit" class="btn btn-success mt-2">Crear Material</button>
      </form>
    </div>
  </div>
  <!--LISTADO DE MATERIALES CON OPCION DE BORRADO Y EDICION-->
  <div class="row">
  {if isset($materiales)}
    {foreach from=$materiales item=currentItem}
      <div class="row mt-5 d-flex justify-content-between">
        <div class="col-lg-6">
          <h2>{$currentItem->nombre}</h2>
        </div>
        <div class="col-lg-3">
          <div class="options d-flex">
            <ul class="list-group list-group-horizontal">
              <li class="list-group-item">
                <a href="editar/material/{$currentItem->id_material}"><button type="button" class="btn btn-primary">Editar</button></a>
              </li>
              <li class="list-group-item">
                <a href="administrar/borrarMaterial/{$currentItem->id_material}"><button type="button" class="btn btn-danger">Borrar</button></a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    {/foreach}
  {/if}
  </div>
</div>
</body>
{include file="footer.tpl"}
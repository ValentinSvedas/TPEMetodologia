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
    <div class="col-lg-12">
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          {if isset($materiales)}
            {foreach from=$materiales item=currentItem}
              <tr>
                <td>{$currentItem->id_material}</td>
                <td>{$currentItem->nombre}</td>
                <td>{$currentItem->descripcion}</td>
                <td>
                  <a href="editar/material/{$currentItem->id_material}"><button type="button" class="btn btn-primary mr-1">Editar</button></a>
                  <a href="administrar/borrarMaterial/{$currentItem->id_material}"><button type="button" class="btn btn-danger">Borrar</button></a>
                <td>
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
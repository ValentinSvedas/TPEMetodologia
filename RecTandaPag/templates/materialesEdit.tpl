{include file="header.tpl"}
<body>
    <div class="container">
        {include file="adminNav.tpl"}
        <h2 class="p-3">Editar Material:</h2>
        <div class="contentForm">
            <form action="guardar/material/{$material[0]->id_material}" method="post">
              <div class="form-row">
                <div class="form-group col-md-6">
                  <label for="nombre_material">Nombre</label>
                  <input type="text" class="form-control" id="nombre_material" placeholder="Nombre" name="nombre_material" required value="{$material[0]->nombre}">
                </div>
              </div>
              <div class="form-group">
                <label for="descripcion_textarea">Descripcion</label>
                <textarea name="descripcion_material" class="form-control" id="descripcion_textarea" rows="3" required>{$material[0]->descripcion}</textarea>
              </div>
              <button type="submit" class="btn btn-success mt-2">Guardar Material</button>
            </form>
        </div>
    </div>
</body>
{include file="footer.tpl"}
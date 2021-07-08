{include file="header.tpl"}
<body>
    <div class="container">
        {include file="adminNav.tpl"}
            <h1 class="m-4">
                Administrar:
            </h1>
            <h2 class="p-3">Editar cartonero:</h2>

            <div class="contentForm  mb-5">
                <form action="editCartonero" method="post">
                    <div class="row">
                          <div class="col">
                            <p>Nombre:</p>
                            <input type="text"  name="input_nombre" class="form-control" value="{$cartonero->nombre}">
                          </div>
                          
                          <div class="col">
                            <p>Apellido:</p>
                            <input type="text" name="input_apellido" class="form-control" value="{$cartonero->apellido}" >
                          </div>
                    </div>
                    <div class="row p-1">
                          <div class="col ">
                              <p>Fecha de nacimiento:</p>
                              <input type="date" name="input_fecha_nacimiento" class="form-control" value="{$cartonero->fecha_nacimiento}">
                          </div>
                          <div class="col">
                              <p>DNI:</p>
                              <input type="text" name="input_dni" class="form-control" value="{$cartonero->dni}">
                          </div>
                    </div>
                    <div class="row p-1">
                          <div class="col">
                              <p>Volumen Vechículo:</p>
                              <select name="input_volumen" class="form-control">
                                <option value="A">Caja</option>
                                <option value="B">Auto</option>
                                <option value="C">Camioneta</option>
                                <option value="D">Camión</option>
                              </select>
                          </div>
                          <div class="col ">
                              <p>Dirección:</p>
                              <input type="text" name="input_direccion" class="form-control" value="{$cartonero->direccion}">
                          </div>
                    </div>
                     </div>
                    <div class="row justify-content-md-center">
                        <button type="submit" class="btn btn-primary ">Enviar</button>
                    </div>
                    
                  </form>
            </div>
     </div>
</body>
{include file="footer.tpl"}
{include file="header.tpl"}
<body>
    <div class="container">
        <div><a href="administrar">Cartoneros   </a>|</div>
            <h1 class="m-4">
                Administrar:
            </h1>
            <h2 class="p-3">Editar cartonero:</h2>

            <div class="contentForm">
                <form action="editcartonero" method="post">
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
                    <div class="row">
                        <div class="col">
                            <p>Vehículo:</p>
                            <input type="text" name="input_vehículo" class="form-control" placeholder="Camión">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col ">
                            <p>Dirección:</p>
                            <input type="text" name="input_direccion" class="form-control" value="{$cartonero->direccion}">
                          </div>
                          <div class="col ">
                            <p>Tipo:</p>
                            <input type="text" name="input_tipo" class="form-control" value="{$cartonero->tipo_volumen}">
                          </div>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary ">Enviar</button>
                    </div>
                  </form>
            </div>
     </div>
     {include file="footer.tpl"}
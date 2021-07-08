{include file="header.tpl"}
<body>
    <div class="container">
        {include file="adminNav.tpl"}
            <h1 class="m-4">
                Administrar:
            </h1>
            <h2 class="p-3">Añadir cartonero:</h2>

            <div class="contentForm mb-5">
                <form action="agregarCartonero" method="post">
                    <div class="row">
                          <div class="col">
                            <p>Nombre:</p>
                            <input type="text"  name="input_nombre" class="form-control" placeholder="Ingrese nombre">
                          </div>
                          
                          <div class="col">
                            <p>Apellido:</p>
                            <input type="text" name="input_apellido" class="form-control" placeholder="Ingrese apellido">
                          </div>
                    </div>
                    <div class="row p-1">
                          <div class="col ">
                              <p>Fecha de nacimiento:</p>
                              <input type="date" name="input_fecha_nacimiento" class="form-control">
                          </div>
                          <div class="col">
                              <p>DNI:</p>
                              <input type="text" class="form-control" name="input_dni" placeholder="DNI del cartonero">
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
                          <div class="col">
                              <p>Dirección:</p>
                              <input type="text" class="form-control" name="input_direccion" placeholder="Calle/Direccion">
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
{include file="header.tpl"}
<body>
    <div class="container">
        <div><a href="administrar.html">Cartoneros   </a>|</div>
            <h1 class="m-4">
                Administrar:
            </h1>
            <h2 class="p-3">Añadir cartonero:</h2>
            
            <div class="contentForm">
                <form>
                    <div class="row">
                      <div class="col">
                        <p>Nombre:</p>
                        <input type="text" class="form-control" placeholder="Ingrese nombre">
                      </div>
                      
                      <div class="col">
                        <p>Apellido:</p>
                        <input type="text" class="form-control" placeholder="Ingrese apellido">
                      </div>
                    </div>
                    <div class="row p-1">
                        <div class="col ">
                            <p>Fecha de nacimiento:</p>
                            <input type="datetime-local" class="form-control">
                          </div>
                          <div class="col">
                              <p>DNI:</p>
                              <input type="text" class="form-control" placeholder="DNI del cartonero">
                          </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Vehículo:</p>
                            <input type="text" class="form-control" placeholder="Vehículo en el cual se movilizará">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col ">
                            <p>Dirección:</p>
                            <input type="text" class="form-control" placeholder="Calle/Direccion">
                          </div>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary ">Enviar</button>
                    </div>
                  </form>
            </div>
    </div>
    
    {include file="footer.tpl"}
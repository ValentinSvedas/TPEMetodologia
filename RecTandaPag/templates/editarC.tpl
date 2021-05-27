{include file="header.tpl"}
<body>
    <div class="container">
        <div><a href="administrar">Cartoneros   </a>|</div>
            <h1 class="m-4">
                Administrar:
            </h1>
            <h2 class="p-3">Editar cartonero:</h2>

            <div class="contentForm">
                <form>
                    <div class="row">
                      <div class="col">
                        <p>Nombre:</p>
                        <input type="text" class="form-control" placeholder="Juan">
                      </div>
                      
                      <div class="col">
                        <p>Apellido:</p>
                        <input type="text" class="form-control" placeholder="Fernandez">
                      </div>
                    </div>
                    <div class="row p-1">
                        <div class="col ">
                            <p>Fecha de nacimiento:</p>
                            <input type="datetime-local" class="form-control">
                          </div>
                          <div class="col">
                              <p>DNI:</p>
                              <input type="text" class="form-control" placeholder="33019317">
                          </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <p>Vehículo:</p>
                            <input type="text" class="form-control" placeholder="Camión">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col ">
                            <p>Dirección:</p>
                            <input type="text" class="form-control" placeholder="almafuerte 1230">
                          </div>
                    </div>
                    <div class="d-flex flex-row-reverse">
                        <button type="submit" class="btn btn-primary ">Enviar</button>
                    </div>
                  </form>
            </div>
     </div>
     {include file="footer.tpl"}
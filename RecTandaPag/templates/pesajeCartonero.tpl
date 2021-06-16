{include file="header.tpl"}
<body>
    <div class="container">
            <p class="m-4">
                <strong>Identeificarse para hacer descarga de materiales:</strong>
            </p>
                <form action="agregarkgCartonero" method="post">
                    <div class="row p-1">
                        <div class="col">
                          <p>Selecionar cartonero:</p>
                          <select name="input_cartonero" class="form-control">
                            <option value="juan">Juan</option>
                            <option value="hugo">Hugo</option>
                            <option value="eduardo">Eduardo</option>
                          </select>
                        </div>
                        <div class="col">
                            <p>Cantidad de material:</p>
                            <input type="number"  name="input_kgacoplados" class="form-control" placeholder="Ingrese recolectados">
                        </div>
                    </div>  
                    <div class="d-flex flex-row-reverse mb-5">
                        <button type="submit" class="btn btn-primary ">Recoletar</button>
                    </div>
                </form>
            <div>
                {if $kgTotales != null AND $cartonero!=''}
                    <p class="text-center"><strong>Kilos totales acoplados: {$kgTotales}</strong> por <span class="text-uppercase">{$cartonero}</span></p>
                {/if}
            </div>
    </div>
    
    {include file="footer.tpl"}
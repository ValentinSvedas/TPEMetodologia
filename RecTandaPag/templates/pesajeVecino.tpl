{include file="header.tpl"}
<body>
    <div class="container">
        <div>
            <h1>
            ¿Qué Hacer?
            </h1>
            <ul>
                <li>Deje todos los materiales ecológicos en la balanza</li>
            </ul>
        </div>
        <div class="border-bottom">
            <img src="img/reciclar-imagen.jpg" class="img-fluid rounded mx-auto d-block" alt="Responsive image">
        </div>
                   <form action="agregarkgVecino" method="post">
                    <div class="row">
                       <div class="col">
                            <p>Cantidad de material:</p>
                            <input type="number"  name="input_kgacopiados" placeholder="Ingrese los kilogramos que dejará">     <button type="submit" class="btn btn-primary ">Enviar</button>
                        </div>
                    </div>
             </form>
        <div>
        {if $kgTotales neq null}
            <p><strong>Total kilogramos acopiados con <span class="text-success">exito</span> </strong> {$kgTotales} kg<p>
            <h2 class="text-center">Gracias por su cooperación!</h2>
        {/if}
        </div>
    </div>
</body>
{include file="footer.tpl"}
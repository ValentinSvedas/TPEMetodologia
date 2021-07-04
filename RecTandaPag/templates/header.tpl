<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href='{$BASE_URL}'>
    <title>Recuperadores urbanos Tandil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
</head>
<nav class="navbar navbar-light p-3">
    <div class="col-8 w-25 p-0 border p-3" >
        <a href="index" >Recuperadores urbanos Tandil</a>
    </div>
    <div class="col border-bottom p-3 d-flex flex-row" id="navegador-publico">
        <a class="nav-link" href="aboutus">Sobre nosotros</a>
        <a class="nav-link" href="reciclar">Reciclar</a>
        <a class="nav-link" href="centroacopio">Centro de acopio</a>
        <a class="nav-link" href="home">Home</a>
    </div>
    </div>
        {if $loged eq true}
            <a href="administrar/cartoneros" class="btn btn-danger">Panel de Control</a>
            <a href="logout" class="btn btn-danger">Logout</a>
        {else}
            <a href="admin" class="badministrar"><button type="button" class="btn btn-success">Admin</button></a>
        {/if}
    </div>
</nav>
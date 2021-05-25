<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <meta name="description" content="WOOW Colombia">
    <meta name="keywords" content="Cuidado de tus mascotas, Rescate animal, Busqueda por GPS">
    <meta name="author" content="Francisco González">
    <link rel="icon" href="#" type="image/png" />
    <title>EN CONSTRUCCIÓN
    </title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
    <link rel="stylesheet" href="./wp-content/plugins/um_vdbw404/style.css">
</head>

<body>
    <div class="col-sm-12">
        <h2>ALGO</h2>
        <h1>WOOW</h1>
        <h2>ESTÁ POR LLEGAR</h2>
        <h5>ESPERALO EN</h5>
        <h4><span id="dias">25</span> DÍAS</h4>
        <a href="#">
            <img class="img-thumbnail" src="./wp-content/plugins/um_vdbw404/img/iconoInstagram.svg" alt="Instagram">
        </a>
        <a href="#">
            <img class="img-thumbnail" src="./wp-content/plugins/um_vdbw404/img/iconoFacebook.svg" alt="Facebook">
        </a>
    </div>

    <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="4000">
                <img class="imgFull float-right" src="./wp-content/plugins/um_vdbw404/img/1-1.png" alt="ilustracion">
            </div>
            <div class="carousel-item" data-bs-interval="4000">
                <img class="imgFull float-right" src="./wp-content/plugins/um_vdbw404/img/2-1.png" alt="ilustracion">
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>
    <script>
        let hoy = new Date();
        let juni15 = new Date("06/15/2021");
        let diferencia = juni15.getTime() - hoy.getTime();
        let days = Math.trunc(diferencia / (1000 * 3600 * 24))
        let spanDias = days.toString();
        document.getElementById('dias').textContent = spanDias;
        
    </script>
</body>
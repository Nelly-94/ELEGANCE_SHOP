<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Bienvenida|ELEGANCE_SHOP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>

    <style type="text/css">
    html {
        background: violet;
    }

    body {
        background: violet;
        border: groove;
    }

    video {
        width: 1000px;
        height: 600px;
    }

    .logo {
        width: 500px;
    }

    .alert {
        text-transform: uppercase;
        font-family: forte;
    }

    h1 {
        font-size: 50px;
        font-family: forte;
        text-align: center;
    }

    button {
        background-color: fuchsia;
        border-radius: 50px;
        border: groove;
    }

    a {
        color: white;
        text-transform: capitalize;
        font-size: 70px;
    }

    .text {
        font-size: 50px;
        background-color: violet;
        color: black;
    }
    </style>
</head>

<body>


    <div class="alert alert-danger" role="alert">
        <img src="images/shop.png" class="logo" alt="...">
        <h1>ELEGANCE SHOP</h1>
    </div>


    <div id="body">
        <video src="ropa.mp4">
            <source src="ropa.mp4" type="video/mp4">
            <source src="ropa.ogv" type="video/ogg">
        </video>
</body>
<h1 class="Bienenida">¡Bienvenidos!</h1>

<div class="text">Los productos que aqui se les ofrecen son de la mas alta<br> calidad, elaborados al gusto de nuestros
    clientes.<br>
    Encuentra la elegancia y sofisticacion que estan <br>buscando.
</div>

<footer>
    <center><button><a href="">INICIAR SESSION</a></button></center>
</footer>


</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de pedidos|ELEGANCE SHOP</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    </script>
    <style>
    html {
        background-color: violet;
    }

    form {
        background-color: violet;
        border: groove;
    }

    .BTN {
        background-color: violet;
        font-size: 30px;
        border: double white;
        color: white;
        border-radius: 50px;
        width: 400px;
    }
    </style>
</head>

<body>
    <div class="alert alert-danger" role="alert">
        Ordena tus productos aqui
    </div>
    <form action="index.php/Cpedidos/guardar" method="POST">
        <table>
            <td><label for="">IdPrenda</label></td>
            <td><input type="int" name="intIdprenda"></td>
            </tr>
            <td><label for="">IdMarca</label></td>
            <td><input type="int" name="intIdMarca"></td>
            <tr>
                <td><label for="">talla</label></td>
                <td><input type="int" name="inttalla"></td>
            </tr>
            <tr>
                <td><label for="">NomMarca</label></td>
                <td><input type="txt" name="txtNomMarca"></td>
            </tr>
            <tr>
                <td><label for="">IdCliente</label></td>
                <td><input type="int" name="intIdCliente"></td>
            </tr>
            <tr>
                <td><label for="">IdDeartamento</label></td>
                <td><input type="int" name="intIdDepartamento"></td>
            </tr>
            <tr>
                <td><label for="">IdProovedor</label></td>
                <td><input type="int" name="IntIdProveedor"></td>
            </tr>
            <tr>
                <td><label for="">Precio</label></td>
                <td><input type="int" name="intPrecio"></td>
            </tr>
            <tr>
                <td><label for="">Cantidad</label></td>
                <td><input type="int" name="intCantidad"></td>
            </tr>
            <tr>
                <td><label for="">FechaIngreso</label></td>
                <td><input type="date" name="dateFechaIngreso"></td>
            </tr>
            <tr>
                <td><label for="">FechaCompra</label></td>
                <td><input type="date" name="dateFechaCompra"></td>
            </tr>
            <tr>
                <td><label for="">Total</label></td>
                <td><input type="int" name="intTotal"></td>
            </tr>
            <tr>
                <td><label for="prenda">IdPrenda</label></td>
                <td><input type="int" name="Idprendaint"></td>
            </tr>
            <tr>
                <td colspan="2"><label for="">usuario</label></td>
            </tr>
            <tr>
                <td><label for="">Usuario</label></td>
                <td><input type="int" name="intIdUsuario"></td>
            </tr>
            <tr>
                <td><label for="">clave</label></td>
                <td><input type="password" name="txtclave"></td>
            </tr>
            <tr>
                <td colspan="2"><input class="BTN" type="submit" value="Ordenar"></td>
            </tr>
        </table>
    </form>

</body>

</html>
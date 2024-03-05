<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra postVenta</title>
</head>
<body>
    <?php

    if(isset($_POST["marca"]) && isset($_POST["modelo"]) && isset($_POST["tipo"]) && isset($_POST["precio"])&& isset($_POST["fecha"])){
        
        $marca =$_POST["marca"];
        $modelo=$_POST["modelo"];
        $tipo =$_POST["tipo"];
        $precio =$_POST["precio"];
        $fecha =$_POST["fecha"];

        $dbuser="root";
        $dbpassword="";

        $conn = new PDO("mysql:host=localhost;dbname=postventa", $dbuser, $dbpassword);
        //limpiar datos
        $dbuser ="";
        $dbpassword="";
        
        $query ="INSERT INTO `venta` (`id`, `marca`, `modelo`, `tipo`, `precio`, `fecha`) VALUES (NULL, '$marca', '$modelo', '$tipo', '$precio', '$fecha');";
        $q = $conn->prepare($query);
        $result =$q->execute();

    }
    ?>
    <h1>Compra De Vehiculo</h1>
<hr>
    <form action="" method="post">       
        Marca: <input type="text" name="marca"><br>
        Modelo: <input type="text" name="modelo"><br>
        Tipo De Vehiculo: <br>
        Carro <input type="radio" name="tipo" id="1" value="carro">
        Moto <input type="radio" name="tipo" id="2" value="moto">
        Bicicleta <input type="radio" name="tipo" id="3" value="bicicleta"><br>
        Precio: <input type="number" name="precio"><br>
        FechaVenta: <input type="date" name="fecha"><br><br>
        <input type="submit" value="Ingresar Compra">
    <hr>
       
    </form>
    

</body>
</html>
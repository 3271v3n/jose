<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra postVenta</title>
</head>
<body>
    <?php
    

        if(isset($_GET["select"]) ){
            
            $tipo =$_GET["select"];  
            
            $dbuser="root";
            $dbpassword="";

            $conn = new PDO("mysql:host=localhost;dbname=postventa", $dbuser, $dbpassword);
            //limpiar datos
            $dbuser ="";
            $dbpassword="";
            
        
            $consulta1 = $conn->prepare("SELECT * FROM venta WHERE tipo = '$tipo' ");
            $consulta1->execute();

    ?>
    <table border ="1">
        <tr>
            <th>
               Marca
            </th>
            <th>
                Modelo
            </th>
            <th>
                Tipo
            </th>
            <th>
                Precio
            </th>
            <th>
                Fecha
            </th>
        </tr>
    <?php 
            while ($consu = $consulta1->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr>
                <td><?php echo $consu["marca"] ?></td>
                <td><?php echo $consu["modelo"] ?></td>
                <td><?php echo $consu["tipo"] ?></td>
                <td><?php echo $consu["precio"] ?></td>
                <td><?php echo $consu["fecha"] ?></td>
            </tr>
    <?php
            }
    
        }
    ?>
        </table>
    

    <h1>filtrar compras </h1>

<form action="" method="GET">
    elija como desea filtrar: <br>
    Carro <input type="radio" name="select" id="1" value="carro">
    Moto<input type="radio" name="select" id="2" value="moto">
    Bicicleta<input type="radio" name="select" id="2" value="bicicleta"><br>
    
    <input type="submit" value="Buscar">
</form>

</body>
</html>
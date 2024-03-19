<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Busqueda de Vuelos</title>
</head>
<body>
    <h1>Buscar Vuelos</h1>

    <form action="" method="GET">
        Destino: <br>
        <input type="text" name="destino" >
        <input type="submit" value="Buscar">
    </form>
    <?php
        if(isset($_GET['destino'])){

            $destino = $_GET['destino'];
            echo "Busqueda por $destino";

            $dbuser="root";
            $dbpassword="";
    
            $conn = new PDO("mysql:host=localhost;dbname=aerolinia", $dbuser, $dbpassword); 
            $consultaSQL = $conn->prepare("SELECT origen, destino, areolinea FROM vuelos WHERE destino = '$destino'");
            $consultaSQL->execute();
    ?>
    <table border ="1">
        <tr>
            <th>
                Origen
            </th>
            <th>
                Destino
            </th>
            <th>
                Aerolinea
            </th>
        </tr>
    <?php 
            while ($row = $consultaSQL->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr>
                <td><?php echo $row["origen"] ?></td>
                <td><?php echo $row["destino"] ?></td>
                <td><?php echo $row["areolinea"] ?></td>
            </tr>
    <?php
            }
    
        }
    ?>
        </table>
    

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buscar usuario post venta</title>
    
</head>
<body>
       
    <h1>Buscar Ususrios por rol</h1>

    <form action="" method="GET">
            Rol:
        Colsultor <input type="radio" name="rol" id="1" value="consultor">
        Alimentador <input type="radio" name="rol" id="2" value="alimentador"><br>
        
        <input type="submit" value="Buscar">
    </form>
    <?php
        if(isset($_GET['rol'])){

            $rol = $_GET['rol'];
            //echo "Busqueda por $rol";

            $dbuser="root";
            $dbpassword="";
    
            $conn = new PDO("mysql:host=localhost;dbname=postVenta", $dbuser, $dbpassword);
            $consultaRol = $conn->prepare("SELECT nombre, usuario, rol, password FROM usuarios WHERE rol = '$rol'");
            $consultaRol->execute();
    ?>
    <table border ="1">
        <tr>
            <th>
                Nombre
            </th>
            <th>
                Usuario
            </th>
            <th>
                Rol
            </th>
            <th>
                Password
            </th>
        </tr>
    <?php 
            while ($Buscador = $consultaRol->fetch(PDO::FETCH_ASSOC)){
    ?>
            <tr>
                <td><?php echo $Buscador["nombre"] ?></td>
                <td><?php echo $Buscador["usuario"] ?></td>
                <td><?php echo $Buscador["rol"] ?></td>
                <td><?php echo $Buscador["password"] ?></td>
            </tr>
    <?php
            }
    
        }
    ?>
        </table>
    

</body>
</html>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios PostVenta</title>
    
</head>
<body>
    <?php

    if(isset($_POST["nombre"]) && isset($_POST["usuario"]) && isset($_POST["rol"]) && isset($_POST["password"])){
        
        $nombre =$_POST["nombre"];
        $usuario =$_POST["usuario"];
        $rol=$_POST["rol"];
        $password =$_POST["password"];

        $dbuser="root";
        $dbpassword="";

        $conn = new PDO("mysql:host=localhost;dbname=postVenta", $dbuser, $dbpassword);
        //limpiar datos
        $dbuser ="";
        $dbpassword="";

        $query ="INSERT INTO `usuarios` (`id`, `nombre`, `usuario`, `rol`, `password`) VALUES (NULL, '$nombre', '$usuario', '$rol', '$password');";
        $q = $conn->prepare($query);
        $result =$q->execute();

       
    
    }
    ?>
    
    <h1>REGISTRO USUARIOS</h1>
<hr>
    <form action="" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Usuario: <input type="text" name="usuario"><br>
        Rol:
        Colsultor <input type="radio" name="rol" id="1" value="consultor">
        Alimentador <input type="radio" name="rol" id="2" value="alimentador"><br>
        Password: <input type="password" name="password"><br><br>
        <input type="submit" value="Ingresar Usuario">
    <hr>
        
    </form>
    <table border= "1">
        <tr>
            <td>
            <a href="http://localhost/jose/inicio/Trabajo2/login.php">Login</a>
            </td>
            <td>
            <a href="http://localhost/jose/inicio/Trabajo2/venta.php">Venta</a>
            </td>
        </tr>
    </table>   
    

</body>
</html>
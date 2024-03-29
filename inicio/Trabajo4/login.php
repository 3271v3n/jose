<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login postVenta</title>
</head>
<body>
    <?php

    if(isset($_POST["usuario"]) && isset($_POST["password"])){
        
        $usuario =$_POST["usuario"];
        $password =$_POST["password"];

        $dbuser="root";
        $dbpassword="";

        $conn = new PDO("mysql:host=localhost;dbname=postventa", $dbuser, $dbpassword);
        //limpiar datos
        $dbuser ="";
        $dbpassword="";

        
        
        if($busqueda ="SELECT rol, usuario, password FROM usuarios WHERE usuario = :usuario AND password = :password;"){
            $conex = $conn->prepare($busqueda);
            $conex->execute(array(
            ':usuario' => $usuario,
            ':password' => $password,
        ));
            echo ("usaurio login");
        }else{
            echo ("usuario no existe");
        }
    }        
    
    ?>
    <h1>Login</h1>
<hr>
    <form action="" method="post">
        Usuario: <input type="text" name="usuario" require><br>
        Password: <input type="password" name="password" require><br><br>
        <input type="submit" value="Registrarme">
        <hr>

    </form>
    

</body>
</html>
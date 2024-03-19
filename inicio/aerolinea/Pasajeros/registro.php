<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aerolinia</title>
</head>
<body>
    <?php

    if(isset($_POST["nombre"]) && isset($_POST["documento"]) && isset($_POST["usuario"]) && isset($_POST["password"])){
        
        $nombre =$_POST["nombre"];
        $documento=$_POST["documento"];
        $usuario =$_POST["usuario"];
        $password =$_POST["password"];
        //echo "Datos enviados desdde el servidor: $nombre - $documento - $usuario - $password";

        //practica de seguridad #3
        //La base de datos no debe estar expuesta al exterior - debe estar en zona protegida con user y password
        //listas blancas accesos al servidor
        //listas negras no tienen acceso al servidor
        

        $dbuser="root";
        $dbpassword="";

        $conn = new PDO("mysql:host=localhost;dbname=aerolinia", $dbuser, $dbpassword);
        //limpiar datos
        $dbuser ="";
        $dbpassword="";

        $query ="INSERT INTO `usuarios` (`id`, `nombre`, `documento`, `usuario`, `password`) VALUES (NULL, '$nombre', '$documento', '$usuario', '$password');";
        $q = $conn->prepare($query);
        $result =$q->execute();



        //practica de seguridad #4
        //eliminar o deshabilitar el usuario root 

        //practica de seguridad #5
        //Crear un usuario nuevo que no sea root con una contraseña
        
        //practica de seguridad #6
        //crear diferente usuarios y perfiles 
        //editar y lectura dependiendo el usaurio y la necesidad.
        
        //practica de seguridad #7
        //los accesos a repositorios o bases de datos o datos sencibles no deben ir quemados o ingresados 
        //en el codigo 

        //practica de seguridad #8
        //Se debe utiliza un secret store por ejemplo con kubernetes, vault

        
        //practica de seguridad #9
        //Las variables que estan en merio de datos sencibles deben ser limpiadas para evitar robos de informacion
        //sse puede dar por medio de un memori dump o vaciado de memoria

        //


    }
    ?>
    <h1>REGISTRO PASAJEROS</h1>
<hr>
    <form action="" method="post">
        Nombre: <input type="text" name="nombre"><br>
        Documento: <input type="text" name="documento"><br>
        Usuario: <input type="text" name="usuario"><br>
        Password: <input type="password" name="password"><br><br>
    <hr>
        <input type="submit" value="Registrarme">
    </form>
    

</body>
</html>
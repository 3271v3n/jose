<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    if(isset($_POST['usuario'])&& isset($_POST['clave'])){
        $usuario = $_POST['usuario'];
        $clave =$_POST['clave'];
    
        if($usuario=='david'){
            if($clave=='1234'){
                echo "<H1>BIENVENIDO</H1>";
            }
            else {
                echo "<H1>usuario contraseña incorrecto</H1>";
            }
        }else {
            echo "<H1>usuario contraseña incorrecto</H1>";
        }
    }
    
    ?>

     <form action="http://localhost/jose/inicio/Redsocial/" method="post" >
        <h1>Login de Usuario</h1>
        Usuario <input type="text" name="usuario"><br><br>
        Password <input type="password" name="clave"><br>
        <input type="submit" value="Login">
     </form>
    

</body>
</html>
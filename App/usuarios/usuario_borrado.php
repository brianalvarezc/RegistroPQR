<?php
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/usuarios.php");
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/conexionBD.php");

session_start();
// Verificacion del usuario
if(isset($_SESSION['user'])){

    // verificacion de usuario admin
    if($_SESSION['admin'] == "Si"){
        // verificacion del formulario
        if(isset($_POST['usuario_id'])){
            $usuario_id = $_POST['usuario_id'];
            $usuario = new Usuario($usuario_id, null, null, null, null, null, null);
            $resultado = $usuario->borrar();
        }
        else{
            header("Location: /RegistroPQR/App/usuarios/manager.php");
        }
    }else if($_SESSION['id'] == $_POST["usuario_id"]){
        $usuario_id = $_SESSION['id'];
    }else{
        header("Location: /RegistroPQR/App/usuarios/manager.php");
    }
}
else{
    header('Location: /RegistroPQR/');
}

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Eliminar Usuario</title>
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/RegistroPQR/App/navbar.php") ?>
    <!-- termina la barra de navegacion -->
    
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-sm-10">
                <h2>Eliminar Usuario</h2>
                <div class="alert alert-success">
                    <h2><?php echo $resultado ?></h2>
                </div>
                <a href="/RegistroPQR/App/usuarios/manager.php">
                    <button class="btn btn-warning">
                        Volver
                    </button>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
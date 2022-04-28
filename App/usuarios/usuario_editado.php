<?php
session_start();
    require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/Usuarios.php");
    
    if(isset($_SESSION['user'])){

        $usuario_id = $_POST['usuario_id'];
        $usuario_nombre = $_POST['usuario_nombre'];
        $usuario_apellido = $_POST['usuario_apellido'];
        $usuario_correo = $_POST['usuario_correo'];
        $usuario_pass1 = $_POST['usuario_pass1'];
        $usuario_pass2 = $_POST['usuario_pass2'];
        $usuario_telefono = $_POST['usuario_telefono'];
        $usuario_admin = $_POST['usuario_admin'];

        if($usuario_pass1 == $usuario_pass2){
            $usuario_pass = $usuario_pass1;
            $usuario = new Usuario($usuario_id,$usuario_nombre,$usuario_apellido,$usuario_correo,$usuario_pass,$usuario_telefono,$usuario_admin);
            $resultado = $pqr->actualizar();
        }else{
            $resultado = "No se ha actualizado, las contrase&ntilde;as no coinciden.";
        }
    }
    else{
        header("Location: /RegistroPqr/App/usuarios/manager.php");
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
    <title>Actualizacion de Usuario</title>
</head>
<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/RegistroPQR/App/navbar.php") ?>
    <!-- termina la barra de navegacion -->
    
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-sm-10">
                <h2>Actualizacion de Usuario</h2>
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
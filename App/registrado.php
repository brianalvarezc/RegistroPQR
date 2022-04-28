<?php
    require_once("../Controladores/conexionBD.php");
    require_once("../Controladores/usuarios.php");
    require_once("../Modelos/Usuarios.php");

    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $mail = $_POST['mail'];
    $telefono = $_POST['telefono'];
    $pass = $_POST['pass1'] == $_POST['pass2']? password_hash($_POST['pass1'], PASSWORD_DEFAULT) : null;
    $admin = "No";

    $usuario = new Usuario($id,$nombre,$apellido,$mail,$pass,$telefono,$admin);

    $resultado = $usuario->crear();
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Registro de Usuario</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-sm-10">
                <h2>Registro de usuario</h2>
                <div class="alert alert-success">
                    <h2><?php echo $resultado ?></h2>
                </div>
                <button class="btn btn-warning" onclick="window.location = '../index.php'">
                    Volver
                </button>
            </div>
        </div>
    </div>
</body>
</html>
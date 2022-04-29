<?php
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/Usuarios.php");
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/conexionBD.php");

session_start();
// Verificacion del usuario
if(isset($_SESSION['user'])){
    
    if($_SESSION['admin'] == "Si"){
        // verificacion del formulario
        if(isset($_POST['usuario_id'])){
            $usuario_id = $_POST['usuario_id'];
        }
    }else if($_SESSION['id'] == $_POST["usuario_id"]){
        $usuario_id = $_SESSION['id'];
    }else{
        header("Location: /RegistroPQR/App/usuarios/manager.php");
    }
    // obteniendo los valores
    $usuario = new Usuario($usuario_id, null, null, null, null, null, null);
    $rows = $usuario->buscar();
    foreach ($rows as $fila) {
        // $usuario_id = $fila['usuario_id'];
        $usuario_nombre = $fila['usuario_nombre'];
        $usuario_apellido = $fila['usuario_apellido'];
        $usuario_correo = $fila['usuario_correo'];
        $usuario_pass = $fila['usuario_pass'];
        $usuario_telefono = $fila['usuario_telefono'];
        $usuario_admin = $fila['usuario_admin'];
    }

    // Opcion para definir usuarios Administradores
    if($_SESSION['admin'] == "Si"){
        $select = '<div class="input-group">
        <span class="input-group-text col-sm-3">Es Admin:</span>
        <select name="usuario_admin" id="usuario_admin" class="form-control">
            <option value='.$usuario_admin.' selected>-- '.$usuario_admin.' --</option>
            <option value="Si">Si</option>
            <option value="No">No</option>
        </select>
    </div>';
    }
    else{
        $select = "";
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
    <script src="/RegistroPQR/js/funciones.js"></script>
    <title>Editar Usuario</title>
</head>

<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/RegistroPQR/App/navbar.php") ?>
    <!-- termina la barra de navegacion -->
    
    <div class="container">
        <div class="row justify-content-center my-4">
            <div class="col-sm-10">
                <form action="/RegistroPQR/App/usuarios/usuario_editado.php" method="post">
                    <h2>Editar Usuario</h2>
                    
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Identificaci&oacute;n</span>
                        <input type="number" name="usuario_id" class="form-control" required readonly value=<?php echo "'".$usuario_id."'"; ?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Nombre:</span>
                        <input type="text" name="usuario_nombre" class="form-control" required value=<?php echo "'".$usuario_nombre."'"; ?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Apellido:</span>
                        <input type="text" name="usuario_apellido" class="form-control" required value=<?php echo "'".$usuario_apellido."'"; ?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Email:</span>
                        <input type="email" name="usuario_correo" class="form-control" required value=<?php echo "'".$usuario_correo."'"; ?>>
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Contrase&ntilde;a:</span>
                        <input type="password" name="usuario_pass1" id="pass1" class="form-control" required onkeyup="validarPass()">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Confirme Contrase&ntilde;a:</span>
                        <input type="password" name="usuario_pass2" id="pass2" class="form-control" required onkeyup="validarPass()">
                    </div>
                    <div class="input-group">
                        <span class="input-group-text col-sm-3">Tel&eacute;fono:</span>
                        <input type="number" max="9999999999" name="usuario_telefono" id="telefono" class="form-control" required value=<?php echo "'".$usuario_telefono."'"; ?>>
                    </div>
                    <?php echo $select; ?>
                    <hr>
                    <input class="btn btn-primary" id="submit" type="submit" value="Editar">
                    <a href="/RegistroPQR/App/Usuarios/manager.php">
                        <button type="button" class="btn btn-warning">
                            Volver
                        </button>
                    </a>
                </form>
            </div>
        </div>
    </div>
</body>

</html>
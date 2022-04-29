<?php

session_start();

require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/Usuarios.php");
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/conexionBD.php");

// Si se ha iniciado sesion se puede continuar
if(isset($_SESSION['user']) && isset($_SESSION['id'])){

    $usuario_nombre = $_SESSION['user'];
    $usuario_id = $_SESSION['id'];
    
    // creando el objeto para usar su metodos
    $usuario = new Usuario($usuario_id, null, null, null, null, null, null);
    
    // Condicion para mostrar todos si es admin o los propios si es usuario
    if($_SESSION['admin'] == "No"){
        $rows = $usuario->buscar();
        $boton = "";
        $boton_eliminar = "";
        $th_eliminar = "";
    }else{
        $rows = $usuario->buscar_todos_usuarios();
        $boton = '  <a href="/RegistroPQR/App/Usuarios/nuevo_usuario.php">
                        <button class="btn btn-primary">+ Nuevo Usuario</button>
                    </a>';
        $boton_eliminar = "<td>
                            <form action='/RegistroPQR/App/usuarios/borrar_usuario.php' method='post'>
                                <input type='hidden' name='usuario_id' id='usuario_id' value='".$usuario_id."'>
                                <input type='submit' class='btn btn-danger' value='Borrar'>
                            </form>
                            </td>";
        $th_eliminar = "<th>Eliminar</th>";
    }
}
else{
    header("Location: /RegistroPQR/");
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
    <script src="../js/funciones.js"></script>
    <title>Administrador de Usuario</title>
</head>

<body>
    <?php require_once($_SERVER["DOCUMENT_ROOT"]."/RegistroPQR/App/navbar.php") ?>
    <!-- termina la barra de navegacion -->


    <div class="container">
        
    <?php echo $boton; ?>

        <table class="table">
            <thead>
                <tr>
                    <th>usuario_id</th>
                    <th>usuario_nombre</th>
                    <th>usuario_apellido</th>
                    <th>usuario_correo</th>
                    <th>usuario_telefono</th>
                    <th>usuario_admin</th>
                    <th>Editar</th>
                    <?php echo $th_eliminar; ?>
                </tr>
            </thead>
            <tbody>
            <?php 
                foreach ($rows as $fila) {
                    $usuario_id = $fila['usuario_id'];
                    $usuario_nombre = $fila['usuario_nombre'];
                    $usuario_apellido = $fila['usuario_apellido'];
                    $usuario_correo = $fila['usuario_correo'];
                    $usuario_pass = $fila['usuario_pass'];
                    $usuario_telefono = $fila['usuario_telefono'];
                    $usuario_admin = $fila['usuario_admin'];
                    
                    echo "<tr>";
                    echo "<td>". $usuario_id . "</td>";
                    echo "<td>". $usuario_nombre . "</td>";
                    echo "<td>". $usuario_apellido . "</td>";
                    echo "<td>". $usuario_correo . "</td>";
                    echo "<td>". $usuario_telefono . "</td>";
                    echo "<td>". $usuario_admin . "</td>";
                    
                    // boton de formulario para editar
                    echo "<td>
                        <form action='/RegistroPQR/App/usuarios/editar_usuario.php' method='post'>
                            <input type='hidden' name='usuario_id' id='usuario_id' value='".$usuario_id."'>
                            <input type='submit' class='btn btn-primary' value='Editar'>
                            </form>
                            </td>";
                            
                            // boton de formulario para borrar
                            echo $boton_eliminar;

                    echo "</tr>";
                } ?>
        </tbody>
        </table>
    </div>
</body>
</html>
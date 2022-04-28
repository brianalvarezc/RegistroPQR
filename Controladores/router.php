<?php
    session_start();

    require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/Usuarios.php");

    // Si viene del login...
    if(isset($_POST['id'])){
        $usuario_id = $_POST['id'];
        $pass = $_POST['pass'];
    }

    // trayendo el hash pass del usuario indicado 
    $usuario = new Usuario($usuario_id, null, null, null, null, null, null);
    $rows = $usuario->buscar();
    echo $rows;

    foreach ($rows as $fila) {
        $hash = $fila['usuario_pass'];
        $usuario_nombre = $fila['usuario_nombre'];
        $admin = $fila['usuario_admin'];
    }
    
    // verificando la contraseña, guardando la sesion y redirigiendo
    if(password_verify($pass, $hash)){
        echo "Contraseña verificada, bienvenido " . $usuario_nombre;

        $_SESSION['user'] = $usuario_nombre;
        $_SESSION['id'] = $usuario_id;
        $_SESSION['admin'] = $admin;
        
        header("Location: ../App/manager.php");
    }else{
        echo "Usuario o contraseña errados";
        session_destroy();
        header("Location: ../index.php");
    }

    // cerrando la conexion
    $conexion->close();
?>
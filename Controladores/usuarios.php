<?php

require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/conexionBD.php");
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/Usuarios.php");


function crear(Usuario $usuario){
    global $conexion;
    $usuario_id = $usuario->get_id();
    $usuario_nombre = $usuario->get_nombre();
    $usuario_apellido = $usuario->get_apellido();
    $usuario_correo = $usuario->get_correo();
    $usuario_pass = $usuario->get_pass();
    $usuario_telefono = $usuario->get_telefono();
    $usuario_admin = "No";
    
    $query = $conexion -> prepare("INSERT INTO usuarios VALUES (?,?,?,?,?,?,?)");
    $query->bind_param("issssis",$usuario_id,$usuario_nombre,$usuario_apellido,$usuario_correo,$usuario_pass,$usuario_telefono,$usuario_admin);
    $resultado = "";
    try {
        $query->execute();
        $resultado = "Registro exitoso";
    } catch (Exception $e) {
        $resultado = "Error: " . $e;
    }
    finally{
        return $resultado;
    }
    
}
function buscar_usuario($usuario_id){
    global $conexion;
    $sql = "SELECT * FROM usuarios WHERE usuario_id = ?;";
    $query = $conexion -> prepare($sql);
    $query->bind_param("i",$usuario_id);
    try {
        $query->execute();
        $resultado = $query->get_result();
        // obteniendo los datos
        while($row = $resultado->fetch_array()){
            $rows[] = $row;
        }
    }
    catch(Exception $e){
        $resultado = "Error: " . $e;
    }finally{
        return $rows;
    }
}
function buscar_todos_usuarios(){
    global $conexion;
    $sql = "SELECT * FROM usuarios;";
    $query = $conexion -> prepare($sql);
    try {
        $query->execute();
        $resultado = $query->get_result();
        // obteniendo los datos
        while($row = $resultado->fetch_array()){
            $rows[] = $row;
        }
    }
    catch(Exception $e){
        $resultado = "Error: " . $e;
    }finally{
        return $rows;
    }
}

function actualizar_usuario(Usuario $usuario){
    global $conexion;
    $usuario_id = $usuario->get_id();
    $usuario_nombre = $usuario->get_nombre();
    $usuario_apellido = $usuario->get_apellido();
    $usuario_correo = $usuario->get_correo();
    $usuario_pass = $usuario->get_pass();
    $usuario_telefono = $usuario->get_telefono();
    $usuario_admin = $usuario->get_admin();

    $sql = "UPDATE usuarios SET usuario_nombre = ?, usuario_apellido = ?, usuario_correo = ?, usuario_pass = ?, usuario_telefono = ?, usuario_admin = ? WHERE usuario_id = ?;";
    
    $query = $conexion->prepare($sql);
    $query->bind_param("", $usuario_nombre, $usuario_apellido, $usuario_correo, $usuario_pass, $usuario_telefono, $usuario_admin, $usuario_id);

    $resultado = "";
    try {
        $query->execute();
        $resultado = "Actualizacion de Usuario exitosa";
    } catch (Exception $e) {
        $resultado = "Error: " . $e;
    }
    finally{
        return $resultado;
    }
}
function borrar(){
    
}
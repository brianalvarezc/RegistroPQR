<?php

require_once("../Controladores/conexionBD.php");
require_once("../Modelos/Usuarios.php");


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
function buscar(){
    
}
function actualizar(){
    
}
function borrar(){
    
}
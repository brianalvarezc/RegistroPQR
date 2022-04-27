<?php

require_once("../Controladores/conexionBD.php");
require_once("../Modelos/Usuarios.php");


function crear(Usuario $usuario){
    global $conexion;
    $usuario_id = $usuario->get_id();
    $usuario_nombre = $usuario->get_nombre();
    $usuario_apellido = $usuario->get_apellido();
    $usuario_correo = $usuario->get_correo();
    $usuario_telefono = $usuario->get_telefono();
    
    $query = $conexion -> prepare("INSERT INTO usuarios VALUES (?,?,?,?,?)");
    $query->bind_param("isssi",$usuario_id,$usuario_nombre,$usuario_apellido,$usuario_correo,$usuario_telefono);
    
    if($query->execute()){
        $resultado = "Registrado Exitosamente";
    }
    else{
        $resultado = "No exitoso";
    }
    return $resultado;
}
function buscar(){
    
}
function actualizar(){
    
}
function borrar(){
    
}
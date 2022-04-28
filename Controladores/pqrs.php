<?php

require_once("../Controladores/conexionBD.php");
require_once("../Modelos/Usuarios.php");


function crear(Pqr $pqr){
    global $conexion;
    // $pqr_id = $pqr->get_id();
    $pqr_tipo = $pqr->get_tipo();
    $pqr_usuario_id = $pqr->get_usuario_id();
    $pqr_estado = $pqr->get_estado();
    $pqr_fecha_creado = $pqr->get_fecha_creado();
    $pqr_fecha_limite = $pqr->get_fecha_limite();
    
    $query = $conexion -> prepare("INSERT INTO pqr VALUES (?,?,?,?,?)");
    $query->bind_param("sssss", $pqr_tipo, $pqr_usuario_id, $pqr_estado, $pqr_fecha_creado, $pqr_fecha_limite);
    $resultado = "";
    try {
        $query->execute();
        $resultado = "Registro de PQR exitoso";
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
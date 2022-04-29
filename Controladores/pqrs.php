<?php
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Modelos/pqrs.php");
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/pqrs.php");
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/conexionBD.php");


function crear(Pqr $pqr){
    global $conexion;
    $pqr_tipo = $pqr->get_tipo();
    $pqr_asunto = $pqr->get_asunto();
    $pqr_texto = $pqr->get_texto();
    $pqr_usuario_id = $pqr->get_usuario_id();
    $pqr_estado = $pqr->get_estado();
    $pqr_fecha = $pqr->get_fecha_creado();
    $pqr_fecha_limite = $pqr->get_fecha_limite();
    
    $query = $conexion -> prepare("INSERT INTO pqr VALUES (null, ?, ?, ?, ?, ?, ?, ?)");
    $query->bind_param("sssisss", $pqr_tipo, $pqr_asunto, $pqr_texto, $pqr_usuario_id, $pqr_estado, $pqr_fecha, $pqr_fecha_limite);
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
function buscar_pqr($pqr_usuario_id, $pqr_id){
    global $conexion;

    $pqr_usuario_id = $pqr_usuario_id;
    $pqr_id = $pqr_id;

    // trayendo los datos de la BD
    $query = $conexion->prepare("SELECT * FROM pqr WHERE pqr_usuario_id = ? and pqr_id = ?");
    $query->bind_param("ii", $pqr_usuario_id, $pqr_id);
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


function buscar_pqrs($pqr_usuario_id){
    global $conexion;

    $pqr_usuario_id = $pqr_usuario_id;

    // trayendo los datos de la BD
    $rows = null;
    $query = $conexion->prepare("SELECT * FROM pqr WHERE pqr_usuario_id = ?;");
    $query->bind_param("i", $pqr_usuario_id);
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

function buscar_todas_pqrs(){
    global $conexion;

    // trayendo los datos de la BD
    $query = $conexion->prepare("SELECT * FROM pqr;");
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

function actualizar(Pqr $pqr){
    global $conexion;
    $pqr_id = $pqr->get_id();
    $pqr_tipo = $pqr->get_tipo();
    $pqr_asunto = $pqr->get_asunto();
    $pqr_texto = $pqr->get_texto();
    
    $sql = "UPDATE pqr SET  pqr_tipo= ? , pqr_asunto= ? , pqr_texto= ? WHERE pqr_id= ?;";

    $query = $conexion -> prepare($sql);
    $query->bind_param("sssi", $pqr_tipo, $pqr_asunto, $pqr_texto, $pqr_id);
    $resultado = "";
    try {
        $query->execute();
        $resultado = "Actualizacion de PQR exitoso";
    } catch (Exception $e) {
        $resultado = "Error: " . $e;
    }
    finally{
        return $resultado;
    }
}


function borrar(Pqr $pqr){
    global $conexion;
    $pqr_id = $pqr->get_id();
    $sql = "DELETE FROM pqr WHERE pqr_id = ?;";
    $query = $conexion -> prepare($sql);
    $query->bind_param("i", $pqr_id);

    $resultado = "";
    try {
        $query->execute();
        $resultado = "Eliminacion de PQR exitoso";
    } catch (Exception $e) {
        $resultado = "Error: " . $e;
    }
    finally{
        return $resultado;
    }
}
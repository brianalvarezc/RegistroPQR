<?php
require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/pqrs.php");

class Pqr {

    function __construct($pqr_tipo,$pqr_asunto,$pqr_texto,$pqr_usuario_id,$pqr_estado,$pqr_fecha_creado,$pqr_fecha_limite){
        $this->pqr_tipo = $pqr_tipo;
        $this->pqr_asunto = $pqr_asunto;
        $this->pqr_texto = $pqr_texto;
        $this->pqr_usuario_id = $pqr_usuario_id;
        $this->pqr_estado = $pqr_estado;
        $this->pqr_fecha_creado = $pqr_fecha_creado;
        $this->pqr_fecha_limite = $pqr_fecha_limite;
    }

    // getters
    function get_id(){return $this->pqr_id;}
    function get_tipo(){return $this->pqr_tipo;}
    function get_usuario_id(){return $this->pqr_usuario_id;}
    function get_asunto(){return $this->pqr_asunto;}
    function get_texto(){return $this->pqr_texto;}
    function get_estado(){return $this->pqr_estado;}
    function get_fecha_creado(){return $this->pqr_fecha_creado;}
    function get_fecha_limite(){return $this->pqr_fecha_limite;}
    
    // setters
    function set_id($pqr_id){$this->pqr_id = $pqr_id;}

    // metodos
    function crear(){
        return crear($this);
    }
    // buscar
    function buscar_pqr(){
        return buscar_pqr($this->pqr_usuario_id , $this->pqr_id);
    }
    function buscar_pqrs(){
        return buscar_pqrs($this->pqr_usuario_id);
        
    }
    function buscar_todas_pqrs(){
        return buscar_todas_pqrs();
        
    }
    // actualizar
    function actualizar(){
        return actualizar($this);
    }

    // borrar
    function borrar(){
        return borrar($this);
    }
}


?>
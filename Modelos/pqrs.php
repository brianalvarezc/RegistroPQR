<?php

require_once("../Controladores/pqrs.php");

class Pqr {

    function __construct($pqr_id,$pqr_tipo,$pqr_usuario_id,$pqr_estado,$pqr_fecha_creado,$pqr_fecha_limite){
        // $this->pqr_id = $pqr_id;
        $this->pqr_tipo = $pqr_tipo;
        $this->pqr_usuario_id = $pqr_usuario_id;
        $this->pqr_estado = $pqr_estado;
        $this->pqr_fecha_creado = $pqr_fecha_creado;
        $this->pqr_fecha_limite = $pqr_fecha_limite;
    }

    // getters
    function get_id(){return $this->pqr_id;}
    function get_tipo(){return $this->pqr_tipo;}
    function get_usuario_id(){return $this->pqr_usuario_id;}
    function get_estado(){return $this->pqr_estado;}
    function get_fecha_creado(){return $this->pqr_fecha_creado;}
    function get_fecha_limite(){return $this->pqr_fecha_limite;}
    // setters
    // function set_id($pqr_id){$this->pqr_id = $pqr_id;}
    function set_tipo($pqr_tipo){$this->pqr_tipo = $pqr_tipo;}
    function set_usuario_id($pqr_usuario_id){$this->pqr_usuario_id = $pqr_usuario_id;}
    function set_estado($pqr_estado){$this->pqr_estado = $pqr_estado;}
    function set_fecha_creado($pqr_fecha_creado){$this->pqr_fecha_creado = $pqr_fecha_creado;}
    function set_fecha_limite($pqr_fecha_limite){$this->pqr_fecha_limite = $pqr_fecha_limite;}

    function crear(){
        return crear($this);
    }
    function buscar(){
        
    }
    function actualizar(){
        
    }
    function borrar(){
        
    }
}


?>
<?php

require_once("../Controladores/conexionBD.php");
require_once("../Controladores/usuarios.php");

class Usuario {

    function __construct($usuario_id,$usuario_nombre,$usuario_apellido,$usuario_correo,$usuario_telefono){
        $this->usuario_id = $usuario_id;
        $this->usuario_nombre = $usuario_nombre;
        $this->usuario_apellido = $usuario_apellido;
        $this->usuario_correo = $usuario_correo;
        $this->usuario_telefono = $usuario_telefono;
    }

    // getters
    function get_id(){return $this->usuario_id;}
    function get_nombre(){return $this->usuario_nombre;}
    function get_apellido(){return $this->usuario_apellido;}
    function get_correo(){return $this->usuario_correo;}
    function get_telefono(){return $this->usuario_telefono;}
    // setters
    function set_id($usuario_id){$this->usuario_id = $usuario_id;}
    function set_nombre($usuario_nombre){$this->usuario_nombre = $usuario_nombre;}
    function set_apellido($usuario_apellido){$this->usuario_apellido = $usuario_apellido;}
    function set_correo($usuario_correo){$this->usuario_correo = $usuario_correo;}
    function set_telefono($usuario_telefono){$this->usuario_telefono = $usuario_telefono;}

    function crear(){
        return crear($this);
    }
    function buscar(){
        
    }
    function actualizar(){
        
    }
    function borrar(){
        
    }

    function toString(){
        return "$this->usuario_id, $this->usuario_nombre $this->usuario_apellido $this->usuario_correo $this->usuario_telefono";
    }
}


?>
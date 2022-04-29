<?php

require_once($_SERVER['DOCUMENT_ROOT']."/RegistroPQR/Controladores/usuarios.php");

class Usuario {

    function __construct($usuario_id,$usuario_nombre,$usuario_apellido,$usuario_correo,$usuario_pass,$usuario_telefono,$usuario_admin){
        $this->usuario_id = $usuario_id;
        $this->usuario_nombre = $usuario_nombre;
        $this->usuario_apellido = $usuario_apellido;
        $this->usuario_correo = $usuario_correo;
        $this->usuario_pass = $usuario_pass;
        $this->usuario_telefono = $usuario_telefono;
        $this->usuario_admin = $usuario_admin;
    }

    // getters
    function get_id(){return $this->usuario_id;}
    function get_nombre(){return $this->usuario_nombre;}
    function get_apellido(){return $this->usuario_apellido;}
    function get_correo(){return $this->usuario_correo;}
    function get_pass(){return $this->usuario_pass;}
    function get_telefono(){return $this->usuario_telefono;}
    function get_admin(){return $this->usuario_admin;}
    // setters
    function set_id($usuario_id){$this->usuario_id = $usuario_id;}
    function set_nombre($usuario_nombre){$this->usuario_nombre = $usuario_nombre;}
    function set_apellido($usuario_apellido){$this->usuario_apellido = $usuario_apellido;}
    function set_correo($usuario_correo){$this->usuario_correo = $usuario_correo;}
    function set_pass($usuario_pass){$this->usuario_pass = $usuario_pass;}
    function set_telefono($usuario_telefono){$this->usuario_telefono = $usuario_telefono;}
    function set_admin($usuario_admin){$this->usuario_admin = $usuario_admin;}

    function crear(){
        return crear($this);
    }
    function buscar(){
        return buscar_usuario($this->usuario_id);
    }
    function buscar_todos_usuarios(){
        return buscar_todos_usuarios();
    }
    function actualizar(){
        return actualizar_usuario($this);
    }
    function borrar(){
        return borrar_usuario($this);
    }

    function toString(){
        return "$this->usuario_id, $this->usuario_nombre $this->usuario_apellido $this->usuario_correo $this->usuario_telefono";
    }
}


?>
<?php

require_once "../db/connection.php";

class usuario{

    public $cedula;
    public $nombre_usuario;
    public $contraseña;
    public $correo;
    public $fecha;
    public $genero;
    public $cargo;
    public $telefono;
    public $estado;

    public static function getall(){
        $sql="select * from usuario";
        $con = new connection();
        $rs = $con -> query($sql);
        $con -> close(); 

        return $rs;
    }

    public static function findced($cedula){
        $sql = "select * from usuario where ID_Usuario = '$cedula'";

        $con = new connection();
	    $rs = $con->query($sql);
	    $con->close();

    return $rs;
    }

    public static function delete($cedula){
        $sql = "delete from usuario where ID_Usuario = '$cedula'";
  
        $con = new connection();
        $rs = $con->execute($sql);
        $con->close();
  
        return $rs;
    }
  
    public function create(){
        $sql = "insert into usuario values($this->cedula,
        '$this->nombre_usuario',
        '$this->contraseña',
        '$this->correo',
        '$this->fecha',
        '$this->genero',
        '$this->cargo',
        '$this->telefono',
        $this->estado)";
  
        $con = new connection();
        $rs = $con->execute($sql);
        $con->close();
  
        return $rs;
    }
  
    public function update(){
        $sql ="update usuario set 
        nombre_usuario = '$this->nombre_usuario',
        contraseña = '$this->contraseña',
        email = '$this->correo',
        fecha_nacimiento = '$this->fecha',
        genero = '$this->genero',
        cargo = '$this->cargo',
        telefono = '$this->telefono',
        estado_usuario = '$this->estado'
        where ID_Usuario = '$this->cedula'";
  
        $con = new connection();
        $rs = $con->execute($sql);
        $con->close();
        
        return $rs;
    }

}
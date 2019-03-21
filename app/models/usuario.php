<?php

require_once "../db/connection.php";

class usuario{

    public $ID_Usuario;
    public $nombre;
    public $fecha_nacimiento;
    public $genero;
    public $telefono;
    public $cargo;
    public $email;
    public $contraseña;
    public $estado;
    public $ID_Perfil;

    public static function getall(){
        $sql="select * from usuario";
        $con = new connection();
        $rs = $con -> query($sql);
        $con -> close(); 

        return $rs;
    }

    public static function perfilId($ID_Perfil){
        $sql = "select ID_Perfil from perfil";

        $con = new connection();
        $rs = $con->query($sql);
        $con->close();

        return $rs;
    }

    public static function findced($ID_Usuario){
        $sql = "select * from usuario where ID_Usuario = '$ID_Usuario'";

        $con = new connection();
	    $rs = $con->query($sql);
	    $con->close();

    return $rs;
    }

    public static function delete($ID_Usuario){
        $sql = "delete from usuario where ID_Usuario = '$ID_Usuario'";
  
        $con = new connection();
        $rs = $con->execute($sql);
        $con->close();
  
        return $rs;
    }
  
    public function create(){
        $sql = "insert into usuario values($this->ID_Usuario,
        '$this->nombre',
        '$this->fecha_nacimiento',
        '$this->genero',
        '$this->telefono',
        '$this->cargo',
        '$this->email',
        '$this->contraseña',
        '$this->estado',
        '$this->ID_Perfil')";
  
        $con = new connection();
        $rs = $con->execute($sql);
        $con->close();
  
        return $rs;
    }
  
    public function update(){
        $sql ="update usuario set 
        nombre = '$this->nombre',
        fecha_nacimiento = '$this->fecha_nacimiento',
        genero = '$this->genero',
        telefono = '$this->telefono',
        cargo = '$this->cargo',
        email = '$this->email',
        contraseña = '$this->contraseña',
        estado_usuario = '$this->estado',
        ID_Perfil = '$this->ID_Perfil'
        where ID_Usuario = '$this->ID_Usuario'";
  
        $con = new connection();
        $rs = $con->execute($sql);
        $con->close();
        
        return $rs;
    }

}
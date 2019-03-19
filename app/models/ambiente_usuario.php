<?php

require_once '../db/Connection.php';


class ambienteUsuario{
    public $id_amsu;
    public $id_ambiente;
    public $id_usuario;
    public $fecha;
    public $hora;


    public static function getAll(){
        $sql="select * from ambiente_usuario";
        $con = new Connection();
        $rs = $con->query($sql);
        $con->close();

        return $rs;
    }

    public static function delete ($id_amsu){
        $sql = "delete from ambiente_usuario where id_amsu = '$id_amsu'";

        $con = new Connection();
        $rs = $con->execute($sql);
        $con->close();

        return $rs;

    }

    public function update(){
        $sql = "update ambiente_usuario set         
        id_ambiente='$this->id_ambiente',
        id_usuario='$this->id_usuario',
        fecha='$this->fecha'       
        hora='$this->hora'       
        where id_amsu='$this->id_amsu'";

        $con = new Connection();
        $rs = $con->execute($sql);
        $con->close();

        return $rs;
    }    

    public function create(){
        $sql = "insert into ambiente_usuario values ('$this->id_amsu',
        '$this->id_ambiente',
        '$this->id_usuario',
        '$this->fecha',
        '$this->hora')";
        

        $con = new Connection();
        $rs = $con->execute($sql);
        $con->close();

        return $rs;
    }

    public static function findById($id_amsu){
        $sql = "select * from ambiente_usuario where nombre = '$id_amsu'";

        $con = new Connection();
        $rs = $con->query($sql);
        $con->close();

        return $rs;
    }




}
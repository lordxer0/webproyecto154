<?php

require_once '../db/Connection.php';

class ambiente {    
    public $id_ambiente;
    public $nombre;
    public $ubicacion;
    public $estado;
    public $tipo_am;
    public $id_sede;
   


    public static function getAll(){
        $sql = "select * from ambiente";

        $con = new Connection();
        $rs = $con->query($sql);
        $con->close();

        return $rs;
    }


    public static function delete ($id_ambiente){
        $sql = "delete from ambiente where id_ambiente = '$id_ambiente'";

        $con = new Connection();
        $rs = $con->execute($sql);
        $con->close();

        return $rs;

    }

    public function update(){
        $sql = "update ambiente set         
        nombre='$this->nombre',
        ubicacion='$this->ubicacion',
        estado='$this->estado'       
        tipo_am='$this->tipo_am'       
        id_sede='$this->id_sede'       
        where id_ambiente='$this->id_ambiente'";

        $con = new Connection();
        $rs = $con->execute($sql);
        $con->close();

        return $rs;
    }    

    public function create(){
        $sql = "insert into ambiente values ('$this->id_ambiente',
        '$this->nombre',
        '$this->ubicacion',
        '$this->estado',
        '$this->tipo_am',
        '$this->id_sede')";
        

        $con = new Connection();
        $rs = $con->execute($sql);
        $con->close();

        return $rs;
    }

    public static function findByCodigo($id_ambiente){
        $sql = "select * from ambiente where id_ambiente = '$id_ambiente'";

        $con = new Connection();
        $rs = $con->query($sql);
        $con->close();

        return $rs;
    }

}
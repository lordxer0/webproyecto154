<?php

require_once '../db/Connection.php';

class consultas {

    public $nombre;
    public $horario;
    public $ambiente;
    public $fecha;

    public static function getAll(){
        $sql = "select u.nombre_usuario, 
        a.nombre_ambiente,
        au.fecha,
        au.hora
        from ambiente_usuario au
        join usuario u
        on au.ID_Usuario = u.ID_Usuario
        join ambiente a
        on au.ID_Ambiente = a.ID_Ambiente";

        $con = new Connection();
        $rs = $con->query($sql);
        $con->close();

        return $rs;
    }

    public function create(){
        $sql = "insert into ambiente_usuario values ('null',
        '$this->id_ambiente',
        '$this->id_usuario',
        '$this->fecha',
        '$this->hora')";        

        $con = new Connection();
        $rs = $con->execute($sql);
        $con->close();

        return $rs;
    }
}
<?php

    require_once '../db/Connection.php';
    class Alarma{
        public $id_alarma;
        public $tipo;
        public $descripcion;
        public $nombre;
        

        public function consultar(){
            $sql="select * from alarma";
            $con= new Connection();
            $rs=$con->query($sql);
            $con->close();
            return $rs;
        }
        public static function eliminar($id_alarma){
            $sql="delete from alarma where ID_Alarma='$id_alarma'";
            $con= new Connection();
            $rs=$con->execute($sql);
            $con->close();
            return $rs;
        }
        



    }



?>
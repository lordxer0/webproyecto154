<?php

require_once '../db/connection.php';

class perfil{

    public $ID_Perfil;
    public $nombre;
    public $estado;

    public static function getAll(){

        $sql="select *from perfil";
        
        $con= new connection();
        $rs= $con->query($sql);
        $con->close();
   
        return $rs;
   
       }
   
       public static function findByID_Perfil($ID_Perfil){
           $sql="select *from perfil where ID_Perfil='$ID_Perfil'";
   
           $con= new connection();
           $rs= $con->query($sql);
           $con->close();
   
           return $rs;
   
       }
   
       public static function delete($ID_Perfil){
           $sql="delete from perfil where ID_perfil='$ID_Perfil'";
   
           $con =new connection();
           $rs = $con->execute($sql);
           $con->close();
   
           return $rs;
   
       }
   
       public function update(){
           $sql="update perfil set
           ID_Perfil='$this->ID_Perfil',
           nombre='$this->nombre',
           estado='$this->estado'
           where ID_Perfil='$this->ID_Perfil'";
   
           $con = new connection();
           $rs= $con->execute($sql);
           $con->close();
   
           return $rs;
   
       }
   
       public function create(){
   
           $sql="insert into perfil values('',
           '$this->ID_Perfil',
           '$this->nombre',
           '$this->estado')";
   
           $con = new connection();
           $rs= $con->execute($sql);
           $con->close();
   
           return $rs;
   
       }
   
   

}
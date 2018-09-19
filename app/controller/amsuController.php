<?php

require_once '../models/ambiente_usuario.php';


class amsuController{
    public function __construct(){
        $action = isset($_GET["action"]) ? $_GET["action"] : "all";
        if(method_exists($this, $action)){
            $this->$action();
        }else{
            $this->error();
        }
    }

    public function all(){
        $amsu = ambienteUsuario::getAll();        
        include '../../public/views/ambienteusuario/index.php';
    }

    public function create(){
        if(isset($_POST["flag"])){
            $amsu = new ambienteUsuario();
            $amsu->id_amsu=$_POST["id_amsu"];
            $amsu->id_ambiente=$_POST["id_ambiente"];
            $amsu->id_usuario=$_POST["id_usuario"];
            $amsu->fecha=$_POST["fecha"];
            $amsu->hora=$_POST["hora"];

            $res = $amsu->create();

            if($res==1){
                $msg= "Se ha creado";
            }else{
                $msg= "Error al insertar";
            }
            $amsu = ambienteUsuario::getAll();
            include '';
        }else{
            include '';
        }
    }

    public function update(){
        if(isset($_GET["id_amsu"])){
            $id_amsu = $_GET["id_amsu"];
            $amsu = ambienteUsuario::findById($id_amsu);
            
            if($amsu != null){
                $amsu = $amsu->fetch_assoc();
                include '';
            }else{
                $msg= "No existe";
                $amsu = ambienteUsuario::getAll();
                include '';
            }
        }else{
            $amsu = new ambienteUsuario();
            $amsu->id_amsu=$_POST["id_amsu"];
            $amsu->id_ambiente=$_POST["id_ambiente"];
            $amsu->id_usuario=$_POST["id_usuario"];
            $amsu->fecha=$_POST["fecha"];
            $amsu->hora=$_POST["hora"];

            $res = $amsu->update();
            if($res==1){
                $msg = "actualizado";
            }else{
                $msg = "no actualizado";
            }
            $amsu = ambienteUsuario::getAll();
            include '';
        }
    }

    public function delete(){
        $id_amsu = isset($_GET["id_amsu"]) ? $_GET["id_amsu"] : 0;
        
        if(ambienteUsuario::delete($id_amsu)){
           $msg= "eliminado";
        }else{
           $msg= "Error al eliminar";
        }
 
        $amsu = ambienteUsuario::getAll();
        include '';
    }

    public function error(){
        echo "NO EXISTE LA FUNCION ";
    }
}
new amsuController();
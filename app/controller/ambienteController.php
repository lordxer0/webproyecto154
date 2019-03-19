<?php

require_once '../models/ambiente.php';


class ambienteController{
    public function __construct(){
        $action = isset($_GET["action"]) ? $_GET["action"] : "all";
        if(method_exists($this, $action)){
            $this->$action();
        }else{
            $this->error();
        }
    }

    public function all(){
        $ambientes = ambiente::getAll();        
        include '../../public/vista/interfaz/indexAmbiente.php';
    }

    public function create(){
        if(isset($_POST["flag"])){
            $ambientes = new ambiente();
            $ambientes->id_ambiente=$_POST["id_ambiente"];
            $ambientes->nombre=$_POST["nombre"];
            $ambientes->ubicacion=$_POST["ubicacion"];
            $ambientes->estado=$_POST["estado"];
            $ambientes->tipo_am=$_POST["tipo_am"];
            $ambientes->id_sede=$_POST["id_sede"];

            $res = $ambientes->create();

            if($res==1){
                $msg= "Se ha creado";
            }else{
                $msg= "Error al insertar";
            }
            $ambientes = ambiente::getAll();
            include '';
        }else{
            include '';
        }
    }

    public function update(){
        if(isset($_GET["id_ambiente"])){
            $id_ambiente = $_GET["id_ambiente"];
            $ambientes = ambiente::findById($id_ambiente);
            
            if($ambientes != null){
                $ambientes = $ambientes->fetch_assoc();
                include '';
            }else{
                $msg= "No existe";
                $ambientes = ambiente::getAll();
                include '';
            }
        }else{
            $ambientes = new ambiente();
            $ambientes->id_ambiente=$_POST["id_ambiente"];
            $ambientes->nombre=$_POST["nombre"];
            $ambientes->ubicacion=$_POST["ubicacion"];
            $ambientes->estado=$_POST["estado"];
            $ambientes->tipo_am=$_POST["tipo_am"];
            $ambientes->id_sede=$_POST["id_sede"];

            $res = $ambientes->update();
            if($res==1){
                $msg = "actualizado";
            }else{
                $msg = "no actualizado";
            }
            $ambientes = ambiente::getAll();
            include '';
        }
    }

    public function delete(){
        $id_ambiente = isset($_GET["id_ambiente"]) ? $_GET["id_ambiente"] : 0;
        
        if(ambiente::delete($id_ambiente)){
           $msg= "eliminado";
        }else{
           $msg= "Error al eliminar";
        }
 
        $ambientes = ambiente::getAll();
        include '';
    }

    public function error(){
        echo "NO EXISTE LA FUNCION ";
    }
}
new ambienteController();
<?php

require_once '../models/consulta.php';


class consultaController{
    public function __construct(){
        $action = isset($_GET["action"]) ? $_GET["action"] : "all";
        if(method_exists($this, $action)){
            $this->$action();
        }else{
            $this->error();
        }
    }

    public function all(){
        $consultas = consultas::getAll();
        include '../../public/views/ambienteusuario/indexConsulta.php';
    }


    public function create(){
        if(isset($_POST["flag"])){
           $consulta = new consultas();
           $consulta->id_ambiente= $_POST["id_ambiente"];
           $consulta->id_usuario= $_POST["id_usuario"];
           $consulta->fecha= $_POST["fecha"];
           $consulta->hora= $_POST["hora"];
            

             $res= $consulta->create();
             if($res == 1){
                 $msg="CREADO EXITOSAMENTE";
             }else{
                 $msg="NO CREADO";
             }
             $consulta = consultas::getAll();
             include '../../public/views/ambienteusuario/indexConsulta.php';

         }else{
             include '../../public/views/ambienteusuario/indexConsulta.php';
         }
    }

}
new ConsultaController();

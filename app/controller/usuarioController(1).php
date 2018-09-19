<?php

require_once '../models/usuario.php';

class usuarioController{

    public function __construct() {
        $action = isset($_GET["action"]) ? $_GET["action"] : "all";

        if (method_exists($this, $action)){
            $this->$action();

        }else{
            $this->error();
        }


    }

    public function all(){
        $usuarios = usuario::getAll();
        include '../../public/vista/interfaz/createAdmin.php';

    }

    public function error(){
        echo "El curso no existe";
    }

     public function create(){
        if(isset($_POST["flag"])){
           $usuarios = new usuario();
           $usuarios->id_usuario= $_POST["id_usuario"];
            $usuarios->nombre= $_POST["nombre"];
            $usuarios->fecha_nacimiento= $_POST["fecha_nacimiento"];
            $usuarios->genero= $_POST["genero"];
            $usuarios->telefono= $_POST["telefono"];
            $usuarios->cargo= $_POST["cargo"];
            $usuarios->email= $_POST["email"];
            $usuarios->contraseña= $_POST["contraseña"];
            $usuarios->estado= $_POST["estado"];
            $usuarios->id_perfil= $_POST["id_perfil"];

             $res= $usuarios->create();
             if($res == 1){
                 $msg="CURSO CREADO EXITOSAMENTE";
             }else{
                 $msg="CURSO NO CREADO";
             }
             $usuarios = usuario::getAll();
             include '../../public/vista/interfaz/createAdmin.php';

         }else{
             include '../../public/vista/interfaz/createAdmin.php';
         }
    }

    public function update(){
        if(isset($_GET["id_usuario"])){
            $id_usuario = $_GET["id_usuario"];
            $usuarios = usuario::findById($id_usuario);
            
            if($ambientes != null){
                $usuarios = $usuarios->fetch_assoc();
                include '';
            }else{
                $msg= "No existe";
                $usuarios = usuario::getAll();
                include '';
            }
        }else{
            $usuarios = new usuario();
            $usuarios->id_usuario=$_POST["id_usuario"];
            $usuarios->nombre=$_POST["nombre"];
            $usuarios->fecha_nacimiento=$_POST["fecha_nacimiento"];
            $usuarios->genero=$_POST["genero"];
            $usuarios->telefono=$_POST["telefono"];
            $usuarios->cargo=$_POST["cargo"];
            $usuarios->email=$_POST["email"];
            $usuarios->contraseña=$_POST["contraseña"];
            $usuarios->estado=$_POST["estado"];
            $usuarios->id_perfil=$_POST["id_perfil"];

            $res = $usuarios->update();
            if($res==1){
                $msg = "actualizado";
            }else{
                $msg = "no actualizado";
            }
            $usuarios = usuario::getAll();
            include '';
        }
    }

    public function delete(){
        $id_usuario = isset($_GET["id_usuario"]) ? $_GET["id_usuario"] : 0;
        
        if(usuario::delete($id_usuario)){
           $msg= "eliminado";
        }else{
           $msg= "Error al eliminar";
        }
 
        $usuarios = usuario::getAll();
        include '';
    }

    public function error(){
        echo "NO EXISTE LA FUNCION ";
    }
}
new usuarioController();
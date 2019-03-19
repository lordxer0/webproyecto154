<?php

require_once '../models/Usuario.php';

class UsuarioController
{
    public function __construct()
    {

        $action = isset($_GET["action"]) ? $_GET["action"] : "listado";
        if(method_exists($this,$action)){
            $this->$action();
        }else{
            $this->error();
        }

    }

    public function listado(){
        $usuario = Usuario::consultar();
        include '../../public/views/principal/Principal.php';
    }

    public function create(){

        if(isset($_POST["creado"])){
            
            $usuario = new Usuario();

            $usuario -> setNombre($_POST["nombre"]);            
            $usuario -> setDireccion($_POST["direccion"]);            
            $usuario -> setTelefono($_POST["telefono"]);            
            $usuario -> setCorreo($_POST["correo"]);         
            
            $res = $usuario ->registro();


            if($res == 1){
                $msg = "Usuario creado exitosamente";
            } else{
                $msg = "Error al crear el usuario";
            }

            $usuario = Usuario::consultar();

            include '../../public/views/principal/Principal.php';

        }else{
            include '../../public/views/principal/CreateU.php';
        }

    }

    public function actualizar(){
        
        if(isset($_GET["id"])){
            $id = $_GET["id"];

            $usuario = Usuario::buscarPorId($id);
            if($usuario != null){

                $usuario = $usuario-> fetch_assoc();
                include '../../public/views/principal/UpdateU.php'; 
            } else{
                $msg = "no existe el usuario a actualizar";
                $usuario = Usuario::consultar();
                include '../../public/views/principal/Principal.php';
            }

        }else{

            $usuario = new Usuario();

            $usuario -> setId($_POST["id"]);
            $usuario -> setNombre($_POST["nombre"]);            
            $usuario -> setDireccion($_POST["direccion"]);            
            $usuario -> setTelefono($_POST["telefono"]);            
            $usuario -> setCorreo($_POST["correo"]);         
            
            $res = $usuario -> actualizar();

            if($res ==1){
                $msg = "Usuario actualizado correctamente";
            }else{
                $msg = "Usuario no actualizado";
            }

            $usuario = Usuario::consultar();
                include '../../public/views/principal/Principal.php';
        }

    }

    public function eliminar(){
        
        $id =   isset($_GET["id"]) ? $_GET["id"]:0;

        if(Usuario::eliminar($id)){
            $msg = "Usuario eliminado exitosamente";
        }else{
            $msg = "Error al eliminar el usuario";
        }

        $usuario = Usuario::consultar();

            include '../../public/views/principal/Principal.php';
    }


    public function error(){
        echo("404 error consulte a su quiropractico mas cercano");
    }
}
new UsuarioController()
?>

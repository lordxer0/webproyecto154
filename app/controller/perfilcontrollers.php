<?php

require_once '../models/perfil.php';

class perfilcontrollers{
//paginas de la url

    public function __construct(){
       $action = isset($_GET["action"]) ? $_GET["action"]: "all";//poner el all para poner la pagina inicial

       if(method_exists($this, $action)){
           $this->$action();
       }else{
           $this->error();
       }
      
    }

    public function all(){
        
        $perfil=perfil::getAll();
        include '../../public/views/perfil/index.php';
    }

    public function create(){

        if (isset($_POST["flag"])) {
            
           $perfil = new perfil();
           $perfil->ID_Perfil = $_POST["ID_Perfil"];
           $perfil->nombre = $_POST["nombre"];
           $perfil->estado = $_POST["estado"];
          
            $res = $perfil->create();// el error
           if ($res == 1) {
                $msg = "perfil creado exitosamente";
           }else{
               $msg = "perfil no creado";
           }

           $perfil= perfil::getAll();
           include '../../public/views/perfil/index.php';
        }else{
          
            include '../../public/views/perfil/create.php';

        }
 }


    //una prueba.
    public function update(){
        if (isset($_GET["ID_Perfil"])) {
            $ID_Perfil = $_GET["ID_Perfil"];

            $perfil=perfil::findByid_Perfil($ID_Perfil);
            if ($perfil !=null){
                $perfil=$perfil->fetch_assoc();
                include '../../public/views/perfil/update.php';
            }else{
                $msg = "no existe el usuario";
                $perfil = perfil::getAll();
                include '../../public/views/perfil/index.php';
            }
        }else{
            $perfil=new perfil();
            $perfil->ID_perfil=$_POST["ID_Perfil"];
            $perfil->nombre = $_POST["nombre"];
            $perfil->estado = $_POST["estado"];
          

            $res=$perfil->update();

            if ($res == 1) {
                $msg="correcto";
                $perfil = perfil::getAll();
                include '../../public/views/perfil/index.php';
            }else{
                $msg ="no esta corecto";
                $perfil = perfil::getAll();
                include '../../public/views/perfil/index.php';
            }
           

        }

    }

    public function delete(){

        $ID_Perfil=isset($_GET["ID_Perfil"]) ? $_GET["ID_Perfil"] :0;

        if (ID_Perfil::delete($ID_Perfil)){
            $msg="perfil eliminado";
        }else{
            $msg="perfil no eliminado";
        }

        $perfil = perfil::getAll();
        include '../../public/views/perfil/index.php';

    }

    public function error(){
        echo"no exite la funcion papu";

    }
}


new perfilcontrollers();
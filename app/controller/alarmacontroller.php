<?php

require_once '../models/alarma.php';

class alarmacontroller{
    public function __construct()  {

        $action = isset($_GET["action"]) ? $_GET["action"] : "listado";
        if (method_exists($this, $action)) {
            $this->$action();
        } else {
            $this->error();
        }

    }
    public function listado(){
        $alarma = Alarma::consultar();
        include '../../public/views/alarma/IndexAlarma.php';
    }
    public function eliminar() {

        $id_alarma = isset($_GET["ID_Alarma"]) ? $_GET["ID_Alarma"] : 0;

        if (Alarma::eliminar($id_alarma)) {
            $msg = "alarma eliminada exitosamente";
        } else {
            $msg = "Error al eliminar la alarma";
        }

        $curso = Alarma::consultar();

        include '../../public/views/alarma/IndexAlarma.php';
    }

}
new alarmacontroller();
?>
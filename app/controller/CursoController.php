<?php

require_once '../models/Curso.php';

class CursoController
{
    public function __construct()
    {

        $action = isset($_GET["action"]) ? $_GET["action"] : "listado";
        if (method_exists($this, $action)) {
            $this->$action();
        } else {
            $this->error();
        }

    }

    public function listado()
    {
        $curso = Curso::consultar();
        include '../../public/views/principal/PrincipalC.php';
    }

    public function create()
    {

        if (isset($_POST["creado"])) {

            $curso = new Curso();

            $curso->setCodigo($_POST["codigo"]);
            $curso->setNombre($_POST["nombre"]);
            $curso->setDescripcion($_POST["descripcion"]);
            $curso->setCupo($_POST["cupo"]);
            $curso->setFechaInicio($_POST["fecha_inicio"]);
            $curso->setFechaFinal($_POST["fecha_final"]);
            

            $res = $curso->registro();


            if ($res == 1) {
                $msg = "Usuario creado exitosamente";
            } else {
                $msg = "Error al crear el usuario";
            }

            $curso = Curso::consultar();

            include '../../public/views/principal/PrincipalC.php';

        } else {
            include '../../public/views/principal/CreateC.php';
        }

    }

    public function actualizar()
    {


        if (isset($_GET["codigo"])) {
            $codigo = $_GET["codigo"];

            $curso = Curso::buscarPorCodigo($codigo);
            if ($curso != null) {

                $curso = $curso->fetch_assoc();
                include '../../public/views/principal/UpdateC.php';
            } else {
                $msg = "no existe el curso a actualizar";
                $curso = Curso::consultar();
                include '../../public/views/principal/PrincipalC.php';
            }

        } else {

            $curso = new Curso();

            $curso->setCodigo($_POST["codigo"]);
            $curso->setNombre($_POST["nombre"]);
            $curso->setCupo($_POST["cupo"]);
            $curso->setDescripcion($_POST["descripcion"]);
            $curso->setFechaInicio($_POST["fechaInicio"]);
            $curso->setFechaFinal($_POST["fechaFinal"]);

            $res = $curso->actualizar();

            if ($res == 1) {
                $msg = "curso actualizado correctamente";
            } else {
                $msg = "curso no actualizado";
            }

            $curso = Curso::consultar();
            include '../../public/views/principal/PrincipalC.php';
        }

    }

    public function eliminar()
    {

        $codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : 0;

        if (Curso::eliminar($codigo)) {
            $msg = "Curso eliminado exitosamente";
        } else {
            $msg = "Error al eliminar el Curso";
        }

        $curso = Curso::consultar();

        include '../../public/views/principal/PrincipalC.php';
    }


    public function error()
    {
        include "../../public/views/errores/Error404.html";
    }
}
new CursoController()
?>

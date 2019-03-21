<?php

require_once "../models/usuario.php";

class usuariocontroller{

    public function __construct(){
        $action = isset($_GET["action"]) ? $_GET["action"] : "all";

        if(method_exists($this, $action)){
            $this->$action();
        } else{
            $this->error();
        }
    }

    public function all(){
        $usuarios = usuario::getall();
        include '../../public/views/usuarios/listaUsuario.php';
    }

    public function create(){
		if (isset($_POST["val"])){
			$usuario = new usuario();
			$usuario->ID_Usuario = $_POST["id"];
			$usuario->nombre = $_POST["nombre"];
			$usuario->fecha_nacimiento = $_POST["fecha"];
			$usuario->genero = $_POST["genero"];
			$usuario->telefono = $_POST["tel"];
			$usuario->cargo = $_POST["cargo"];
			$usuario->email = $_POST["email"];
			$usuario->contraseña = $_POST["contraseña"];
			$usuario->estado = $_POST["estado"];
			$usuario->ID_Perfil = $_POST["perfil"];

			$res = $usuario->create();
			if ($res == 1) {
				$msg = "Producto creada con exito";
			} else{
				$msg = "Error al crear el producto";
			}

			$usuarios = usuario::getall();
			include '../../public/views/usuarios/listaUsuario.php';
		} else{
			include '../../public/views/usuarios/CrearUsuario.php';
		}
	}

	
	public function update(){
		
		if(isset($_POST["id"])){
			$ID_Usuario = $_POST["id"];
			$usuarios = usuario::findced($ID_Usuario);
			if ($usuarios != null) {
				$usuarios = $usuarios->fetch_assoc();
				include '../../public/views/usuarios/EditarUsuario.php';
			} else {
				$usuarios = Usuario::getall();
				include '../../app/controller/usuariocontroller.php';
			}
		} else{
			$usuarios = new usuario();
			$usuarios->ID_Usuario = $_POST["id"];
			$usuarios->nombre = $_POST["nombre"];
			$usuarios->fecha_nacimiento = $_POST["fecha"];
			$usuarios->genero = $_POST["genero"];
			$usuarios->telefono = $_POST["tel"];
			$usuarios->cargo = $_POST["cargo"];
			$usuarios->email = $_POST["email"];
			$usuarios->contraseña = $_POST["contraseña"];
			$usuarios->estado = $_POST["estado"];
			$usuarios->ID_Perfil = $_POST["perfil"];

			$res = $usuarios->update();
			if ($res == 1) {
				$msg = "Producto actualizado correctamente";
			} else{
				$msg = "Error al actualizar el producto";
			}

			$usuarios = Usuario::getall();
			include '../../app/controller/usuariocontroller.php';
		}
	}
}
 new usuariocontroller();
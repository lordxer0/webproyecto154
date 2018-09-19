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
        include '../../public/views/usuarios/IndexUsuario.php';
    }

    public function create(){
		if (isset($_POST["val"])){
			$usuario = new usuario();
			$usuario->cedula = $_POST["cedula"];  //la asignacion es de la clase cliente y se coloca como se definio 
			$usuario->nombre_usuario = $_POST["nombre_usuario"];	//dentro del POST se coloca el name de la columna definida de el archivo create
			$usuario->contraseña = $_POST["contraseña"];
			$usuario->correo = $_POST["correo"];
			$usuario->fecha = $_POST["fecha"];
			$usuario->genero = $_POST["genero"];
			$usuario->cargo = $_POST["cargo"];
			$usuario->telefono = $_POST["telefono"];
			$usuario->estado = $_POST["estado"];

			$res = $usuario->create();
			if ($res == 1) {
				$msg = "Producto creada con exito";
			} else{
				$msg = "Error al crear el producto";
			}

			$usuarios = usuario::getall();
			include '../../public/views/usuarios/IndexUsuario.php';
		} else{
			include '../../public/views/usuarios/talvez.php';
		}
	}

	/*
	public function update(){
		
		if(isset($_GET["codigo"])){
			$codigo = $_GET["codigo"];
			$producto = producto::findcodi($codigo);
			if ($producto != null) {
				$producto = $producto->fetch_assoc();
				include '../../public/views/producto/update.php';
			} else {
				$msg = "El producto no existe para editar";
				$productos = producto::getall();
				include '../../public/views/producto/index.php';
			}
		} else{

			$producto = new producto();
			$producto->codigo = $_POST["codigo"];  //la asignacion es de la clase usuario y se coloca como se definio 
			$producto->nombre = $_POST["nombre"];	//dentro del POST se coloca el name de la columna definida de el archivo create
			$producto->descripcion = $_POST["descripcion"];
			$producto->precio_unitario = $_POST["precio_unitario"];

			$res = $producto->update();

			if ($res == 1) {
				$msg = "Producto actualizado correctamente";
			} else{
				$msg = "Error al actualizar el producto";
			}

			$productos = producto::getall();
			include '../../public/views/producto/index.php';
		}
	}

	public function delete(){
		
		$codigo = isset($_GET["codigo"]) ? $_GET["codigo"] : 0;

		if(producto::delete($codigo)){
			$msg = "Producto eliminado con exito";
		} else{
			$msg = "ERROR AL ELIMINAR EL PRODUCTO";
		}

		$productos = producto::getall();
		include '../../public/views/producto/index.php';
	}
*/
}
 new usuariocontroller();
<?php

require_once '../models/componente.php';
require_once '../models/ambiente.php';

class componenteController {

	public function __construct(){
		
		$action = isset($_GET["action"]) ? $_GET["action"] : "all"; //isset devuelve un true o false si la variable se encuetra con datos, (?) significa que si existe se asignara HOLA. (:) es por si no existe.

		if (method_exists($this, $action)) {
			$this->$action();
		} else{
			$this->error();
		}
	}

	public function all(){
		$componentes = componente::getall();
		$ambientes = ambiente::getAll();
		//echo "<pre>";
		// print_r($componentes->fetch_assoc());
		include '../../public/views/componentes/indexComponente.php';
		
	}

	public function updateCerrar(){
		if(isset($_GET["ID_Componentes"])){
			
			$abrirCerrar;
			if($_GET["abrir_cerrar"] == "OFF"){
				$abrirCerrar = "ON";
			}else{
				$abrirCerrar = "OFF";
			}

			$componente = new componente();
			$componente->abrir_cerrar = $abrirCerrar;
			$componente->ID_Componentes = $_GET["ID_Componentes"];

			$res = $componente->updateCerrar();
			if($res == 1){
				$msg = "componente modificado";
				$componentes = componente::getall();
		$ambientes = ambiente::getAll();
				include '../../public/views/componentes/indexComponente.php';
			}else{
				$msg = "Error al editar usuario";
				$componentes = componente::getall();
		$ambientes = ambiente::getAll();
				include '../../public/views/componentes/index.php';
			}
		}

	}

	public function updateEstado(){
		if(isset($_GET["ID_Componentes"])){
			
			$estadoComponente;
			if($_GET["estado"] == "activo"){
				$estadoComponente = "inactivo";
			}else{
				$estadoComponente = "activo";
			}

			$componente = new componente();
			$componente->estado = $estadoComponente;
			$componente->ID_Componentes = $_GET["ID_Componentes"];

			$res = $componente->updateEstado();
			if($res == 1){
				$msg = "componente modificado";
				$componentes = componente::getall();
		$ambientes = ambiente::getAll();
				include '../../public/views/componentes/indexComponente.php';
			}else{
				$msg = "Error al editar usuario";
				$componentes = componente::getall();
		$ambientes = ambiente::getAll();
				include '../../public/views/componentes/index.php';
			}
		}

	}

	public function delete(){
		
		$id = isset($_GET["id"]) ? $_GET["id"] : 0;
		if(componente::delete($id)){
			$msg = "componente eliminado";
		}else{
			$msg = "Error al eliminar";
		}

		$componentes = componente::getall();
		include '../../public/views/componentes/indexComponente.php';
	}

	public function create(){
		if(isset($_POST["opcion"])){
			
			$componente = new componente();
			$componente->ID_Componentes = $_POST["ID_componente"];
			$componente->estado = $_POST["estado"];
			$componente->tipo = $_POST["Tipo_componente"];
			$componente->nombre = $_POST["nombre"];
			$componente->ID_Ambiente = $_POST["ubicacion"];
			$componente->identificador = $_POST["identificador"];
			$componente->abrir_cerrar = "cerrar";

			$res = $componente->create();
			if($res == 1){
				$msg = "componente creado";
			}else{
				$msg = "error al crear componente";
			}
		$componentes = componente::getall();
		$ambientes = ambiente::getAll();
		//echo "<pre>";
		// print_r($componentes->fetch_assoc());
		include '../../public/views/componentes/indexComponente.php';
		}
	}

	public function error(){
		echo "No existe la funcion";
	}

}

new componenteController();
<?php

require_once '../db/connection.php';

class componente {

	public $ID_Componentes;
	public $estado;
	public $tipo;
	public $nombre;
	public $ID_Ambiente;
	public $identificador;
	public $abrir_cerrar;

public static function getall(){
	$sql = "select * from componentes";

	$con = new connection();
	$rs = $con->query($sql); 
	$con->close();

	return $rs;
}

public static function findbyID($ID_Componentes){
	$sql = "select * from componentes where ID_Componentes = '$ID_Componentes' ";

	$con = new connection();
	$rs = $con->query($sql);
	$con->close();

	return $rs;
}

public static function delete($ID_Componentes){
	$sql = "delete from componentes where ID_Componentes = '$ID_Componentes' ";
//echo $sql;
	$con = new connection();
	$rs = $con->execute($sql);
	$con->close();

	return $rs;
}

public function create(){
	$sql = "insert into componentes values($this->ID_Componentes,		
	'$this->estado',
	'$this->tipo',
	'$this->nombre',
	$this->ID_Ambiente,
	$this->identificador,
	'$this->abrir_cerrar')";
//echo $sql;
	$con = new connection();
	$rs = $con->execute($sql);
	$con->close();

	return $rs;
}

public function update(){
	$sql = "update componentes set estado = '$this->estado',
	tipo = '$this->tipo',
	nombre = '$this->nombre',
	ID_Ambiente = '$this->ID_Ambiente',
	identificador = '$this->identificador',
	abrir_cerrar = '$this->abrir_cerrar' 
	WHERE ID_Componentes = '$this->ID_Componentes'";
echo $sql;
	$con = new connection();
	$rs = $con->execute($sql);
	$con->close();

	return $rs;

}

public function updateCerrar(){
	$sql = "update componentes set abrir_cerrar = '$this->abrir_cerrar' 
	WHERE ID_Componentes = '$this->ID_Componentes'";
//echo $sql;
	$con = new connection();
	$rs = $con->execute($sql);
	$con->close();

	return $rs;
}

public function updateEstado(){
	$sql = "update componentes set estado = '$this->estado' 
	WHERE ID_Componentes = '$this->ID_Componentes'";
//echo $sql;
	$con = new connection();
	$rs = $con->execute($sql);
	$con->close();

	return $rs;
}

}
// $usu = componente::getall();
// echo "<pre>";
// while ($row=$usu->fetch_assoc()) {
// print_r($row);
// };

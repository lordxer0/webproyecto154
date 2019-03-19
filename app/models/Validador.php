
<?php

require_once '../db/Connection.php';


session_start();


if($_POST){
	$username = $_POST['usuarios'];
	$password = $_POST['contraseñas'];

	$name=$username[0];
	$pass=$password[0];


	$sql = "select nombre,contraseña,cargo from usuario where nombre = '$name'";

	$conexion = new Connection();
	$rs = $conexion->query($sql);

	if($rs !=null){
		$row = $rs->fetch_assoc();

		if ($row['nombre']==$name && $row['contraseña']==$pass) { 
			if($row['cargo']=="administrador"){

				$_SESSION['administrador'];
				header('location: /domoticSENA/public/views/principal/MenuAdministrador.php');
				echo "<br><br><a href=panel-control.php>Panel de Control</a>"; 

			}else{
				$_SESSION['instructor'];
				header('location: /domoticSENA/public/views/principal/MenuInstructor.php');
				echo "<br><br><a href=panel-control.php>Panel de Control</a>";
			}
		}
	}else{
		include 'Validador.php';
	}
}

?>

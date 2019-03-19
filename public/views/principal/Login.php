<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<link rel="stylesheet" href="/domoticSENA/public/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	
</head>

	
	<body style="font-family: 'arial' ; color: #238276; background-color: #a7ffeb;"><br><br>
	<center><img src="/domoticSENA/public/imgs/logos/Logo_DomoticSena.png" style="height:250px;width:250px;"></center><br>
	<center>
			
			<form action="../../../app/models/Validador.php" method="POST">
			<input type="hidden" name="cargo" value="<?php echo $usuarios["cargo"]; ?>">

				<font size="5"><b>Nombre Usuario </b></font><br>	
				<?php 
					echo "<input  type='text' name='usuarios[]' style='height:20px;width:220px;' required='required'><br><br>";
				?>
				
				<font size="5"><b>Contraseña</b></font><br>		
				<?php
					echo "<input type='password' name='contraseñas[]' style='height:20px;width:220px;' required='required' ><br>"
				?>

				<font size="2"><b><u>¿Has olvidado tu contraseña?</u></b></font><br><br>
				<button class="btn waves-effect waves-light" type="submit"  name="iniciar" style="font-family: 'arial';">Ingresar</button>
				
			</form>
		</center>
	</body>
	<script src="/domoticSENA/public/js/jquery.min.js"></script>
	<script src="/domoticSENA/public/js/materialize.min.js"></script>
</html>
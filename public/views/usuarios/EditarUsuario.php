<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/domoticsena/public/css/materialize.min.css">
    <title>Document</title>
</head>
<body style="font-family: 'arial' ; color: #238276;">

	<center>
		<h1>Crear Usuario</h1>
	</center>
	<br>
  <div class="container" style="margin-left: 390px; ">                    
  	<form action="/domoticSENA/app/controller/usuariocontroller.php?action=create" method="POST" accept-charset="utf-8">
  		<input type="hidden" name="val" value="create">
  		<div class="row">
		<div class="input-field col s7">
	      <input type="text" class="validate" name="id" value="<?php echo $usuarios['id'] ?>">
	      <label class="active" >Cedula</label>
	    </div>

	    <div class="input-field col s7">
	      <input type="text" class="validate" name="nombre" value="<?php echo $usuarios['nombre'] ?>">
	      <label class="active" >Nombre</label>
	    </div>

	     <div class="input-field col s7">
	      <input type="date" class="validate" name="fecha" value="<?php echo $usuarios['fecha'] ?>">
	      <label class="active" >Fecha de nacimiento</label>
	    </div>

	     <div class="input-field col s7">
	      <input type="text" class="validate" name="genero" value="<?php echo $usuarios['genero'] ?>">
	      <label class="active" >Genero</label>
	    </div>

	     <div class="input-field col s7">
	      <input type="number" class="validate" name="tel" value="<?php echo $usuarios['tel'] ?>">
	      <label class="active" >Telefono</label>
	    </div>

	     <div class="input-field col s7">
	      <input type="text" class="validate" name="cargo" value="<?php echo $usuarios['cargo'] ?>">
	      <label class="active" >Cargo</label>
	    </div>

	    <div class="input-field col s7">
	      <input type="text" class="validate" name="email" value="<?php echo $usuarios['email'] ?>">
	      <label class="active" >Correo</label>
	    </div>

	    <div class="input-field col s7">
	      <input type="text" class="validate" name="contraseña" value="<?php echo $usuarios['contraseña'] ?>">
	      <label class="active" >Contraseña</label>
	    </div>

	    <div class="input-field col s7">
	      <input type="text" class="validate" name="estado" value="<?php echo $usuarios['estado'] ?>">
	      <label class="active" >Estado</label>
	    </div>

	    <div class="input-field col s7">
	      <input type="number" class="validate" name="perfil" value="<?php echo $usuarios['perfil'] ?>">
	      <label class="active" >Id perfil</label>
	    </div>
	    <br>
	 </div>
	 	<button class="btn waves-effect waves-light" style="margin-left: 240px;" type="submit">Insertar
        </button>
	 	<br><br>
  	</form>
  </div>
</body>
</html>


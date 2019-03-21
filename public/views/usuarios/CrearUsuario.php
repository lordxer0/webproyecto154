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
	      <input type="text" class="validate" name="id">
	      <label class="active" >Cedula</label>
	    </div>

	    <div class="input-field col s7">
	      <input type="text" class="validate" name="nombre">
	      <label class="active" >Nombre</label>
	    </div>

	     <div class="input-field col s7">
	      <input type="date" class="validate" name="fecha">
	      <label class="active" >Fecha de nacimiento</label>
	    </div>

	     <div class="input-field col s7">
	      <input type="text" class="validate" name="genero">
	      <label class="active" >Genero</label>
	    </div>

	     <div class="input-field col s7">
	      <input type="number" class="validate" name="tel">
	      <label class="active" >Telefono</label>
	    </div>

	     <div class="input-field col s7">
	      <input type="text" class="validate" name="cargo">
	      <label class="active" >Cargo</label>
	    </div>

	    <div class="input-field col s7">
	      <input type="text" class="validate" name="email">
	      <label class="active" >Correo</label>
	    </div>

	    <div class="input-field col s7">
	      <input type="text" class="validate" name="contraseña">
	      <label class="active" >Contrseña</label>
	    </div>

	    <div class="input-field col s7">
	      <input type="text" class="validate" name="estado">
	      <label class="active" >Estado</label>
	    </div>

	    <div class="input-field col s7">
	      <input type="number" class="validate" name="perfil">
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


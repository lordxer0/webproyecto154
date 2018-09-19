<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/domoticSENA/public/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body >
<div class="row" >
    <div class="col-sm-2 border border-black">
      <label>Usuario</label><br>
      <input type="radio" name="estado" value="ca">Agregar Usuario<br>
			<input type="radio" name="estado" value="so">Eliminar Usuario<br>
			<input type="radio" name="estado" value="un">Consultar usuario<br>	
    </div>
    <div class="col-sm-7">
    <form action="/paz/proyecto/app/controllers/usuariocontroller.php?action=create" method="post">
      <div class="form-group">
       <li><label for="cd">Cedula</label></li>
        <input type="number" id="cd" class="form-control col-sm-9" name="cedula"><br>
       </div>
      <div class="form-group">
        <li><label for="nu">Nombre Usuario</label></li>
        <input type="text" id="nu" class="form-control col-sm-9" name="nombre_usuario"><br>
       </div>
       <div class="form-group">
       <li><label for="con">Contraseña</label></li>
        <input type="text" id="con" class="form-control col-sm-9" name="contraseña"><br>
       </div>
       <div class="form-group">
       <li><label for="ce">Correo Electronico</label></li>
        <input type="email" id="ce" class="form-control col-sm-9" name="correo"><br>
       </div>
       <div class="form-group">
       <li><label for="fecha">Fecha de Nacimiento</label></li>
        <input type="date" id="fecha" class="form-control col-sm-3" name="fecha"><br>
       </div>
       <div class="form-group">
       <li><label for="gen">Genero</label></li>
        <input type="text" id="gen" class="form-control col-sm-9" name="genero"><br>
       </div>
       <div class="form-group">
       <li><label for="car">Cargo</label></li>
        <input type="text" id="car" class="form-control col-sm-9" name="cargo"><br>
       </div>
       <div class="form-group">
       <li><label for="telefono">Telefono</label></li>
        <input type="number" id="telefono" class="form-control col-sm-9" name="telefono"><br>
       </div>
       <div class="form-group">
       <li><label for="estado">Estado</label></li><br>
        <!--<input type="text" id="pm" class="form-control col-sm-5" name="pm"><br>-->
        <input type="radio" name="estado" value="ca">ACTIVO
			  <input type="radio" name="estado" value="so">INACTIVO<br>
       </div>
        <button class="btn btn-dark" type="submit">ENVIAR</button>
    </form>
    </div>
    <div class="col-sm-3 " >
      <div>
        <center><img width="200" height="180" src="/paz/proyecto/public/imgs/usu.jpg"><br>
        <a>cargar imagen</a>
        </center><br><br>
       </div>
    </div>
</body>
</html>


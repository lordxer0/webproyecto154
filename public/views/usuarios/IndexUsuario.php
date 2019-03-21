<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../css/materialize.min.css">
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
    <form action="/domoticSENA/app/controller/usuariocontroller.php?action=create" method="POST">
      <input type="hidden" name="val" value="create">
      <div class="form-group">
       <li><label for="cd">ID_Usuario</label></li>
        <input type="number" id="id" class="form-control col-sm-9" ><br>
       </div>
      <div class="form-group">
        <li><label for="nu">Nombre</label></li>
        <input type="text" id="nombre" class="form-control col-sm-9" ><br>
       </div>
       <div class="form-group">
       <li><label for="con">Fecha Nacimiento</label></li>
        <input type="date" id="fecha" class="form-control col-sm-9" ><br>
       </div>
       <div class="form-group">
       <li><label for="ce">Genero</label></li>
        <input type="text" id="genero" class="form-control col-sm-9" ><br>
       </div>
       <div class="form-group">
       <li><label for="fecha">Telefono</label></li>
        <input type="number" id="tel" class="form-control col-sm-3" ><br>
       </div>
       <div class="form-group">
       <li><label for="gen">Cargo</label></li>
        <input type="text" id="cargo" class="form-control col-sm-9" ><br>
       </div>
       <div class="form-group">
       <li><label for="car">Email</label></li>
        <input type="email" id="email" class="form-control col-sm-9" ><br>
       </div>

       <div class="form-group">
       <li><label for="telefono">Contraseña</label></li>
        <input type="password" id="contraseña" class="form-control col-sm-9" ><br>
       </div>
       <div class="form-group">
       <li><label for="telefono">ID_perfil</label></li>
        <select>
          <option>1</option>
          <option>2</option>
        </select>
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


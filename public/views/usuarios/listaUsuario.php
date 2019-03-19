<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Usuarios</title>
    <link rel="stylesheet" type="text/css" href="/domoticSENA/public/css/materialize.min.css">
</head>
<body  style="font-family: 'arial' ; color: #238276; background-color: #a7ffeb;">

<script>
let d = new Date();
document.body.innerHTML = "<h6>La hora es:  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()
"</h6>"
</script>

<a href="/domoticSENA/public/views/usuarios/IndexUsuario.php" class='waves-effect waves-yellow pink btn'>Agregar</a>
   
<div class="col s10">
      <br><br>

      <table>
        <thead>
        <th>ID_Usuario</th>
        <th>Nombre</th>
        <th>Fecha_nacimiento</th>
        <th>Genero</th>
        <th>Telefono</th>
        <th>Cargo</th>
        <th>Email</th>
        <th>Contraseña</th>
        <th>Estado</th>
        </thead>
        <tbody>

        <?php 
        while ($tabla = $usuarios -> fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $tabla["ID_Usuario"] . "</td>";
          echo "<td>" . $tabla["nombre"] . "</td>";
          echo "<td>" . $tabla["fecha_nacimiento"] . "</td>";
          echo "<td>" . $tabla["genero"] . "</td>";
          echo "<td>" . $tabla["telefono"] . "</td>";
          echo "<td>" . $tabla["cargo"] . "</td>";
          echo "<td>" . $tabla["email"] . "</td>";
          echo "<td>" . $tabla["contraseña"] . "</td>";
          echo "<td>" . $tabla["estado"] . "</td>";
          
          
          echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    </div>
</div>

<script src="/interfase_componentes/public/js/jquery.min.js"></script>
<script src="/interfase_componentes/public/js/materialize.min.js"></script>
<script>
$(document).ready(function(){
    $('select').formSelect();
  });</script>
</body>
</html>
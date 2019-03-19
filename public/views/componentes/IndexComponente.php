<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Componentes</title>
    <link rel="stylesheet" type="text/css" href="/domoticSENA/public/css/materialize.min.css">
</head>
<body  style="font-family: 'arial' ; color: #238276; background-color: #a7ffeb;">

<script>
let d = new Date();
document.body.innerHTML = "<h6>La hora es:  " + d.getHours() + ":" + d.getMinutes() + ":" + d.getSeconds()
"</h6>"
</script>

<!-- <form action="/domoticSENA/app/controllers/ComponenteController.php?action=create" method="post">
<input type="hidden" name="opcion" value="create">
<div class="row">
    <div class="input-field col s2">
    <h6>AGREGAR</h6>
    
    <input type="text" name="ID_componente" placeholder="ID_componente">
    <input type="text" name="Tipo_componente" placeholder="Tipo_componente">

    <select name="ubicacion">

      <option value="" disabled selected>Elige ubicacion</option>

      <?php 
      // while ($combo2 = $ambientes -> fetch_assoc()) {
      //   echo "<option value=" . $combo2["ID_Ambiente"] . ">" . $combo2["nombreambiente"] . "</option>";
      // }
      ?>

    </select>

<select name="estado">
<option value="" disabled selected>Elige estado</option>
  <option value="activo">Activo</option>
  <option value="inactivo">Inactivo</option>
</select>

    <input type="text" name="nombre" placeholder="Nombre_componente">
    <input type="text" name="identificador" placeholder="Identificador">
    <br><br>
    <button class="btn waves-effect waves-light" type"submit" >Agregar</button>
    </div>
</form> -->
   
<div class="col s10">
      <br><br>

      <table>
        <thead>
        <th>nombre</th>
        <th>estado</th>
        <th></th>
        <th>Abrir_Cerrar</th>
        </thead>
        <tbody>

        <?php 
        while ($tabla = $componentes -> fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $tabla["nombre"] . "</td>";
          echo "<td>" . $tabla["estado"] . "</td>";
          
          echo "<td><a href='/interfase_componentes/app/controllers/ComponenteController.php?action=updateEstado&ID_Componentes=" . $tabla["ID_Componentes"] . "&estado=" . $tabla["estado"] . "' class='waves-effect waves-yellow pink btn' >Cambiar</a></td>";
          
          echo "<td>" . $tabla["abrir_cerrar"] . "</td>";
          
          echo "<td><a href='/interfase_componentes/app/controllers/ComponenteController.php?action=updateCerrar&ID_Componentes=" . $tabla["ID_Componentes"] . "&abrir_cerrar=" . $tabla["abrir_cerrar"] . "' class='waves-effect waves-yellow pink btn' >Cambiar</a></td>";
          
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
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Componentes</title>
    <link rel="stylesheet" type="text/css" href="/domoticSENA/public/css/materialize.min.css">
</head>
<body  style="font-family: 'arial' ; color: #238276;">

  <center>
    <h1>Componentes</h1>
  </center> 
  <br>
  <a href="/domoticSENA/public/views/principal/MenuAdministrador.php" class='waves-effect waves-yellow btn' style="margin-left: 205px;">Atras</a>

<div class="container">
      <br><br>

      <table style="border: solid 2px #238276;" class="striped">
        <thead>
        <th>nombre</th>
        <th>estado</th>
        <th></th>
        <th>On - Off</th>
        <th></th
        </thead>
        <tbody>

        <?php 
        while ($tabla = $componentes -> fetch_assoc()) {
          echo "<tr>";
          echo "<td>" . $tabla["nombre"] . "</td>";
          echo "<td>" . $tabla["estado"] . "</td>";
          
          echo "<td><a href='ComponenteController.php?action=updateEstado&ID_Componentes=" . $tabla["ID_Componentes"] . "&estado=" . $tabla["estado"] . "' class='waves-effect waves-yellow btn' >Cambiar</a></td>";
          
          echo "<td>" . $tabla["abrir_cerrar"] . "</td>";
          
          echo "<td><a href='ComponenteController.php?action=updateCerrar&ID_Componentes=" . $tabla["ID_Componentes"] . "&abrir_cerrar=" . $tabla["abrir_cerrar"] . "' class='waves-effect waves-yellow btn' >Cambiar</a></td>";
          
          echo "</tr>";
        }
        ?>
        </tbody>
    </table>
    <br><br><br>
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
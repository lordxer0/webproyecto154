<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/domoticsena/public/css/materialize.min.css">

    <meta charset="UTF-8">
   
    <title>Alarma</title>

</head>
<body style="font-family: 'arial' ; color: #238276;">
<center>
  <h1>ALARMAS</h1>
</center>
<br>
<a href="/domoticSENA/public/views/principal/MenuAdministrador.php" class='waves-effect waves-yellow btn' style="margin-left: 205px;">Atras</a>
    <br><br>
<center>
  <?php if($alarma != null) {?>
    <div class="container">
      <table class="striped" style="border: solid 2px #238276;">
        <thead class="striped">
         <tr>
              <th>ID_alarma</th>
              <th>Tipo</th>
              <th>Descripcion</th>
              <th>nombre</th>
            </tr>
            <tbody>
                 <?php
                  while( $row = $alarma->fetch_assoc()){
                    echo"<tr>"; 
                    echo"<td>" .$row["ID_Alarma"] . "</td>";
                    echo"<td>" .$row["tipoalarma"] . "</td>";     
                    echo"<td>" .$row["descripcionalarma"] . "</td>";  
                    echo"<td>" .$row["nombrealarma"] . "</td>";   
                    echo"</tr>";
                  }
                     ?>
              </tbody>
        </thead>
    </table>
    </div>
  </center>
<?php } else { ?>
       <h3>NO HAY productos</h3>  
    <?php } ?>
    
</body>
</html>
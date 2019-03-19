<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="/domoticsena/public/css/materialize.min.css">

    <meta charset="UTF-8">
   
    <title>Alarma</title>

</head>
<body style="font-family: 'arial' ; color: #238276; background-color: #a7ffeb;">
<center><h1>ALARMAS</h1></center>
<center>
<table class = "table">
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
                echo"<td>" .$row["tipo_alarma"] . "</td>";     
                echo"<td>" .$row["descripcion_alarma"] . "</td>";  
                echo"<td>" .$row["nombre_alarma"] . "</td>";   
                echo"</tr>";
              }
                 ?>
          </tbody>
            </thead>
</table>

</center>
    
</body>
</html>
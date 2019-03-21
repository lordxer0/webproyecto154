<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/domoticSENA/public/css/materialize.min.css">
</head>
<body>

    <center>
        <h1>Ambientes</h1>
    </center>
    <br>
    <a href="/domoticSENA/public/views/principal/MenuInstructor.php" class='waves-effect waves-yellow btn' style="margin-left: 225px;">Atras</a>
    <br><br>
<?php if($ambientes != null) {?>
        <div class="container">
            <table id="Tabla" class="striped" style="margin-left: 20px; margin-right: 20px; border: solid 2px #238276;">
            <thead>
                <tr>
                    <th>id_ambiente</th>
                    <th>nombre</th>
                    <th>ubicacion</th>
                    <th>estado</th>
                    <th>tipo_am</th>
                    <th>id_sede</th>
                </tr>
            </thead>
                <tbody class="container" >
                    <?php
                        while ($row = $ambientes->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$row["ID_Ambiente"] ."</td>";
                            echo "<td >".$row["nombreambiente"] ."</td>";
                            echo "<td >".$row["ubicacion"] ."</td>";
                            echo "<td >".$row["estadoambiente"] ."</td>"; 
                            echo "<td >".$row["tipo_Am"] ."</td>"; 
                            echo "<td >".$row["ID_Sede"] ."</td>"; 
                            echo "<td>                               
                            
                            </td>";
                            echo"</tr>";
                        }
                    ?>
                </tbody>
            </thead>
        </table>
        </div>
    <?php } else { ?>
       <h3>NO HAY productos</h3>  
    <?php } ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/domoticSENA/public/css/materialize.min.css">
    <title>ambiente usuarios</title>
</head>
<body style="font-family: 'arial' ; color: #238276; background-color: #a7ffeb;">
<?php if($amsu != null) {?>
        <table id="Tabla" class="striped" style="margin-left: 20px; margin-right: 20px; ">
            <thead>
                <tr>
                    <th>id_amsu</th>
                    <th>id_ambiente</th>
                    <th>id_usuario</th>
                    <th>fecha</th>
                    <th>hora</th>
                    
                </tr>
                <tbody class="container" >
                    <?php
                        while ($row = $amsu->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$row["ID_Amsu"] ."</td>";
                            echo "<td>".$row["ID_Ambiente"] ."</td>";
                            echo "<td>".$row["ID_Usuario"] ."</td>";
                            echo "<td>".$row["fecha"] ."</td>"; 
                            echo "<td>".$row["hora"] ."</td>"; 
                            echo "<td>                               
                            
                            </td>";
                            echo"</tr>";
                        }
                    ?>
                </tbody>
            </thead>
        </table>
    <?php } else { ?>
       <h3>NO HAY productos</h3>  
    <?php } ?>
</body>
</html>
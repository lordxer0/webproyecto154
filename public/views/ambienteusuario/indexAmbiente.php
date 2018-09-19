<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php if($ambientes != null) {?>
        <table id="Tabla" class="striped" style="margin-left: 20px; margin-right: 20px; ">
            <thead>
                <tr>
                    <th>id_ambiente</th>
                    <th>nombre</th>
                    <th>ubicacion</th>
                    <th>estado</th>
                    <th>tipo_am</th>
                    <th>id_sede</th>
                    
                </tr>
                <tbody class="container" >
                    <?php
                        while ($row = $ambientes->fetch_assoc()){
                            echo "<tr>";
                            echo "<td>".$row["ID_Ambiente"] ."</td>";
                            echo "<td>".$row["nombre"] ."</td>";
                            echo "<td>".$row["ubicacion"] ."</td>";
                            echo "<td>".$row["estado"] ."</td>"; 
                            echo "<td>".$row["tipo_Am"] ."</td>"; 
                            echo "<td>".$row["ID_Sede"] ."</td>"; 
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
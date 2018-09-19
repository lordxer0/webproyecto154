<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="/domoticSENA/public/css/materialize.min.css">
    <title>ocupados</title>
</head>
<body style="font-family: 'arial' ; color: #238276; background-color: #a7ffeb;">

<center><h1>ambientes ocupados </h1></center>
<center><h2>estos son los ambientes ocupados actualmente en el centro </h2></center>

<?php if($consulta != null)  {?>
        <table id="Tabla" class="striped" style="margin-left: 20px; margin-right: 20px; ">
            <thead>
                <tr>
                    <th>nombre ambiente</th>
                    <th>nombre ususario</th>
                    <th>fecha</th>
                    <th>hora</th>
                </tr>

                


                <tbody class="container" >
                    <?php
                        while ($row = $consulta->fetch_assoc()){                            
                            echo "<tr>";
                            echo "<td>".$row["nombre_ambiente"] ."</td>";
                            echo "<td>".$row["nombre_usuario"] ."</td>";
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
        <a class="btn waves-effect waves-light" href="/domoticSENA/public/views/principal/MenuAdministrador.php">regresar</a>

    <?php } else { ?>
       <h3>NO HAY productos</h3>  
    <?php } ?>


</body>

    <script src="/domoticSENA/public/js/jquery.min.js"></script>
	<script src="/domoticSENA/public/js/materialize.min.js"></script>

</html>
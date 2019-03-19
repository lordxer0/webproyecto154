<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>proyecto</title>
    <style type="text/css">
body{
	background:#81F7BE;
}
</style>
            <link rel="stylesheet" href="/proyecto/public/css/materialize.min.css">
</head>
<body>
    <h1>perfil</h1>
    <div>
        <?php
        if(isset($msg)){
            echo $msg;
        }
        ?>
    </div>
    <?php if ($perfil  !=null){ ?>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="coll" >ID_Perfil</th>
                    <th scope="coll" >nombre</th>
                    <th scope="coll" >estado</th>
                     
                </tr>
            </thead>
            <Tbody>
                <?php
                while ($row = $perfil->fetch_assoc()) {
                    echo"<tr>";
                    echo"<td>" . $row["ID_Perfil"] . "</td>";
                    echo"<td>" . $row["nombre"] . "</td>";
                    echo"<td>" . $row["estado"] . "</td>";
                    echo"<td>

                       
                        <a class='btn btn-primary' href='/proyecto/app/controllers/perfilcontrollers.php?action=delete&id_codigo=". $row['ID_Perfil'] ."'>eliminar</a>

                    </td>";
                    echo"</tr>";
                }

            ?>
        </Tbody>
     </table>
    <?php }else{?>
    <h3>no hay nada</h3>


    <?php } ?>
    <script src="/proyecto/public/js/materialize.min.js"></script>
    <script src="/proyecto/public/js/jquery.min.js"></script>
</body>

</html>
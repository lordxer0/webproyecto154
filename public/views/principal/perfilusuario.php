<?php
$conexion= new mysqli('localhost', 'root', '', 'proyecto');
$sql = "UPDATE componentes SET abrir_cerrar = 'ON' WHERE nombre = 'lampara 1' ";
$sql1 = "UPDATE componentes SET abrir_cerrar = 'ON' WHERE nombre = 'lampara 3' ";
$sql2 = "UPDATE componentes SET abrir_cerrar = 'ON' WHERE nombre = 'aire acondicionado' ";
mysqli_query($conexion,$sql);
mysqli_query($conexion,$sql1);
mysqli_query($conexion,$sql2);
?>
<?php
    session_start();
    if(!isset($_SESSION["instructor"])){
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Menu instructor</title>
    <link rel="stylesheet" href="/domoticsena/public/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script type="text/javascript" src="/domoticSENA/public/js/jquery-3.3.1.js"></script>
    
    <script type="text/javascript">
    function seleccion(){
        $.post('perfilusuario.php', {}, function(data){

                    });
        }
    </script>   
    
</head>
<body style="font-family: 'arial' ; color: #238276;">

<nav style="background-color: #238276; color: #FFFFFF;">
    <tt style="margin-left: 15px;">
    <a href="#" class="brand-logo">
    </a>
    </tt>
    </nav>
    
    <div class="container">
    
    <p class="z-depth-5">
        <tt style="font-family: 'arial' ; color: #238276; margin-left: 30px; "><i class="large material-icons">persona</i></tt><br>
        <tt style="font-family: 'arial' ; color: #238276; margin-left: 20px; "><b>INSTRUCTOR</b></tt><br><br>
        <a href="../../../app/controller/ambienteController.php?action=allIns" style="color: #238276; margin-left: 15px;">Gestion de ambiente</a><br><br>

        <a href="../../../app/controller/ComponenteController.php" style="color: #238276; margin-left: 15px;">Gestion de componentes</a><br><br>
        
        <a class="waves-effect waves-light btn-large" href="Cerrarsesion.php"><i class="material-icons right">settings_power</i>Cerrar Sesion</a>

        <button class="btn waves-effect waves-light" onclick="seleccion()" style="margin-left: 495px; height: 53px; font-family: 'arial' ;">Perfil de preferencia 1
        </button>
        
    </p>
        
    </div>

</body>
    <script src="/domoticSENA/public/js/jquery.min.js"></script>
	<script src="/domoticSENA/public/js/materialize.min.js"></script>
</html>
<!-- validador de sesion -->
<?php }else{
    header('location: MenuAdministrador.php');
}?> 

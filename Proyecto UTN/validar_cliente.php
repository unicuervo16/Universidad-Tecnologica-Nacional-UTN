<?php
session_start();
$correo_usuario = $_POST['correo'];
$contrasenia_usuario = $_POST['contrasena'];

if($correo_usuario == 'cliente@gmail.com' & $contrasenia_usuario == 'phpintermedio'){
    $_SESSION['clientes']  = $contrasenia_usuario;
    header("Location: clientes.php");
}else{
    header("Location: clientes.php?error");
}
?>
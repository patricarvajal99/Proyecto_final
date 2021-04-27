<?php
require_once "Usuario.php";
var_dump($_POST);



Usuario::registro($_POST['usuario'],$_POST['nombre'],$_POST['apellidos'],$_POST['email']
,$_POST['pass1'],$_POST['pass2']);
var_dump($_POST);
die();
?>
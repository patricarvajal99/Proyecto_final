<?php

require_once 'sesion.php';
 
$ses=Sesion::inicarSesion();
if($ses->login($_POST['usuario'],$_POST['pass'])){
    $ses->Redireccionar("index.php");
}else{
 $ses->Redireccionar("formulario.php");

}

?>
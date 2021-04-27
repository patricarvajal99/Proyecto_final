<?php

require_once "Usuario.php";
class Sesion{
    private static $instancia = null;
    private function __clone(){ }
    private function __construct(){}



    public static function inicarSesion(){
        session_start();

        if(isset($_SESSION["sesion"])){
            self::$instancia = unserialize($_SESSION["sesion"]);
        }
        else{
            if (self::$instancia==null)
            self::$instancia= new Sesion;

        }
        return self ::$instancia;
        die();
    }
   public function login($usuario,$pass):bool{
       if (Usuario::loguear($usuario,$pass)){
          $_SESSION["usuario"] = Usuario::BuscarUsuarioObjeto($usuario);
          $_SESSION["tiempo"] = time();
          $_SESSION["sesion"] = serialize(self::$instancia); 
       }
      
       return $this->estaLogueado();
   }
   
   public  function estaLogueado():bool{
      return !empty($_SESSION);

 
    }
    public function DestruirSesion(){
        session_destroy();
    }
    public function Redireccionar(String $url){
        
     header("location: $url");
    }
}



?>
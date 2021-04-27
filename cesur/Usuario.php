<?php
require_once "Database.php";
class Usuario
{

  private $idUsu;
  private $usuario;
  private $nombre;
  private $apellidos;
  private $email;
  private $pass;

  public function getIdUsu()
  {
    return $this->idUsu;
  }

  public function setIdUsu($idUsu)
  {
    $this->idUsu = $idUsu;
  }

  public function getUsuario()
  {
    return $this->usuario;
  }

  public function setUsuario($usuario)
  {
    $this->usuario = $usuario;
  }

  public function getNombre()
  {
    return $this->nombre;
  }

  public function setNombre($nombre)
  {
    $this->nombre = $nombre;
  }

  public function getApellidos()
  {
    return $this->apellidos;
  }

  public function setApellidos($apellidos)
  {
    $this->apellidos = $apellidos;
  }

  public function getEmail()
  {
    return $this->email;
  }

  public function setEmail($email)
  {
    $this->email = $email;
  }

  public static function registro($usuario, $nombre, $apellidos, $email, $pass1, $pass2)
  {
  
    if ($pass1 == $pass2) {
      $pass = md5($pass1);

      $bd = Database::getDatabase();
      $sql = "INSERT INTO `usuarios`(`usuario`, `nombre`, `apellidos`, `email`, `pass`)
     VALUES (?,?,?,?,?)";
      $bd->query($sql, $params = [$usuario, $nombre, $apellidos, $email, $pass]);
    } else {
      header("location:index.php");
    }
  }


  public static function loguear($usuario, $pass): bool
  {
    
    $bd = Database::getDatabase();
    $sql = "SELECT * FROM `usuarios` WHERE usuario = ?";
    $bd->query($sql, $params = [$usuario]);

    $row = $bd->getArrayRow();
   
    if (md5($pass) == $row['pass']) {
      return true;
     die();
    } else {
      return false;
     die();
    
    }
  }
  public static function BuscarUsuarioObjeto($usuario):Usuario
  {
    $bd = Database::getDatabase();
    $sql = "SELECT * FROM `usuarios` WHERE usuario = ?";
    $bd->query($sql, $params = [$usuario]);

    $row = $bd->getRow('Usuario');
    return $row;
  }
  
}

<?php
class Database {

  private $dbDsn     = "mysql:dbname=g4g;host=localhost" ;
  private $dbUser     = "root" ;
  private $dbPass     = "" ;
  

  //
  private static $prp ;
  private static $pdo ;
  private static  $instancia = null;



  public static function getDatabase(){
    if(self::$instancia==null){
      return self::$instancia = new Database;
    }
    else{
      return self::$instancia;
    }
  }

  private function __clone(){} 
  //
  public function __construct() 
  {
    $this->connect();
  }

  //
  public function __destruct()
  {
    $this->close() ;
  }
  

  //
  // Intentamos establecer una conexión con el motor de bases 
  // de datos, utilizando en este caso la extensión PDO.
  public function connect() 
  { 
    try {

      // Realizamos la conexión al motor de BD
      self::$pdo = new PDO( $this->dbDsn, 
                 $this->dbUser, 
                 $this->dbPass) ;

      // Activamos el modo de emulación de sentencias, que
      // permitirá comprobar a priori si una instrucción 
      // SQL es válida o no.
      self::$pdo->setAttribute(PDO::ATTR_EMULATE_PREPARES, 0) ;
      
    } catch (Exception $e) {
      die("**ERROR: es imposible conectar con la base de datos. Póngase en contacto con el administrador") ;
    }
  }

  //
  // Prepara y realiza una consulta sobre la base de datos.
  public function query($sql, $params=[]) 
  {
    
    self::$prp=self::$pdo->prepare($sql);
    

          self::$prp->execute($params);
    
    
  }

  /**
   * Genera un objeto del tipo que se le indique sino el tipo sera stdClass
   * @param type|string $class 
   * @return type
   */
  public function getRow($class = "stdClass") 
  {
    return self::$prp->fetchObject($class);
      }
      /**
       * Genera un array asociativo
       * @return type
       */
      public function getArrayRow()
      {
          return self::$prp->fetch(PDO::FETCH_ASSOC);
      }
      /**
       * Genera un array de arrays
       * @return type
       */
      public function getArrayAll()
      {
          return self::$prp->fetchAll();
      }

  //
  // Cerramos la conexión con la base de datos
  public function close() 
  {
    self::$pdo = [];
  }

  
  
}

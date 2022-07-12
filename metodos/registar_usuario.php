<?php
require_once '../conexion/conexion.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$usuario = $_POST['txtusuario'];
$token=$_POST['token'];
 class registrar
    {

 private static $instancia;
        private $dbh;
     
        private function __construct()
        {
     
            $this->dbh = Conexion::singleton_conexion();
     
        }
	 
	       public static function singleton_reg()
        {
     
            if (!isset(self::$instancia)) {
     
                $miclase = __CLASS__;
                self::$instancia = new $miclase;
     
            }
     
            return self::$instancia;
     
        }
    
      public function registrar_usu($usuario, $token)
        {
 try {
                
                $sql = "INSERT INTO factura (cliente, token) VALUES(?,?)";
				
                $query = $this->dbh->prepare($sql);
                $query->bindParam(1,$usuario);
                $query->bindParam(2,$token);
                $query->execute();
                $this->dbh = null;
     
               
                
            }catch(PDOException $e){
                
                print "Error!: " . $e->getMessage();
                
            } 
	  }
	 
 }
?>
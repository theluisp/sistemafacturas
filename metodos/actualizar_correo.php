<?php
require_once '../conexion/conexion.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$correo = $_POST['correo']; 
$token = $_POST['token'];

 class actualizar_correo
    {

 private static $instancia;
        private $dbh;
     
        private function __construct()
        {
     
            $this->dbh = Conexion::singleton_conexion();
     
        }
	 
	       public static function singleton_act1()
        {
     
            if (!isset(self::$instancia)) {
     
                $miclase = __CLASS__;
                self::$instancia = new $miclase;
     
            }
     
            return self::$instancia;
     
        }
    
      public function actualizar_correo1($correo, $token)
        {
 try {
                
                $sql = "UPDATE factura set correo_electronico=? WHERE token=?";
				
                $query = $this->dbh->prepare($sql);
                $query->bindParam(1,$correo);
                $query->bindParam(2,$token);
                $query->execute();
                $this->dbh = null;
     
               
                
            }catch(PDOException $e){
                
                print "Error!: " . $e->getMessage();
                
            } 
	  }
	 
 }
?>
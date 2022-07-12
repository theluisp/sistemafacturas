<?php
require_once '../conexion/conexion.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$token = $_POST['token']; 
$rfc = $_POST['rfc'];
$razon_social=$_POST['nombre'];
$factura=$_POST['factura'];
$forma=$_POST['forma'];
	$metodo=$_POST['metodo'];
 class actualizar
    {

 private static $instancia;
        private $dbh;
     
        private function __construct()
        {
     
            $this->dbh = Conexion::singleton_conexion();
     
        }
	 
	       public static function singleton_act()
        {
     
            if (!isset(self::$instancia)) {
     
                $miclase = __CLASS__;
                self::$instancia = new $miclase;
     
            }
     
            return self::$instancia;
     
        }
    
      public function actualizar_cliente($rfc,$razon_social,$factura, $forma, $metodo, $token)
        {
 try {
                
                $sql = "UPDATE factura set rfc_cliente=?, razon_social=?, uso_factura=?, forma_pago=?, metodo_de_pago=? WHERE token=?";
				
                $query = $this->dbh->prepare($sql);
                $query->bindParam(1,$rfc);
                $query->bindParam(2,$razon_social);
	            $query->bindParam(3,$factura);
                $query->bindParam(4,$forma);
	            $query->bindParam(5,$metodo);
                $query->bindParam(6,$token);
                $query->execute();
                $this->dbh = null;
     
               
                
            }catch(PDOException $e){
                
                print "Error!: " . $e->getMessage();
                
            } 
	  }
	 
 }
?>
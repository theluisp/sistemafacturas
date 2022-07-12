<?
/*$conexion=null;
$servidor='localhost';
$passw='mysql';
$user='root';
$bd='facturas';

try{
	$conexion=new PDO('mysql:host='.$servidor.';dbname='.$bd, $user, $passw);
	
}

catch(PDOException $e){
	echo 'Error de conexion a la base de datos, credenciales invalidas';
	exit;
	
	
}
return $conexion;
*/

$user="root";
$server="localhost";
$bd="facturas";
$password="mysql";

$conn=mysqli_connect($server, $user, $password, $bd);
if(!$conn){
    die ("Conexión fallida credenciales incorrectas".mysqli_connect_error());
}
//echo "Conexión exitosa";


?>
<?php
require_once 'actualizar_correo.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$nuevoSingleton3 = actualizar_correo::singleton_act1();
 
if(isset($_POST['correo']))
{
 
$correo = $_POST['correo'];
$token=$_POST['token'];

    //accedemos al método usuarios y los mostramos
    $query3 = $nuevoSingleton3->actualizar_correo1($correo,$token);
    
    if($query3 == TRUE)
    {
       	echo 'errors';
    }
	
	else{
		 header("Location:../salida.php");
	session_start();
  unset($_SESSION["token"]);
  unset($_SESSION["id"]); 

		session_destroy();
	}
}

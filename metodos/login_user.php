<?php
require_once 'login.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$nuevoSingleton = Login::singleton_login();
 
if(isset($_POST['txtusuario']))
{
 
$usuario = $_POST['txtusuario'];
$contrasenia = $_POST['txtpassword'];

    //accedemos al método usuarios y los mostramos
    $usuario = $nuevoSingleton->login_users($usuario,$contrasenia);
    
    if($usuario == TRUE)
    {
        header("Location:../home.php");
    }
	
	else{
		echo 'alv';
	}
}
<?php
require_once 'registar_usuario.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$nuevoSingleton2 = registrar::singleton_reg();
 
if(isset($_POST['txtusuario']))
{
 
$usuario = $_POST['txtusuario'];
$token=$_POST['token'];

    //accedemos al método usuarios y los mostramos
    $query1 = $nuevoSingleton2->registrar_usu($usuario,$token);
    
    if($query1 == TRUE)
    {
       	echo 'error';
    }
	
	else{
		 header("Location:../datos_cliente.php");
	
	}
}
else{
	echo 'error';
	
}
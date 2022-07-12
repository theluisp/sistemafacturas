<?php
require_once 'actualizar_cliente.php';
//accedemos al método singleton que es quién crea la instancia
//de nuestra clase y así podemos acceder sin necesidad de
//crear nuevas instancias, lo que ahorra consumo de recursos
$nuevoSingleton3 = actualizar::singleton_act();
 
if(isset($_POST['token']))
{
$token = $_POST['token']; 
$rfc = $_POST['rfc'];
$razon_social=$_POST['nombre'];
$factura=$_POST['factura'];
$forma=$_POST['forma'];
	$metodo=$_POST['metodo'];
		$idfactura=$_POST['idfactura'];
    //accedemos al método usuarios y los mostramos
    $query2 = $nuevoSingleton3->actualizar_cliente($rfc,$razon_social,$factura, $forma, $metodo, $token);
    
    if($query2 == TRUE)
    {
		echo 'error222';
       	
    }
	
	else{
		header("Location:../conceptos.php?idfactura=$idfactura");
		
	}
}
else{
	echo 'error';
	
}
<?

$host = 'localhost';
$basededatos = 'facturas';
$usuario = 'root';
$contrasenia = 'mysql';



$conexion = new mysqli($host, $usuario,$contrasenia, $basededatos);
if ($conexion -> connect_errno) {
die( "Fallo la conexión : (" . $conexion -> mysqli_connect_errno() 
. ") " . $conexion -> mysqli_connect_error());
}
                    
if(isset($_POST['siguiente'])){
	


$items7=($_POST['idfactura']);
$items3=($_POST['cantidad']);
$items2=($_POST['unidad']);
$items1=($_POST['concepto']);
$items4=($_POST['valor']);
$items5=($_POST['iva']);

	
	while(true){
	$item1=current($items1);
	$item2=current($items2);
	$item3=current($items3);
	$item4=current($items4);
	$item5=current($items5);
	$item7=current($items7);
	
	$concepto_i=(($item1!==false) ? $item1 :", &nsbp;");
	$unidad_i=(($item2!==false) ? $item2 :", &nsbp;");	
	$ca_i=(($item3!==false) ? $item3 :", &nsbp;");
	$valor_i=(($item4!==false) ? $item4 :", &nsbp;");
	$iva_i=(($item5!==false) ? $item5 :", &nsbp;");
    $id=(($item7!==false) ? $item7 :", &nsbp;");
	

		
$valores =
'('.$ca_i.',"'.$unidad_i.'","'.$concepto_i.'","'.$valor_i.'","'.$iva_i.'","'.$id.'"),'; 
		
		
	$valuesq=substr($valores, 0, -1);
	
		
		
    $sql= "INSERT INTO concepto(cantidad,nombre,descripcion, valor_unitario, iva, id_factura) VALUES $valuesq";
		
	$sqlRes=$conexion->query($sql) or $sql->error;
		
		  $item1 = next( $items1 );
		  $item2 = next( $items2 );
		  $item3 = next( $items3 );
		  $item4 = next( $items4 );
		  $item5 = next( $items5 );
		 $item7 = next( $items7 );	 
		// Check terminator
				    if($item1 === false && $item2 === false && $item3 === false && $item4 === false && $item5 === false && $item7 === false) break;
    
				}
		
				}

header('Location: ../correo.php');



?>
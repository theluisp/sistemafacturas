<?php session_start();

$user="root";
$server="localhost";
$bd="facturas";
$password="mysql";

$id=$_GET['id'];
$conn=mysqli_connect($server, $user, $password, $bd);

if(!$conn){
    die ("Conexión fallida credenciales incorrectas".mysqli_connect_error());
}
else {
   // echo "Conexión exitosa";

    
}
 
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 1800)) {
    // last request was more than 30 minutes ago
  unset($_SESSION["user"]);     // unset $_SESSION variable for the run-time 
  
session_destroy();  // destroy session data in storage
	
	 header('location:../index.php');
}
$_SESSION['LAST_ACTIVITY'] = time(); // update last activity time stamp

//$var1= $_GET['var1'];
//$var2= $_GET['var2'];
//$token= $_GET['i'];

    // if($token===$_SESSION['user']){
        
       // $user=$_SESSION['user'];
?>
 <!DOCTYPE html>
 <html lang="es">

 <head>

     <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
     <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

     <title>Panel de administración de facturas</title>
     <meta charset="UTF-8">
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
     <meta name="description" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1">
     <!--Calendario-->
     <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css" />
     <!-- Bootstrap core CSS -->
     <link href="../estilos/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/fonts/iconic/css/material-design-iconic-font.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/animsition/css/animsition.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="../estilos/vendor/daterangepicker/daterangepicker.css">
    <link rel="stylesheet" type="text/css" href="../estilos/css/util.css">
    <link rel="stylesheet" type="text/css" href="../estilos/css/main.css">
    <!-- Custom fonts for this template -->
    <link href="../estilos/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
     <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


     <!-- Custom styles for this template -->
     <link href="../estilos/css/freelancer.min.css" rel="stylesheet">
 </head>
 <script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
 <body>
     
     
      <!-- Navigation
        <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
            <div class="container">
                <a class="navbar-brand" href="#page-top">Start Bootstrap</a>
                <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#portfolio">Portfolio</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link×CloseToggle fullscreen
Edit file py-3 px-0 px-lg-3 rounded" href="#about">About</a></li>
                        <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded" href="#contact">Contact</a></li>
                    </ul>
                </div>
            </div>
        </nav> -->
     
     
    <?php  include 'includes/navbar.php';
           //include 'conexion/conexion.php';   	  
 	 ?>
    <br><br>
     <center>
		 </center>
    	<div class="row">

		<!-- Earnings (Monthly) Card Example -->
		

         
         
	</div>


         <br /><br>
  
     
    
     <!-- Vista de Productos -->
     <div class="container">
         <div class="row">
             <div class="container">
                 <center>
                     <h2>CONCEPTOS</h2>
                 </center>
                 <br />
                 <div class="table-responsive">

<table class="table table-dark">

                         <thead>
                             <tr>
                                 <th>Cantidad</th>
								
                                 <th>Nombre de unidad</th>
								 <th>Descripcion</th>
                                 <th>Valor unitario</th>
								 <th>IVA</th>
                    
                             </tr>
                         </thead>
                         <tbody>

                           

                         </tbody>
                     </table>
					
					 <a onclick="return confirm('¿Estas seguro de haber realizado esta factura?.');" href="eliminar_sucursal.php?id=<?php 
									
									echo $row['id_sucursal']; ?>?i=<?php echo $token; ?>"><button type="submit" class="btn btn-success btn-lg btn-block" >
 Factura realizada <i class="fa fa-check-square"></i></button>
</a>
					 


			 </div>
             </div>
         </div>
     </div>

 </body>

</html>




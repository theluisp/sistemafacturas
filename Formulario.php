<?php  
session_start();


$hora = date( 'H:i' );
$random= rand(0, 99999);
$random2=rand(0, 99999);

$token=$hora.$random.$random2;
 $_SESSION['token']=$token;	 
?>

<html>
 <title>Formulario para factura  </title>
    <?php  include 'includes/header.php'; ?>
    <!-- <a class="nav-link " href="index.php" style="color:white;">Regresar</a>-->
 <script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
	 
	 
	 function validarfor(){
		 var nombre = document.getElementById("txtusuario").value; 
if ((nombre == "")) {  //COMPRUEBA CAMPOS VACIOS
    alert("El campo no puede estar vacio");
    return false;
}
	 }
</script>
	
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="container-login100">
                    <div class="col">
                        <h2>Formulario facturación</h2><br>
						<h4>Despacho contable Enriquez y Asociados</h4>
						 
						<picture>

<img src="img/logo.jfif" alt="AVATAR" style="max-width:100%;">
						</picture>
						
						<BR>
						<p>Los datos recabados en la sig. forma serán responsabilidad de la persona que realice el llenado del formulario.<br>
Los datos se plasmaran tal cual en la factura electrónica.<br>
Favor de introducir los datos correctamente. </p>
							
                        <div class="form-group">

                            <form action="metodos/driver_registrar.php" method="POST" >
                              
                                <br> <br> <br>
                               <label for="Nombre">Introduzca su nombre:</label> <input type="text" placeholder="Nombre" name="txtusuario" id="txtusuario" class="form-control" required/><br>
                               
                               <input type="hidden" value="<? echo $token;?>" name="token">
                              
								
                               <input class="btn btn-success btn-lg btn-block"  value="Siguiente" name="siguiente" type="submit" />
								<br><br>
								
                            </form>
                            
                        </div>
        
          


						</BR></div>
				</div>
			</div></div></div></body>
	<footer class="bg-dark text-center text-white">
  <!-- Grid container -->
   <div class="container p-4">
    <!-- Section: Social media -->
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.facebook.com/SIGMATIENDA" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>
<a class="btn btn-outline-light btn-floating m-1" href="https://wa.link/k8f3sd" role="button"
        ><i class="fab fa-whatsapp"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://www.linkedin.com/in/lpena21" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="https://github.com/theluisp" role="button"
        ><i class="fab fa-github"></i
      ></a>
		<br>
    
        ¿Necesita un sistema para su negocio?
       <br> -Puntos de venta, páginas web, sistemas creados por ingenieros en software
        acordes a la necesidad de su negocio o empresa.
        <br> Contactenos, de clic en los enlaces de arriba para más información.
  
    <!-- Section: Social media -->


 


  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2022 Copyright: Sigma ingenieria en software
 
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->



<!-- Bootstrap core JavaScript -->
<script src="estilos/vendor/jquery/jquery.min.js"></script>
<script src="estilos/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<div id="dropDownSelect1"></div>
<script src="estilos/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="estilos/vendor/animsition/js/animsition.min.js"></script>
<script src="estilos/vendor/bootstrap/js/popper.js"></script>
<script src="estilos/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="estilos/vendor/select2/select2.min.js"></script>
<script src="estilos/vendor/daterangepicker/moment.min.js"></script>
<script src="estilos/vendor/daterangepicker/daterangepicker.js"></script>
<script src="estilos/vendor/countdowntime/countdowntime.js"></script>
<script src="estilos/js/main.js"></script>
<!-- Plugin JavaScript -->
<script src="estilos/vendor/jquery-easing/jquery.easing.min.js"></script>
<script src="estilos/vendor/magnific-popup/jquery.magnific-popup.min.js"></script>

<!-- Contact Form JavaScript -->
<script src="estilos/js/jqBootstrapValidation.js"></script>
<script src="estilos/js/contact_me.js"></script>

<!-- Custom scripts for this template -->
<script src="estilos/js/freelancer.min.js"></script>
<script src="http://code.jquery.com/jquery-1.9.1.js"></script>
<script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>

</html>


<html>
	<? 
	session_start();
	$idfactura=$_GET['idfactura'];
    $_SESSION['id']=$idfactura;
	?>
<title>Conceptos </title>
<?php  include 'includes/header.php'; ?>
<!-- <a class="nav-link " href="index.php" style="color:white;">Regresar</a>-->
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.0.0-beta1/jquery.js"></script>

	<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function() {
			$(this).remove();
		});
	}, 4000);
	
	function AgregarMas() {
    $("<div>").load("input_dinamico.php", function() {
    $("#productos").append($(this).html());
   });  
}
		
		function BorrarRegistro() {
	$('div.lista-producto').each(function(index, item){
		jQuery(':checkbox', this).each(function () {
            if ($(this).is(':checked')) {
				$(item).remove();
            }
        });
	});
}
</script>

<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="container-login100">
					<div class="col">
						<center>
							
						
							
							<h2>Conceptos de la factura </h2>
							<img src="img/logo.jfif" alt="AVATAR" style="max-width:100%;" /><br><br>
						</center>
						<BR>


						<div class="form-group">
							
<form action="metodos/driver_conceptos.php" method="POST">

						
								
<div id="productos">
<?php require_once("input_dinamico.php") ?>

</div>

								<input class="btn btn-success btn-lg btn-block"  value="Siguiente" type="submit" name="siguiente" />
								<br><br>
									</form></div>






						</BR></div></div></div></div></div></body>
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
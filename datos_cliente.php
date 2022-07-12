<?php 
session_start();

include('conexion/conexion2.php');  
$sesion= $_SESSION['token'];	 

$mysqli = new mysqli('localhost', 'root', 'mysql', 'facturas');
$query = $mysqli -> query ("SELECT * FROM factura where token='$sesion'");
                    
while ($valores = mysqli_fetch_array($query)) {
             $id=  $valores['id_factura'];     
  



?>

<html>
<title>Datos fiscales del cliente <? echo $sesion; ?></title>
<?php  include 'includes/header.php'; ?>
<!-- <a class="nav-link " href="index.php" style="color:white;">Regresar</a>-->
<script>
	window.setTimeout(function() {
		$(".alert").fadeTo(500, 0).slideUp(500, function() {
			$(this).remove();
		});
	}, 4000);
</script>

<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-8 mx-auto">
				<div class="container-login100">
					<div class="col">
						<center>
							<h2>Datos fiscales del cliente </h2><br>
						
							<img src="img/logo.jfif" alt="AVATAR" style="max-width:100%;" />
						</center>
						<BR>


						<div class="form-group">
							<form action="metodos/driver_actualizar_cliente.php" method="POST">

								<br> <br> <br>
								<label for="rfc"><b>1.-RFC de la persona u organización a la que se va a facturar:</b></label> <input type="text" placeholder="RFC" name="rfc" id="rfc" class="form-control" required /><br>
								
								<label for="nombre"><b>2.-Nombre completo o razón social:</b></label> <input type="text" placeholder="Nombre" name="nombre" id="nombre" class="form-control" required /><br>

								<label for="uso"><b>3.-Uso de la factura:</b></label>
								<select class="form-select" style="width: 50%;" name="factura" aria-label="Default select example">
  <option selected>Selecciona</option>
  <option value="Gastos en general">Gastos en general</option>
	 <option value="adquisicion">Adquisición de mercancias</option>								
  <option value="honorarios">Honorarios medicos, dentales y gastos hospitalarios</option>
  <option value="por_definir">Por definir</option>
  <option value="gastos_medicos">Gastos medicos por incapacidad o discapacidad</option>
									<option value="1">Colegiaturas</option>
  <option value="transporte">Equipo de transporte</option>
  
</select>
								<br>

<label for="uso"><b>4.-Forma de pago:</b></label>
								<select class="form-select" name="forma" aria-label="Default select example" required>
									 <option disabled value="" >Selecciona</option>
							 <option value="efectivo">Efectivo</option>
  <option value="transferencia">Transferecia electronica</option>
  <option value="credito">Tarjeta de credito</option>
  <option value="debito">Tarjeta de debito</option>
  <option value="definir">Por definir</option>
  
					</select>			
								
								<br>

								<label for="nombre"><b>5.-Método de pago:</b></label>
								<div class="form-check ">
									<input class="form-check-input" type="radio" name="metodo" value="una_sola_exhibicion" id="flexRadioDefault1">
									<label class="form-check-label" for="flexRadioDefault1" value="una_sola_exhibicion">Pago en una sola exhibición </label><br>

									<input class="form-check-input" type="radio" name="metodo" value="parcialidades" id="flexRadioDefault1">
									<label class="form-check-label" for="flexRadioDefault1" value="en_parcialidades">
										Pago en parcialidades </label><br>





								</div>



<br><br>
<input type="hidden" value="<? echo $sesion; ?>" name="token"/>
								
								<input type="hidden" value="<? echo $id; ?>" name="idfactura"/>

								<a href="datos_cliente.php"> <input class="btn btn-success btn-lg btn-block" value="Siguiente" type="submit" name="siguiente" /></a>
								<br><br>

							</form>

						</div>

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

</html><? }?>
<?php  
session_start();

$token=$_SESSION['token'];	 
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
						 <img src="img/logo.jfif" alt="AVATAR" style="max-width:200%;">
						<BR>
						
							
                        <div class="form-group">

                            <form action="metodos/driver_correo.php" method="POST" >
                              
                                <br> <br> <br>
                               <label for="Nombre">Introduzca el correo electronico del cliente:</label> <input type="mail" placeholder="Correo" name="correo" id="txtusuario" class="form-control" required/><br>
                               
                               <input type="hidden" value="<? echo $token;?>" name="token">
                              
								
                               <input class="btn btn-success btn-lg btn-block"  value="Siguiente" name="siguiente" type="submit" />
								<br><br>
								
                            </form>
                            
                        </div>
        
          






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


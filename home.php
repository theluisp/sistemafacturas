<html>
 <title>Sistema de facturas  </title>
    <?php  include 'includes/header.php'; ?>
    <!-- <a class="nav-link " href="index.php" style="color:white;">Regresar</a>-->
 <script>
window.setTimeout(function() {
    $(".alert").fadeTo(500, 0).slideUp(500, function(){
        $(this).remove(); 
    });
}, 4000);
</script>
	
<body>
    <div class="container text-center">
        <div class="row">
            <div class="col-lg-8 mx-auto">
                <div class="container-login100">
                    <div class="col">
                        <h2>Iniciar sesión</h2><br>
                        <div class="form-group">
                            <form action="metodos/login_user.php" method="POST">
                               <img src="img/logo.jfif" alt="AVATAR" style="max-width:200%;">
                                <br> <br> <br>
                                <input type="text" placeholder="Correo electronico" name="txtusuario" id="txtusuario" class="form-control" required/><br>
                                <input type="password" placeholder="Contraseña" id="txtpassword" name="txtpassword" class="form-control" required/><br>
                               
                              
								<?php 
								if(empty($var1)){}
								  else{
									 ?>
<div class="alert alert-danger" role="alert">
Error en usuario o contraseña, porfavor vuelva a ingresarlas
</div><?
								  }
								
								?>
								
                                <input class="btn btn-primary btn-lg btn-block" style="background-color:#04AA6D" type="submit" value="Entrar" name="Entrar" />
								<br><br>
								<a href="recuperar.php" style="color:blue;" > <h6><u>Olvide mi contraseña</u></h6></a>
                            </form>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>



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


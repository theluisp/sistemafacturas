<? session_start();
$id=$_SESSION['id'];

?>
<script src="http://code.jquery.com/jquery-2.1.1.js"></script>
<div class="lista-producto float-clear" style="clear:both;">
<div class="form-group">
									<br> <br> <br>
								<label for="rfc"><b>1.-Cantidad:</b></label> <input type="text" placeholder="Cantidad" name="cantidad[]" id="cantidad" class="form-control" required /><br>
								<label for="nombre"><b>2.-Captura el nombre (litros, piezas, metros, etc) :</b></label> <input type="text" placeholder="Unidad" name="unidad[]" id="Unidad" class="form-control" required /><br>

								<label for="descripcion"><b>3.-Descripción o concepto:</b></label> <input type="text" placeholder="Concepto" name="concepto[]" id="concepto" class="form-control" required /><br>
									
								<label for="valor"><b>3.Valor unitario:</b></label> <input type="number" placeholder="$" name="valor[]" id="concepto" class="form-control" required /><br>
								
								<label for="uso"><b>3.-IVA:</b></label>
								<div class="form-check " required>
									<input class="form-check-input"  type="checkbox" name="iva[]" value="Más IVA" >
									<label class="form-check-label" for="flexRadioDefault1">
										Sin iva o desglosado </label><br>

									<input class="form-check-input" type="checkbox" name="iva[]" value="Sin IVA" >
									<label class="form-check-label" for="flexRadioDefault2">
										Más iva </label><br>





								</div><br>

	<input type="hidden" value="<? echo $id; ?>" name="idfactura[]"/>
								
<div class="btn-action float-clear">
<input class="btn btn-info" type="button" name="agregar_registros" value="Agregar otro concepto" onClick="AgregarMas();" />

	</div>
								<br><br>

					

						</div>
</div>
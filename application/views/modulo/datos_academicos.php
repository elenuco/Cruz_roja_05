 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
  <title>CRUZ ROJA </title>
 
	</head>
	<body>
		
		<div class="main-content"> 
			<div class="modal-form">
				 <form  id="dato_acad">
					<div class="row">
						<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Estudios Realizados:</label>
								<input type="text" name="Estudios_Realizados" id="Estudios_Realizados" class="form-control" required="" minlength="4" maxlength="25">
							</div>
							<div class="form-group">
								<label>Lugar de Expedicion de Diplomado de Inddución:</label>
								<input type="text" name="Lugar_Diplomado" id="Lugar_Diplomado" class="form-control" required="" minlength="4" maxlength="50" >
							</div>
							<div class="form-group">
								<label>fecha de expediccion de Diplomado de Inducción:</label>
								<input type="date" name="Fecha_ExpedicionD" id="Fecha_ExpedicionD" class="form-control" required="">
							</div>
							<div class="col-md-3"></div>
						</div>
						<div class="form-group">
							<button type="submit"  class="btn btn-primary" onclick="guardar_academic();">Guardar</button>
						</div>
					</form>
				</div>
			</div> <br> <br>
               <div class="">
    <div class="col-offset-md-6">
     <a href="<?php echo base_url();?>Datos_academicos"><button type="button" class="btn btn-danger">Estudios</button></a>
      <a href="<?php echo base_url();?>DMedicos_voluntario"><button type="button" class="btn btn-danger">Datos medicos</button></a></div>
  </div><br>
  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

  <script type="text/javascript"></script>

<script>

  function guardar_academic(){

    $.ajax({
      type : 'POST',
      url : '<?php echo base_url();?>Datos_academicos/Guardar_academicos',
      data : $('#dato_acad').serialize(),
      success: function (data){
        if (data == 'exito') {
          $('[name="Estudios_Realizados"]').val("");
          $('[name="Lugar_Diplomado"]').val("");
          $('[name="Fecha_ExpedicionD"]').val("");
         
                 }else{
                  alert('error');
                }
              }
            });
  }
  
</script>
<script>
  $(document).ready(function() {
    //*guardar();
    llenar_sexo();

  });
  
  
  
</script>
		</body>
		</html>
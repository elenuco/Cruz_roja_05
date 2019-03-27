<!DOCTYPE html>
<html>
<head>
	<title>Datos_Médicos_Voluntario</title>

</head>
<body>
	<div class="main-content">
		<div class="modal-form">
			<form class="form-control" method="post" action="<?php echo base_url();?>DMedicos_voluntario/Guardar">
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-6">
						<div class="form-group">
							<label>Tipo de Sangre:</label>
						<input type="text" name="Tipo_Sanguineo" id="Tipo_Sanguineo"class="form-control" required="" minlength="4" maxlength="10" required="" placeholder="0RH+/-">
						</div>
						<div class="form-group">
							<label>Peso:</label>
							<input type="number" name="Peso" id="Peso" class="form-control" required="" minlength="3" maxlength="5" required="" placeholder="00 Kg">
						</div>
						<div class="form-group">
							<label>Altura:</label>
							<input type="number" name="Altura" id="Altura" class="form-control" required="" minlength="3" maxlength="5" required="" placeholder="00 cm">
						</div >
					    <div class="form-group">
					    	<label>Alergias ó Enfermedades:</label>
					    	<select class="form-control " name="Tipo_Enfermedades_id"  required="">
                           <?php foreach ($enfermedades as $d ): ?>
                           	<option value="<?php echo $d->id_enfermedades; ?>"><?php echo $d->enfermedades; ?></option>
                            <?php endforeach; ?>
                          </select>                          
					    </div>
					    <div class="form-group">
					    	<label>Especifique enfermedades o alergías:</label>
					    	<input type="text" name="Especificaciones_Enfermedades" id="Especificaciones_Enfermedades" class="form-control">
					    </div>
					    <div class="form-group">
					    	<label>Servicios Asistenciales Que Tiene Derecho:</label>
					    	<select class="form-control  " name="Servicios_Asistenciales_id " >
                           <?php foreach ($asistenciales as $d ): ?>
                           	<option value="<?php echo $d->id_servicios; ?>"><?php echo $d->Tipo_Servicios_Asistenciales; ?></option>
                            <?php endforeach; ?>
                          </select>  
					    </div>
					    <div class="form-group">
					    	<label>En caso de Emergencia llamar a:</label>
					    	<input type="text" name="Contacto_Emergencia" class="form-control" maxlength="50" minlength="3" required="" placeholder="Escriba el nombre de su contacto de Emergencia">
					    </div>
					    <div class="form-group">
					    	<label>Direccion</label>
					    	<input type="text" name="Direccion" class="form-control" minlength="10"  maxlength="60" required="" placeholder="Col.aaaa,psj.aa, pol,aa,municipio,Ciudad"> 	
					    </div>
					    <div class="form-group">
					    	<label>Teléfono</label>
					    	<input type="text" name="Telefono" class="form-control">
					    </div>
					    <div class="form-group">
               
  	              <input type="submit" value="Siguente" class="btn btn-primary">
              </div>
					<div class="col-md-3"></div>

				</div>

			</form>
		</div>
	</div>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
 
</body>
</html>
 

<!--INCIO DEL NAVBAR-->

<nav class="navbar navbar-expand-lg navbar-white bg-dark">
  <a class="navbar-brand" href="<?php echo base_url();?>equipo">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo base_url();?>jugador/listado">Voluntariado<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo base_url();?>estadistica/vista">Personal</a>
      <a class="nav-item nav-link" href="<?php echo base_url();?>partido/partido">Informacion</a>
      <a class="nav-item nav-link" href="<?php echo base_url();?>Estadista_equipo/dos_tablas">Ayuda</a>
      <a class="nav-item nav-link" href="<?php echo base_url();?>partido/partido">Informacion</a>
      
      <div class="botones">
        <a href="<?php echo base_url();?>login/index"><input type="button" name="" class="btn btn-success" value="login"></a>

        <button class="btn btn-mat btn-success" data-toggle="modal" data-target="#save_user">Nuevo Usuario</button>
      </div>
    </div>

  </div>
</nav>
<!--FIN DEL NAVBAR-->
<!DOCTYPE html>
<html>
<head>
	<title>Datos_Médicos_Voluntario</title>
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
	<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
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
 

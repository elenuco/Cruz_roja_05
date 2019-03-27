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
	<title>Datos_Empleo_Estudio</title>
	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
	<script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
</head>
<body>
	<div class="main-content">
		<div class="modal-form">
			<form method="post" name="Empleo_estudio" id="Empleo_estudio" action="<?php echo base_url();?>Empleo_estudio/Guardar_empleo">
				<div class="row">
					<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="form-group">
					<label>Nombre de la empresa:</label>
					<input type="text" name="Nombre_Empresa" id="Nombre_Empresa" minlength="10" maxlength="50" class="form-control">
				</div>
				<div class="form-group">
					<label>Direccion:</label>
					<input type="text" name="Direccion" id="Direccion" minlength="10" maxlength="50" class="form-control">
				</div>
				<div class="form-group">
					<label>Telefono:</label>
					<input type="text" name="Telefono" id="Telefono" minlength="8" maxlength="16" class="form-control">
				</div>
				<div class="form-group">
					<label>Estudia Actualmente:</label>
					<input type="text" name="Estudia_Actualmente" id="Nombre_Empresa" minlength="2" maxlength="50" class="form-control">
				</div>
				<div class="form-group">
					<label>Estudios:</label>
					<input type="text" name="Estudios" id="Estudios" minlength="10" maxlength="50" class="form-control">
				</div>
				<div class="form-group">
					<label>Institución</label>
					<input type="text" name="Institucion" id="Institucion" minlength="10" maxlength="50" class="form-control">
				</div>
				<div class="form-group">
               <input type="submit"  id="Guardar" value="Guardar" class="btn btn-primary" onclick="guardar_voluntario();">
               </div>
						</div>
						<div class="col-md-3"></div>
				</div>
			</form>
		</div>
	</div>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
</body>
</html>
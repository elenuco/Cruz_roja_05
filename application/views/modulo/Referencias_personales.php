<!--INCIO DEL NAVBAR-->

<nav class="navbar navbar-expand-lg navbar-white bg-dark">
  <a class="navbar-brand" href="<?php echo base_url();?>cruz">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo base_url();?>voluntario">Voluntariado<span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="<?php echo base_url();?>historial_cruz">Personal</a>
    
      <a class="nav-item nav-link" href="<?php echo base_url();?>ayuda_control">Ayuda</a>
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
	<title>Referencias_Personales_Voluntario</title>
</head>
<body>
<div class="main-content"> 
	<div class="modal-form">
		<form class="form-control" name="dato_generales" id="dato_generales" method="post" action="<?php echo base_url();?>Datos_General/guardar_generales">
	     <div class="row">
	     	<div class="col-md-3"></div>
	     	<div class="col-md-6">
	     		<div class="form-group">
	     			<label>Nombre:</label>
	     			<input type="text" name="Nombre" id="Nombre" class="form-control" required="" minlength="3" maxlength="50" placeholder="Escriba Su Primer Apellido">
	     		</div>
	     		<div class="form-group">
	     			<label>Dirección:</label>
	     			<input type="text" name="Dirección" id="Dirección" class="form-control" required="" minlength="4" maxlength="50" placeholder="Escriba Su Segundo Apellido">
	     		</div>
	     		<div class="form-group">
	     			<label>Teléfono:</label>
	     			<input type="date" name="Teléfono" id="Teléfono" class="form-control" required="" placeholder="Escriba Sus Teléfono">
	     		</div>
	     	    
	     	<div class="col-md-3"></div>
	     </div>
	     <div class="form-group">
                 	<a href="<?php echo base_url();?>" class="btn btn-primary">Siguente</a>
                </div>
	     </form>
	</div>
</body>
</html>
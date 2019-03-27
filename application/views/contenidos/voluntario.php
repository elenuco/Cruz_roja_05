 <!--INCIO DEL NAVBAR-->

 <nav class="navbar navbar-expand-lg navbar-white bg-dark">
 	<a class="navbar-brand" href="<?php echo base_url();?>usuario/index">Inicio</a>
 	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
 		<span class="navbar-toggler-icon"></span>
 	</button>
 	<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
 		<div class="navbar-nav">
 			<a class="nav-item nav-link active" href="<?php echo base_url();?>voluntario">Datos personales<span class="sr-only">(current)</span></a>
 			<a class="nav-item nav-link" href="<?php echo base_url();?>historial_cruz">Historial Voluntario</a>


 		</div>
 		<div class="buton">
 			<a href="<?php echo base_url();?>login"><input type="button" name="" class="btn btn-success" value="Cerrar Sesión"></a>

 		</div>

 	</div>
 </nav>

 <!--FIN DEL NAVBAR-->
 <!DOCTYPE html>
 <html lang="es">
 <head>
 	<meta charset="UTF-8">
 	<title>CRUZ ROJA </title>
 	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

 	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/bootstrap.min.css">
 	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/style.css">
 	<link rel="stylesheet" href="<?php echo base_url();?>/assets/css/estilo.css">

 </head>
 <body background="imagen/dega.jpg">
 	<img src="imagen/nueva.jpg"  align="left" alt="Cruz Roja Salvadoreña" height="200" width="200" border="10" style="margin:20">

<font color="black" face="EucrosiaUPC"> 
 	<h1>Cruz Roja Salvadoreña</h1>
 	<h3>Voluntariado</h3>
 </font>
 <div class="container-fluid">
 		<table class="table table-striped">
 			<center><h1>Datos Personales</h1></center>
 			<thead class="thead-light">
 				<tr>
 					<th>#</th>
 					<th>Primer Apellido</th>
 					<th>Segundo Apellido</th>
 					<th>Nombres</th>
 					<th>Lugar de Nacimiento</th>
 					<th>Fecha Nacimiento</th>
 					<th>Nacionalidad</th>
 					<th>Sexo</th>
 					<th>Estado Civil</th>
 					<th>Profesión u Oficio</th>
 					<th>Nivel Academico</th>
 					<th>DUI</th>
 					<th>Tipo de Sangre</th>
 					<th>N° de Hijos/as</th>
 					<th>Detalles</th>
 					<th>Editar</th>
 					 

      
 				</tr>
 			</thead>
 			<tbody id="ver_dato">

 			</tbody>

 		</table>
        </div>
      <form id="editar">
 
 		            <!-- Modal DETALLES -->
            <div class="modal fade" id="historial_c" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
                <div class="modal-dialog modal-lg-arr" role="document">
                    <div class="modal-content" >
                       <div class="table-responsive">
                        <table class="table table-styling">
                            <thead>
                                <tr class="table-info">
                                    <th>Dirección Domicilio</th>
                                    <th>Telefono</th>
                                    <th>Celular</th>
                                    <th>Nombre de Trabajo</th>
                                    <th>Dirección trabajo</th>
                                    <th>Telefono trabajo</th>
                                    <th>Centro de estudio</th>
                                    <th>Dirección estudio</th>
                                    <th>Telefono estudio</th>
                                    <th>Correo electronico</th>
                                    <th>Licencia</th>
                                    <th>Seccional</th>
                                    <th>Tipo Seccional</th>
                                   
                                </tr>
                            </thead>
                            <tbody id="mostrar_detalle">

                            </tbody>
                        </table>
                    </div>

                </div>

            </div>

        </div>
        <div class="container col md-5">
   <a href="<?php echo base_url();?>datos_pdf/index"><input type="button" class="btn btn-primary">Imprimir pdf</button></a>
   </div>
        <!-- Cierre de modal DETALLES -->
 		   <!-- Modal update -->
        <div class="modal fade" id="update_vol" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title">Actualización del Voluntario</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body" id="mostrar_campos">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-dark" data-dismiss="modal">Volver</button>
                        <button type="button" class="btn btn-primary waves-effect waves-light " onclick="update();">Guardar cambios</button>
                    </div>
                </div>
            </div>
        </div>
        <!-- Fin modal update -->
 		

 </form>
 	<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
 	<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

 	<script type="text/javascript"></script>
 	<script>
 		function tabla_voluntario(){
 			$.ajax({
 				type : 'POST',
 				url : '<?=base_url();?>voluntario/Dato_personal',
 				success: function (data){
 					$('#ver_dato').html(data);
 				}
 			});

 		}
 		   function detallePersonal(id){
        $.ajax({
            type : 'POST',
            url : '<?=base_url();?>voluntario/detalles?id='+id,
            success: function (respuesta){
                $('#mostrar_detalle').html(respuesta);
            }
        });
    }
     function extraerVoluntario(id){
        $.ajax({
            type : 'POST',
            url : '<?=base_url();?>voluntario/actualizar?ide='+id,
            success: function (data){
                $('#mostrar_campos').html(data);
            }
        });
    }
        function update(){

        $.ajax({
            type : 'POST',
            url : '<?=base_url();?>voluntario/editarDato',
            data : $('#editar').serialize(),
            success: function (data){
                if (data == 'exito') {
                    $('#update_vol').modal('hide');
                    tabla_voluntario();
                }else{
                    alert('error');
                }
            }
        });
    }
 	</script>

 	<script>
 		$(document).ready(function() {
 			tabla_voluntario();
 			detallePersonal();
            update();


 		});
 	</script>

 </body>
 </html>
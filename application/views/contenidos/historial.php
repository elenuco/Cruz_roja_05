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

 <body background="imagen/dega.jng">
  <img src="imagen/histo.jpg" align="left" alt="Cruz Roja Salvadoreña" height="200" width="200" border="10" style="margin:20">
  <center><h1>Historial dentro de Cruz Roja</h1><br><br>
    <font color="black" face="" size="3">
 
      <!-- Modal DETALLES -->
     <!-- <div class="modal fade" id="capacitacion" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
        <div class="modal-dialog modal-lg-arr" role="document">
          <div class="modal-content" >
           <div class="table-responsive">
            <table class="table table-styling">
              <thead>
                <tr class="table-info">

                  <th>Nombre capacitación</th>
                  <th>Año</th>
                  <th>Impartida por</th>
                  <th>No.Horas</th>
                  <th>Observaciones</th>


                </tr>
              </thead>
              <tbody id="mostrar_cap">

              </tbody>
            </table>
          </div>

        </div>

      </div>

    </div>-->



<div class="container-fluid">
  <table class="table table-striped">
    <center><h1>Voluntariado</h1></center>
    <thead class="thead-light">
      <tr>
        <th>#</th>
        <th>Nombre voluntario</th>
        <th>Fecha ingreso</th>
        <th>Cargo actual</th>
        <th>Fecha presente</th>
        <th>Presidente seccional</th>
        <th>Jefe DD Local</th>
        <th>Jefarura Nacional</th>
        <th>Presidente departamental</th>
        <th>Director</th>
        <th>Firma</th>
        <th>Editar</th>



      </tr>
    </thead>
    <tbody id="ver_dato">

    </tbody>

  </table>
</div>
 <form id="editar">

  <!-- Modal update -->


        <div class="modal fade" id="update" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
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
                        <button type="button" class="btn btn-primary waves-effect waves-light " onclick="updateHistorial();">Guardar cambios</button>
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
  function tabla_historial(){
    $.ajax({
      type : 'POST',
      url : '<?=base_url();?>historial_cruz/Cruz_historial',
      success: function (data){
        $('#ver_dato').html(data);
      }
    });

  }
 
  function extraerhistorial(id){
    $.ajax({
      type : 'POST',
      url : '<?=base_url();?>historial_cruz/llenarDato?id='+id,
      success: function (data){
        $('#mostrar_campos').html(data);
      }
    });
  }
       function updateHistorial(){

        $.ajax({
            type : 'POST',
            url : '<?=base_url();?>historial_cruz/editarDato',
            data : $('#editar').serialize(),
            success: function (data){
                if (data == 'exito') {
                    $('#update').modal('hide');
                    tabla_voluntario();
                }else{
                    alert('error');
                }
            }
        });
    }
      function extraeVol(id){
    $.ajax({
      type : 'POST',
      url : '<?=base_url();?>historial_cruz/llenarDato?id='+id,
      success: function (data){
        $('#mostrar_campos').html(data);
      }
    });
  }
</script>
<script>
  $(document).ready(function() {
    tabla_historial();
    updateHistorial();
    extraerhistorial();
    extraeVol();



  });
</script>


</body>
</html>
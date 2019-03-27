 <!DOCTYPE html>
 <html lang="es">
 <head>
  <meta charset="UTF-8">
  <title>CRUZ ROJA </title>
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>
<body background="">
  <header >
    <br><br>
    <center><img src="<?php echo base_url();?>imagen/vol.jpg"  width="70%"></center>
    <br><br>
   <center><h1>Solicitud de Ingreso </h1></center>
  </header> <br>
  

    <form  id="dato_general">
  <div class="main-content"> 
   <div class="modal-form">
  
      <div class="row">
       <div class="col-md-3"></div>
       <div class="col-md-6">
        <div class="form-group">
         <label>Primer Apellido:</label>
         <input type="text" name="Primer_Apellido" id="Primer_Apellido" class="form-control" required="" minlength="4" maxlength="25" placeholder="Escriba Su Primer Apellido">
       </div>
       <div class="form-group">
         <label>Segundo Apellido:</label>
         <input type="text" name="Segundo_Apellido" id="Segundo_Apellido" class="form-control" required="" minlength="4" maxlength="50" placeholder="Escriba Su Segundo Apellido">
       </div>
       <div class="form-group">
         <label>Nombres:</label>
         <input type="text" name="Nombres" id="Nombres" class="form-control" required="" placeholder="Escriba Sus Nombres">
       </div>
       <div class="form-group">
        <label>Seleccione Sexo:</label>
        <select name="Sexo" id="Sexo" class="" minlength="4" maxlength="50">
        </select>
      </div><br>
      <div class="form-group">
        <label>Lugar de Nacimiento:</label>
        <input type="text" name="Lugar_Nacimiento" id="Lugar_Nacimiento" class="form-control" placeholder="Lugar de Nacimiento" minlength="8" maxlength="50" required="">
      </div>
      <div class="form-group">
       <label>Fecha de Nacimiento:</label>
       <input type="date" name="Fecha_Nacimiento" id="Fecha_Nacimiento" class="form-control" required="">
     </div>
     <div class="form-group">
       <label>Edad:</label>
       <input type="number" name="Edad" id="Edad" class="form-control" placeholder="aa" minlength="2" maxlength="18" required="">
     </div>
     <div class="form-group">
       <label>Nacionalidad:</label>
       <input type="text" name="Nacionalidad" id="Nacionalidad" class="form-control" placeholder="Salvadoreñ@" required="">
     </div>
     <div>
       <label>Carnet de Minoridad ó Partida de Nacimiento:</label>
       <input type="text" name="CarentM_Partida" id="CarentM_Partida" required="" minlength="3" maxlength="16" class="form-control" placeholder="000000">
     </div>
     <div class="form-group">
       <label>Lugar y Fecha de Expedición:</label>
       <input type="text" name="Lugar_Fecha_Expedicion" class="form-control" minlength="10" placeholder="Lugar dd/mm/aaaa" required="">
     </div>
     <div class="form-group">
       <label>Idiomas que domina:</label>
       <input type="text" name="Idiomas_que_domina" id="Idiomas_que_domina" required="" min="4" maxlength="50" class="form-control" placeholder="Español">
     </div>
     <div class="form-group">
       <label>Domicilio:</label>
       <input type="text" name="Domicilio" id="Domicilio" required="" minlength="8" maxlength="50" placeholder="col.aaaa, psj.aa..." class="form-control">
     </div>
     <div class="form-group">
       <label>Telefono:</label>
       <input type="text" name="Telefono" id="Telefono" class="form-control" minlength="8" maxlength="10" placeholder="(+000)0000-0000" required="">
     </div>
     <div class="form-group">
      Nombre del Padre:
      <input type="text" name="Nombre_Padre" id="Nombre_Padre" class="form-control" minlength="8" maxlength="50" placeholder="Escriba El Nombre de  su Padre">
    </div>
    <div class="form-group">
      <label>¿Vive?</label>
      <input type="text" name="Vive_Padre" id="Vive_Padre" class="form-control" minlength="1" maxlength="2" placeholder="Sí/No">
    </div>
    <div class="form-group">
      <label>Nombre de la Madre:</label>
      <input type="text" name="Nombre_Madre" id="Nombre_Madre" class="form-control" minlength="8" maxlength="50" placeholder="Escriba el Nombre de su Madre">
    </div>
    <div class="form-group">
      <label>¿Vive?</label>
      <input type="text" name="Vive_Madre" id="Vive_Madre" class="form-control" minlength="1" maxlength="2" placeholder="Sí/No">
      <br>
        <button type="button"  class="btn btn-primary" onclick="guardar();">Guardar</button>
       
    </div>
  </div>
 
</div>
 
<div class="">
    <div class="col-md-6">
     <a href="<?php echo base_url();?>Datos_academicos"><button type="button" class="btn btn-danger">Estudios</button></a>  
      <a href="<?php echo base_url();?>DMedicos_voluntario"><button type="button" class="btn btn-danger">Datos medicos</button></a></div>
  </div><br>
 

</div>
</div>
</form>
  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

  <script type="text/javascript"></script>

<script>

  function guardar(){

    $.ajax({
      type : 'POST',
      url : '<?php echo base_url();?>Datos_General/Guardar',
      data : $('#dato_general').serialize(),
      success: function (data){
        if (data == 'exito') {
          $('[name="Primer_Apellido"]').val("");
          $('[name="Segundo_Apellido"]').val("");
          $('[name="Nombres"]').val("");
          $('[name="Sexo"]').val("");
          $('[name="Lugar_Nacimiento"]').val("");
          $('[name="Fecha_Nacimiento"]').val("");
          $('[name="Edad"]').val("");
          $('[name="Nacionalidad"]').val("");
          $('[name="CarentM_Partida"]').val("");
          $('[name="Lugar_Fecha_Expedicion"]').val("");
          $('[name="Idiomas_que_domina"]').val("");
          $('[name="Domicilio"]').val("");
          $('[name="Telefono"]').val("");
          $('[name="Nombre_Padre"]').val("");
          $('[name="Vive_Padre"]').val("");
          $('[name="Nombre_Madre"]').val("");
          $('[name="Vive_Madre"]').val("");
                  // $('#save_user').modal('hide');
                  // $('#tabla_clientes').html(data);
                   // tabla.destroy();
                   // mostrar_clientes();
                 }else{
                  alert('Su edad no cumple con el promedio de edad requerido para ser parte de nuestro voluntariado');
                }
              }
            });
  }
  function llenar_sexo() {
    var redireccion='<?php echo base_url();?>Datos_General/Llenar_sexo';
    $.ajax({
      url:redireccion,
      type:'post',
      success:function (respuesta) {
        $('#Sexo').html(respuesta);
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

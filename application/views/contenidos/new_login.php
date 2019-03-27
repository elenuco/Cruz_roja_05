 <!--INCIO DEL NAVBAR-->
<title>Cruz_Roja</title>
<nav class="navbar navbar-expand-lg navbar-white bg-dark">
  <a class="navbar-brand" href="<?php echo base_url();?>cruz">Inicio</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link active" href="<?php echo base_url();?>">Referencias</a>
    
      <a class="nav-item nav-link" href="<?php echo base_url();?>/ayuda_control">Ayuda</a>
   
       <a class="nav-item nav-link" href="<?php echo base_url();?>/cruz/info">Informacion</a>
        <a class="nav-item nav-link" href="<?php echo base_url();?>entre_control">Solicitud</a>

      <div class="col-0ffset-md-6">
      <a href="<?php echo base_url();?>Admin"><input type="button" name="" class="btn btn-success" value="login"></a>

         
     <!--<button class="btn btn-mat btn-success" data-toggle="modal" data-target="#save_user">Nuevo Usuario</button>-->
      </div>
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

  <script src="<?=base_url() ;?>recursos/js/vendor/modernizr-2.8.3.min.js"></script>
  <script  src="<?=base_url() ;?>recursos/js/misScripts.js"></script>
  <script>
    document.getElementById("miInput")
    .addEventListener("keyup", function(event) {
      event.preventDefault();
      if (event.keyCode === 13) {
        document.getElementById("enviar").click();
      }
    });
  </script>
</head><br><br>
<body background="imagen/pass.jpg">
  <?php
  $username = array(
    'name' => 'username', 
    'id'=>'miInput', 
    'required'=>'true', 
    'onkeypress'=>'return soloLetrasNumeros(event)', 
    'pattern'=>'[A-Za-z0-9]{4,10}', 
    'title' => 'Ingrese el usuario y clave que le dio su administrador');
  $password = array(
    'name' => 'password', 
    'id'=>'miInput', 'required'=>'true', 
    'onkeypress'=>'return soloLetrasNumeros(event)', 
    'pattern'=>'[A-Za-z0-9]{4,10}', 
    'title' => 'Ingrese el usuario y clave que le dio su administrador');
  $submit = array(
    'name' => 'submit', 
    'id'=>'enviar', 
    'onclick'=>'doSomething();',
    'title' => 'Iniciar sesión', 
    'value'=>'Ingresar', 
    'type' => 'submit');
    ?>




    <div class="container">
      <div class="card bg-ligth mb-10 " style="width: 60rem; height: 30rem;">
         
       <div class="row">
        <div class="offset-2 md-5">
         <?=form_open(base_url().'login/new_user')?>

        <center><img width="40%" height="30%" src=" <?=base_url(); ?>imagen/maleta.png" class="ptb--50"  alt="">
         <h4>Inicio De Sesión</h4>
         <p>[Hola buen día, bienvenido, a dar <b>lo mejor de tí</b>.]</p></center>
         <?php 
         if($this->session->flashdata('usuario_incorrecto'))
         {
          ?>
          <?=$this->session->flashdata('usuario_incorrecto')?>
          <?php
        }
        ?>
        <center><label>Usuario</label>
          <input type="text" name="usuario" class="form-control" required="">
          <label>Clave</label>
          <input type="password" name="clave" class="form-control" required="">
          <div class="row mb-10 rmber-area">
            <div class="col-10">
              <div class="custom-control custom-checkbox mr-sm-4">
                <input type="checkbox" class="custom-control-input" id="customControlAutosizing">
                <label class="custom-control-label" for="customControlAutosizing">Recordar</label>
              </div>
            </div>
            <div class="text-left">
              <p>Si olvidó su contraseña contacte al administrador.</p>
            </div>


          </div>

          <div class="submit-btn " >
            <?=form_button($submit, 'Iniciar Sesión')?>
          </div></center>
          <?php echo form_close() ?>
        </div>
      </div>
 
    </div>
  </div>




 



  <script src="<?php echo base_url();?>assets/js/jquery.js"></script>
  <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

</body>
</html>
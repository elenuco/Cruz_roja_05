 
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
<body>



  <center><h1>Bienvenido Administrador</h1>
   <h3>Usuarios </h3> </center>


<form id="guardar_usuario"  action="<?php echo base_url(); ?>usuario/guardarUser" method="post">
   <div class="modal fade" id="modal" tabindex="-1" role="dialog" style="z-index: 1050; display: none;" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">Registro de Usuario</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body" >
          <div class="card-block">
            <!-- <h4 class="sub-title">Basic Inputs</h4> -->
           
              <div class="form-group row">

                <div class="col-sm-10">
                  <input type="hidden" class="form-control" id="id" name="id">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Ingresar nombres">
                </div>
              </div>
              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Apellido</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="apellido" name="apellido" placeholder="Ingresar apellidos">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Usuario</label>
                <div class="col-sm-8">
                  <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese un usuario">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Password</label>
                <div class="col-sm-8">
                  <input type="Password" class="form-control" id="clave" name="clave" placeholder="Ingrese su contraseña">
                </div>
              </div>

              <div class="form-group row">
                <label class="col-sm-2 col-form-label">Rol</label>
                <div class="col-sm-8">
                  <select name="Select_rol" id="Select_rol" class="form-control"placeholder="">
                  </select>
                </div>
              </div>


            </form>
          </div>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Volver</button>
          <button type="submit" class="btn btn-primary">Agregar Usuario</button>
        </div>
      </div>
    </div>
  </div>


  <div class="container">
    <div class="col md-4">
     <table class="table table-striped table-white" id="mitable" >
      <thead >

        <tr class="table-info">
          <th scope="col">#</th>
          <th scope="col">Nombre</th>
          <th scope="col">Apellido</th>
          <th scope="col">Usuario</th>
          <th scope="col">Password</th>
          <th scope="col">Rol</th>
          

        </tr>

      </thead>
      <tbody id="ver_user">
      </tbody>
    </table>

    <button class="btn btn-mat btn-info" data-toggle="modal" data-target="#modal">Nuevo Usuario</button>
  </div>
</div>


   <!--Select 2-->
 
 

<script src="<?php echo base_url();?>assets/js/jquery.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>

<script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
<script type="text/javascript"></script>

<script>

  $(document).ready( function () {
    $('#mitable').DataTable();
  } );
</script>

<script>
  function lista_usuario(){
    $.ajax({
      type : 'POST',
      url : '<?=base_url();?>usuario/Lista_user',
      success: function (data){
        $('#ver_user').html(data);
      }
    });

  }
  
 
  function llenarRol(){
    var redireccion='<?php echo base_url();?>usuario/Llenar_rol';  
    $.ajax({
      url:redireccion,
      type:'post',
      success: function (data){
       $('#Select_rol').html(data);
     }
   });
  }
</script>

<script>
  $(document).ready(function() {
   llenarRol();
   lista_usuario();
    

 });
</script>
 
</body>
</html>


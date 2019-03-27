
<!DOCTYPE html>
<html>
<head>
    <title>ayuda</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css"> 
    <script src="<?php echo base_url();?>assets/js/jquery-3.3.1.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

</head>
<body class="bg-ligth">
    <div class="container">
     <center><h1>CENTRO DE AYUDA</h1></center>
      <img class="img-responsive" src="http://emarketinglink.com/cruzroja/old/wp-content/uploads/2016/10/logo-cruz-roja-salvadorena.png" alt="Cruz Roja Salvadoreña" width="800" height="107">
        <br>
          <!--INICIO CARUSELL-->
        <div id="carouselExampleInterval" class="carousel slide" data-ride="carousel">
          <div class="carousel-inner">
             <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1"></li>
                <li data-target="#myCarousel" data-slide-to="2"></li>
                <li data-target="#myCarousel" data-slide-to="3"></li>
            
            </ol>
            <div class="carousel-item active" >
              <img src="<?php echo base_url();?>/imagen/donacion.jpg" class="d-block w-100" alt="..." width="100px">
            </div>
            <div class="carousel-item" >
              <img src="<?php echo base_url();?>/imagen/paramedico.jpg" class="d-block w-100" alt="..." width="100px">
            </div>
            <div class="carousel-item" >
              <img src="<?php echo base_url();?>/imagen/ima2.jpg" class="d-block w-100" alt="..." width="100px">
            </div>
            <div class="carousel-item" >
              <img src="<?php echo base_url();?>/imagen/resca.jpg" class="d-block w-100" alt="..." width="100px">
            </div>
             
          </div>
          <a class="carousel-control-prev" href="#carouselExampleInterval" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next" href="#carouselExampleInterval" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </div><br>
    <!--FIN CARUSELL-->
    <center><div class="container">
        <div class="row bg-">
        <br><br>
       <center><h1>Ayuda humanitaria que realizan los voluntarions de Cruz Roja Salvadoreña</h1></center>
     <br><br><br>
    <span><h3>Cruz Roja Salvadoreña fiel a sus Principios Fundamentales: Humanidad, Imparcialidad, Neutralidad, Independencia, Voluntariado, Unidad y Universalidad.
        Con el objetivo de contribuir al desarrollo comunitario Cruz Roja Salvadoreña ejecuta programas y proyectos con enfoques de resiliencia, por medio de los cuales se fortalecen las capacidades de la población para prevenir los riesgos y minimizar su impacto ya sea por fenómenos sociales, climatológicos o de salud, entre otros.</h3></span>
        </div>
    </div>
<script src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript">
    $(document).ready(function(){
             $('.carousel').carousel({interval: 2000});
   });
   
</script>
</body>
</html>
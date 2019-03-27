<!DOCTYPE html>
<html>
<head>
	<title>datsos</title>
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/js/bootstrap.min.js">
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>
<body>
	<div class="container bg-info">
		<div class="card bg-primary">
	    <center><h3>DATOS PERSONALES</h3></center>
		</div>
	
	<table border="1" style="width: 100%" class="table-bordered table-hover text-center">
		<tr>
			<th hidden>id_datos</th>
			<th>Primer Apellido</th>
			<th>Segundo Apellido</th>
			<th>Nombres</th>
			<th>Lugar Nacimiento</th>
			<th>Fecha Nacimiento</th>
			<th>Sexo</th>
			<th>Estado Civil</th>
			<th>Profecion u Oficio</th>
			<th>Nivel Academisco</th>
			<th>DUI</th>
			<th>Tipo Sangres</th>
			<th>N° Hijos</th>
			<th>Direccion Domicilio</th>
			<th>Telefono Fijo</th>
			<th>Telefono Movil</th>
			<th>Nombre Centro Trabajo</th>
			<th>Direccion Centro Trabajo</th>
			<th>Telefono</th>
			<th>Nombre Centro Estudio</th>
			<th>Direccion Centro Estudio</th>
			<th>Telefono Estudio</th>
			<th>Correo Electronico</th>
			<th>Licencia</th>
		</tr>
		<?php foreach ($this->model->datos_model() as $d): ?>
			<tr>
				<td hidden><?php echo $d->id_datos ?></td>
				<td><?php echo $d->Primer_Apellido ?></td>
				<td><?php echo $d->Segundo_Apellido ?></td>
				<td><?php echo $d->Nombres ?></td>
				<td><?php echo $d->Lugar_Ncimiento ?></td>
				<td><?php echo $d->Fecha_Nac ?></td>
				<td><?php echo $d->Nacionalidad ?></td>
				<td><?php echo $d->Sexo ?></td>
				<td><?php echo $d->Estado_Civil ?></td>
				<td><?php echo $d->Profecion_Oficio ?></td>
				<td><?php echo $d->Nivel_Academico ?></td>
				<td><?php echo $d->DUI ?></td>
				<td><?php echo $d->Tipo_Sangre ?></td>
				<td><?php echo $d->N_Hijos ?></td>
				<td><?php echo $d->Direccion_Domicilio ?></td>
				<td><?php echo $d->Telefono_Fijo ?></td>
				<td><?php echo $d->Telefono_Movil ?></td>
				<td><?php echo $d->Nombre_Centro_Trabajo ?></td>
				<td><?php echo $d->Direccion_Centro_Trabajo ?></td>
				<td><?php echo $d->Telefonos ?></td>
				<td><?php echo $d->Nombre_Centro_Escolar ?></td>
				<td><?php echo $d->Direccion_Centro_Escolar ?></td>
				<td><?php echo $d->Telefonos_Estudios ?></td>
				<td><?php echo $d->Correo_Electronico ?></td>
				<td><?php echo $d->Licencia ?></td>

			<td><center><a href="?d=borar&id_datos=<?php echo $d->id_datos;?>" class="btn indigo lighten-3">ELIMINAR</a></center></td>
			<td><center><a href="?d=id_datos=<?php echo $d->id_datos;?>" class="btn indigo lighten-3">ACTUALIZAR</a></center></td>
			</tr>
			<?php endforeach; ?>
	</table>


	</div>

</body>
</html>
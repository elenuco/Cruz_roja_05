<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class voluntario  extends CI_Controller{ 

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Voluntario_model');
		$this->load->helper('form'); //podemos acceder directamente a los metodos de una clase y llamar o acceder a cualwuier clase de cualquier lugar
	}
	public function index(){
		$this->load->view('contenidos/voluntario');
	}
	public function Dato_personal(){
		$hb = $this->Voluntario_model->mostrar();
		$contador =1;
		foreach ($hb as $result){
			echo '<tr>'.
			'<th scope="row">'.$contador.'</th>'.
			'<td>'.$result["Primer_Apellido"].'</td>'.
			'<td>'.$result["Segundo_Apellido"].'</td>'.
			'<td>'.$result["Nombres"].'</td>'.
			'<td>'.$result["Lugar_Ncimiento"].'</td>'.
			'<td>'.$result["Fecha_Nac"].'</td>'.
			'<td>'.$result["Nacionalidad"].'</td>'.
			'<td>'.$result["id_Sexo"].'</td>'.
			'<td>'.$result["Estado_Civil"].'</td>'.
			'<td>'.$result["Profecion_Oficio"].'</td>'.
			'<td>'.$result["Nivel_Academico"].'</td>'.
			'<td>'.$result["DUI"].'</td>'.
			'<td>'.$result["Tipo_Sangre"].'</td>'.
			'<td>'.$result["N°_Hijos"].'</td>'.
			'<td>'.'<button class="btn btn-mat btn-warning" data-toggle="modal" data-target="#historial_c" onclick="detallePersonal('.$result['id_datos'].');">Detalles↑</button></td>'.
			'<td>'.'<button class="btn btn-mat btn-info" data-toggle="modal" data-target="#update_vol" onclick="extraerVoluntario('.$result['id_datos'].');">Editar✎</button></td>'.


			'</tr>'.

			$contador ++;
		}
	}
	public function detalles(){
		$deta = $this->Voluntario_model->detalle($_REQUEST['id']);
		foreach ($deta as $hb) {
			echo'<tr>'.
			'<td>'.$hb["Direccion_Domiciliar"].'</td>'.
			'<td>'.$hb["Telefono_Fijo"].'</td>'.
			'<td>'.$hb["Telefono_Movil"].'</td>'.
			'<td>'.$hb["Nombre_Centro_Trabajo"].'</td>'.
			'<td>'.$hb["Direccion_Centro_Estudio"].'</td>'.
			'<td>'.$hb["Telefonos"].'</td>'.
			'<td>'.$hb["Nombre_Centro_Estudio"].'</td>'.
			'<td>'.$hb["Direccion_Centro_Estudio"].'</td>'.
			'<td>'.$hb["Telefonos_Estudio"].'</td>'.
			'<td>'.$hb["Correo_Electronico"].'</td>'.
			'<td>'.$hb["Licencia"].'</td>'.
			'<td>'.$hb["Seccional"].'</td>'.
			'<td>'.$hb["Tipo_Seccional"].'</td>'.
			'</tr>';

		}
	}

	public function actualizar(){
		
		$data = $this->Voluntario_model->mostrar($_REQUEST['ide']);
		$listarSexo = $this->Voluntario_model->listar();
		$Seccional = $this->Voluntario_model->seccional();
		$Voluntario = $this->Voluntario_model->voluntario();
		foreach ($data as $det) {
			echo '<div class="card-block">'.
			'<!-- <h4 class="sub-title">Basic Inputs</h4> -->'.
			'<form id="guardaru">'.
			'<div class="form-group row">'.

			'<div class="col-sm-10">'.
			'<input type="hidden" class="form-control" id="id" name="id"  value="'.$det["id_datos"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Nombre</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="nombre" name="primer" value="'.$det["Primer_Apellido"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Apellido</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="apellido" name="segundo" value="'.$det["Segundo_Apellido"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Nacimiento</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="nac" name="nombre" value="'.$det["Nombres"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Direccion</label>'.
			'<div class="col-sm-10">'.
			'<textarea rows="5" name="lugarN" id="dir"cols="5" class="form-control" placeholder="Direccion completa">'.$det["Lugar_Ncimiento"].'</textarea>'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">DUI</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="dui" name="fechaN" value="'.$det["Fecha_Nac"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">DUI</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="dui" name="pais" value="'.$det["Nacionalidad"].'">'.
			'</div>'.
			'</div>'.

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Nacionalidad</label>'.
			'<div class="col-sm-10">'.
			'<select name="sexo" id="selectNacion" class="form-control">';
			foreach ($listarSexo as $sexo) {
				echo '<option value="'.$sexo["id_sexo"].'"';echo $sexo["id_sexo"]==$det["id_Sexo"] ? "selected" : "";echo '>'.$sexo["Sexo"].'</option>';
			}
			echo '</select>'.
			'</div>'.
			'</div>'. 

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Número de Licencia</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="numlic" name="estado" value="'.$det["Estado_Civil"].'">'.
			'</div>'.
			'</div>'.


			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Número de Licencia</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="numlic" name="profecion" value="'.$det["Profecion_Oficio"].'">'.
			'</div>'.
			'</div>'.

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Telefono</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="tel" name="nivel" value="'.$det["Nivel_Academico"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">DUI</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="dui" value="'.$det["DUI"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Tipo Sangre</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="sangre" value="'.$det["Tipo_Sangre"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">N° Hijos</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="hijos" value="'.$det["N°_Hijos"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Dirección Domiciliar</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="domicilio" value="'.$det["Direccion_Domiciliar"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Telefono Fijo</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="fijo" value="'.$det["Telefono_Fijo"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Telefono Movil</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="movil" value="'.$det["Telefono_Movil"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Centro de Trabajo</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="trabajo" value="'.$det["Nombre_Centro_Trabajo"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Dirección trabajo</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="dirT" value="'.$det["Direccion_Centro_Trabajo"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Telefono trabajo</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="telT" value="'.$det["Telefonos"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Centro de estudio</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="estudio" value="'.$det["Nombre_Centro_Estudio"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Dirección estudio</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="dirE" value="'.$det["Direccion_Centro_Estudio"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Telefono estudio</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="telE" value="'.$det["Telefonos_Estudio"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Correo</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="correo" value="'.$det["Correo_Electronico"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Licencia</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="licencia" value="'.$det["Licencia"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Seccional</label>'.
			'<div class="col-sm-10">'.
			'<select name="seccional" id="selectNacion" class="form-control">';
			foreach ($Seccional as $lista) {
				echo '<option value="'.$lista["id_seccional"].'"';echo $lista["id_seccional"]==$det["id_seccional"] ? "selected" : "";echo '>'.$lista["Seccional"].'</option>';
			}
			echo '</select>'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Seccional</label>'.
			'<div class="col-sm-10">'.
			'<select name="voluntario" id="selectNacion" class="form-control">';
			foreach ($Voluntario as $tipo) {
				echo '<option value="'.$tipo["id_tipo_seccional"].'"';echo $tipo["id_tipo_seccional"]==$det["id_seccional"] ? "selected" : "";echo '>'.$tipo["Tipo_Seccional"].'</option>';
			}
			echo '</select>'.
			'</div>'.
			'</div>'.

			'</form>'.

			'</div>';
		}
	}
	public function editarDato(){
		$update = $this->Voluntario_model->editar();
		echo $update;
	}
	public function historial(){
		$this->load->view('contenidos/historial');
	}

}
?>
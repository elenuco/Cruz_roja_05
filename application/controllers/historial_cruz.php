<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class historial_cruz  extends CI_Controller{ 

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Historial_model');
		$this->load->helper('form'); //podemos acceder directamente a los metodos de una clase y llamar o acceder a cualwuier clase de cualquier lugar
	}
	public function index(){
		$this->load->view('contenidos/historial');
	}
	public function Cruz_historial(){
		$hb = $this->Historial_model->mostrar();
		$contador =1;
		foreach ($hb as $result){
			echo '<tr>'.
			'<th scope="row">'.$contador.'</th>'.
			'<td>'.$result["id_personales"].'</td>'.
			'<td>'.$result["Fecha_Ingreso"].'</td>'.
			'<td>'.$result["cargo_actual"].'</td>'.
			'<td>'.$result["fecha_presente"].'</td>'.
			'<td>'.$result["Presidente_Seccional"].'</td>'.
			'<td>'.$result["Jefe_DD_local"].'</td>'.
			'<td>'.$result["V.B_Jefatura_Nacional"].'</td>'.
			'<td>'.$result["V.B_Presidente_Departamental"].'</td>'.
			'<td>'.$result["V.B_DIrector_Voluntariado_Seccional"].'</td>'.
			'<td>'.$result["firma"].'</td>'.

			'<td>'.'<button class="btn btn-mat btn-info" data-toggle="modal" data-target="#update" onclick="extraerhistorial('.$result['id_datos_cruz_roja'].');">Editar✎</button></td>'.
			'</tr>'.

			$contador ++;
		}
	}
	/*public function capacitaciones(){
		$deta = $this->Historial_model->capacitaciones_modal($_REQUEST['id']);
		foreach ($deta as $hb) {
			echo'<tr>'.
			'<td>'.$hb["Nombre_Capacitacion"].'</td>'.
			'<td>'.$hb["Anio"].'</td>'.
	 
			'<td>'.$hb["Impartido_Por"].'</td>'.
			'<td>'.$hb["Numero_Horas"].'</td>'.
			'<td>'.$hb["Observaciones"].'</td>'.
			'</tr>';

		}
	}/*/

	public function llenarDato(){
		
		$data = $this->Historial_model->mostrar($_REQUEST['id']);
		$listaVol = $this->Historial_model->listar();
		//$Seccional = $this->Voluntario_model->seccional();
		$Voluntario = $this->Historial_model->voluntario();
		foreach ($data as $det) {
						echo '<div class="card-block">'.
			'<!-- <h4 class="sub-title">Basic Inputs</h4> -->'.
			'<form id="guardaru">'.
			'<div class="form-group row">'.

			'<div class="col-sm-10">'.
			'<input type="hidden" class="form-control" id="id" name="id"  value="'.$det["id_datos_cruz_roja"].'">'.
			'</div>'.
			'</div>'.

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Nombre</label>'.
			'<div class="col-sm-10">'.
			'<select name="nombreVoluntario" id="selectNacion" class="form-control">';
			foreach ($Voluntario as $vol) {
				echo '<option value="'.$vol["id_datos"].'"';echo $vol["id_datos"]==$det["id_personales"] ? "selected" : "";echo '>'.$vol["Nombres"].'</option>';
			}
			echo '</select>'.
			'</div>'.
			'</div>'. 

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Fecha ingreso</label>'.
			'<div class="col-sm-10">'.
			'<input type="date" class="form-control" id="fech" name="fechaI" value="'.$det["Fecha_Ingreso"].'">'.
			'</div>'.
			'</div>'.

		'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Tipo Voluntario</label>'.
			'<div class="col-sm-10">'.
			'<select name="tipoV" id="selectVol" class="form-control">';
			foreach ($listaVol as $bh) {
				echo '<option value="'.$bh["idvoluntario"].'"';echo $bh["idvoluntario"]==$det["id_personales"] ? "selected" : "";echo '>'.$bh["vulountario"].'</option>';
			}
			echo '</select>'.
			'</div>'.
			'</div>'. 

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Presidente seccional</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="pre" name="presidente" value="'.$det["Presidente_Seccional"].'">'.
			'</div>'.
			'</div>'.

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Presidente DD Local</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="dui" name="jefe" value="'.$det["Jefe_DD_local"].'">'.
			'</div>'.
			'</div>'.

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">V.B Jefatura Nacional</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="dui" name="jefatura" value="'.$det["V.B_Jefatura_Nacional"].'">'.
			'</div>'.
			'</div>'.

			

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">V.B.Presidente Seccional</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="numlic" name="departamental" value="'.$det["V.B_Presidente_Departamental"].'">'.
			'</div>'.
			'</div>'.


			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">V.B.Director Voluntario Seccional</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="numlic" name="director" value="'.$det["V.B_DIrector_Voluntariado_Seccional"].'">'.
			'</div>'.
			'</div>'.

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Cargo actual</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="tel" name="cargo" value="'.$det["cargo_actual"].'">'.
			'</div>'.
			'</div>'.

			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Firma</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="firma" value="'.$det["firma"].'">'.
			'</div>'.
			'</div>'.
			'<div class="form-group row">'.
			'<label class="col-sm-2 col-form-label">Fecha Presente</label>'.
			'<div class="col-sm-10">'.
			'<input type="text" class="form-control" id="correo" name="fechaP" value="'.$det["fecha_presente"].'">'.
			'</div>'.
			'</div>'.

			 
			'</div>'.
			'</div>'.

			'</form>'.

			'</div>';
 

		}
	}
	public function editarDato(){
		$update = $this->Historial_model->editar();
		echo $update;
	}
	public function historial(){
		$this->load->view('contenidos/historial');
	}


}
?>
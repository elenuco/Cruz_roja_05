<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class usuario  extends CI_Controller{ 

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Usuario_model');
		$this->load->helper('form'); //podemos acceder directamente a los metodos de una clase y llamar o acceder a cualwuier clase de cualquier lugar
	}
	public function index(){
		$this->load->view('modulo/nav_admin');
	}
	public function Lista_user(){
		$hb = $this->Usuario_model->mostrar();
		$contador =1;
		foreach ($hb as $result){
			echo '<tr>'.
			'<th scope="row">'.$contador.'</th>'.
			'<td>'.$result["nombre"].'</td>'.
			'<td>'.$result["apellido"].'</td>'.
			'<td>'.$result["usuario"].'</td>'.
			'<td>'.$result["clave"].'</td>'.
			'<td>'.$result["tipo_rol"].'</td>'.
			'</tr>'.

			$contador ++;
	}
		}
	public function guardarUser(){

		$data["nombre"] = $_POST["nombre"];
		$data["apellido"] = $_POST["apellido"];
		$data["usuario"] = $_POST["usuario"];
		$data["clave"] = $_POST["clave"];
		$data["idrol"] = $_POST["Select_rol"];

		$this->Usuario_model->registrar($data);
		redirect('usuario/index');
	}

	public function Llenar_rol (){
		$data = $this->Usuario_model->roles();
		echo "<option value='0'>Seleccione rol</option>";
		foreach ($data as $h) {
			echo "<option value='".$h['idrol']."'>".$h['tipo_rol']."</option>";

		}
	}


}

?>
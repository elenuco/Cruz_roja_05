<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class capacitacion  extends CI_Controller{ 

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Capacitacion_model');
		$this->load->helper('form'); //podemos acceder directamente a los metodos de una clase y llamar o acceder a cualwuier clase de cualquier lugar
	}
	public function index(){
		$this->load->view('contenidos/capacitacion');
	}
	public function capacitaciones(){
		$deta = $this->Capacitacion_model->capacitaciones_model($_REQUEST['id']);
		$contador = 1;
		foreach ($deta as $hb) {
			echo'<tr>'.
			'<td>'.$hb["Nombre_Capacitacion"].'</td>'.
			'<td>'.$hb["Anio"].'</td>'.

			'<td>'.$hb["Impartido_Por"].'</td>'.
			'<td>'.$hb["Numero_Horas"].'</td>'.
			'<td>'.$hb["Observaciones"].'</td>'.
			'</tr>';
			$contador ++;
		}
	}

}
?>
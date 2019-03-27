<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Datos_General extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->model('Ficha_model');
		
	}

	public function index()
	{
		$this->load->view('contenidos/head');
		$this->load->view('contenidos/navbar_general');
		$this->load->view('modulo/formulario_solicitud');
	}
	
	public function Llenar_sexo (){
		$data = $this->Ficha_model->select_Sexo();
		echo "<option value='0'>Seleccione Sexo</option>";
		foreach ($data as $h) {
			echo "<option value='".$h['id_sexo']."'>".$h['Sexo']."</option>";

		}
	}


	public function Guardar(){
		$dato = array(
			'Primer_Apellido' => $this->input->post('Primer_Apellido'), 
			'Segundo_Apellido'=>$this->input->post('Segundo_Apellido'),
			'Nombres' => $this->input->post('Nombres'), 
			'Sexo_id' => $this->input->post('Sexo'), 
			
			
			'Lugar_Nacimiento' => $this->input->post('Lugar_Nacimiento'),
			'Fecha_Nacimiento' => $this->input->post('Fecha_Nacimiento'),
			'Edad' => $this->input->post('Edad'), 
			'Nacionalidad' => $this->input->post('Nacionalidad'), 

			'CarnetM_Partida' => $this->input->post('CarentM_Partida'),
			'Lugar_Fecha_Expedicion' => $this->input->post('Lugar_Fecha_Expedicion'), 
			'Idiomas_que_domina' => $this->input->post('Idiomas_que_domina'), 
			'Domicilio' => $this->input->post('Domicilio'), 
			'Telefono' => $this->input->post('Telefono'),
			'Nombre_Padre' => $this->input->post('Nombre_Padre'), 
			'Vive_Padre' => $this->input->post('Vive_Padre'), 
			'Nombre_Madre' => $this->input->post('Nombre_Madre'), 
			'Vive_Madre' => $this->input->post('Vive_Madre'),  
		);
		if($this->input->post('Edad')<=18){
			$data=$this->Ficha_model->Insertar($dato);
			echo $data;

		}else{
			redirect('Datos_General');
			
		}
		
	}

}
?>
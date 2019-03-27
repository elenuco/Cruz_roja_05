<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Empleo_estudio extends CI_Controller
{
	
    public function __construct()
	{
		parent:: __construct();
		$this->load->model('Empleo_model');
	}

	public function index()
	{
		$this->load->view('Datos_empleo_estudio');
	}

	public function Guardar_empleo()
	{
		$data = array(
			'Nombre_Empresa' => $this->input->post('Nombre_Empresa'), 
			'Direccion' =>  $this->input->post('Direccion'), 
			'Telefono' =>  $this->input->post('Telefono'), 
			'Estudia_Actualmente' =>  $this->input->post('Estudia_Actualmente'), 
			'Estudios' =>  $this->input->post('Estudios'), 
			'Institucion' =>  $this->input->post('Institucion'), 
		);
		$this->Empleo_model->Insertar_empleo($data);
		redirect('cruz');
	}
}

 ?>
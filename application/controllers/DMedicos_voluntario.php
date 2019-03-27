<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class DMedicos_voluntario extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('DMedicos_model');
		
	}

	public function index()
	{
		$enfermedades=$this->DMedicos_model->select_enfermedades();
		$data['enfermedades']=$enfermedades;
		$asistenciales=$this->DMedicos_model->select_sasitecial();
		$data['asistenciales']=$asistenciales;
		$this->load->view('modulo/Datos_medicos',$data);
	}

	public function Guardar()
	{
		$data = array(
			'Tipo_Sanguineo' => $this->input->post('Tipo_Sanguineo'), 
			'Peso' => $this->input->post('Peso'),
			'Altura' => $this->input->post('Altura'),
			'Tipo_Enfermedades_id' => $this->input->post('Tipo_Enfermedades_id'),
		    'Especificaciones_Enfermedades' => $this->input->
			post('Especificaciones_Enfermedades'),
			'Servicios_Asistenciales_id' => $this->input->post('Servicios_Asistenciales_id'),
			'Contacto_Emergencia' => $this->input->post('Contacto_Emergencia'),
			'Direccion' =>$this->input->post('Direccion'),
			'Telefono' =>$this->input->post('Telefono')
		);
       $dato = $this->DMedicos_model->Insertar($data);
		redirect('DMedicos_voluntario',$dato);
	}

 }
?>
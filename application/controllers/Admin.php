<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin  extends CI_Controller{ 

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Usuario_model');
		$this->load->helper('form'); //podemos acceder directamente a los metodos de una clase y llamar o acceder a cualwuier clase de cualquier lugar
	}

	public function index()
	{
		if($this->session->userdata('idrol') == FALSE || $this->session->userdata('idrol') != 1 && $this->session->userdata('idrol') != 2)
		{
			redirect(base_url().'login');
		}
		$user = $this->Usuario_Modelo->mostrar();
		$datoTabla['usuario'] = $user;
		$data['cuerpo'] = $this->load->view('modulo/nav_admin',$datoTabla,TRUE);
		$data['precargador'] = $this->load->view('modulo/precargador',NULL,TRUE);
		$data['nav'] = $this->load->view('modulo/nav_administrador',NULL,TRUE);

		if ($this->session->userdata('idrol') == 1) {
			$data['nav'] = $this->load->view('modulo/nav_admin',NULL,TRUE);
		}else{
			 redirect('login');
		}
		$this->load->view('plantilla',$data);
	}
}
?>
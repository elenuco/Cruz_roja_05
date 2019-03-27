<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class login  extends CI_Controller{ 

	public function __construct(){
		parent::__construct();

		$this->load->helper('url');
		$this->load->model('Login_model');
		$this->load->helper('form'); //podemos acceder directamente a los metodos de una clase y llamar o acceder a cualwuier clase de cualquier lugar
	}
	public function index(){


		switch ($this->session->userdata('idrol')) {
			case '':

			$this->load->view('contenidos/new_login');
			break;
			case 1:
			redirect(base_url().'Admin');
			break;
			case 2:
			redirect(base_url().'seccional');
			break; 
			case 3:
			redirect(base_url().'voluntariado');
			break;
			default: 
			$data['titulo'] = 'Login con roles de usuario en codeigniter';
			$this->load->view('contenidos/new_login',$data);
			break; 
		}

	}

	public function new_user(){

		$this->form_validation->set_rules('usuario','usuario', 'required|trim|min_length[4]|max_length[10]');
		$this->form_validation->set_rules('clave','clave', 'required|callback_verifica');
		
		if($this->form_validation->run() == false){

		}
		 

		$usuario = $this->input->post('usuario');
		$pass = $this->input->post('clave');
 
		if($this->Login_model->login($usuario, $pass)){
			$this->load->view('modulo/nav_administrador');
			$this->load->view('modulo/nav_admin');



	}
	else
	{
		$this->form_validation->set_message('verifica', 'Contrasena Incorrecta');
		$this->session->flashdata('usuario_incorrecto', 'ERRORASO');
		redirect('login');
	}
}
public function logout_ci()
{
	$this->session->sess_destroy();
	$this->index();
}


}
?>
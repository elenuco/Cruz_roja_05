<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class entre_control extends CI_Controller{

	public function index(){
		$this->load->view('contenidos/head');
		$this->load->view('contenidos/navbar_general');
		$this->load->view('modulo/entrevista_view');
	}

}

 ?>
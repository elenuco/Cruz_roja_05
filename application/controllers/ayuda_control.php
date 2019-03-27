<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class ayuda_control extends CI_Controller{


	public function index(){
		$this->load->view('contenidos/navbar_general');
	$this->load->view('modulo/ayuda_vista');
	
	}


}


 ?> 
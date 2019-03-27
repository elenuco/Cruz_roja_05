<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class cruz  extends CI_Controller{ 

	public function __construct(){
		parent::__construct();
		 
		$this->load->helper('url');
		$this->load->model('Usuario_model'); //podemos acceder directamente a los metodos de una clase y llamar o acceder a cualwuier clase de cualquier lugar

	}
	
	public function index(){
		$this->load->view('contenidos/head');
		$this->load->view('contenidos/navbar_general');
		$this->load->view('modulo/inicio');
	}

	 public function help(){
 	//$this->load->view('contenidos/head');
	$this->load->view('contenidos/navbar_general');
	$this->load->view('modulo/ayuda_vista');
 }

  public function info(){
 	$this->load->view('contenidos/head');
		$this->load->view('contenidos/navbar_general');
		$this->load->view('modulo/Info_view');
   } 



}
?>
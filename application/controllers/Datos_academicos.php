<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Datos_academicos extends CI_Controller
{
	
	public function __construct()
	{
		parent:: __construct();
		$this->load->model('Dataca_Voluntario');
	}

	 public function index()
	 {
	 	$this->load->view('contenidos/head');
		$this->load->view('contenidos/navbar_general');
	 	$this->load->view('modulo/datos_academicos');
	 }

	 public function Guardar_academicos()
	 {
	 	$data['Estudios_Realizados']=$_POST["Estudios_Realizados"];
	 	$data['Lugar_Diplomado']=$_POST["Lugar_Diplomado"];
	 	$data['Fecha_Expedicion_Diplomado']=$_POST["Fecha_Expedicion_Diplomado"];
	 	$this->Dataca_Voluntario->insertar_dataca();
	 	echo 'exit';
	 }

}
 ?>
<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class datos_control extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        
       	}

       	public function index()
       	{
       		$this->load->view('datos_vista');
       	}

       	public function agregar()
       	{
       		$data['Primer Apellido'] = $_POST['Primer_Apellido'];
       		$data['Segundo Apellido'] =$_POST['Segundo_Nombre'];
       		$data['Nombres'] = $_POST['Nombres'];
       		$data['Lugar Nacimiento'] = $_POST['Lugar_Ncimiento'];
       		$data['Fecha Nacimiento'] = $_POST['Fecha_Nac'];
       		$data['Nacionalidad'] = $_POST['Nacionalidad'];
       		$data['Sexo'] = $_POST['Sexo'];
       		$data['Estado Civil'] = $_POST['Estado_Civil'];
       		$data['Profecion Oficio'] = $_POST['Profecion_Oficio'];
       		$data['Nivel Acade,ico'] = $_POST['Nivel_Academico'];
       		$data['DUI'] = $_POST['DUI'];
       		$data['Tipo Sangre'] = $_POST['Tipo_Sangre'];
       		$data['N° Hijos'] = $_POST['N°_Hijos'];
       		$data['Direccion Domiciliar'] = $_POST['Direccion_Domiciliar'];
       		$data['Telefono Fijo'] = $_POST['Telefono_Fijo'];
       		$data['Telefono Movil'] = $_POST['Telefono_Movil'];
       		$data['Nombre Centro Trabajo'] = $_POST['Nombre_Centro_Trabajo'];
       		$data['Direccion Centro Trabajo'] = $_POST['Direccion_Centro_Trabajo'];
       		$data['Telefonos'] = $_POST['Telefonos'];
       		$data['Nombre Centro Escolar'] = $_POST['Nombre_Centro_Escolar'];
       		$data['Direccion Centro Escolar'] = $_POST['Direccion_Centro_Escolar'];
       		$data['Telefonos Estudio'] = $_POST['Telefonos_Estudio'];
       		$data['Correo Electronico'] = $_POST['Coreeo_Electronico'];
       		$this->datos_model->insertar('$data');
       		$this->mostar_view();
       	}

       		public function actualizar_personal()
       	{
       		$this->load->view('datos_vista2');
       	}



}

 ?>
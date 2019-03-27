<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Voluntario_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}
	
	public function mostrar(){
		$pro = $this->db->get('datos_personal');
		return $pro->result_array();
	}
	public function detalle($id){
		$this->db->select('a.*,b.*,c.*');
		$this->db->from('datos_personal a');
		$this->db->join('tipo_seccional b', 'a.id_tipo_seccional = b.id_tipo_seccional');
		$this->db->join('seccional c', 'a.id_seccional = c.id_seccional');
		$this->db->where('id_datos', $id);
		$result = $this->db->get();
		return $result->result_array();
	}
	public function listar(){
		$select = $this->db->get('sexo');
		return $select->result_array();
	}
	public function seccional(){
		$select = $this->db->get('seccional');
		return $select->result_array();
	}
		public function voluntario(){
		$select = $this->db->get('tipo_seccional');
		return $select->result_array();
	}
	public function editar(){
		
		$id_datos = $this->input->post('id');
		$Primer_Apellido = $this->input->post('primer');
		$Segundo_Apellido = $this->input->post('segundo');
		$Nombres  = $this->input->post('nombre');
		$Lugar_Ncimiento = $this->input->post('lugarN');
		$Fecha_Nac = $this->input->post('fechaN');
		$Nacionalidad  = $this->input->post('pais');
		$id_Sexo = $this->input->post('sexo');
		$Estado_Civil  = $this->input->post('estado');
		$Profecion_Oficio   = $this->input->post('profecion'); 
		$Nivel_Academico = $this->input->post('nivel');
		$DUI  = $this->input->post('dui');
		$Tipo_Sangre   = $this->input->post('sangre');
		$N_Hijos = $this->input->post('hijos');
		$Direccion_Domiciliar   = $this->input->post('domicilio');
		$Telefono_Fijo   = $this->input->post('fijo');
		$Telefono_Movil   = $this->input->post('movil');
		$Nombre_Centro_Trabajo   = $this->input->post('trabajo');
		$Direccion_Centro_Trabajo   = $this->input->post('dirT');
		$Telefonos = $this->input->post('telT');
		$Nombre_Centro_Estudio = $this->input->post('estudio');
		$Direccion_Centro_Estudio = $this->input->post('dirE');
		$Telefonos_Estudio = $this->input->post('telE');
		$Correo_Electronico  = $this->input->post('correo');
		$Licencia  = $this->input->post('licencia');
		$id_seccional  = $this->input->post('seccional');
		$id_tipo_seccional  = $this->input->post('voluntario');

		$this->db->set('Primer_Apellido',$Primer_Apellido);
		$this->db->set('Segundo_Apellido',$Segundo_Apellido);
		$this->db->set('Nombres',$Nombres);
		$this->db->set('Lugar_Ncimiento',$Lugar_Ncimiento);
		$this->db->set('Fecha_Nac',$Fecha_Nac);
		$this->db->set('Nacionalidad',$Nacionalidad);
		$this->db->set('id_Sexo',$id_Sexo);
		$this->db->set('Estado_Civil',$Estado_Civil);
		$this->db->set('Profecion_Oficio',$Profecion_Oficio);
		$this->db->set('Nivel_Academico',$Nivel_Academico);
		$this->db->set('DUI',$DUI);
		$this->db->set('Tipo_Sangre', $Tipo_Sangre);

		$this->db->set('N°_Hijos',$N_Hijos);
		$this->db->set('Direccion_Domiciliar',$Direccion_Domiciliar);
		$this->db->set('Telefono_Fijo',$Telefono_Fijo);
		$this->db->set('Telefono_Movil',$Telefono_Movil);
		$this->db->set('Nombre_Centro_Trabajo',$Nombre_Centro_Trabajo);
		$this->db->set('Direccion_Centro_Trabajo',$Direccion_Centro_Trabajo);
		$this->db->set('Telefonos',$Telefonos);
		$this->db->set('Nombre_Centro_Estudio',$Nombre_Centro_Estudio);
		$this->db->set('Direccion_Centro_Estudio',$Direccion_Centro_Estudio);
		$this->db->set('Telefonos_Estudio',$Telefonos_Estudio);
		$this->db->set('Correo_Electronico',$Correo_Electronico);
		$this->db->set('Licencia',$Licencia);
		$this->db->set('id_seccional',$id_seccional);
		$this->db->set('id_tipo_seccional',$id_tipo_seccional);
		$this->db->where('id_datos', $id_datos);
		$result=$this->db->update('datos_personal');
		if($result)
		{
			return 'exito';
		}
		else
		{
			return 'fail';
		}
	}
}
?>
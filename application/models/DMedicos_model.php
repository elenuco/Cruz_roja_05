<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class DMedicos_model extends CI_Model{

	public function Insertar($data)
	{
		$result = $this->db->insert('datos_medicos',$data);
		return $result;
			
	}

	public function select_enfermedades()
	{
		$enfermedades=$this->db->get('tipo_enfermedades');
		return $enfermedades->result();
	}

	public function Insertar_enfermedades($data)
	{
		$this->db->set('enfermedades',$data['enfermedades']);
		$this->db->insert('tipo_enfermedades');
	}

	public function select_sasitecial()
	{
		$asisitenciales=$this->db->get('servicios_asistenciales');
		return $asisitenciales->result();
	}

	public function Insertar_sasitecial($data)
	{
		$this->db->set('Tipo_Servicios_Asistenciales',$data['Tipo_Servicios_Asistenciales']);
		$this->db->insert('servicios_asistenciales');
	}
}
 ?>
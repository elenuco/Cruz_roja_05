<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Dataca_Voluntario extends CI_Model
{

	public function insertar_dataca()
	{
		$this->db->set('Estudios_Realizados');
		$this->db->set('Lugar_Diplomado');
		$this->db->set('Fecha_Expedicion_Diplomado');
		$this->db->insert('dataca_voluntario');
	}
}
 ?>
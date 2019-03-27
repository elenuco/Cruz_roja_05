<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Empleo_model extends CI_Model
{
	
	public function Insertar_empleo($data)
	{
		$this->db->insert('empleo_estudio',$data);
	}
}
 ?>
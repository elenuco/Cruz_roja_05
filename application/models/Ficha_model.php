<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Ficha_model extends CI_Model
{
	public function __construct() {
		parent::__construct();
	}
	

	public function Insertar($dato){
		$result = $this->db->insert('generales_voluntario',$dato);
		if($result)
		{
			return 'exito';
		}
		else
		{
			return 'fail';
		}
	
	}
	public function select_Sexo(){
		$llenar = $this->db->get('sexo');
		return $llenar->result_array();
	}


	}
	?>
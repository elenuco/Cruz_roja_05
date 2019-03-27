<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Login_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}
		public function login($usuario,$password)
	{
		$this->db->where('usuario',$usuario);
		$this->db->where('clave',$password);
		$query = $this->db->get('usuario');
		
		if($query->num_rows() == 1)
		{
			return $query->row();
		}else{
			'FALLO';
		}
	}

}
?>
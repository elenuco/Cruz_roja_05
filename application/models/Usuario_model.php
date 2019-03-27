<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Usuario_model extends CI_Model {

	public function __construct() {
		parent::__construct();
	}

	public function mostrar(){
		$this->db->select('h.*,g.*');
		$this->db->from('usuario h');
		$this->db->join('rol g', 'h.idrol = g.idrol');
		$usuario = $this->db->get();
		return $usuario->result_array();
	}
	public function registrar($data){
		$result=$this->db->insert('usuario',$data);
		if($result){
			return 'exito';
		}else{
			return 'fallo';
		}

	}
	public function roles(){
		$rol = $this->db->get('rol');
		return $rol->result_array();
	}
	
}
?>
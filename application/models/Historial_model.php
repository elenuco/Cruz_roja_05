<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Historial_model extends CI_Model
{
  public function __construct() {
    parent::__construct();
  }
  
  public function mostrar(){
    $pro = $this->db->get('datos_cruz_roja');
    return $pro->result_array();
  }
 /* public function capacitaciones_modal($id){
   
    $pro = $this->db->get('cap_recibidas');
    return $pro->result_array();
  }*/
  public function listar(){
    $select = $this->db->get('tipo_voluntario');
    return $select->result_array();
  }
  public function voluntario(){
    $vol = $this->db->get('datos_personal');
    return $vol->result_array();
  }
  
  
  public function editar(){
    
    $id_datos_cruz_roja = $this->input->post('id');
    $id_personales = $this->input->post('nombreVoluntario');
    $Fecha_Ingreso = $this->input->post('fechaI');
    $Tipo_voluntario_id  = $this->input->post('tipoV');
    $Presidente_Seccional = $this->input->post('presidente');
    $Jefe_DD_local = $this->input->post('jefe');
    $VB_Jefatura_Nacional  = $this->input->post('jefatura');
    $VB_Presidente_Departamental = $this->input->post('departamental');
    $VB_DIrector_Voluntariado_Seccional  = $this->input->post('director');
    $cargo_actual   = $this->input->post('cargo'); 
    $firma = $this->input->post('firma');
    $fecha_presente  = $this->input->post('fechaP');

    $this->db->set('id_personales',$id_personales);
    $this->db->set('Fecha_Ingreso',$Fecha_Ingreso);
    $this->db->set('Tipo_voluntario_id',$Tipo_voluntario_id);
    $this->db->set('Presidente_Seccional',$Presidente_Seccional);
    $this->db->set('Jefe_DD_local',$Jefe_DD_local);
    $this->db->set('V.B_Jefatura_Nacional',$VB_Jefatura_Nacional);
    $this->db->set('V.B_Presidente_Departamental',$VB_Presidente_Departamental);
    $this->db->set('V.B_DIrector_Voluntariado_Seccional',$VB_DIrector_Voluntariado_Seccional);
    $this->db->set('cargo_actual ',$cargo_actual);
    $this->db->set('firma',$firma);
    $this->db->set('fecha_presente',$fecha_presente);
  
    $this->db->where('id_datos_cruz_roja',$id_datos_cruz_roja);

    $result=$this->db->update('datos_cruz_roja');
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
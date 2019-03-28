<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class entrevista_modelo extends CI_Model
{

	public function __construct();
  {
    parent:: __construct();
  }

  public function registrar($data)
  {
    $this->db->trans_begin();
    
    $this->db->insert('entrevista',   array(
      'Experiencia' => $data['Experiencia_Laboral'],
      'Caracteristicas_Personales' => $data['Caracteristicas_Personales'],
      'Referencias_Laboraes' => $data['Referencias_Laborales'],
      'Conocimiento_Istitucional' => $data['Conocimiento_Institucional'],
      'Preguntas_Institucionales' => $data['Pregunta_Institucionales_id'],
      'Referencias_Entrevista' => $data['Referencias_Entrevista'];
 }
  ));

    $id_entrevista = $this->db->insert_id();

    foreach($data['entrevista'] as $id_entrevista){
      $this->db->insert('entrevista', array(
      ));
    }
}
 ?>
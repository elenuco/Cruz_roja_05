<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class entrevista_modelo extends CI_Model
{


	
	public function Insertar_datos($Insertar)
	{
		$this->db->insert('entrevista');	
        
        $this->db->set('Experiencia', $Insertar['Experiencia_Laboral']);
        $this->db->set('Caracteristicas_Personale', $Insertar['Caracteristicas_Personales_id']);
        $this->db->set('Referencias_Laborales', $Insertar['Referencias_Laborales']);
        $this->db->set('Conocimiento_Institucional', $Insertar['Conocimiento_Institucional']);
        $this->db->set('Preguntas_Institucionales', $Insertar['Preguntas_Institucionales_id']);
        $this->db->set('Referencias_Entrevista', $Insertar['Referencias_Entrevista_id']);
	}
          public function mostrar_entrevista()
          	{
          		$mostrar=$this->db->get('entrevista');
          		return $mostrar->result();
          }

           


}
 ?>
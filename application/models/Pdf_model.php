<?php  
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * 
 */
class Pdf_model extends CI_Model {

  public function __construct() {
    parent::__construct();
  }

 public function Doc_pdf(){
  
  $data = $this->db->get('datos_personal');
  $output = '<table width="100%" cellspacing="5" cellpadding="5">';
  foreach($data->result() as $row)
  {
   $output .= '
   <tr>
    <td width="25%"><img src="'.base_url().'images/'.$row->images.'" /></td>
    <td width="75%">
     <p><b>Name : </b>'.$row->CustomerName.'</p>
     <p><b>Address : </b>'.$row->Address.'</p>
     <p><b>City : </b>'.$row->City.'</p>
     <p><b>Postal Code : </b>'.$row->PostalCode.'</p>
     <p><b>Country : </b> '.$row->Country.' </p>
    </td>
   </tr>
   ';
  }
  $output .= '
  <tr>
   <td colspan="2" align="center"><a href="'.base_url().'doc_pdf" class="btn btn-primary">Back</a></td>
  </tr>
  ';
  $output .= '</table>';
  return $output;
 }
}

?>

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscador_model extends CI_Model {

	public function Buscar_Materia($text){
		$this->db->from('materias');
		$this->db->like('nombre', $text ,'both');
		return $result = $this->db->get();
		
	}

}
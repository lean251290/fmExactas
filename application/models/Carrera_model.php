
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carrera_model extends CI_Model {

public function traerTodos(){
	$query = $this->db->get('carreras');
	return $query->result();
}

	public function get($id = null){
		if($id) {
			$this->db->where('id', $id);
			return $this->db->get('carreras')->row();
		}
		else {
			return $this->db->get('carreras')->result();
		}
	}

	public function get_carrera($idcarrera) {
		$this->db->where('id', $idcarrera);
		$carrera = $this->db->get('carreras');
		return $carrera->result();
	}

	public function get_materias($idcarrera) {
		$this->db->where('idcarrera', $idcarrera);
		return $this->db->get('materias')->result();
	}

	public function getMateria($id) {
		$this->db->where('id', $id);
		return $this->db->get('materias')->row();
	}


	public function getPaginate($limit, $offset){
	$query = $this->db->get('carreras', $limit, $offset);
	return $query->result();
	}
	public function getPaginateMaterias($idcarrera, $limit, $offset){
			$this->db->limit($limit, $offset);
			return $this->get_materias($idcarrera);
	}
}
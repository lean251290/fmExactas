<?php


class Subir_eventos_model extends CI_Model {

	public function nuevo($data) {
		return $this->db->insert('tbl_eventos', $data);
	}


	public function get($id = null){
		if($id) {
			$this->db->where('id_evento', $id);
			return $this->db->get('tbl_eventos')->row();
		}
		else {
			return $this->db->get('tbl_eventos')->result();
		}
	}

	public function traerEvento($id_evento) {

		$this->db->where('id_evento', $id_evento);
		return $this->db->get('tbl_eventos')->result()[0];

		
	}

}

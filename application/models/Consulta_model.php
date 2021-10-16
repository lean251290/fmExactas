<?php
	class Consulta_model extends CI_model {

	public function traerConsultas() {
		return $this->db->get('mensajes')->result();
	}

	public function traerConsulta($data) {
		return $this->db->get_where('mensajes' ,['id_mensaje' => $data])->result()[0];
	}

	public function nuevo($data) {
		return $this->db->insert('mensajes', $data);
	}

	public function editar($data) {
		$this->db->where('id', $data['id']);
		return $this->db->update('mensajes', $data);
	}

	public function borrar ($data) {
		return $this->db->delete('mensajes',['id' => $data]);
	}


	public function leido ($data) {
		$this->db->where('id_mensaje' , $data);
		return $this->db->update('mensajes',['estado' => 2]);
	}

	
}
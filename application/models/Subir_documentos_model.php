<?php


class Subir_documentos_model extends CI_Model {

	public function nuevo($titulo, $documento, $id, $imagen) {

		$data = array (
			'titulo' => $titulo,
			'ruta' => $documento,
			'eliminado_flag' => 1,
			'codigo_materia' => $id,
			'img' => $imagen
		);
		return $this->db->insert('archivos',$data);
	}

	public function borrar ($data) {
			$this->db->where('id_documento' , $data);
			return $this->db->update('archivos',['eliminado_flag' => 0]);
			/*return $this->db->delete('archivos',['id_documento' => $data]);*/
	}

}
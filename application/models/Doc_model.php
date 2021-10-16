<?php
class Doc_model extends CI_Model {

  public function get_docs($id = null){
    if($id){
      return $this->db->get_where('archivos', ['id_documento' => $id])->row();
    }else{
      return $this->db->get('archivos')->result();
    }
  }

  public function getArchivosMateria ($idmateria) {
  	$this->db->where('codigo_materia', $idmateria);
  	return $this->db->get('archivos')->result();
  } 
  public function archivosSEU () {
    $this->db->where('codigo_materia', 0);
    return $this->db->get('archivos')->result();
  }

  public function ingresantes () {
    $this->db->where('codigo_materia', 12);
    return $this->db->get('archivos')->result();
  }
  public function planes () {
    $this->db->where('codigo_materia', 20);
    return $this->db->get('archivos')->result();
  }
  
}
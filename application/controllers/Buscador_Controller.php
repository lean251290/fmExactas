<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Buscador_Controller extends CI_Controller {

	public function buscarMateria(){
		$text = $this->input->post('texto');
		$resultado = $this->Buscador_model->Buscar_Materia($text);
		echo json_encode($resultado);
	}
}
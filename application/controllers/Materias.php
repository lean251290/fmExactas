<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materias extends CI_Controller {
	public function verArchivosMateria($id) {
		$materia = $this->Carrera_model->getMateria($id);
		$materias = $this->Carrera_model->get_materias($id);
		$materia->archivos = $this->Doc_model->getArchivosMateria($materia->id);
		$carrera = $materia;


		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/cards', compact('materia', 'carrera'));
		$this->load->view('public/partes/footer');
	}

}
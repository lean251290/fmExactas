<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carreras extends CI_Controller {

	public function index($offset = 0) {

		$carreras = $this->Carrera_model->traerTodos();
		$config['base_url'] = base_url('carreras/index');
		$config['per_page'] = 3;
		$config['total_rows'] = count($carreras);
		$config['prev_link']  = TRUE;
	    $config['next_link']  = TRUE;
	    $config['display_pages']  = TRUE;
	    $config['attributes']  = array('rel' => TRUE, 'class' => 'btn border-danger text-white mr-1 ml-1');
	    $config['first_link']  = '<i class="fas fa-caret-left"></i><i class="fas fa-caret-left"></i>';
	    $config['last_link']  = '<i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i>';
	    $config['next_link']  = '<i class="fas fa-caret-right"></i>';
	    $config['prev_link']  = '<i class="fas fa-caret-left"></i>';
	    $config['full_tag_open']  = '<div class="row w-100"><div class="col text-center">';
	    $config['full_tag_close']  = '</div></div>';
	    $config['cur_tag_open']  = '<div style="cursor: auto;" class="btn mr-1 ml-1 border-dark bg-danger text-light">';
	    $config['cur_tag_close']  = '</div>';
    	$this->pagination->initialize($config);
		$page = $this->Carrera_model->getPaginate($config['per_page'], $offset);
		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/cursos_view', ['carreras'=>$page]);
		$this->load->view('public/partes/footer');
	}


	/*public function detalle($idcarrera) {
		$carrera = $this->Carrera_model->get_carrera($idcarrera);
		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/prof_artes_visuales_view', ['carrera'=>$carrera]);
		$this->load->view('public/partes/footer');

	}*/

	public function detalle($idcarrera, $offset = 0) {
		$carrera = $this->Carrera_model->get_carrera($idcarrera);
		$materias = $this->Carrera_model->get_materias($idcarrera);
		$config['base_url'] = base_url('carreras/detalle/'.$idcarrera);
		$config['per_page'] = 9;
		$config['total_rows'] = count($materias);
		$config['prev_link']  = TRUE;
	    $config['next_link']  = TRUE;
	    $config['display_pages']  = TRUE;
	    $config['attributes']  = array('rel' => TRUE, 'class' => 'btn border-danger text-white mr-1 ml-1');
	    $config['first_link']  = '<i class="fas fa-caret-left"></i><i class="fas fa-caret-left"></i>';
	    $config['last_link']  = '<i class="fas fa-caret-right"></i><i class="fas fa-caret-right"></i>';
	    $config['next_link']  = '<i class="fas fa-caret-right"></i>';
	    $config['prev_link']  = '<i class="fas fa-caret-left"></i>';
	    $config['full_tag_open']  = '<div class="row w-100"><div class="col text-center">';
	    $config['full_tag_close']  = '</div></div>';
	    $config['cur_tag_open']  = '<div style="cursor: auto;" class="btn mr-1 ml-1 border-dark bg-danger text-light">';
	    $config['cur_tag_close']  = '</div>';
		$this->pagination->initialize($config);
		$page = $this->Carrera_model->getPaginateMaterias($idcarrera, $config['per_page'], $offset);
		$data = ['carrera'=> $carrera, 'materias'=> $page];
		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/prof_artes_visuales_view', $data);
		$this->load->view('public/partes/footer');

	}

}
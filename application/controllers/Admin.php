<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

  public function __construct(){
    // Check Login
    parent::__construct();
      if (!$this->session->userdata('logged_in')) {
        redirect('Users');
 }
 /**elseif (($this->session->userdata('logged_in')) && ($this->session->userdata('perfil_id') == 0)) {
    redirect('carreras');
 }**/
 }


public function index(){
    $consultas['consultas'] = $this->Consulta_model->traerConsultas();
    $this->load->view('public/partes/header_view');
    $this->load->view('public/partes/navbar');
    $this->load->view('Admin/PanelAdmin', $consultas);
    $this->load->view('public/partes/footer');

}

public function logout(){
        $this->session->sess_destroy();
        redirect('Home/index');
    }

}

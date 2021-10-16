<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Eventos_controller extends CI_Controller {
public function __construct(){
    parent::__construct();
    if (!$this->session->userdata('logged_in')){
      redirect('Home/ingresar');
    }
}

  public function subirimagen(){

    $this->form_validation->set_rules('titulo' , 'Titulo' , 'required|htmlspecialchars',
      array('required'=>'El campo "Titulo" debe rellenarse')
    );
    $this->form_validation->set_rules('descripcionCorta' , 'Descripcion Corta' , 'required',
      array('required'=>'El campo "Descripcion Corta" debe rellenarse')
    );
    $this->form_validation->set_rules('descripcion' , 'Descripcion' , 'required',
      array('required'=>'El campo "Descripcion" debe rellenarse')
    );

    if($this->form_validation->run() == FALSE) {

      $data = array('errors' => validation_errors());

      $this->load->view('public/partes/header_view');
      $this->load->view('public/partes/navbar');
      $this->load->view('admin/subirImagenes');
      $this->load->view('public/partes/footer');

    }
    else{
      $data = array(
        'titulo' => $this->input->post('titulo'),
        'descripcion_corta' => $this->input->post('descripcionCorta'),
        'descripcion' => $this->input->post('descripcion')

      );

      $config['upload_path']='assets/img/';
      $config['allowed_types']='gif|jpg|png|jpeg';
      $config['max_size']='50000';
      $config['max_width']='2048';
      $config['max_height']='1024';

      $this->load->library('upload', $config);
      if (!$this->upload->do_upload('archivo'))
      {

        $data = array('errors' => $this->upload->display_errors());
        $this->load->view('public/partes/header_view');
        $this->load->view('public/partes/navbar');
        $this->load->view('admin/subirImagenes', $data);
        $this->load->view('public/partes/footer');

      }
      else
      {

        $data['ruta'] = 'assets/img/'.$this->upload->data()['file_name'];


      $this->Subir_eventos_model->nuevo($data);

        redirect('Home/mostrarEventos');
      }

    }
  }






}

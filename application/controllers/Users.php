<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {
public function __construct(){
    parent::__construct();
    if ($this->session->userdata('logged_in')){
      redirect('Admin');  
    }
}
    public function index(){
        $this->load->view('public/partes/header_view');
        $this->load->view('public/partes/navbar');
        $this->load->view('admin/login');
        $this->load->view('public/partes/footer');
    }

  public function login(){

    $user = $this->input->post('user');
    $pass = $this->input->post('pass');

    $this->form_validation->set_rules('user', 'Nombre de ususario', 'required', 
        array('required' => 'Ingrese Usuario'
    )
    );
    $this->form_validation->set_rules('pass', 'Contraseña', 'required',
        array('required' => 'Ingrese Contraseña'
    )
    );

    if ($this->form_validation->run() == false) {

        $this->load->view('public/partes/header_view');
        $this->load->view('public/partes/navbar');
        $this->load->view('admin/login');
        $this->load->view('public/partes/footer');

    } else {//
        // Get Post Data
        $user     = $this->input->post('user');
        $pass     = $this->input->post('pass');
        // $enc_password = md5($password);

        $user_id = $this->Login_model->login_usuario($user, $pass);

        if ($user_id) {
            $user_data = array(
                'user_id'   => $user_id,
                'username'  => $user,
                'logged_in' => true,
                'perfil_id' => $user_id->perfil_id
            );

            // Set Session Data
            $this->session->set_userdata($user_data);

            // Create Message
            //$this->session->set_flashdata('Felicidades', 'Ahora estas conectado!!!');

            // Redirect to pages
            if ($this->session->userdata['perfil_id'] == 1) {
            redirect('Admin');
        }
            else {
                redirect('Home');
            }
                    //$this->output->set_output(json_encode["respuesta"=> 1]);
        } else {
            // Create Error
           //$this->output->set_output(json_encode["respuesta"=> 0]);
            //echo "error en nombre de usuario o contraseña";
            // Redirect to pages
            $this->session->set_flashdata('msg', 'Error en usuario y/o Contraseña');
            //echo validation_errors();
            $this->load->view('public/partes/header_view');
            $this->load->view('public/partes/navbar');
            $this->load->view('admin/login');
            $this->load->view('public/partes/footer');

        }
    }
}
}



//public function login2(){
//$user     = $this->input->post('user');
//$pass     = $this->input->post('pass');
        // $enc_password = md5($password);

//$user_id = $this->Login_model->login_usuario($user, $pass);

//if ($user_id) {
//    $user_data = array(
//        'user_id'   => $user_id,
//        'username'  => $user,
//        'logged_in' => true,
//    );

            // Set Session Data
//    $this->session->set_userdata($user_data);

            // Create Message
//    $this->session->set_flashdata('Felicidades', 'Ahora estas conectado!!!');

            // Redirect to pages
            //redirect('Admin/vistaAdmin');
//    $this->output->set_output(json_encode["respuesta" => 1]);
//}else {
            // Create Error
 //$this->output->set_output(json_encode["respuesta" => 0]);
//}

//}

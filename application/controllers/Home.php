<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */

	public function miprueba()
	{
		/*$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');*/
		$this->load->view('public/cards');
		/*$this->load->view('public/partes/footer');*/
	}
	public function index()
	{
		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/inicio');
		$this->load->view('public/partes/footer');
	}

	public function quienesSomos()
	{
		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/quienesSomos');
		$this->load->view('public/partes/footer');
	}
	public function ingresantes()
	{
		$archivos = $this->Doc_model->ingresantes();
		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/view_ingresantes', ['archivos'=> $archivos]);
		$this->load->view('public/partes/footer');
	}
	public function planes()
	{
		$archivos = $this->Doc_model->planes();
		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/planes_view', ['archivos'=> $archivos]);
		$this->load->view('public/partes/footer');
	}
	public function mensaje()
	{
		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/mensaje');
		$this->load->view('public/partes/footer');
	}

	public function subirDocumento () {

    $this->load->view('public/partes/header_view');
    $this->load->view('public/partes/navbar');
    $this->load->view('admin/subirDocumentos');
    $this->load->view('public/partes/footer');
  }

  public function subirDocumentoSinId () {

    $this->load->view('public/partes/header_view');
    $this->load->view('public/partes/navbar');
    $this->load->view('admin/subirDocumentosSinId');
    $this->load->view('public/partes/footer');
  }



public function vistaprofArtesViasuales()
	{
		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/prof_artes_visuales_view');
		$this->load->view('public/partes/footer');
	}

	public function subirContenido () {

    $this->load->view('public/partes/header_view');
    $this->load->view('public/partes/navbar');
    $this->load->view('admin/subirImagenes');
    $this->load->view('public/partes/footer');
  }

  public function mostrarEventos(){

  		$data['eventos'] = $this->Subir_eventos_model->get();

  	$this->load->view('public/partes/header_view');
    $this->load->view('public/partes/navbar');
    $this->load->view('public/Eventos_view', $data);
    $this->load->view('public/partes/footer');

  }


  public function ingresar() {

  	$user = $this->input->post('user');
    $contrasenia = $this->input->post('pass');


		$this->form_validation->set_rules('user', 'Nombre de ususario', 'required',
			array('required' => 'Debe Ingresar un Nombre de Usuario'
				  )
		);
        $this->form_validation->set_rules('pass', 'Contraseña', 'required',
        	array('required' => 'Debe Ingresar una Contraseña'
				  )
    );




        if($this->form_validation->run() == FALSE){

 			$this->load->view('public/partes/header_view');
 			$this->load->view('public/partes/navbar');
 			$this->load->view('admin/login');
 			$this->load->view('public/partes/footer');

        }else{

                	$data = array(
            		'user' => $user,
            		'logged_in' => TRUE);

                $this->session->set_userdata($data);
                redirect('Admin/vistaAdmin');


 	}
  }

  public function contacto() {


		$this->form_validation->set_rules ('nombre' , 'Nombre' , 'required|max_length[25]',
		array('required'=>'El campo "nombre" debe rellenarse' ,
			'max_length'=>'El nombre no debe ser mayor a 25 caracteres')
		);
		$this->form_validation->set_rules ('apellido' , 'Apellido' , 'required' ,
		array ('required'=> 'El apellido debe ingresarse')
		);
		$this->form_validation->set_rules ('telefono' , 'Telefono' , 'required' ,
		array ('required'=> 'El telefono debe ingresarse')
		);
		$this->form_validation->set_rules ('mensaje' , 'Mensaje' , 'required|max_length[500]' ,
		array ('required'=> 'El correo debe ingresarse',
			'max_length'=>'El nombre no debe ser mayor a 500 caracteres')
		);


	if($this->form_validation->run() == FALSE) {

		$data = array('errors' => validation_errors());

		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/mensaje');
		$this->load->view('public/partes/footer');
		}
		else{

			$data = array (
					'nombre' => $this->input->post('nombre'),
					'apellido' => $this->input->post('apellido'),
					'telefono' => $this->input->post('telefono'),
					'mensaje' => $this->input->post('mensaje'),
					'estado' => '1'

			);

			$this->Consulta_model->nuevo($data);
			sleep(2);
			redirect('Home/index');
		}


} //FIN DE CONTACTO

public function mensajeLeido(){

    		$id = $this->input->post('leido');
			 	$this->Consulta_model->leido($id);

			 	redirect('Admin/vistaAdmin');

    	}
    	public function archivos(){

		$archivos = $this->Doc_model->archivosSEU();

		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/archivos_view', ['archivos'=> $archivos]);
		$this->load->view('public/partes/footer');


	}

	public function detalle($id_evento) {
    $data['eventos'] = $this->Subir_eventos_model->traerEvento($id_evento);

    $this->load->view('public/partes/header_view');
    $this->load->view('public/partes/navbar');
    $this->load->view('public/eventosCompleto', $data);
    $this->load->view('public/partes/footer');

  }

}






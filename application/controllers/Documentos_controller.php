<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Documentos_controller extends CI_Controller {

public function __construct(){
    parent::__construct();
    if (!$this->session->userdata('logged_in')){
      redirect('Home/ingresar');
    }
}

public function subirDocumento($id) {

$config['upload_path'] = './documentos/';
//actulizar en el host los tipos qur acepta xq tirra error
$config['allowed_types'] = 'docx|doc|xlsx|PDF|pdf';
$config['max_size'] = '20048';


$this->load->library('upload', $config);

if(!$this->upload->do_upload('archivo')){
	$data['errorArch'] = $this->upload->display_errors();
	$data['id'] = $id;
	$this->load->view('public/partes/header_view');
    $this->load->view('public/partes/navbar');
    $this->load->view('admin/subirDocumentos', $data);
    $this->load->view('public/partes/footer');
}
	else {
		$file_info = $this->upload->data();



		$titulo = $this->input->post('titulo');
		$documento = $file_info['file_name'];
		$id = $this->input->post('idmateria');
		$imagen = 'assets/img/word.jpg';
		$imagenX = 'assets/img/excel.jpg';
		$imagenPDF = 'assets/img/pdf.png';
		$word = '.docx';
		$excel = '.xlsx';
		$pdf = '.pdf';
		$wordCorto = '.doc';
		//en esta variable recupero la extensiones cortas
		$extensionCorta = substr($documento, -4);
		//en esta variable recupero la extensiones mas largas XD
		$extension = substr($documento, -5);
		if (strcmp($extension, $word) === 0) {
				$subir = $this->Subir_documentos_model->nuevo($titulo, $documento, $id, $imagen);
				redirect('materias/verArchivosMateria/'.$id);
		}
		else if (strcmp($extensionCorta, $pdf) === 0) {
			$subir = $this->Subir_documentos_model->nuevo($titulo, $documento, $id, $imagenPDF);
				redirect('materias/verArchivosMateria/'.$id);
		}
		else if (strcmp($extensionCorta, $wordCorto) === 0) {
			$subir = $this->Subir_documentos_model->nuevo($titulo, $documento, $id, $imagen);
				redirect('materias/verArchivosMateria/'.$id);
		}
		else if (strcmp($extension, $excel) === 0) {
			$subir = $this->Subir_documentos_model->nuevo($titulo, $documento, $id, $imagenX);
				redirect('materias/verArchivosMateria/'.$id);
		}
		//$subir = $this->Subir_documentos_model->nuevo($titulo, $documento, $id);

		//redirect('materia/'.$id);

		}


}
public function subirDocumentoSinId() {

$config['upload_path'] = './documentos/';
$config['allowed_types'] = 'docx|doc|xlsx|PDF|pdf';
$config['max_size'] = '20048';


$this->load->library('upload', $config);

if(!$this->upload->do_upload('archivo')){
	$data['errorArch'] = $this->upload->display_errors();
	$data['id'] = $id;
	$this->load->view('public/partes/header_view');
    $this->load->view('public/partes/navbar');
    $this->load->view('admin/subirDocumentos', $data);
    $this->load->view('public/partes/footer');
}
	else {
		$file_info = $this->upload->data();


		$titulo = $this->input->post('titulo');
		$documento = $file_info['file_name'];
		$id = 0;
		$imagen = 'assets/img/word.jpg';
		$imagenX = 'assets/img/excel.jpg';
		$imagenPDF = 'assets/img/pdf.png';
		$word = '.docx';
		$excel = '.xlsx';
		$pdf = '.pdf';
		$wordCorto = '.doc';
		//en esta variable recupero la extensiones cortas
		$extensionCorta = substr($documento, -4);
		//en esta variable recupero la extensiones mas largas XD
		$extension = substr($documento, -5);
		if (strcmp($extension, $word) === 0) {
				$subir = $this->Subir_documentos_model->nuevo($titulo, $documento, $id, $imagen);
		}
		else if (strcmp($extensionCorta, $pdf) === 0) {
			$subir = $this->Subir_documentos_model->nuevo($titulo, $documento, $id, $imagenPDF);

		}
		else if (strcmp($extensionCorta, $wordCorto) === 0) {
			$subir = $this->Subir_documentos_model->nuevo($titulo, $documento, $id, $imagen);

		}
		else if (strcmp($extension, $excel) === 0) {
			$subir = $this->Subir_documentos_model->nuevo($titulo, $documento, $id, $imagenX);

		}

		redirect('Home/archivos');

		}


}


	public function download ($name) {
		$data = file_get_contents('./documentos/'.$name);
		force_download($name, $data);
	}


	public function archivosPorId($id){

		$archivos = $this->Doc_model->get_docs();

		$this->load->view('public/partes/header_view');
		$this->load->view('public/partes/navbar');
		$this->load->view('public/archivos_view', ['archivos'=> $archivos]);
		$this->load->view('public/partes/footer');


	}

			public function Borrar() {
			 	$id = $this->input->post('borrar');
			 	$archivo = $this->Doc_model->get_docs($id);
			 	$this->Subir_documentos_model->borrar($id);

			 	redirect('materia/'.$archivo->codigo_materia);
		}

}
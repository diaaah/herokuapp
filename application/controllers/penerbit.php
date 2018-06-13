<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class penerbit extends CI_Controller {

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
	public function __construct(){
		parent::__construct();
		$this->load->model('penerbit_model');
		if($this->session->userdata('status') != "login"){
			redirect('../index.php/welcome/view_halaman_login');
		}
	}

	public function view_formPenerbit(){
		$this->load->view('formulir_penerbit');
	}

	public function insert_penerbit(){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$no_telp=$this->input->post('no_telp');
		$this->penerbit_model->input_penerbit($nama,$alamat,$no_telp);
		redirect('../index.php/penerbit/view_penerbit');
	}

	public function view_penerbit(){
		$data['penerbit']=$this->penerbit_model->view_penerbit();
		$this->load->view('view_penerbit',$data);
	}

	public function view_edit_penerbit(){
		$id_penerbit=$this->input->get('id_penerbit');
		$data['penerbit']=$this->penerbit_model->view_update_penerbit($id_penerbit);
		$this->load->view('edit_penerbit', $data);
	}

	public function edit_penerbit(){
		$id=$this->input->post('id_penerbit');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$no_telp=$this->input->post('no_telp');
		$this->penerbit_model->update_penerbit($id,$nama,$alamat,$no_telp);
		redirect('../index.php/penerbit/view_penerbit');
	}

	public function hapus_penerbit(){
		$id=$this->input->get('id_penerbit');
		$this->penerbit_model->delete_penerbit($id);
		redirect('../index.php/penerbit/view_penerbit');
	}
}



?>
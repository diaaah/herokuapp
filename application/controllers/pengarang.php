<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pengarang extends CI_Controller {

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
		$this->load->model('pengarang_model');
		if($this->session->userdata('status') != "login"){
			redirect('../index.php/welcome/view_halaman_login');
		}
	}

	public function view_formPengarang(){
		$this->load->view('formulir_pengarang');
	}

	public function view_formEditPengarang(){
		$this->load->view('edit_pengarang');
	}

	public function insert_pengarang(){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$no_telp=$this->input->post('no_telp');
		$this->pengarang_model->input_pengarang($nama,$alamat,$no_telp);
		redirect('../index.php/pengarang/view_pengarang');
	}

	public function view_pengarang(){
		$data['pengarang']=$this->pengarang_model->view_pengarang();
		$this->load->view('view_pengarang',$data);
	}

	public function view_edit_pengarang(){
		$id_pengarang=$this->input->get('id_pengarang');
		$data['pengarang']=$this->pengarang_model->view_update_pengarang($id_pengarang);
		$this->load->view('edit_pengarang', $data);
	}

	public function edit_pengarang(){
		$id=$this->input->post('id_pengarang');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$no_telp=$this->input->post('no_telp');
		$this->pengarang_model->update_pengarang($id,$nama,$alamat,$no_telp);
		redirect('../index.php/pengarang/view_pengarang');
	}

	public function hapus_pengarang(){
		$id=$this->input->get('id_pengarang');
		$this->pengarang_model->delete_pengarang($id);
		redirect('../index.php/pengarang/view_pengarang');
	}
}

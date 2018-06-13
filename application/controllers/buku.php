<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class buku extends CI_Controller {

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
		$this->load->model('buku_model');
		$this->load->model('penerbit_model');
		$this->load->model('user_model');
		if($this->session->userdata('status') != "login"){
			redirect('../index.php/welcome/view_halaman_login');
		}

	}

	public function view_formBuku(){
		$data['pengarang']=$this->pengarang_model->view_pengarang();
		$data['penerbit']=$this->penerbit_model->view_penerbit();
		$data['user']=$this->user_model->view_user();
		$data['kondisi_buku']=$this->buku_model->view_kondisi();
		$this->load->view('formulir_buku',$data);
	}

	public function view_edit_buku(){
		$id_buku=$this->input->get('id_buku');
		$data['pengarang']=$this->pengarang_model->view_pengarang();
		$data['buku']=$this->buku_model->view_update_buku($id_buku);
		$data['penerbit']=$this->penerbit_model->view_penerbit();
		$data['user']=$this->user_model->view_user();
		$data['kondisi_buku']=$this->buku_model->view_kondisi();
		$this->load->view('edit_buku', $data);
	}

	public function view_buku(){
		$data['buku']=$this->buku_model->view_buku();
		$this->load->view('view_buku',$data);
	}

	public function insert_buku(){
		$id_kondisi= $this->input->post('kondisi');
		$kode_buku = $this->input->post('kode');
		$judul = $this->input->post('judul');
		$penerbit = $this->input->post('penerbit');
		$pengarang = $this->input->post('pengarang');
		$jumHal = $this->input->post('halaman');
		$tahun = $this->input->post('tahun');
		$addby= $this->input->post('addby');
		$this->buku_model->input_buku($judul,$penerbit,$pengarang,$jumHal,$tahun,$addby);
		redirect('../index.php/buku/view_buku');
	}

	public function edit_buku(){
		$id_buku = $this->input->post('id_buku');
		$id_kondisi=$this->input->post('kondisi');
		$judul = $this->input->post('judul');
		$kode_buku = $this->input->post('kode');
		$penerbit = $this->input->post('penerbit');
		$pengarang = $this->input->post('pengarang');
		$jumHal = $this->input->post('halaman');
		$tahun = $this->input->post('tahun');
		$addby = $this->input->post('addby');
		$this->buku_model->update_buku($id_buku,$judul,$penerbit,$pengarang,$jumHal,$tahun,$addby);
		redirect('../index.php/buku/view_buku');
	}

	public function delete_buku(){
		$id_buku=$this->input->get('id_buku');
		$this->buku_model->delete_buku($id_buku);
		redirect('../index.php/buku/view_buku');
	}

	public function view_detail(){
		$id_buku = $this->input->post('rowid');
		$data['buku']=$this->buku_model->view_update_buku($id_buku);
		$this->load->view('data_buku_modal',$data);
	}

}
?>
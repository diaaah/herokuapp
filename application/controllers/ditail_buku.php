<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ditail_buku extends CI_Controller {

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
		$this->load->model('ditail_buku_model');
		$this->load->model('buku_model');
		$this->load->model('kondisi_model');
		if($this->session->userdata('status') != "login"){
			redirect('../index.php/welcome/view_halaman_login');
		}
	}

	public function view_formDitail(){
		$data['buku']=$this->buku_model->view_buku();
		$data['kondisi']=$this->kondisi_model->view_kondisi();
		$this->load->view('formulir_ditail_buku',$data);
	}

	public function view_editDitail(){
		$id_ditail=$this->input->get('id_ditail');
		$data['ditail']=$this->ditail_buku_model->view_update_ditail($id_ditail);
		$data['buku']=$this->buku_model->view_buku();
		$data['kondisi_a']=$this->kondisi_model->view_kondisi();
		$this->load->view('edit_ditail',$data);
	}

	public function insert_ditail(){
		$id_buku=$this->input->post('id_buku');
		$id_kondisi=$this->input->post('id_kondisi');
		$kode_buku=$this->input->post('kode');
		$where= array('kode_buku'=>$kode_buku);
		
		$cek = $this->ditail_buku_model->validasi_ditail("tb_buku_detail",$where)->num_rows();
		if($cek > 0){
			$url=base_url()."index.php/ditail_buku/view_ditail";
			echo('<script type="text/javascript"> alert("kode buku sudah digunakan"); </script>');
			header("Refresh: 0.1; $url");
		}
		else{
			$this->ditail_buku_model->input_ditail($id_buku,$id_kondisi,$kode_buku);
            $url=base_url()."index.php/ditail_buku/view_ditail";
			header("Refresh: 0.01; $url");
		}
	}

	public function edit_ditail(){
		$id_ditail=$this->input->post('id_ditail');
		$id_buku=$this->input->post('id_buku');
		$id_kondisi=$this->input->post('id_kondisi');
		$kode_buku=$this->input->post('kode');
		$this->ditail_buku_model->update_ditail_buku($id_ditail,$id_buku,$kode_buku,$id_kondisi);
		redirect('../index.php/ditail_buku/view_ditail');
	}

	public function hapus_ditail(){
		$id=$this->input->get('id_ditail');
		$this->ditail_buku_model->delete_ditail_buku($id);
		redirect('../index.php/ditail_buku/view_ditail');
	}

	public function view_ditail(){
		$data['ditail']=$this->ditail_buku_model->view_ditail();
		$this->load->view('view_ditail',$data);
	}

}

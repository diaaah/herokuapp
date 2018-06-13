<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class user extends CI_Controller {

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
		$this->load->model('user_model');
		if($this->session->userdata('status') != "login"){
			redirect('../index.php/welcome/view_halaman_login');
		}
	}

	public function view_formUser(){
		$this->load->view('formulir_user');
	}

	public function view_dashboard(){
		$this->load->view('dashboard');

	}

	public function view_user(){
		$data['user']=$this->user_model->view_user();
		$this->load->view('view_user',$data);
	}

	public function view_edit_user(){
		$id_user=$this->input->get('id_user');
		$data['user']=$this->user_model->view_update_user($id_user);
		$this->load->view('edit_user', $data);
	}

	public function edit_user(){
		$id=$this->input->post('id_user');
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$no_telp=$this->input->post('no_telp');
		$password=$this->input->post('password');
		$username=$this->input->post('username');
		$this->user_model->update_user($id, $nama, $alamat, $no_telp, $username, $password);
		redirect('../index.php/user/view_user');
	}

	public function hapus_user(){
		$id=$this->input->get('id_user');
		$this->user_model->delete_user($id);
		redirect('../index.php/user/view_user');
	}

	public function insert_user(){
		$nama=$this->input->post('nama');
		$alamat=$this->input->post('alamat');
		$no_telp=$this->input->post('no_telp');
		$password=$this->input->post('password');
		$username=$this->input->post('username');
		$where= array('username'=>$username);
		$cek = $this->user_model->validasi_signup("tb_user",$where)->num_rows();
		if($cek > 0){
			$url = base_url()."index.php/user/view_formUser";
			echo('<script type="text/javascript"> alert("username sudah digunakan"); </script>');
			header("Refresh: 0.01; $url");
		}
		else{
			$this->user_model->input_user($nama,$alamat,$no_telp,$username,$password);
            $url=base_url()."index.php/welcome/view_halaman_login";
            echo('<script type="text/javascript"> alert("Selamat anda telah terdaftar"); </script>');
			header("Refresh: 0.01; $url");
		}
	}

	function logout(){
		$this->session->sess_destroy();
		redirect('../index.php/welcome/view_halaman_login');
	}
}
?>
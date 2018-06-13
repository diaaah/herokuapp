<?php 

class login extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('user_model');
	}

	function validasi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => md5($password)
			);
		$cek = $this->user_model->validasi_login("tb_user", $where)->num_rows();
		if($cek > 0){
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
			$this->session->set_userdata($data_session);
			redirect('../index.php/user/view_dashboard');
		}else{
		    $url=base_url()."index.php/welcome/view_halaman_login";
            echo('<script type="text/javascript"> alert("Username dan password tidak cocok"); </script>');
		   header("Refresh: 0.01; $url");
		}
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

	public function view_formUser(){
		$this->load->view('formulir_user');
	}
}
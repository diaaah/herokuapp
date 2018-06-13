<?php

Class user_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function input_user($nama,$alamat,$no_telp,$username,$password){
		$this->db->query("INSERT INTO tb_user(nama_user,alamat,no_telp,username,`password`) VALUES ('$nama','$alamat','$no_telp','$username',md5('$password'))");
	} 

	public function delete_user($id_user){
		$this->db->query( "DELETE FROM tb_user WHERE id_user='$id_user'");
	} 

	public function view_user(){
		$query=$this->db->query("SELECT * FROM tb_user");
		return $query->result();
	}

	public function update_user($id_user,$nama ,$alamat, $no_telp, $username, $password){
		$this->db->query("UPDATE tb_user SET nama_user='$nama', alamat='$alamat', no_telp='$no_telp', username='$username', password=md5('$password') where id_user='$id_user'");
	}

	public function view_update_user($id_user){
		$query=$this->db->query("SELECT * FROM tb_user WHERE id_user='$id_user'");
		return $query->row_array();
	}
	public function validasi_login($table,$where){		
		return $this->db->get_where($table, $where);	
	}

	public function validasi_signup($table,$where){		
		return $this->db->get_where($table, $where);	
	}

}
?>

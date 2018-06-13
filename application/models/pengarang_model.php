<?php

Class pengarang_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function input_pengarang($nama,$alamat,$no_telp){
		$this->db->query( "INSERT INTO tb_pengarang(nama_pengarang, alamat, telepon) values ('$nama', '$alamat', '$no_telp')");
	} 

	public function delete_pengarang($id_pengarang){
		$this->db->query( "DELETE FROM tb_pengarang WHERE id_pengarang='$id_pengarang'");
	} 

	public function view_pengarang(){
		$query=$this->db->query("SELECT * FROM tb_pengarang");
		return $query->result();
	}

	public function update_pengarang($id_pengarang,$nama,$alamat,$no_telp){
		$this->db->query("UPDATE tb_pengarang SET nama_pengarang='$nama', alamat='$alamat', telepon='$no_telp' where id_pengarang='$id_pengarang'");
	}

	public function view_update_pengarang($id_pengarang){
		$query=$this->db->query("SELECT * FROM tb_pengarang WHERE id_pengarang='$id_pengarang'");
		return $query->row_array();
	}
}
?>

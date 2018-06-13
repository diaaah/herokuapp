<?php

Class penerbit_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function input_penerbit($nama,$alamat, $no_telp){
		$this->db->query( "INSERT INTO tb_penerbit(nama_penerbit, alamat, telepon) values ('$nama', '$alamat', '$no_telp')");
	}

	public function view_penerbit(){
		$query=$this->db->query("SELECT * FROM tb_penerbit");
		return $query->result();
	}

	public function update_penerbit($id,$nama,$alamat,$no_telp){
		$this->db->query("UPDATE tb_penerbit SET nama_penerbit='$nama', alamat='$alamat', telepon='$no_telp' where id_penerbit='$id'");
	}

	public function view_update_penerbit($id){
		$query=$this->db->query("SELECT * FROM tb_penerbit WHERE id_penerbit='$id'");
		return $query->row_array();
	}

	public function delete_penerbit($id){
		$this->db->query( "DELETE FROM tb_penerbit WHERE id_penerbit='$id'");
	} 

} 
<?php

Class kondisi_model extends CI_Model {

	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function input_kondisi($kondisi){
		$this->db->query( "INSERT INTO tb_kondisi (kondisi) values ('$kondisi')");
	} 

	public function delete_kondisi($id_kondisi){
		$this->db->query( "DELETE FROM tb_kondisi WHERE id_kondisi='$id_kondisi'");
	} 

	public function view_kondisi(){
		$query=$this->db->query("SELECT id_kondisi, kondisi from tb_kondisi");
		return $query->result();
	}

	public function update_kondisi($id_kondisi,$kondisi){
		$this->db->query("UPDATE tb_kondisi SET kondisi='$kondisi'");
	}

	public function view_update_kondisi($id_pengarang){
		$query=$this->db->query("SELECT * FROM tb_kondisi WHERE id_kondisi='$id_kondisi'");
		return $query->row_array();
	}
}
?>

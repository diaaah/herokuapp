<?php

Class ditail_buku_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	public function input_ditail($id_buku, $id_kondisi, $kode_buku){
		$this->db->query(" INSERT INTO tb_buku_detail(id_buku,kode_buku,id_kondisi) VALUES ('$id_buku', '$kode_buku','$id_kondisi')");
	}

	public function update_ditail_buku($id_ditail, $id_buku, $kode_buku, $id_kondisi){
		$this->db->query("UPDATE tb_buku_detail SET kode_buku='$kode_buku',id_kondisi=$id_kondisi, id_buku=$id_buku WHERE id_det_buku =$id_ditail");
	}

	public function view_ditail(){
		$query=$this->db->query(" SELECT tb_buku_detail.id_det_buku, judul, kode_buku, kondisi from tb_buku, tb_buku_detail, tb_kondisi WHERE 
			tb_buku_detail.id_buku=tb_buku.id_buku AND
			tb_buku_detail.id_kondisi=tb_kondisi.id_kondisi;");
		return $query->result();
	}

	public function validasi_ditail($table,$where){		
		return $this->db->get_where($table, $where);
	}

	public function view_update_ditail($id){
		$query=$this->db->query(" SELECT tb_buku_detail.id_det_buku, tb_buku.id_buku, tb_kondisi.id_kondisi, judul, kode_buku, kondisi from tb_buku, tb_buku_detail,tb_kondisi WHERE 
			tb_buku_detail.id_buku=tb_buku.id_buku AND
			tb_buku_detail.id_kondisi=tb_kondisi.id_kondisi AND 
			id_det_buku=$id;");
		return $query->row_array();
	}

	public function delete_ditail_buku($id){
		$this->db->query( "DELETE FROM tb_buku_detail WHERE id_det_buku='$id'");
	} 
	
} 
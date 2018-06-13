<?php
Class buku_model extends CI_Model {
	public function __construct(){
		parent::__construct();
		$this->load->database();
	}

	public function input_buku($judul,$penerbit, $pengarang,$jumHal,$thn_terbit, $addby){
		$this->db->query( "INSERT INTO tb_buku (judul, id_penerbit, id_pengarang, jumlah_halaman, tahun_terbit, add_by) VALUES ('$judul','$penerbit','$pengarang','$jumHal', '$thn_terbit','$addby');");
	} 

	public function view_buku(){
		$query=$this->db->query("SELECT tb_buku.id_buku, judul, nama_penerbit, nama_pengarang, tahun_terbit, jumlah_halaman,  nama_user FROM tb_penerbit, tb_pengarang, tb_buku, tb_user WHERE 
			tb_pengarang.id_pengarang=tb_buku.id_pengarang AND 
			tb_penerbit.id_penerbit=tb_buku.id_penerbit AND
			tb_buku.add_by=tb_user.id_user;");
		return $query->result();
	}

	public function update_buku($id_buku,$judul,$penerbit,$pengarang,$jumHal,$tahun,$addby){
		$this->db->query("UPDATE tb_buku SET judul='$judul',id_penerbit='$penerbit', id_pengarang='$pengarang', jumlah_halaman='$jumHal', tahun_terbit='$tahun', add_by='$addby' WHERE id_buku =$id_buku");
	}

	public function view_update_buku($id){
		$query=$this->db->query("SELECT tb_buku.id_buku,tb_buku.id_pengarang,tb_buku.id_penerbit,tb_buku.add_by, judul, nama_penerbit, nama_pengarang, tahun_terbit, jumlah_halaman, nama_user FROM tb_penerbit, tb_pengarang, tb_buku, tb_user
			WHERE tb_pengarang.id_pengarang=tb_buku.id_pengarang AND 
			tb_penerbit.id_penerbit=tb_buku.id_penerbit AND 
			tb_buku.add_by=tb_user.id_user AND
			tb_buku.id_buku=$id");
		return $query->row_array();
	}

	public function delete_buku($id){
		$this->db->query(" DELETE FROM tb_buku WHERE id_buku=$id");
	}
	public function view_kondisi(){
		$query=$this->db->query(" SELECT *FROM tb_kondisi" );
		return $query->result();
	}
}
?>
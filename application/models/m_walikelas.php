<?php
Class M_walikelas extends CI_Model{
	public function get_siswa(){
		$query=$this->db->query("select *, date_format(tanggallahir,'%d-%M-%Y') as tgl from siswa  ");
		return $query;
	}

	function select_siswa($nis){
		$query=$this->db->query("select nis, namasiswa, jeniskelamin, agama, alamat, tempatlahir, tanggallahir from siswa where nis='$nis'");
			//$query=$this->db->query("select nis, namasiswa, jeniskelamin, agama, alamat, tempatlahir, tanggallahir, status from siswa where nis='$nis'");
			$rows=$query->row();
			return $query;
		}
}
?>

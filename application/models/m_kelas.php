<?php
Class M_kelas extends CI_Model{
	function simpan(){
		$data = array(
			'idkelas'=>$this->input->post('idkelas'),
			'namakelas'=>$this->input->post('namakelas'),
			'tahunajaran'=>$this->input->post('tahunajaran'),
			'walikelas'=>$this->input->post('nip')
		);
		$simpan=$this->db->insert("kelas",$data);
		return $simpan;		
	}

	public function get_kelas(){
	 $this->db->select('*'); //memeilih semua field
    $this->db->from('kelas'); //memeilih tabel
    $this->db->join('guru', 'kelas.walikelas= guru.nip'); //join tabel transaksi field id_pemilik dengan tabel pemilik field yang punya isi sama
 
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $list_data[] = $data;
            }
        return $list_data; //hasil dari semua proses ada dimari
        }
}
/*
	public function get_kelas(){

		$query=$this->db->query("select * from kelas");
		return $query;
	}
*/
	function select_kelas($idkelas){
		$query=$this->db->query("select idkelas, namakelas, tahunajaran, walikelas from kelas where idkelas='$idkelas'");
			$rows=$query->row();
			return $query;
	}

	function update_data_kelas(){
			$idkelas=$this->input->post('idkelas');
			$namakelas=$this->input->post('namakelas');
			$tahunajaran=$this->input->post('tahunajaran');
			$walikelas=$this->input->post('nip');
			$query=$this->db->query("update kelas set namakelas='$namakelas', tahunajaran='$tahunajaran', walikelas='$walikelas' where idkelas='$idkelas'");
			return $query;
	}

	function hapus_data_kelas($idkelas){
		$query=$this->db->query("delete from kelas where idkelas='$idkelas'");
	}

	function view_siswa_where($idkelas){
       $query=$this->db->query("select siswa.* from siswa join kelassiswa using(nis) join kelas using(idkelas) where idkelas='$idkelas'");
        return $query;
    }
}

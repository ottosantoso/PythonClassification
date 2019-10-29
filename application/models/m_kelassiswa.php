<?php
Class M_kelassiswa extends CI_Model{

	// public function cek_siswa($nis){
	// 	$query=$this->db->query("select * from kelassiswa where nis=".$nis."");
	// 	return $query;
	// // }
	// function simpan(){
	// 	$nama=$this->input->post('namasiswa');
	// 	list($nis, $namasiswa) = explode(" - ", $nama);
	// 	if(empty($this->db->query("select * from kelassiswa where nis='".$nis."'"))){
	// 		$this->session->set_flashdata('notif', 
	// 				'<div class="alert alert-danger alert-dismissible">
 //        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
 //                		<h4><i class="icon fa fa-ban"></i> Alert!</h4>
 //                		Data Sudah Ada
 //              		</div>'
	// 				);
	// 	}else{			
	// 	$data = array(
	// 		'idkelas'=>$this->input->post('kdkelas'),
	// 		'nis'=>$this->$nis,
	// 		'namasiswa'=>$namasiswa
	// 	);
	// 	$simpan=$this->db->insert("kelassiswa",$data);
	// 	return $simpan;
	// 	}
	// }
	

	
	function simpan(){
		$nama=$this->input->post('namasiswa');
		list($nis, $namasiswa) = explode(" - ", $nama);
		if(empty($this->db->query("select * from kelassiswa where nis='".$nis."'")->row())){
			$data = array(
				'idkelas'=>$this->input->post('kdkelas'),
				'nis'=>$nis,
				'namasiswa'=>$namasiswa
			);
			$simpan=$this->db->insert("kelassiswa",$data);
			return $simpan;	
		}else{
			$this->session->set_flashdata('notif', 
					'<div class="alert alert-danger alert-dismissible">
        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                		<h4><i class="icon fa fa-ban"></i> Alert!</h4>
                		Data Siswa Sudah Ada
              		</div>'
					);
		}
	}
	
	public function get_kelassiswa(){
		$query=$this->db->query("select * from kelassiswa");
		return $query;
	}
	
	 public function view_siswa_where(){
       $query=$this->db->query("select * from siswa join kelassiswa using(nis) where idkelas='".$this->input->post('kdkelas')."'");
        return $query;
    }

	function select_kelassiswa($no){
		$query=$this->db->query("select idkelas, nis, namasiswa from kelassiswa where no='$no'");
			$rows=$query->row();
			return $query;
	}

	function update_data_kelassiswa(){
			$idkelassiswa=$this->input->post('idkelassiswa');
			$nis=$this->input->post('nis');
			$namasiswa=$this->input->post('namasiswa');
			$query=$this->db->query("update kelassiswa set nis='$nis', namasiswa='$namasiswa' where idkelas='$idkelassiswa'");
			return $query;
	}

	public function hapus_data_kelassiswa($no){
		$query=$this->db->query("delete from kelassiswa where no='$no'");
	}
}

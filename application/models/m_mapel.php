<?php
Class M_mapel extends CI_Model{
	function simpan(){
		$cek= mysql_num_rows(mysql_query("SELECT * FROM mapel WHERE idmapel=$this->input->post('idmapel')"));
		if ($cek > 0){
			echo "<script>window.alert('Id Kelas Sudah Ada')";
		}else{
		$data = array(
			'idmapel'=>$this->input->post('idmapel'),
			'namamapel'=>$this->input->post('namamapel'),
			'kkm'=>$this->input->post('kkm')
		);
		$simpan=$this->db->insert("mapel",$data);
		return $simpan;	
		}	
	}
	public function get_mapel(){
		$query=$this->db->query("select * from mapel");
		return $query;
	}
	function select_mapel($idmapel){
		$query=$this->db->query("select idmapel, namamapel, kkm from mapel where idmapel='$idmapel'");
			$rows=$query->row();
			return $query;
	}

	function update_data_mapel(){
			$idmapel=$this->input->post('idmapel');
			$namamapel=$this->input->post('namamapel');
			$kkm=$this->input->post('kkm');
			$query=$this->db->query("update mapel set namamapel='$namamapel', kkm='$kkm' where idmapel='$idmapel'");
			return $query;
	}

	public function hapus_data_mapel($idmapel){
		$query=$this->db->query("delete from mapel where idmapel='$idmapel'");
	}

	// Fungsi Model Pengajar
	function simpan_pengajar(){
		 	$kdpengajar = $this->input->post('kdpengajar');
		    $pengajar = $this->input->post('pengajar');
			$kdkelas = $this->input->post('kdkelas');
			$kdmapel = $this->input->post('kdmapel');
			$tahunajaran = $this->input->post('tahunajaran');
			$semester = $this->input->post('semester');

			$cek = $this->db->query("SELECT * FROM pengajar where kdpengajar ='".$kdpengajar."' or (idkelas = '".$kdkelas."' and idmapel ='".$kdmapel."' and tahunajaran='".$tahunajaran."' and semester='".$semester."')")->result();
			if ($cek) {
				$this->session->set_flashdata('notif', 
							'<div class="alert alert-danger alert-dismissible">
        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                		<h4><i class="icon fa fa-ban"></i> Alert!</h4>
                		Data Pengajar Sudah Ada
              		</div>'
					);
			}else{
				$query = $this->db->query("insert into pengajar (kdpengajar,nip,idkelas,idmapel,tahunajaran,semester)										values ('$kdpengajar','$pengajar','$kdkelas','$kdmapel','$tahunajaran','$semester')");
			}
	}
	
// 	function simpan_pengajar(){
// 		    $kdpengajar = $this->input->post('kdpengajar');
// 		    $pengajar = $this->input->post('pengajar');
// 			$kdkelas = $this->input->post('kdkelas');
// 			$kdmapel = $this->input->post('kdmapel');
// 			$tahunajaran = $this->input->post('tahunajaran');
// 			$semester = $this->input->post('semester');
// 			$cek= $this->db->query("select * from pengajar  where kdpengajar='".$kdpengajar."'");
// 			$array = array(0);
// 			$no = 0;
// 			foreach($cek->result_array() as $row){
// 				$kd_pngjr = $row['kdpengajar'];
// 				// $pngjr =$row['nip'];
// 				$kd = $row['idmapel'];
// 				$id = $row['idkelas'];
// 				$ta = $row['tahunajaran'];
// 				$sts = $row['semester'];

// 			}
// //	
// 			$query = false;	

// 				if(($kdmapel == $kd) and ($kdkelas == $id) and ($tahunajaran == $ta) and ($semester == $sts)){
// 				$this->session->set_flashdata('notif', 
// 							'<div class="alert alert-danger alert-dismissible">
//         				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
//                 		<h4><i class="icon fa fa-ban"></i> Alert!</h4>
//                 		Data Pengajar Sudah Ada
//               		</div>'
// 					);
// 					//echo "<script> alert('data sama'); window.location</script>";
// 				}else{
// 					$query = $this->db->query("insert into pengajar (kdpengajar,nip,idkelas,idmapel,tahunajaran,semester)
// 												values ('$kdpengajar','$pengajar','$kdkelas','$kdmapel','$tahunajaran','$semester')");
// 				}
// 				//echo var_dump($query);
// 				//die();
// 	}
				
				

			

// 		$data = array(
// 			'kdpengajar'=>$this->input->post('kdpengajar'),
// 			'nip'=>$this->input->post('pengajar'),
// 			'idkelas'=>$this->input->post('kdkelas'),
// 			'idmapel'=>$this->input->post('kdmapel'),
// 			'tahunajaran' =>$this->input->post('tahunajaran'),
// 			'semester' =>$this->input->post('semester')
// 		);

		
// 		/*$cek= $this->db->query("select * from pengajar where idmapel not in('".$this->input->post('kdmapel')."')
// 														 and idkelas not in('".$this->input->post('kdkelas')."' )
// 														 and tahunajaran not in('".$this->input->post('tahunajaran')."') 
// 														 and semester not in('".$this->input->post('semester')."')");
// 				if($cek->num_rows > 0){
// 					$this->session->set_flashdata('notif', 
// 							'<div class="alert alert-danger alert-dismissible">)
//         				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
//                 		<h4><i class="icon fa fa-ban"></i> Alert!</h4>
//                 		Data Sudah Ada
//               		</div>'
// 					);*/
// 	/*	redirect('c_mapel/lihat_pengajar');
// 		}else{
// 		$simpan=$this->db->insert("pengajar",$data);
// 		return $simpan;	
// 		$this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
// 				                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
// 				                <h4><i class="icon fa fa-check"></i> Data Berhasil Dimasukkan</h4>
// 				               </div>');*/
// 		//redirect('c_mapel/lihat_pengajar');
// 		//}	
// 	}
	public function get_pengajar(){
		$this->db->select('*'); //memeilih semua field
    $this->db->from('pengajar'); //memeilih tabel
    $this->db->join('guru', 'pengajar.nip= guru.nip'); //join tabel guru untuk mengambil nama guru berdasarkan nip
 	$this->db->join('kelas', 'pengajar.idkelas= kelas.idkelas'); //join tabel kelas untuk mengambil data kelas
 	$this->db->join('mapel', 'pengajar.idmapel= mapel.idmapel');//MMengambil Nama Mapel
    $query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $list_data[] = $data;
            }
        return $list_data; //hasil dari semua proses ada dimari
        }
	}
	function select_pengajar($idpengajar){
		$query=$this->db->query("select kdpengajar, nip, namaguru, idkelas, idmapel, tahunajaran, semester from pengajar join guru using(nip) where idpengajar='$idpengajar'");
			$rows=$query->row();
			return $query;
	}

	function update_data_pengajar(){
			$kdpengajar=$this->input->post('kdpengajar');
			$nip=$this->input->post('nip');
			$idkelas=$this->input->post('idkelas');
			$idmapel=$this->input->post('idmapel');
			$tahunajaran=$this->input->post('tahunajaran');
			$semester=$this->input->post('semester');
			$query=$this->db->query("update pengajar set kdpengajar='$kdpengajar', idkelas='$idkelas', idmapel='$idmapel', tahunajaran='$tahunajaran', semester='$semester' where nip='$nip'");
			return $query;
	}

	public function hapus_data_pengajar($idpengajar){
		$query=$this->db->query("delete from pengajar where idpengajar='$idpengajar'");
	}
}

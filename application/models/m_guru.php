<?php
Class M_guru extends CI_Model{
	function insert_nilai(){
		//$tanggallahir_yy=substr($this->input->post('tanggallahir'), 6,4);
		//$tanggallahir_mm=substr($this->input->post('tanggallahir'), 3,2);
		//$tanggallahir_dd=substr($this->input->post('tanggallahir'), 0,2);
		//$tanggalformat=$tanggallahir_yy."-".$tanggallahir_mm."-".$tanggallahir_dd;
		//$this->load->library('form_validation');
		$j=0;
		for($i=0; $i<10; $i++){		
			$query=$this->db->query("select * from nilai where nis='".$this->input->post('nis'.$j.'')."' and idmapel='".$this->input->post('kdmapel')."' and idkelas='".$this->input->post('kdkelas')."' and nip='".$this->input->post('nip')."'");
			if(empty($query->row())){
				$data = array(				
				'nip'=>$this->input->post('nip'),
				'nis'=>$this->input->post('nis'.$j.''),
				'idmapel'=>$this->input->post('kdmapel'),
				'idkelas'=>$this->input->post('kdkelas'),
				'semester'=>'Ganjil',
				'tugas'=>$this->input->post('tugas'.$j.''),
				'harian'=>$this->input->post('harian'.$j.''),
				'uts'=>$this->input->post('uts'.$j.''),
				'uas'=>$this->input->post('uas'.$j.''),
				'keterampilan'=>$this->input->post('keterampilan'.$j.''),
				'sikap'=>$this->input->post('sikap'.$j.'')
				);
				$simpan=$this->db->insert("nilai",$data);
			}else{
				$data = array(				
				'nip'=>$this->input->post('nip'),
				'nis'=>$this->input->post('nis'.$j.''),
				'idmapel'=>$this->input->post('kdmapel'),
				'idkelas'=>$this->input->post('kdkelas'),
				'semester'=>'Ganjil',
				'tugas'=>$this->input->post('tugas'.$j.''),
				'harian'=>$this->input->post('harian'.$j.''),
				'uts'=>$this->input->post('uts'.$j.''),
				'uas'=>$this->input->post('uas'.$j.''),
				'keterampilan'=>$this->input->post('keterampilan'.$j.''),
				'sikap'=>$this->input->post('sikap'.$j.'')
				);				
			    $this->db->where('idnilai', $this->input->post('id'.$j.''));
			    $this->db->update('nilai', $data);
			}
			$j++;
	}
		
	}

	function select_nilai($idnilai){
		$query=$this->db->query("select nip, nis, namasiswa from nilai where idnilai='$idnilai'");
			$rows=$query->row();
			return $query;
	}

	public function get_nilai(){
		$query=$this->db->query("select DISTINCT idnilai, nis, namasiswa,tugas,harian,uts,uas,keterampilan,sikap, status from kelassiswa join pengajar using(idkelas) join nilai USING (nis) where kelassiswa.idkelas='".$this->input->post('kdkelas')."' and pengajar.idmapel='".$this->input->post('kdmapel')."' and pengajar.kdpengajar='".$this->session->userdata('username')."'");
        return $query->result();
	}

	/*
	public function get_nilai(){
		$query=$this->db->query("select * from nilai");
		return $query;
	}
*/
		function update_data_nilai(){
			$nip=$this->input->post('nip');
			$nis=$this->input->post('nis');
			$idkelas=$this->input->post('idkelas');
			$semester=$this->input->post('semester');
			$tugas=$this->input->post('tugas');
			$tugas2=$this->input->post('tugas2');
			//$tugas3=$this->input->post('tugas3');
			//$tugas4=$this->input->post('tugas4');
			//$harian1=$this->input->post('harian1');
			//$harian2=$this->input->post('harian2');
			//$harian3=$this->input->post('harian3');
			$harian=$this->input->post('harian');
			$uts=$this->input->post('uts');
			$uas=$this->input->post('uas');
			$keterampilan=$this->input->post('keterampilan');
			$sikap=$this->input->post('sikap');
			//$query=$this->db->query("update nilai set nip='$nip', nis='$nis', idkelas='$idkelas', semester='$semester', tugas1='$tugas1', tugas2='$tugas2', tugas3='$tugas3', tugas4='$tugas4', harian1='$harian1', harian2='$harian2', harian3='$harian3', harian4='$harian4', uts='$uts', uas='$uas', keterampilan='$keterampilan', sikap='$sikap'  where idnilai='$idnilai'");
			$query=$this->db->query("update nilai set nip='$nip', nis='$nis', idkelas='$idkelas', semester='$semester', tugas='$tugas', harian='$harian', uts='$uts', uas='$uas', keterampilan='$keterampilan', sikap='$sikap'  where idnilai='$idnilai'");
			return $query;
	}

	public function hapus_data_nilai($idnilai){
		$query=$this->db->query("delete from nilai where idnilai='$idnilai'");
	}

	//Menampilkan data siswa yang diajar
	 public function view_siswa_where(){
       $query=$this->db->query("select idnilai, nis, namasiswa,tugas,harian,uts,uas,keterampilan,sikap, nilai.status,nilai.idmapel, kelassiswa.idkelas from kelassiswa join nilai USING (nis) where kelassiswa.idkelas='".$this->input->post('kdkelas')."' and nilai.idmapel='".$this->input->post('kdmapel')."' and nilai.nip='".$this->session->userdata('username')."'");
        return $query->result();
    }

    public function view_siswa_where1(){
       $query=$this->db->query("select null as idnilai, nis, namasiswa,null as tugas,null as harian,null as uts,null as uas,null as keterampilan,null as sikap , null as status, '".$this->input->post('kdmapel')."' as idmapel, kelassiswa.idkelas from kelassiswa join pengajar using(idkelas) where kelassiswa.idkelas='".$this->input->post('kdkelas')."' and pengajar.idmapel='".$this->input->post('kdmapel')."' and pengajar.kdpengajar='".$this->session->userdata('username')."' order by namasiswa");
        return $query->result();
    }

    public function view_nilai_siswa_where(){
       $query=$this->db->query("select idnilai,tugas,harian,uts,uas,keterampilan,sikap from nilai where nilai.idkelas='".$this->input->post('kdkelas')."' and nilai.idmapel='".$this->input->post('kdmapel')."' and nilai.nip='".$this->session->userdata('username')."'");
        return $query->result();
    }

    public function upddata($id,$data) {
	    $this->db->where('idnilai', $id);
	    $this->db->update('nilai', $data);
	}


	// Model Upload Nilai
	public function upload_data($filename){
        ini_set('memory_limit', '-1');
        $inputFileName = './assets/uploads/'.$filename;
        try {
        $objPHPExcel = PHPExcel_IOFactory::load($inputFileName);
        } catch(Exception $e) {
        die('Error loading file :' . $e->getMessage());
        }
 
        $worksheet = $objPHPExcel->getActiveSheet()->toArray(null,true,true,true);
        $numRows = count($worksheet);
 
        for ($i=2; $i<($numRows+1); $i++) { 
        	
 			$data = array(
			'idnilai'=>$worksheet[$i]["A"],
			'nip'=>$worksheet[$i]["B"],
			'nis'=>$worksheet[$i]["C"],
			'idkelas'=>$worksheet[$i]["D"],
			'idmapel'=>$worksheet[$i]["E"],
			'semester'=>$worksheet[$i]["F"],
			'tugas'=>$worksheet[$i]["G"],
			'harian'=>$worksheet[$i]["H"],
			'uts'=>$worksheet[$i]["I"],
			'uas'=>$worksheet[$i]["J"],
			'keterampilan'=>$worksheet[$i]["K"],
			'sikap'=>$worksheet[$i]["L"]
			);
		$simpan=$this->db->insert("nilai",$data);
        }
        return $simpan;	
        
    }

}
?>
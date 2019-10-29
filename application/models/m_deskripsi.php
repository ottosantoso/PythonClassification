<?php
Class M_deskripsi extends CI_Model{

	public function simpan(){
		$data = array(
			'iddeskripsi'=>$this->input->post('iddeskripsi'),
			'idnilai'=>$this->input->post('idnilai'),
			'nip'=>$this->input->post('nip'),
			'nis'=>$this->input->post('nis'),
			'idmapel'=>$this->input->post('idmapel'),
			'idkelas'=>$this->input->post('idkelas'),
			'pengetahuan'=>$this->input->post('pengetahuan'),
			'keterampilan'=>$this->input->post('keterampilan'),
			'sikap'=>$this->input->post('sikap')
		);
		$simpan=$this->db->insert("deskripsi",$data);
		return $this->db->insert_id();	
	}
		
		function cek_data($idnilai,$nis,$idmapel)
		{
			//$this->db->where('idnilai',$idnilai);
			$this->db->where('nis',$nis);
			$this->db->where('idmapel',$idmapel);
			$x=$this->db->get('deskripsi')->row();
			if(!empty($x)){
				return false;
			}else{
				return true;
			}
		}
		
		function select_deskripsi($idnilai){
		$query=$this->db->query("select * from nilai n join pengajar p on n.nip=p.nip join kelassiswa k on p.idkelas=k.idkelas where idnilai='$idnilai'");
			$rows=$query->row();
			return $query;
	}
	
		function isi_form(){
		$query=$this->db->query("select distinct n.* from nilai n join pengajar p on n.nip=p.kdpengajar join kelassiswa k on p.idkelas=k.idkelas where n.nis='".$_GET['nis']."' and n.idmapel='".$_GET['idmapel']."'");
			$rows=$query->row();
			return $query;
	}

		public function get_deskripsi(){
	 		$this->db->select('*'); //memeilih semua field
    		$this->db->from('nilai'); //memeilih tabel
    		$this->db->join('pengajar', 'nilai.nip= pengajar.nip'); //join tabel pengajar untuk field nip.
    		$this->db->join('kelassiswa', 'pengajar.idkelas= kelassiswa.idkelas');
 
    		$query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        		if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            		foreach ($query->result() as $data) {
              		  # code...
                	$list_data[] = $data;
            		}
        		return $list_data; //hasil dari semua proses ada dimari
        		}
        }

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
			//'nis'=>$worksheet[$i]["A"],
			'idnilai'=>$worksheet[$i]["A"],
			'nip'=>$worksheet[$i]["B"],
			'nis'=>$worksheet[$i]["C"],
			'idmapel'=>$worksheet[$i]["D"],
			'idkelas'=>$worksheet[$i]["E"],
			'pengetahuan'=>$worksheet[$i]["F"],
			'keterampilan'=>$worksheet[$i]["K"],
			'sikap'=>$worksheet[$i]["L"]
			);
 		$simpan=$this->db->insert("deskripsi",$data);
        }
        return $simpan;	
        
    }
}
?>
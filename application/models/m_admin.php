<?php
Class M_admin extends CI_Model{
	function insert_guru(){
		//$tanggallahir_yy=substr($this->input->post('tanggallahir'), 6,4);
		//$tanggallahir_mm=substr($this->input->post('tanggallahir'), 3,2);
		//$tanggallahir_dd=substr($this->input->post('tanggallahir'), 0,2);
		//$tanggalformat=$tanggallahir_yy."-".$tanggallahir_mm."-".$tanggallahir_dd;
		//$this->load->library('form_validation');
		$data = array(
			'nip'=>$this->input->post('nip'),
			'namaguru'=>$this->input->post('namaguru'),
			'jeniskelamin'=>$this->input->post('jeniskelamin'),
			'agama'=>$this->input->post('agama'),
			'alamat'=>$this->input->post('alamat'),
			'tempatlahir'=>$this->input->post('tempatlahir'),
			'tanggallahir'=>$this->input->post('tanggallahir'),
			'status'=>$this->input->post('status')
			);

		$simpan=$this->db->insert("guru",$data);
		return $simpan;		
	}

	public function get_guru(){
		$query=$this->db->query("select *, date_format(tanggallahir,'%d-%M-%Y') as tgl from guru  ");
		return $query;
	}

	function select_guru($nip){
			$query=$this->db->query("select nip, namaguru, jeniskelamin, agama, alamat, tempatlahir, tanggallahir, status from guru where nip='$nip'");
			$rows=$query->row();
			return $query;
		}

	function update_data_guru(){
			$nip=$this->input->post('nip');
			$namaguru=$this->input->post('namaguru');
			$jeniskelamin=$this->input->post('jeniskelamin');
			$agama=$this->input->post('agama');
			$alamat=$this->input->post('alamat');
			$tempatlahir=$this->input->post('tempatlahir');
			$tanggallahir=$this->input->post('tanggallahir');
			$status=$this->input->post('status');
			$query=$this->db->query("update guru set namaguru='$namaguru', jeniskelamin='$jeniskelamin', agama='$agama', alamat='$alamat', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir', status='$status' where nip='$nip'");
			return $query;
	}

	public function hapus_data_guru($nip){
		$query=$this->db->query("delete from guru where nip='$nip'");
	}

//	public function getFoto(){
//		$status = $this->session->userdata('username');
//		$id = $this->db->query("select * from  user join register using(username) where username='$status'");
//	}

	function insert_user(){
		$idregister = $this->input->post('idregistrasi');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$statusadmin = $this->input->post('statusadmin');
		$statusguru = $this->input->post('statusguru');
		$statuswali = $this->input->post('statuswali');
		$statuskepalasekolah = $this->input->post('statuskepalasekolah');
		$squery = $this->db->query("insert into register(idregister,username,password,statusadmin, statusguru,statuswali,statuskepalasekolah) values ('$idregister','$username','$password', '$statusadmin','$statusguru','$statuswali','$statuskepalasekolah')");
	}

	/*
	public function select_user($idregister){
			$query=$this->db->query("select idregister, username, password, statusadmin, statusguru, statuswali, statuskepalasekolah from register where idregister='$idregister'");
			$rows=$query->row();
			return $query;
		}
	*/
	public function get_user(){
        $query=$this->db->query("select * from register");
		return $query;
		/*
				$this->db->select('*'); //memeilih semua field
    	$this->db->from('register'); //memeilih tabel
    	$query = $this->db->get(); //simpan database yang udah di get alias ambil ke query
        if ($query->num_rows() >0){ //membuat data masuk ke $data kemudian masuk lagi ke array $hasiltransaksi
            foreach ($query->result() as $data) {
                # code...
                $list_data[] = $data;
            }
        return $list_data; //hasil dari semua proses ada dimari
        }
		*/
	}

	function select_user($idregister){
			$query=$this->db->query("select * from register where idregister='$idregister'");
			$rows=$query->row();
			return $query;
		}
		function update_data_user(){
		$idregister = $this->input->post('idregister');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$statusadmin = $this->input->post('statusadmin');
		$statusguru = $this->input->post('statusguru');
		$statuswali = $this->input->post('statuswali');
		$statuskepalasekolah = $this->input->post('statuskepalasekolah');
			$query=$this->db->query("update register set username='$username', password='$password', statusadmin='$statusadmin', statuswali='$statuswali', statuskepalasekolah='$statuskepalasekolah' where idregister='$idregister' ");
			return $query;
	}
/*
		function update_data_user(){
		$idregister = $this->input->post('idregister');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$statusadmin = $this->input->post('statusadmin');
		$statusguru = $this->input->post('statusguru');
		$statuswali = $this->input->post('statuswali');
		$statuskepalasekolah = $this->input->post('statuskepalasekolah');
			$query=$this->db->query("update register join guru g on r.idregister=g.nip uset username='$username', password='$password', statusadmin='$statusadmin', statuswali='$statuswali', statuskepalasekolah='$statuskepalasekolah' where idregister='$idregister' ");
			return $query;
	}
*/
	public function hapus_data_user($idregister){
		$query=$this->db->query("delete from register where idregister='$idregister'");
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
			'nip'=>$worksheet[$i]["A"],
			'namaguru'=>$worksheet[$i]["B"],
			'jeniskelamin'=>$worksheet[$i]["C"],
			'agama'=>$worksheet[$i]["D"],
			'alamat'=>$worksheet[$i]["E"],
			'tempatlahir'=>$worksheet[$i]["F"],
			'tanggallahir'=>$worksheet[$i]["G"],
			'status'=>$worksheet[$i]["H"]
			);

 			$data2 = array(
			'kdpengajar'=>$worksheet[$i]["I"],
			'nip'=>$worksheet[$i]["A"],
			'idkelas'=>$worksheet[$i]["J"],
			'idmapel'=>$worksheet[$i]["K"],
			'tahunajaran'=>$worksheet[$i]["L"],
			'semester'=>$worksheet[$i]["M"]
			);

		$simpan=$this->db->insert("guru",$data);
		$simpan2=$this->db->insert("pengajar",$data2);   
        }
        return $simpan;
        return $simpan2;		
        
    }
}
?>

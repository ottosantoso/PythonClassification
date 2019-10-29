<?php
Class M_siswa extends CI_Model{
	function simpan_siswa(){
		//$tanggallahir_yy=substr($this->input->post('tanggallahir'), 6,4);
		//$tanggallahir_mm=substr($this->input->post('tanggallahir'), 3,2);
		//$tanggallahir_dd=substr($this->input->post('tanggallahir'), 0,2);
		//$tanggalformat=$tanggallahir_yy."-".$tanggallahir_mm."-".$tanggallahir_dd;
		$data = array(
			'nis'=>$this->input->post('nis'),
			'namasiswa'=>$this->input->post('namasiswa'),
			'jeniskelamin'=>$this->input->post('jeniskelamin'),
			'agama'=>$this->input->post('agama'),
			'alamat'=>$this->input->post('alamat'),
			'tempatlahir'=>$this->input->post('tempatlahir'),
			'tanggallahir'=>$this->input->post('tanggallahir')
			//'status'=>$this->input->post('status')
			);

		$simpan=$this->db->insert("siswa",$data);
		return $simpan;		
	}

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

	function update_data_siswa(){
			$nis=$this->input->post('nis');
			$namasiswa=$this->input->post('namasiswa');
			$jeniskelamin=$this->input->post('jeniskelamin');
			$agama=$this->input->post('agama');
			$alamat=$this->input->post('alamat');
			$tempatlahir=$this->input->post('tempatlahir');
			$tanggallahir=$this->input->post('tanggallahir');
			//$status=$this->input->post('status');
			$query=$this->db->query("update siswa set namasiswa='$namasiswa', jeniskelamin='$jeniskelamin', agama='$agama', alamat='$alamat', tempatlahir='$tempatlahir', tanggallahir='$tanggallahir' where nis='$nis'");
			return $query;
	}

	public function hapus_data_siswa($nis){
		$query=$this->db->query("delete from siswa where nis='$nis'");
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
			'nis'=>$worksheet[$i]["A"],
			'namasiswa'=>$worksheet[$i]["B"],
			'jeniskelamin'=>$worksheet[$i]["C"],
			'agama'=>$worksheet[$i]["D"],
			'alamat'=>$worksheet[$i]["E"],
			'tempatlahir'=>$worksheet[$i]["F"],
			'tanggallahir'=>$worksheet[$i]["G"]
			);

 			$data2 = array(
			'idkelas'=>$worksheet[$i]["H"],
			'nis'=>$worksheet[$i]["A"],
			'namasiswa'=>$worksheet[$i]["B"],
			);
		$simpan=$this->db->insert("siswa",$data);
		$simpan2=$this->db->insert("kelassiswa",$data2);   
        }
        return $simpan;	
        return $simpan2;
        
    }
}
?>

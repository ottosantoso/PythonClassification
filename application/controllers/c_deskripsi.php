<?php
	class C_deskripsi extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('m_deskripsi');
		}

		public function form_deskripsi() {

			$data['content_view']="form_deskripsi.php";
			$data['list_data']=$this->m_deskripsi->isi_form();
			$this->load->view('home_guru',$data);
		}
		function insert_deskripsi(){
			$nis=$this->input->post('nis');
			$idmapel=$this->input->post('idmapel');
			$cek=$this->m_deskripsi->cek_data($nis,$idmapel);
			if($cek){
			$this->load->model('m_deskripsi');
			$iddeskripsi = $this->m_deskripsi->simpan();
			redirect("C_deskripsi/lihat_deskripsi/$iddeskripsi");
			}else{
			$this->session->set_flashdata('error', 'data sudah ada');
			redirect("C_deskripsi/form_deskripsi?idmapel=$idmapel&nis=$nis");
		
			}
		}
		public function lihat_deskripsi($iddeskripsi){
			$data['list_data']=$this->m_deskripsi->get_deskripsi();
			$deskripsi = $this->db->query("SELECT * FROM deskripsi 
				join siswa on siswa.nis=deskripsi.nis 
				join kelas on kelas.idkelas=deskripsi.idkelas 
				join guru on kelas.walikelas=guru.nip
				join mapel on mapel.idmapel=deskripsi.idmapel
				join nilai on nilai.idnilai=deskripsi.idnilai
				WHERE iddeskripsi='$iddeskripsi'")->row();
			$data['x'] = $deskripsi;
			$data['content_view']="view_deskripsi.php";
			$this->load->view('home_guru',$data);
		}

		public function view_deskripsi(){
		if($this->input->post('view')!=null){
	        $data['list_data']=$this->m_deskripsi->view_siswa_where();
			$data['content_view']="view_deskripsi.php";
			$this->load->view('home_guru',$data);
    	}
    }
		public function update_deskripsi(){
		$this->m_deskripsi->update_data_deskripsi();
		redirect('c_deskripsi/lihat_deskripsi');
		}

		public function tampilan_update_deskripsi(){
		$data['content_view']="form_deskripsi.php";
		$nis=$this->uri->segment(3);
		$data['list_data']=$this->m_deskripsi->select_deskripsi($idnilai);
		$this->load->view('home_guru',$data);
		}

		public function delete_data_deskripsi($nis)
		{	
			$this->db->where('nis',$nis);
			$this->db->delete('deskripsi');
			redirect('c_deskripsi/lihat_deskripsi');
		}

		function hapus_deskripsi(){
			$data['content_view']="view_deskripsi.php";
			$nis=$this->uri->segment(3);
			$this->m_deskripsi->hapus_data_deskripsi($nis);
			redirect('c_deskripsi/lihat_deskripsi');
		}

		public function view_detail_deskripsi(){
			$nis=$_GET['nis'];
			$data['content_view']="deskripsi.php";
			$data['list_data']=$this->m_deskripsi->get_deskripsi();
			$deskripsi = $this->db->query("SELECT * FROM deskripsi 
				join siswa on siswa.nis=deskripsi.nis 
				join kelas on kelas.idkelas=deskripsi.idkelas 
				join guru on kelas.walikelas=guru.nip
				join mapel on mapel.idmapel=deskripsi.idmapel
				join nilai on nilai.idnilai=deskripsi.idnilai
				WHERE deskripsi.nis='$nis'")->result();
			$data['xx'] = $deskripsi;
			$data['content_view']="deskripsi.php";
			$this->load->view('deskripsi',$data);	
		}

		public function upload(){
        $config['upload_path'] = './assets/uploads/';
        $config['allowed_types'] = 'xlsx|xls';
        
        $this->load->library('upload', $config);
        
        if ( ! $this->upload->do_upload()){
            $error = array('error' => $this->upload->display_errors());
        }
        else{
            $data = array('upload_data' => $this->upload->data());
            $upload_data = $this->upload->data(); //Mengambil detail data yang di upload
            $filename = $upload_data['file_name'];//Nama File
            $this->m_deskripsi->upload_data($filename);
            unlink('./assets/uploads/'.$filename);
            redirect('c_deskripsi/lihat_deskripsi','refresh');
        }
    }
}
?>
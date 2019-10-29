<?php
	class C_guru extends CI_Controller{
		//Akses untuk halaman utama saat login
		public function __construct(){
			parent::__construct();
			$this->load->library("PHPExcel");
			$this->load->model('m_guru');
		}

		public function index() {
			if ($this->session->userdata('username')) {
			
				$data['content_view']="tambah_nilai.php";
				$this->load->view('home_guru',$data);
			} else {
				redirect('c_login/index');
			}
		}		

		public function tambah_nilai(){
			$data['content_view']="tambah_nilai.php";
			$this->load->view('home_guru',$data);
		}

		public function form_nilai(){
			$data['content_view']="form_nilai.php";
			$this->load->view('home_guru',$data);
		}

		public function insert_nilai(){
			$this->m_guru->insert_nilai();
			redirect('c_guru/tambah_nilai');
		}

		public function lihat_nilai(){
			$data['list_data']=$this->m_guru->get_nilai();
			$data['content_view']="view_nilai.php";
			$this->load->view('home',$data);
		}

		public function update_nilai(){
			$this->m_guru->update_data_nilai();
			redirect('c_guru/lihat_nilai');
		}

		public function tampilan_update_nilai(){
			$data['content_view']="update_nilai.php";
			$nip=$this->uri->segment(3);
			$data['list_data']=$this->m_guru->select_nilai($idnilai);
			$this->load->view('home_guru',$data);
		}

	public function delete_data_nilai($idnilai)
		{	
			$this->db->where('idnilai',$idnilai);
			$this->db->delete('nilai');
			redirect('c_nilai/lihat_nilai');
		}

	function hapus_nilai(){
			$data['content_view']="view_nilai.php";
			$idnilai=$this->uri->segment(3);
			$this->m_nilai->hapus_data_nilai($idnilai);
			redirect('c_nilai/lihat_nilai');
	}

	public function view_nilai(){
		if($this->input->post('view')!=null){
			if(!empty($this->m_guru->view_siswa_where())){
	        	$data['list_data']=$this->m_guru->view_siswa_where();
	        	$kdkelas='tes';	        	
	        	$kdmapel='tes';
			}else{
	        	$data['list_data']=$this->m_guru->view_siswa_where1();	        	
	        $kdkelas='tes';	        	
	        	$kdmapel='tes';
			}
			$data['content_view']="detail_nilai.php";

            $nipGuru = $this->session->userdata('username');
            $idkelas = $_POST['kdkelas'];
            $idmapel = $_POST['kdmapel'];
            $kelas = $this->db->get_where('kelas', array('idkelas' => $idkelas))->row();
            $nilai = $this->db->query("SELECT status from nilai where nip='$nipGuru' AND idkelas='$idkelas' AND idmapel='$idmapel' AND semester='$kelas->Semester'")->row();
            $data['status_nilai_mapel'] = $nilai->status;
			$this->load->view('home_guru',$data);
    	}
}

	//Untuk Menampilkan Data siswa
	public function view_siswa(){
		if($this->input->post('view')!=null){
			if(!empty($this->m_guru->view_siswa_where())){
	        	$data['list_data']=$this->m_guru->view_siswa_where();
	        	$kdkelas='tes';	        	
	        	$kdmapel='tes';
			}else{
	        	$data['list_data']=$this->m_guru->view_siswa_where1();	        	
	        $kdkelas='tes';	        	
	        	$kdmapel='tes';
			}
			$data['content_view']="tambah_nilai.php";
			$this->load->view('home_guru',$data);
    	}
	}
	public function form_upload(){
		$data['content_view']="form_upload.php";
		$this->load->view('home_guru',$data);
	}
	// Function Upload Excel
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
            $this->m_guru->upload_data($filename);
            unlink('./assets/uploads/'.$filename);
            redirect('c_guru/lihat_nilai','refresh');
        }
    }
}
?>


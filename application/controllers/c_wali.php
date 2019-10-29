<?php
	class C_wali extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('m_wali');
			$this->load->model('m_mapel_nilai', 'mn');
		}

		public function index(){
			if (!empty($this->session->userdata('username'))) {
				$data['content_view']="approval_wali.php";
				$this->load->view('home',$data);
			} else {
				redirect('c_login/index');
			}
		}

		function approval_nilai(){
			$data['content_view']="approval_wali.php";
			$data['list_data']=$this->mn->all();
			$this->load->view('home',$data);
		}

		function approval_nilai_switch_status($id){
			$this->mn->switch_status($id);
			redirect("c_wali/approval_nilai");
		}

		function raport(){
			$data['content_view']="raport.php";
			$data['list_data']=$this->m_wali->siswa_nilai();
			$this->load->view('raport',$data);
		}

		function wali_nilai(){
			$data['content_view']="wali_nilai.php";
			$data['list_data']=$this->m_wali->view_siswa_where3();
			$this->load->view('home',$data);
		}

		public function lihat_kelulusan(){
			$data['list_data']=$this->m_wali->get_nilai();
			$data['content_view']="nilai_kelulusan.php";
			$this->load->view('home',$data);
		}

		function detail_raport(){
			$data['content_view']="detail_raport.php";
			$this->load->view('home',$data);
		}

		public function lihat_mapel(){
			$data['list_data']=$this->m_mapel->get_mapel();
			$data['content_view']="view_rapor.php";
			$this->load->view('home',$data);
		}

		// Test View Semua Nilai
		public function detail_nilai(){
			$data['content_view']="detail_nilai.php";
			$this->load->view('home',$data);
		}

		public function view_siswa(){
		if($this->input->post('view')!=null){
			if(!empty($this->m_wali->view_siswa_where())){
	        	$data['list_data']=$this->m_wali->view_siswa_where();
	        	$kdkelas='tes';	        	
	        	$kdmapel='tes';
			}else{
	        	$data['list_data']=$this->m_wali->view_siswa_where1();	        	
	        $kdkelas='tes';	        	
	        	$kdmapel='tes';
			}
			$data['content_view']="detail_nilai.php";
			$this->load->view('home',$data);
    	}
    }
		
		//function untuk menampilkan data siswa di wali kelas
    public function view_siswa_wali(){
		$data['content_view']="wali_nilai.php";
		$idkelas=$this->uri->segment(3);
		$data['list_data']=$this->m_kelas->view_siswa_where3($idkelas);
        //$data ['siswa'] = $this->m_cetak->view_siswa_where();
        $this->load->view('home', $data);
    }

    public function view_mapel(){
		if($this->input->post('view')!=null){
	        $data['list_data']=$this->m_wali->view_mapel();
			$data['content_view']="nilai_kelulusan.php";
			$this->load->view('home',$data);
    	}
    }
}
?>
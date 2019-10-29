<?php
	class C_kepalasekolah extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('m_kepalasekolah');
		}

		public function index(){
			if (!empty($this->session->userdata('username'))) {
				$data['content_view']="kepalasekolah.php";
				$this->load->view('home',$data);
			} else {
				redirect('c_login/index');
			}
		}

	

	 public function view_mapel(){
		if($this->input->post('view')!=null){
	        $data['list_data']=$this->m_kepalasekolah->view_mapel();
			$data['content_view']="nilai_kelulusan2.php";
			$this->load->view('home',$data);
    	}
    }

    public function lihat_kelulusan(){
			$data['list_data']=$this->m_kepalasekolah->get_nilai();
			$data['content_view']="nilai_kelulusan2.php";
			$this->load->view('home',$data);
	}

	public function lihat_nilai(){
			$data['list_data']=$this->m_kepalasekolah->get_nilai();
			$data['content_view']="kepalasekolah_nilai.php";
			$this->load->view('home',$data);
	}

	public function view_mapel_nilai(){
		if($this->input->post('view')!=null){
	        $data['list_data']=$this->m_kepalasekolah->view_mapel();
			$data['content_view']="kepalasekolah_nilai.php";
			$this->load->view('home',$data);
    	}
    }


// Grafik NIlai Siswa 
    public function view_mapel_nilai2(){
		if($this->input->post('view')!=null){
	        $data['list_data']=$this->m_kepalasekolah->view_mapel2();
			$data['content_view']="grafik.php";
			$this->load->view('home',$data);
    	}
    }

    public function index_grafik(){
    	$data['pie_data']=$this->m_kepalasekolah->GetPie();
        $this->load->view('grafik.php',$data);
    }

 //    public function lihat_grafik(){
	// 		$data['list_data']=$this->m_kepalasekolah->get_nilai();
	// 		$data['content_view']="grafik.php";
	// 		$this->load->view('home',$data);
	// }

 public function lihat_grafik(){
			$data['list_data']=$this->m_kepalasekolah->get_rata_rata();
			$data['report'] = $this->m_kepalasekolah->get_rata_rata();
			$data['report_mapel'] = $this->m_kepalasekolah->report_total();
			$data['namakelas_data'] = $this->m_kepalasekolah->get_namakelas();
			$data['content_view']="grafik.php";
			$this->load->view('home',$data);
	}

	 public function lihat_grafik2(){
			$data['list_data']=$this->m_kepalasekolah->get_rata_rata2();
			$data['report'] = $this->m_kepalasekolah->get_rata_rata2();
			$data['report_mapel'] = $this->m_kepalasekolah->report_total();
			$data['namakelas_data'] = $this->m_kepalasekolah->get_namakelas();
			$data['content_view']="coba_grafik.php";
			$this->load->view('home',$data);
	}

	public function lihat_grafik_kelas(){
		
	}

	public function lihat_kelas(){
			$data['list_data']=$this->m_kepalasekolah->get_rata_rata_kelas();
			$data['report'] = $this->m_kepalasekolah->get_rata_rata_kelas();
			$data['report_mapel'] = $this->m_kepalasekolah->report_total();
			$data['namakelas_data'] = $this->m_kepalasekolah->get_namakelas();
			$data['content_view']="coba_grafik.php";
			$this->load->view('home',$data);
	}

	public function view_grafik()
	{
		$data['graph']=$this->m_kepalasekolah->graph();
		$data['content_view']="coba_grafik.php";
		$this->load->view('home', $data);
	}

	
	public function rank_kelas(){
		$data['list_data']=$this->m_kepalasekolah->rank_kelas();
		$data['content_view']="rank.php";
		$this->load->view('home',$data);
	}

	public function rank_per_kelas(){
		$data['list_data']=$this->m_kepalasekolah->rank_per_kelas();
		$data['content_view']="rank_perkelas.php";
		$this->load->view('home',$data);
	}

	public function rank(){
		$data['list_data']=$this->m_kepalasekolah->rank_per_kelas();
		$data['content_view']="rank.php";
		$this->load->view('home',$data);
	}
}
?>
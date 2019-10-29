<?php
	class C_walikelas extends CI_Controller{

		public function __construct(){
			parent::__construct();
			$this->load->model('m_walikelas');
		}

		public function index() {
			if ($this->session->userdata('status')) {
			
				$data['content_view']="view_home_wali.php";
				$data['username']=$this->session->userdata('username');
				$this->load->view('home_wali',$data);
			} else {
				redirect('c_login/index');
			}
		}


		public function lihat_siswa(){
			$data['list_data']=$this->m_walikelas->get_siswa();
			$data['content_view']="wali_viewsiswa.php";
			$this->load->view('home_wali',$data);
		}

	
}
?>
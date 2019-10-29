<?php
	class C_grafik extends CI_Controller{

		public function __construct()
	{
		parent::__construct();
		$this->load->model('M_grafik');
	}
 
	public function view_grafik()
	{
		//$data['graph']=$this->m_grafik->graph();
		$data['content_view']="coba_grafik.php";
		$data['report'] = $this->M_grafik->get_rata_rata();
		$this->load->view('home', $data);
	}

	public function view_grafik_mapel()
	{
		//$data['graph']=$this->m_grafik->graph();
		$data['content_view']="grafik_mapel.php";
		$data['report'] = $this->M_grafik->get_rata_rata();
		$data['mapel_all'] = $this->M_grafik->get_all();
		$data['mapel_ipa'] = $this->M_grafik->get_ipa();
		$data['mapel_ips'] = $this->M_grafik->get_ips();
		$data['mapel_pkn'] = $this->M_grafik->get_pkn();
		$data['namakelas_data'] = $this->M_grafik->get_namakelas();
		$this->load->view('home', $data);
	}

	
		
	// public function view_grafik2(){
	// 		//$data['list_data']=$this->m_kepalasekolah->get_nilai();
	// 		$data['content_view']="coba_grafik.php";
	// 		$this->load->view('home',$data);
	// }

}
?>
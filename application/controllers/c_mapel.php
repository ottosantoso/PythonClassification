<?php
	class C_mapel extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('m_mapel');
		}

		public function mapel() {
			$data['content_view']="mapel.php";
			$this->load->view('home',$data);
		}

		function insert_mapel(){
			$this->load->model('m_mapel');
			$query=$this->m_mapel->simpan();

			if (!$query) {
				$this->session->set_flashdata('notif', 
					'<div class="alert alert-danger alert-dismissible">
        				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                		<h4><i class="icon fa fa-ban"></i> Alert!</h4>
                		Data Sudah Ada
              		</div>'
					);
			} else {
				$this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
				                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				                <h4><i class="icon fa fa-check"></i> Data Berhasil Dimasukkan</h4>
				               </div>');
			}
			redirect('c_mapel/lihat_mapel');
		}
		public function lihat_mapel(){
			$data['list_data']=$this->m_mapel->get_mapel();
			$data['content_view']="view_mapel.php";
			$this->load->view('home',$data);
		}

		public function update_mapel(){
		$this->m_mapel->update_data_mapel();
		redirect('c_mapel/lihat_mapel');
		}

		public function tampilan_update_mapel(){
		$data['content_view']="update_mapel.php";
		$idmapel=$this->uri->segment(3);
		$data['list_data']=$this->m_mapel->select_mapel($idmapel);
		$this->load->view('home',$data);
		}

		public function delete_data_mapel($idmapel)
		{	
			$this->db->where('idmapel',$idmapel);
			$this->db->delete('mapel');
			redirect('c_mapel/lihat_mapel');
		}

		function hapus_mapel(){
			$data['content_view']="view_mapel.php";
			$idmapel=$this->uri->segment(3);
			$this->m_mapel->hapus_data_mapel($idmapel);
			redirect('c_mapel/lihat_mapel');
		}

		//Pengajar
		public function pengajar() {
			$data['content_view']="pengajar.php";
			$this->load->view('home',$data);
		}

		function insert_pengajar(){
			$this->load->model('m_mapel');
			$query=$this->m_mapel->simpan_pengajar();
			// if (!$query) {
			// 	$this->session->set_flashdata('notif', 
			// 		'<div class="alert alert-danger alert-dismissible">
   //      				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
   //              		<h4><i class="icon fa fa-ban"></i> Alert!</h4>
   //              		Data Sudah Ada
   //            		</div>'
			// 		);
			// } else {
			// 	$this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
			// 	                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			// 	                <h4><i class="icon fa fa-check"></i> Data Berhasil Dimasukkan</h4>
			// 	               </div>');
			// }
			redirect('c_mapel/lihat_pengajar');
		}
		public function lihat_pengajar(){
			$data['list_data']=$this->m_mapel->get_pengajar();
			$data['content_view']="view_pengajar.php";
			$this->load->view('home',$data);
		}

		public function update_pengajar(){
		$this->m_mapel->update_data_pengajar();
		redirect('c_mapel/lihat_pengajar');
		}

		public function tampilan_update_pengajar(){
		$data['content_view']="update_pengajar.php";
		$idpengajar=$this->uri->segment(3);
		$data['list_data']=$this->m_mapel->select_pengajar($idpengajar);
		$this->load->view('home',$data);
		}

		public function delete_data_pengajar($idpengajar)
		{	
			$this->db->where('idpengajar',$idpengajar);
			$this->db->delete('pengajar');
			redirect('c_mapel/lihat_pengajar');
		}

		function hapus_pengajar(){
			$data['content_view']="view_pengajar.php";
			$idpengajar=$this->uri->segment(3);
			$this->m_mapel->hapus_data_pengajar($idpengajar);
			redirect('c_mapel/lihat_pengajar');
		}
}
?>
<?php
	class C_kelassiswa extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('m_kelassiswa');
		}

		public function kelassiswa() {
			$data['content_view']="kelas_siswa.php";
			$this->load->view('home',$data);
		}
		function insert_kelassiswa(){
			//$this->load->model('m_kelassiswa');
			$query=$this->m_kelassiswa->simpan();
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
			redirect('c_kelassiswa/lihat_kelassiswa');
		}
		public function lihat_kelassiswa(){
			$data['list_data']=$this->m_kelassiswa->get_kelassiswa();
			$data['content_view']="view_kelassiswa.php";
			$this->load->view('home',$data);
		}

		public function view_siswa(){
		if($this->input->post('view')!=null){
	        $data['list_data']=$this->m_kelassiswa->view_siswa_where();
			$data['content_view']="view_kelassiswa.php";
			$this->load->view('home',$data);
    	}
    }
		public function update_kelassiswa(){
		$this->m_kelassiswa->update_data_kelassiswa();
		redirect('c_kelassiswa/lihat_kelassiswa');
		}

		public function tampilan_update_kelassiswa(){
		$data['content_view']="update_kelassiswa.php";
		$nis=$this->uri->segment(3);
		$data['list_data']=$this->m_kelassiswa->select_kelassiswa($nis);
		$this->load->view('home',$data);
		}

		public function delete_data_kelassiswa($nis)
		{	
			$this->db->where('nis',$nis);
			$this->db->delete('kelassiswa');
			redirect('c_kelassiswa/lihat_kelassiswa');
		}

		function hapus_kelassiswa(){
			$data['content_view']="view_kelassiswa.php";
			$nis=$this->uri->segment(3);
			$this->m_kelassiswa->hapus_data_kelassiswa($nis);
			redirect('c_kelassiswa/lihat_kelassiswa');
		}
}
?>
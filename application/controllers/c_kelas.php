<?php
	class C_kelas extends CI_Controller{
		public function __construct(){
			parent::__construct();
			$this->load->model('m_kelas');
		}

		public function kelas() {
			$data['content_view']="kelas.php";
			$this->load->view('home',$data);
		}
		function insert_kelas(){
			$this->load->model('m_kelas');
			$query= $this->m_kelas->simpan();
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
			redirect('c_kelas/lihat_kelas');
		}
		public function lihat_kelas(){
			$data['list_data']=$this->m_kelas->get_kelas();
			$data['content_view']="view_kelas.php";
			$this->load->view('home',$data);
		}

		public function update_kelas(){
		$this->m_kelas->update_data_kelas();
		redirect('c_kelas/lihat_kelas');
		}

		public function tampilan_update_kelas(){
		$data['content_view']="update_kelas.php";
		$nis=$this->uri->segment(3);
		$data['list_data']=$this->m_kelas->select_kelas($nis);
		$this->load->view('home',$data);
		}

		public function delete_data_kelas($nis)
		{	
			$this->db->where('nis',$nis);
			$this->db->delete('kelas');
			redirect('c_kelas/lihat_kelas');
		}

		function hapus_kelas(){
			$data['content_view']="view_kelas.php";
			$nis=$this->uri->segment(3);
			$this->m_kelas->hapus_data_kelas($nis);
			redirect('c_kelas/lihat_kelas');
		}

		public function view_siswa(){
		$data['content_view']="view_siswa_kelas.php";
		$idkelas=$this->uri->segment(3);
		$data['list_data']=$this->m_kelas->view_siswa_where($idkelas);
        //$data ['siswa'] = $this->m_cetak->view_siswa_where();
        $this->load->view('home', $data);
    }
}
?>
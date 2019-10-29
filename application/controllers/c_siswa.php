<?php
	class c_siswa extends CI_Controller{

		public function __construct(){
			parent::__construct(); 
			$this->load->library("PHPExcel");
			$this->load->model('m_siswa');
			
		}

		public function index() {
			$data['content_view']="siswa.php";
			$this->load->view('home',$data);
		}

		public function insert_siswa(){
			$query = $this->m_siswa->simpan_siswa();
			if (!$query) {
				$this->session->set_flashdata('notif', 
					'<div class="alert alert-warning alert-dismissible">
		                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
		                <h4><i class="icon fa fa-warning"></i> Alert!</h4>
		                Duplicate data
		              </div>'
					);
			} else {
				$this->session->set_flashdata('notif','<div class="alert alert-success alert-dismissible">
				                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				                <h4><i class="icon fa fa-check"></i> Data Berhasil Dimasukkan</h4>
				               </div>');
			}

			redirect('c_siswa/lihat_siswa');
		}

		public function lihat_siswa(){
			$data['list_data']=$this->m_siswa->get_siswa();
			$data['content_view']="view_siswa.php";
			$this->load->view('home',$data);
		}

		public function update_siswa(){
		$this->m_siswa->update_data_siswa();
		redirect('c_siswa/lihat_siswa');
		}

		public function tampilan_update_siswa(){
		$data['content_view']="update_siswa.php";
		$nis=$this->uri->segment(3);
		$data['list_data']=$this->m_siswa->select_siswa($nis);
		$this->load->view('home',$data);
		}

		public function delete_data_siswa($nis)
		{	
			$this->db->where('nis',$nis);
			$this->db->delete('siswa');
			redirect('c_siswa/lihat_siswa');
		}

		function hapus_siswa(){
			$data['content_view']="view_siswa.php";
			$nis=$this->uri->segment(3);
			$this->m_siswa->hapus_data_siswa($nis);
			redirect('c_siswa/lihat_siswa');
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
            $this->m_siswa->upload_data($filename);
            unlink('./assets/uploads/'.$filename);
            redirect('c_siswa/lihat_siswa','refresh');
        }
    }
}
?>
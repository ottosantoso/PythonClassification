<?php
	class C_admin extends CI_Controller{


		//Akses untuk halaman utama saat login
		public function __construct(){
			parent::__construct();
			$this->load->library("PHPExcel");
			//$this->load->helper(array('form','url'));
			$this->load->model('m_admin');
		}
		public function index() {
			if (!empty($this->session->userdata('username'))) {
			
				$data['content_view']="profile.php";
				$data['username']=$this->session->userdata('username');
				$this->load->view('home',$data);
			} else {
				redirect('c_login/index');
			}
		}

		public function tambah_guru(){
			$data['content_view']="tambahguru.php";
			$this->load->view('home',$data);
		}
		
		public function insert_guru(){
			$query= $this->m_admin->insert_guru();
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

			redirect('c_admin/lihat_guru');
		}

		public function lihat_guru(){
			$data['list_data']=$this->m_admin->get_guru();
			$data['content_view']="view_guru.php";
			$this->load->view('home',$data);
		}

	public function update_guru(){
		$this->m_admin->update_data_guru();
		redirect('c_admin/lihat_guru');
	}

	public function tampilan_update_guru(){
		$data['content_view']="update_guru.php";
		$nip=$this->uri->segment(3);
		$data['list_data']=$this->m_admin->select_guru($nip);
		$this->load->view('home',$data);
	}

	public function delete_data_guru($nip)
		{	
			$this->db->where('nip',$nip);
			$this->db->delete('guru');
			redirect('c_admin/lihat_guru');
		}

	function hapus_guru(){
			$data['content_view']="view_guru.php";
			$nip=$this->uri->segment(3);
			$this->m_admin->hapus_data_guru($nip);
			redirect('c_admin/lihat_guru');
	}

// Function Untuk Register User
/*	
	public function daftar(){
		$data['foto'] = $this->m_admin->register_user();
		$data['content_view']="register_user.php";
		$this->load->view('home',$data);	
	}
/*
	public function simpan_foto(){
		$data['foto'] = $this->m_admin->getFoto();
		$nmfile = "name".time();
		$config ['upload_path'] = './foto/';
		$config ['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
		$config ['max_size'] = '2048';
		$config ['max_width'] = '768';
		$config ['file_name'] = $nmfile;

		$this->load->libary('upload', $config);

		if ($this->upload->do_upload()){
			$gbr = $this->upload->data();
			$this->m_admin->insert($gbr['file_name']);
			redirect('c_admin/displaydata');
		}else{
			$error = array('error' => $this->upload->display_errors());
			echo $error;
		}
	}
*/
	public function daftar_user(){
		$data['content_view']="register_user.php";
		$this->load->view('home',$data);
	}

	function insert_user(){
			$this->load->model('m_admin');
			$this->m_admin->insert_user();
			redirect('c_admin/lihat_user');
		}

	public function lihat_user(){
		$data['list_data']=$this->m_admin->get_user();
		$data['content_view']="view_user.php";
		$this->load->view('home',$data);
	}

	public function update_user(){
		$this->m_admin->update_data_user();
		redirect('c_admin/lihat_user');
	}

	public function tampilan_update_user(){
		$data['content_view']="update_user.php";
		$idregister=$this->uri->segment(3);
		$data['list_data']=$this->m_admin->select_user($idregister);
		$this->load->view('home',$data);
	}

	public function delete_data_user($idregister)
		{	
			$this->db->where('idregister',$idregister);
			$this->db->delete('register');
			redirect('c_admin/lihat_user');
		}

	function hapus_user(){
			$data['content_view']="view_user.php";
			$idregister=$this->uri->segment(3);
			$this->m_admin->hapus_data_user($idregister);
			redirect('c_admin/lihat_user');
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
            $this->m_admin->upload_data($filename);
            unlink('./assets/uploads/'.$filename);
            redirect('c_admin/lihat_guru','refresh');
        }
    }
/*
	function _set_rules(){
		$rules['nip'] = 'trim|required|numeric';
		$rules['namaguru'] = 'trim|required';
		$rules['jeniskelamin'] = 'trim|required';
		$rules['agama'] = 'trim|required';
		$rules['alamat'] = 'trim|required';
		$rules['tempatlahir'] = 'trim|required';
		$rules['tanggallahir'] = 'trim|required';
		$rules['status'] = 'trim|required';
		$this->validation->set_rules($rules);
		$this->validation->set_message('required', '* harus diisi');
		$this->validation->set_message('numeric', '* hanya boleh diisi dengan angka');
		$this->validation->set_message('valid_email', '* email tidak valid');
		$this->validation->set_error_delimiters('<p>', '</p>');
		if ($this->form_validation->run() == FALSE) {
		$this->insert_guru();
		}else{
		$data = array(
			'nip'=>$this->input->post('nip'),
			'namaguru'=>$this->input->post('namaguru'),
			'jeniskelamin'=>$this->input->post('jeniskelamin'),
			'agama'=>$this->input->post('agama'),
			'alamat'=>$this->input->post('alamat'),
			'tempatlahir'=>$this->input->post('tempatlahir'),
			'tanggallahir'=>$this->input->post('tanggallahir'),
			'status'=>$this->input->post('status')
			);

		$this->m_admin->insert_guru($simpan);
}
	}
*/}
?>
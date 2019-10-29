<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class C_login extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->model('m_login');
		$this->load->database();
		$this->load->library('form_validation');
	}
	public function index(){
		$this->load->view('login_view.php');
	}

	public function check(){
		$login=$this->m_login->login();
		if($login == true){
			$data = array(
				'login' => true,
				'username' => $login->username,
				'namaguru' =>$login->namaguru,
				'statusadmin' => $login->statusadmin,
				'statusguru' => $login->statusguru,
				'statuswali' => $login->statuswali,
				'statuskepalasekolah' => $login->statuskepalasekolah
			);
				$this->session->set_userdata($data);
				if($data['statusadmin'] == 'Yes'){
					$this->session->userdata($data);
					redirect('c_admin/index');
				}
				else if($data['statusguru'] == 'Yes'){
					$this->session->userdata($data);
					redirect('c_guru/index');
				}
				else if($data['statuswali'] == 'Yes'){
					$this->session->userdata($data);
					redirect('c_admin/index');
				}
				else if($data['statuskepalasekolah'] == 'Yes'){
					$this->session->userdata($data);
					redirect('c_admin/index');
				}
		}
		else
		{
			$this->session->set_flashdata('Gagal','Username atau password salah');
			redirect('c_login/index');
			echo 'gagal';
		}
	}

		public function logout()
	{
		$this->session->sess_destroy();
		redirect('c_login');
	}
	
}
?>
<!--
	public function check(){
		$login=$this->m_login->login();
		if($login == true){
			$data = array(
				'login' => true,
				'username' => $login->username,
				'status' => $login->status,
				'nama' => $login->nama
			);
				$this->session->set_userdata($data);
				if($data['status'] == 'admin'){
					$this->session->userdata($data);
					redirect('c_admin/index');
				}
				else if($data['status'] == 'guru'){
					$this->session->userdata($data);
					redirect('c_guru/index');
				}
				else if($data['status'] == 'walikelas'){
					$this->session->userdata($data);
					redirect('c_walikelas/index');
				}
				else if($data['status'] == 'kepalasekolah'){
					$this->session->userdata($data);
					redirect('c_kepalasekolah/index');
				}
		}
		else
		{
			$this->session->set_flashdata('Gagal','Username atau password salah');
			redirect('c_login/index');
			echo 'gagal';
		}
	}
*/-->
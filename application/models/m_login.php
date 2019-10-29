<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

	class m_login extends CI_Model {
	
		public function __construct(){
			parent::__construct();
		}	
		/*
	public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->query("select * from user where username='$username' and password='$password'");
			if($query->num_rows() == 1){
				return $query->row();
			} else {
				return "";
			}
	}
	*/
		public function login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$query = $this->db->query(" select * from register r join guru g on r.idregister=g.nip where username='$username' and password='$password'");
			if($query->num_rows() == 1){
				return $query->row();
			} else {
				return "";
			}
	}


}
?>
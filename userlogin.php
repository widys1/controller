<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userlogin extends CI_Controller {

function __construct(){
	parent:: __construct();
$this->load->model('m_userlogin');
	
}
	public function index()
		{
		if ($this->session->userdata('isLogin') == TRUE) {
			redirect('akun_user');
		} else{
			$this->template->load('index','userlogin');
		}
	}

	
	function user_log(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$cek_user = $this -> m_userlogin-> cek_userlogin($username, $password);
			if(count($cek_user) == 1 ){
				$this->session->set_userdata(array(
				'isLogin'	=> TRUE,
				'username'	=> $username,
			));
				redirect('akun_user');
			}else{
					$this->session->set_flashdata('gagallogin','Maaf, username atau password yang anda masukkan salah.');
					$this->template->load('index','userlogin');
				}
			}
}

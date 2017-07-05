<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller {

	function __construct(){
		parent:: __construct();
		$this->load->model('model_insert');
		$this->load->helper('url');
	}
	public function index()
	{
		$this->template->load('index','signup');
	}

	function tambah_aksi(){
		$fullname = $this->input->post('fullname');
		$username = $this->input->post('username');
		$e_mail = $this->input->post('e_mail');
		$password = $this->input->post('password');
		$jenis_kel = $this->input->post('gender');
		$phone_number = $this->input->post('phone');
		$address = $this->input->post('address');
 
		$data = array(
			'fullname' => $fullname,
			'username' => $username,
			'e_mail' => $e_mail,
			'password' => $password,
			'jenis_kel' => $jenis_kel,
			'phone_number' => $phone_number,
			'address' => $address,
			);
		
		$this->model_insert->input_data($data,'customer');
		redirect('akun_user');
	}
}
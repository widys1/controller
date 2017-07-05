<?php
defined('BASEPATH') OR exit('No direct script access allowed');


class Dashboard extends CI_Controller {

function __construct(){
	parent:: __construct();
	//$this->load->model('m_about');

}
	public function index()
	{
		if($this->session->userdata('isLogin') == TRUE) {
			$this->template->load('admin/static','admin/dashboard');
		}else{
			redirect('login');
		}
	}
}
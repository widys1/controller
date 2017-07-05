<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashuser extends CI_Controller {


function __construct(){
	parent:: __construct();
	//$this->load->model('m_about');

}
	public function index()
	{
			$this->template->load('akun_user/static-user','akun_user/dashuser');

		
	}
}
	
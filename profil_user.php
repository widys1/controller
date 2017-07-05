<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profil_user extends CI_Controller {
	
	public function index()
	 {
		$this->template->load('akun_user/static-user','akun_user/profil_user');
	}
}
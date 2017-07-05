<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Datapel extends CI_Controller {

	function __construct(){
				parent::__construct();		
				$this->load->model('m_crud');
				$this->load->helper('url');
 
	}

	public function index()
	{
	
        $data['pelanggan'] = $this->m_crud->getSemua('customer');
		$this->template->load('admin/static','admin/datapel', $data);
	}
} 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dataharga extends CI_Controller {

	function __construct(){
				parent::__construct();		
				$this->load->model('m_crud');
				$this->load->helper('url');
 
	}

	public function index()
	{
	
        $data['namalaundry'] = $this->m_crud->getSemua('laundry_type');
		$this->template->load('admin/static','admin/dataharga', $data);
	}
} 
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_validator extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_validator');
    }

 //    

	public function view_validator(){		
		$data['users'] = $this->m_validator->getAllUser()->result();
		$this->load->view('template/header');
		$this->load->view('admin/view_validator',$data);
		$this->load->view('template/footer');	
	}
	


}

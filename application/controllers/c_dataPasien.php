<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_dataPasien extends CI_Controller {
	public function __construct() {
        parent::__construct(); 
        $this->load->model('m_pasien');
		              
    }

    function inputPasien(){
	
	 	
        $this->load->view('template/header');
		$this->load->view('admin/input_pasien');
		$this->load->view('template/footer');
    }  
    function addPasien(){
    	date_default_timezone_set("Asia/Jakarta");
         $tanggal = date('Y-m-d h:i:s');
		// $hak_akses = $this->input->post('hak_akses');
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$contact = $this->input->post('contact');
		$email = $this->input->post('email');
		$pekerjaan = $this->input->post('pekerjaan');
		$umur = $this->input->post('umur');
		$keluhan = $this->input->post('keluhan');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		
		$data = array(
			'status' =>'aktif',
			'hak_akses' =>'pasien',
			'nama' => $nama,
			'alamat' => $alamat,
			'contact' => $contact,
			'pekerjaan ' => $pekerjaan ,
			'umur' => $umur ,
			'keluhan' => $keluhan,
			'username' => $username,
			'password' => $password,
			'tanggal' => date('Y-m-d h:i:s')
			);
		$this->m_pasien->insert_pasien($data,'pasien');
		redirect('c_user/kelola_pasien');
	}
	
}

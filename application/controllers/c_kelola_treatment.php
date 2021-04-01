<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_kelola_treatment extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_user'); 
        $this->load->model('m_pasien');
        $this->load->model('m_treatment');
		              
    }

	public function kelola_treatment(){
		$data ['treatment'] = $this->m_treatment->getDatabyJoin('tb_treatment');
		$this->load->view('template/header');
		 $this->load->view('admin/view_treatment',$data);		
		$this->load->view('template/footer');
	}

	public function inputTreatment(){
		$data['kategori'] = $this->m_treatment->getDataKategori('tb_kategori_treatment');
		$this->load->view('template/header');
		$this->load->view('admin/input_treatment',$data);
		$this->load->view('template/footer');
	}

	public function simpanTreatment(){
		$namaTreatment = $this->input->post('nama_treatment');
		$id_kategori_treatment = $this->input->post('id_kategori_treatment');
		$harga = $this->input->post('harga');

		$data = array(
			'nama_treatment' =>$namaTreatment,
			'id_kategori_treatment' => $id_kategori_treatment,
			'harga' => $harga
			);
		$this->m_treatment->insert($data,'tb_treatment');
		redirect('c_kelola_treatment/kelola_treatment');

	}

	public function editTreatment($id){
		$where = array('id' => $id);
		$data['data'] = $this->m_treatment->detail($where,'tb_treatment')->result();
		$data['kategori'] = $this->m_treatment->getDataKategori('tb_kategori_treatment');
		$this->load->view('template/header');
		$this->load->view('admin/edit_treatment',$data);
		$this->load->view('template/footer');
	}

	public function updateTreatment($id){
		$namaTreatment = $this->input->post('nama_treatment');
		$id_kategori_treatment = $this->input->post('id_kategori_treatment');
		$harga = $this->input->post('harga');

		$data = array(
			'nama_treatment' =>$namaTreatment,
			'id_kategori_treatment' => $id_kategori_treatment,
			'harga' => $harga
			);

		$where=array(
			'id'=>$id
			);

		$this->m_treatment->update($where,$data,'tb_treatment');
		redirect('c_kelola_treatment/kelola_treatment');

	}

	public function deleteTreatment($id){
	$where = array('id' => $id);
    $this->m_treatment->delete('tb_treatment',$where);
     redirect('c_kelola_treatment/kelola_treatment','refresh');
	}

	

public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}

}

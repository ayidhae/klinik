<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pemesanan extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_pemesanan'); 
		              
    }

 //    

 public function kelola_pemesanan(){
    // $data ['pemesanan'] = $this->m_pemesanan->getDatabyJoin('tb_pemesanan');
    $this->load->view('template/header');
    $this->load->view('admin/view_pemesanan');		
    $this->load->view('template/footer');
}

public function input_pemesanan(){
    // $data['kategori'] = $this->m_pemesanan->getDataKategori('tb_kategori_pemesanan');
    $this->load->view('template/header');
    $this->load->view('admin/input_pemesanan');
    $this->load->view('template/footer');
}

public function simpan_pemesanan(){
    $namapemesanan = $this->input->post('nama_pemesanan');
    $id_kategori_pemesanan = $this->input->post('id_kategori_pemesanan');
    $harga = $this->input->post('harga');

    $data = array(
        'nama_pemesanan' =>$namapemesanan,
        'id_kategori_pemesanan' => $id_kategori_pemesanan,
        'harga' => $harga
        );
    $this->m_pemesanan->insert($data,'tb_pemesanan');
    redirect('c_kelola_pemesanan/kelola_pemesanan');

}

public function edit_pemesanan($id){
    $where = array('id' => $id);
    $data['data'] = $this->m_pemesanan->detail($where,'tb_pemesanan')->result();
    $data['kategori'] = $this->m_pemesanan->getDataKategori('tb_kategori_pemesanan');
    $this->load->view('template/header');
    $this->load->view('admin/edit_pemesanan',$data);
    $this->load->view('template/footer');
}

public function update_pemesanan($id){
    $namapemesanan = $this->input->post('nama_pemesanan');
    $id_kategori_pemesanan = $this->input->post('id_kategori_pemesanan');
    $harga = $this->input->post('harga');

    $data = array(
        'nama_pemesanan' =>$namapemesanan,
        'id_kategori_pemesanan' => $id_kategori_pemesanan,
        'harga' => $harga
        );

    $where=array(
        'id'=>$id
        );

    $this->m_pemesanan->update($where,$data,'tb_pemesanan');
    redirect('c_kelola_pemesanan/kelola_pemesanan');

}

public function delete_pemesanan($id){
$where = array('id' => $id);
$this->m_pemesanan->delete('tb_pemesanan',$where);
 redirect('c_kelola_pemesanan/kelola_pemesanan','refresh');
}



public function keluar()
{
    $this->session->sess_destroy();
    redirect('Home');
}

}

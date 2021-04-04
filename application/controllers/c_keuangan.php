<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_keuangan extends CI_Controller {
  public function __construct() {
        parent::__construct();
        $this->load->model('m_keuangan'); 
      
                  
    }

 //    
  // public function viewKeuangan(){    
  //   $data['keuangan'] = $this->m_keuangan->getAllKeuangan()->result();
  //   $this->load->view('template/header');
  //   $this->load->view('admin/keuangan',$data);
  //   $this->load->view('template/footer'); 
  // }
    
    
  

function inputKeuangan(){
  
    $data['keuangan'] = $this->m_keuangan->getAllKeuangan();
    $this->load->view('template/header');
    $this->load->view('admin/keuangan',$data);
    $this->load->view('template/footer');
    }  
    function addKeuangan(){
      date_default_timezone_set("Asia/Jakarta");
    $tanggal = date('Y-m-d h:i:s');
    $id_keuangan = $this->m_keuangan->getIdKeuangan();
    $pendapatan = $this->input->post('pendapatan');
    $pengeluaran = $this->input->post('pengeluaran');
    $jumlah_pendapatan = $this->input->post('jumlah_pendapatan');
    $jumlah_pengeluaran = $this->input->post('jumlah_pengeluaran');
   
    
    $data = array(
      
      'id_keuangan' => $id_keuangan,
      'pendapatan' => $pendapatan,
      'pengeluaran' => $pengeluaran,
      'jumlah_pendapatan ' => $jumlah_pendapatan ,
      'jumlah_pengeluaran' => $jumlah_pengeluaran ,
      'tanggal' => date('Y-m-d h:i:s')
      );
    $this->m_keuangan->insert_keuangan($data,'keuangan');
    redirect('c_keuangan/inputKeuangan');
  }
   public function edit_keuangan($id_keuangan){
		$where = array('id_keuangan' => $id_keuangan);
	  $data['keuangan'] = $this->m_keuangan->detail($where,'keuangan')->result();
		$this->load->view('template/header');
		$this->load->view('admin/edit_keuangan');
		$this->load->view('template/footer');
   }
   public function update_Keuangan($id_keuangan){
		$pendapatan = $this->input->post('pendapatan');
		$pengeluaran = $this->input->post('pengeluaran');
		$jumlah_pendapatan = $this->input->post('jumlah-pendapatan');
		$jumlah_pengeluaran = $this->input->post('jumlah_pengeluaran');
		$data=array(
			'pendapatan' => $pendapatan,
			'pengeluaran' => $pengeluaran,
			'jumlah_pendapatan ' => $jumlah_pendapatan,
			'jumlah_pengeluaran' => $jumlah_pengeluaran 
    );
		$where=array(
			'id_keuangan'=>$id_keuangan
			);
		$this->m_keuangan->updateKeuangan($where,$data,'keuangan');
		redirect(base_url('c_keuangan/inputKeuangan'));
   }

<<<<<<< HEAD
   function edit_keuangan($id_keuangan)
	 {
	  $id_keuangan = base64_decode($id_keuangan);	

      $where = array('id_keuangan' => $id_keuangan);
   $data['keuangan'] = $this->m_keuangan->detail($where,'keuangan')->result();				

  // $data["keuangan"]= $this->m_keuangan->edit("keuangan","id_keuangan='".$id_keuangan."'");    
   
	 $this->load->view('template/header');
		$this->load->view('admin/edit_keuangan1',$data);
	 	$this->load->view('template/footer'); 
	 }
  


  //  function edit(){
  //   $this->form_validation->set_rules('id_keuangan','required|alpha_numeric_spaces');
  //   if ($this->form_validation->run() == TRUE){
  //     $data['id_keuangan'] = $this->input->post('id-keuangan');
  //     // $data["nama_pengadaan"] 	= $this->input->post('nama_pengadaan');
  //     $this->m_keuangan->update('keuangan',$data,'id_keuangan');
  //     $this->session->set_flashdata('msg','<div class="alert alert-success text-center"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times; </a>Data Pesanan berhasil diubah</div>');
  //     redirect('c_keuangan/viewKeuangan');		
  //   }else{
  //     $this->session->set_flashdata('msg','<div class="alert alert-danger text-center"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times; </a>Data pesanan gagal diubah</div>');
  //     redirect('c_keuangan/viewKeuangan');
  //   }
    
  // }
  public function edit($id_keuangan){ 
     $id_keuangan = $this->m_keuangan->getIdKeuangan();
    $pendapatan = $this->input->post('pendapatan');
    $pengeluaran = $this->input->post('pengeluaran');
    $jumlah_pendapatan = $this->input->post('jumlah_pendapatan');
    $jumlah_pengeluaran = $this->input->post('jumlah_pengeluaran');
    $data = array(
      
      'id_keuangan' => $id_keuangan,
      'pendapatan' => $pendapatan,
      'pengeluaran' => $pengeluaran,
      'jumlah_pendapatan ' => $jumlah_pendapatan ,
      'jumlah_pengeluaran' => $jumlah_pengeluaran ,
      'tanggal' => date('Y-m-d h:i:s')
      );
    $where=array(
      'id_keuangan'=>$id_keuangan
      );
    $this->m_keuangan->updateKeuangan($where,$data,'keuangan');
    redirect(base_url('c_keuangan/inputKeuangan'));   
  }
=======
   public function hapus_keuangan(){
    $where = array('id_keuangan' => $id_keuangan);
      $this->m_keuangan->delete('keuangan',$where);
       redirect('c_keuangan/inputKeuangan');
    }

}
    

>>>>>>> fd77b8bb2ee1e1672b1cdf021dc3ec7efc1fb514
  


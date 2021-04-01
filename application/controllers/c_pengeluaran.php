<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pengeluaran extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_pendapatan');
		
	}
		 //call model
	// public function home(){
	// 	$this->load->view('template/header'); // default template
	// 	$this->load->view('logistik/dashboard'); // dashboard vendornya
	// 	$this->load->view('template/footer'); 
	// }

	public function viewPengeluaran(){
	
	 	$data ['pendapatan'] = $this->m_pendapatan->getAllpendapatan()->result();
	 	$this->load->view('template/header');
		$this->load->view('admin/view_pengeluaran',$data);
		$this->load->view('template/footer'); 
	 }
	 function inputPengeluaran(){
		$this->load->view('template/header');
		$this->load->view('admin/input_pengeluaran');
		$this->load->view('template/footer');
	}  
 
	function addPengeluaran(){
	 $Kode = $this->input->post('kode');
	 $Tanggal = $this->input->post('tanggal');
	 $Pengeluaran = $this->input->post('pengeluaran');
	 $Jumlah = $this->input->post('jumlah');
	 $data = array(
		 'kode' => $Kode,
		 'Tanggal' => $Tanggal,
		 'Pengeluaran' => $Pengeluaran,
		 'jumlah' => $Jumlah
		 );
	 $this->m_pendapatan->insert_pendapatan($data,'pendapatan');
	 redirect('c_pengeluaran/viewPengeluaran');
 }
 public function edit_penegeluaran($Kode){
	$where = array('Kode' => $Kode);
	$data['pendapatan'] = $this->m_pendapatan->detail($where,'pendapatan')->result();
	$this->load->view('template/header');
	$this->load->view('admin/edit_pengeluaran',$data);
	$this->load->view('template/footer');
}

public function update_penegeluaran($Kode){	
	// $Id = $this->input->post('Id');
	$Kode = $this->input->post('kode');
	$Tanggal = $this->input->post('tanggal');
	$Pengeluaran = $this->input->post('Pengeluaran');
	$Jumlah = $this->input->post('jumlah');
	$data = array(
		// 'id' => $Id,
		'kode' => $Kode,
		'tanggal' => $Tanggal,
		'Pengeluaran' => $Pengeluaran,
		'jumlah' => $Jumlah
		);
	$where=array(
		'kode'=>$Kode
		);
	$this->m_pendapatan->updatePengeluaran($where,$data,'pendapatan');
	redirect(base_url('c_pengeluaran/viewPengeluaran'));		
}
}
// 	public function viewProgress_direktur(){
// 		$data ['progress'] = $this->m_progress->viewProgress()->result();
// 	 	$this->load->view('template/header');
// 	 	$this->load->view('direktur/view_progress_direct',$data);
// 	$this->load->view('template/footer'); 
// 	 }


	
// 	 function input(){
// 	  // $data = array(
// 			//  	'username' => $this->m_progress->ambilDataNamaCustomer(),
// 			//  	'nama_perusahaan' => $this->m_progress->ambilDataNamaVendor()
				
// 			//  );
// 			$data['mdraft']	= $this->db->query('select * from pesanan order by pesanan_id ASC');
	 	
//          $this->load->view('template/header');
// 		$this->load->view('logistik/input_progress',$data);
// 		$this->load->view('template/footer');
//     }  
// 	function inputProgress(){
// 		 $id_progress = $this->m_progress->getIdProgress();
// 		 $pesanan_id = $this->input->post('pesanan_id');
//          $customer = $this->input->post('nama_customer');
//          $vendor = $this->input->post('nama_vendor');
//         $progress      = $this->input->post('progress');
//         $kendala     = $this->input->post('kendala');   
        
//         $data = array(
//          'id_progress' => $id_progress,
//          'pesanan_id' => $pesanan_id,
       
//         	'tanggal' => date('Y-m-d'),
//         'nama_customer' => $customer,
//         'nama_vendor' =>$vendor,
//         'progress'      =>$progress,
//         'kendala'     =>$kendala,
//        'username' => $this->session->userdata('username')
//         );
//         $this->m_progress->inputProgress($data, 'progress_pengadaan');
//         var_dump( $this->m_progress->inputProgresss);
//         redirect('c_progress/viewProgress');   
//        }




//        public function edit($id_progress){
// 		$where = array('id_progress' => $id_progress);
// 		$data['progress'] = $this->m_progress->edit_data($where,'progress_pengadaan')->result();
// 		$this->load->view('template/header');
// 		$this->load->view('logistik/edit_progress',$data);
// 		$this->load->view('template/footer');
// 	}
	
// 	public function updateProgress($id_progress){	
// 		$progress=$this->input->post('progress');
// 		$kendala=$this->input->post('kendala');

// 		$data=array(
// 			'progress' => $progress,
// 			'kendala'=>$kendala
// 			);
// 		$where=array(
// 			'id_progress' => $id_progress
// 			);
// 		$this->m_progress->update_progress($where,$data,'progress_pengadaan');
	
// 		     redirect('c_progress/viewProgress');
// 	}

// 	function hapusProgress($id_progress){
//         $where=array('id_progress' => $id_progress);
//         $this->m_progress->delete($where,'progress_pengadaan');
//         redirect('c_progress/viewProgress');
//         }




//    public function cetak() {
	
// 		$tgl_start		= $this->input->post('tgl_start');
// 		$tgl_end		= $this->input->post('tgl_end');
		
// 		$data['tgl_start']	= $tgl_start;
// 		$data['tgl_end']	= $tgl_end;		
 	
// 		$data['progress']	= $this->db->query("SELECT * FROM progress_pengadaan WHERE tanggal >= '$tgl_start' AND tanggal <= '$tgl_end' ORDER BY id_progress")->result(); 
		
// 			$this->load->view('direktur/vcetaklaporan', $data);
		 
// 	}	
	
	
//  public function keluar()
// 	{
// 		$this->session->sess_destroy();
// 		redirect('Home');
// 	}


<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_user extends CI_Controller {
	public function __construct() {
        parent::__construct();
        $this->load->model('m_user'); 
        $this->load->model('m_pasien');
		              
    }

 //    


	public function homeAdmin(){
		// $data['barang'] = $this->m_barang->getAllBarang('barang');
		$this->load->view('template/header');
		 $this->load->view('admin/view_treatment');		
		$this->load->view('template/footer');
	}
	
	public function kelola_user(){		
		$data['user'] = $this->m_user->getAllUser()->result();
		$data['pasien'] = $this->m_pasien->getAllPasien()->result();	
		$this->load->view('template/header');
		$this->load->view('admin/kelola_user',$data);
		$this->load->view('template/footer');	
	}
		public function kelola_pasien(){		
		$data['pasien'] = $this->m_pasien->getAllPasien()->result();	
		$this->load->view('template/header');
		$this->load->view('admin/kelola_pasien',$data);
		$this->load->view('template/footer');	
	}


function inputUser(){
	
	 	
        $this->load->view('template/header');
		$this->load->view('admin/input_user');
		$this->load->view('template/footer');
    }  
    function addUser(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hak_akses = $this->input->post('hak_akses');
 		$nama = $this->input->post('nama');
 		$no_hp = $this->input->post('no_hp');
		$data = array(
			'username' => $username,
			'password' => $password,
			'hak_akses' => $hak_akses,
			'nama' => $nama,
			'no_hp' => $no_hp
			);
		$this->m_user->insert_user($data,'user');
		redirect('c_user/kelola_user');
	}
	public function edit_user($username){
		$where = array('username' => $username);
		$data['user'] = $this->m_user->detail($where,'user')->result();
	
		$this->load->view('template/header');
		$this->load->view('admin/edit_user',$data);
		$this->load->view('template/footer');
	}

	public function update_user($username){	
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$hak_akses = $this->input->post('hak_akses');
 		$nama = $this->input->post('nama');
 		$no_hp = $this->input->post('no_hp');
		$data = array(
			'username' => $username,
			'password' => $password,
			'hak_akses' => $hak_akses,
			'nama' => $nama,
			'no_hp' => $no_hp
			);
		$where=array(
			'username'=>$username
			);
		$this->m_user->updateProfile($where,$data,'user');
		redirect(base_url('c_user/kelola_user'));		
	}
		public function edit_pasien($username){
		$where = array('username' => $username);
		$data['pasien'] = $this->m_pasien->detail($where,'pasien')->result();
		$this->load->view('template/header');
		$this->load->view('admin/edit_pasien',$data);
		$this->load->view('template/footer');
	}
		public function update_pasien($username){
		$nama = $this->input->post('nama');
		$alamat = $this->input->post('alamat');
		$contact = $this->input->post('contact');
		$email = $this->input->post('email');
		$pekerjaan = $this->input->post('pekerjaan');
		$umur = $this->input->post('umur');
		$keluhan = $this->input->post('keluhan');
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$status=$this->input->post('status');
		$data=array(
			'nama' => $nama,
			'alamat' => $alamat,
			'contact' => $contact,
			'pekerjaan ' => $pekerjaan ,
			'umur' => $umur ,
			'email' => $email ,
			'keluhan' => $keluhan,
			'username' => $username,
			'password' => $password,
			'status'=>$status
			);
		$where=array(
			'username'=>$username
			);
		$this->m_pasien->updatePasien($where,$data,'pasien');
		redirect(base_url('c_user/kelola_pasien'));		
	}
	//untuk direktur
	public function viewProfil(){
		$where = array('username' => $this->session->userdata('username'));
		$data['profil'] = $this->m_user->getUser($where,'user')->result();	
		$this->load->view('template/header');
		$this->load->view('direktur/profileDirektur',$data);
		$this->load->view('template/footer');		
	}

	//untuk direktur
	function updateProfil(){
			$this->form_validation->set_rules('nama', 'Nama ','required|alpha_numeric_spaces');
			$this->form_validation->set_rules('username', 'Username','required|alpha_numeric_spaces');

			if($this->form_validation->run() == TRUE) {
			$nama=$this->input->post('nama');
			$username=$this->input->post('username');			

			$data=array(
                'nama'=>$nama,
                'username'=>$username              
				);

			$where=array(
			     'username'=>$this->session->userdata('username')
			  );  
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times; </a>Data Profil berhasil diubah</div>');
			$this->m_user->updateProfile($where,$data,'user');  			
			$this->viewProfil();
		} else {
			$this->viewProfil();
		}
	}
	//untuk direktur
	public function update_password_direktur(){
		$this->form_validation->set_rules('curr_password', 'current password','required|alpha_numeric');
		$this->form_validation->set_rules('new_password', 'new password','required|alpha_numeric');
		$this->form_validation->set_rules('conf_password', 'confirm password','required|alpha_numeric');
		if($this->form_validation->run()){
			$curr_password = $this->input->post('curr_password');
			$new_password = $this->input->post('new_password');
			$conf_password = $this->input->post('conf_password');			
			$uname = $this->session->userdata('username');
			$data= $this->m_user->getCurrentpass($uname);					
				if($data->password == ($curr_password)) {			
					if($new_password == $conf_password ){
						if($this->m_user->update_password($new_password, $uname)){						
							?>
	                    		 <script type=text/javascript>alert("update sukses!");</script>
	        				<?php
		        			$this->load->view('template/header');
							$this->viewProfil();							
						}else{						
							?>
	                    		 <script type=text/javascript>alert("Gagal update password!");</script>
	        				<?php	    
							$this->viewProfil();
						}
					}else{
						?>
	                     <script type=text/javascript>alert("password baru dan confirm password tidak cocok!");</script>
	        			<?php
						$this->viewProfil();
					}
				}else{
					?>
                     <script type=text/javascript>alert("password lama yang anda masukan salah!");</script>
        			<?php
					$this->viewProfil();
				}				
		}else{
			$this->load->view('direktur/kelola_profil');
		}
	}

	//untuk logistik
	public function viewProfile(){
		$where = array('username' => $this->session->userdata('username'));
		$data['profil'] = $this->m_user->getUser($where,'user')->result();	
		$this->load->view('template/header');
		$this->load->view('logistik/kelola_profil',$data);
		$this->load->view('template/footer');		
	}

	//untuk logistik
	function updateProfile(){
			$this->form_validation->set_rules('nama', 'Nama ','required|alpha_numeric_spaces');
			$this->form_validation->set_rules('username', 'Username','required|alpha_numeric_spaces');

			if($this->form_validation->run() == TRUE) {
			$nama=$this->input->post('nama');
			$username=$this->input->post('username');			

			$data=array(
                'nama'=>$nama,
                'username'=>$username              
				);

			$where=array(
			     'username'=>$this->session->userdata('username')
			  );  
			$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times; </a>Data Profil berhasil diubah</div>');
			$this->m_user->updateProfile($where,$data,'user');  			
			$this->viewProfile();
		} else {
			$this->viewProfile();
		}
	}

	//untuk logistik
	public function update_password(){
		$this->form_validation->set_rules('curr_password', 'current password','required|alpha_numeric');
		$this->form_validation->set_rules('new_password', 'new password','required|alpha_numeric');
		$this->form_validation->set_rules('conf_password', 'confirm password','required|alpha_numeric');
		if($this->form_validation->run()){
			$curr_password = $this->input->post('curr_password');
			$new_password = $this->input->post('new_password');
			$conf_password = $this->input->post('conf_password');			
			$uname = $this->session->userdata('username');
			$data= $this->m_user->getCurrentpass($uname);					
				if($data->password == ($curr_password)) {			
					if($new_password == $conf_password ){
						if($this->m_user->update_password($new_password, $uname)){						
							?>
	                    		 <script type=text/javascript>alert("update sukses!");</script>
	        				<?php
		        			$this->load->view('template/header');
							$this->viewProfile();							
						}else{						
							?>
	                    		 <script type=text/javascript>alert("Gagal update password!");</script>
	        				<?php	    
							$this->viewProfile();
						}
					}else{
						?>
	                     <script type=text/javascript>alert("password baru dan confirm password tidak cocok!");</script>
	        			<?php
						$this->viewProfile();
					}
				}else{
					?>
                     <script type=text/javascript>alert("password lama yang anda masukan salah!");</script>
        			<?php
					$this->viewProfile();
				}				
		}else{
			$this->load->view('logistik/kelola_profil');
		}
	}
	

public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}

}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class c_pasien extends CI_Controller {
	function __construct(){
		parent::__construct();
		$this->load->model('m_pasien');
		
	
	}
		 //call model
	public function home(){
		$where = array('status' => 'aktif');
		// $data['barang'] = $this->m_barang->getBarang($where,'barang')->result();
		$this->load->view('template/header'); // default template
		$this->load->view('pasien/dashboard'); // dashboard vendornya
		$this->load->view('template/footer'); 
	}


// kelola user
	public function detail_user($username){
		$where = array('username' => $username);
		$data['customer'] = $this->m_customer->detail($where,'customer')->result();
		$this->load->view('template/header');
		$this->load->view('logistik/detail_customer',$data);
		$this->load->view('template/footer');
	}

//kelola user
	public function edit_user($username){
		$where = array('username' => $username);
		$data['user'] = $this->m_customer->detail($where,'customer')->result();
		$this->load->view('template/header');
		$this->load->view('logistik/edit_customer',$data);
		$this->load->view('template/footer');
	}
	//kelola user

	public function update_user($username){
		$status=$this->input->post('status');
		$data=array(
			'status'=>$status
			);
		$where=array(
			'username'=>$username
			);
		$this->m_customer->updateProfile($where,$data,'customer');
		redirect(base_url('c_user/kelola_user'));		
	}
//kelola user
	function delete_user($username){
		$where=array(
            'username'=>$username
		);
		$this->m_customer->delete_user($where,'customer');
		redirect('c_user/kelola_user');
	}
  	
  	public function add(){		
		$this->load->view('pasien/registrasiPasien');
	}

//diatas untuk kelola user
	
	public function registrasiPasien(){
		$this->form_validation->set_rules('email', 'Email','required|valid_email');
		$this->form_validation->set_rules('contact', 'Contact','required|numeric');

	if ($this->form_validation->run() == TRUE){
		$dataPasienAda=$this->m_pasien->check_regis($this->input->post('username'));
		if($dataPasienAda->num_rows() == 1){
			?>
                <script type=text/javascript>alert("Username sudah ada");</script>

        	<?php
        	$this->load->view('pasien/registrasiPasien');
		}
		else { 

		       			  date_default_timezone_set("Asia/Jakarta");	        
		       		$data = array(
						
                         'tanggal' => date('Y-m-d h:i:s'),
						  'hak_akses' =>'pasien',
						 'nama' =>$this->input->post('nama'),
						  'alamat' => $this->input->post('alamat'),
						  'contact' => $this->input->post('contact'),
						  'email' => $this->input->post('email'),
						  'pekerjaan' => $this->input->post('pekerjaan'),
						  'username' => $this->input->post('username'),
						  'umur' => $this->input->post('umur'),
						'username' => $this->input->post('username'),
		                'password' => $this->input->post('password'),
						  'status' =>'aktif'
						);			

		 			$this->m_pasien->insert_pasien($data); 
		 				$this->session->set_flashdata('msg','<div class="alert alert-success text-center"> <a href="" class="close" data-dismiss="alert" aria-label="close">&times; </a>Registrasi berhasil</div>');
		 				 redirect('c_login/index');
		 			//$this->load->view('utama/v_login');		 			
		        
		       
			//$this->load->view('utama/footer');
			}
		} else {
			$this->load->view('pasien/registrasiPasien');
		}
	}

 public function viewProfile(){
		$data['profile'] = $this->m_customer->profileCustomer($this->session->userdata('username'));
		$this->load->view('template/header');
 	    $this->load->view('customer/kelola_profile',$data); 
 	    $this->load->view('template/footer');

    }

 

    function updateProfile(){

			$this->form_validation->set_rules('email', 'Email','required|valid_email');
		    $this->form_validation->set_rules('contact', 'Contact','required|numeric');
			$nama_perusahaan=$this->input->post('nama_perusahaan');
			$alamat_perusahaan=$this->input->post('alamat_perusahaan');
			if($this->form_validation->run() == TRUE) {
			$email=$this->input->post('email');
			$contact=$this->input->post('contact');			

			$data=array(
                'nama_perusahaan'=>$nama_perusahaan,
                'alamat_perusahaan'=>$alamat_perusahaan,
                'email'=>$email,
                'contact'=>$contact                
				);

			$where=array(
			     'username'=>$this->session->userdata('username')
			  );  
			$this->m_customer->updateProfile($where,$data,'customer');  		
			$this->viewProfile();
		} else {
			$this->viewProfile();
		}
	}

	// public function form_update(){
	// 	$this->load->view('template/header');
	// 	$this->load->view('customer/kelola_profile');
	// 	$this->load->view('template/footer');
	// }

	public function updatePassword(){
		$this->form_validation->set_rules('curr_password', 'current password','required|alpha_numeric');
		$this->form_validation->set_rules('new_password', 'new password','required|alpha_numeric');
		$this->form_validation->set_rules('conf_password', 'confirm password','required|alpha_numeric');
		if($this->form_validation->run()){
			$curr_password = $this->input->post('curr_password');
			$new_password = $this->input->post('new_password');
			$conf_password = $this->input->post('conf_password');			
			$uname = $this->session->userdata('username');
			$data= $this->m_customer->getCurrentpass($uname);					
				if($data->password == md5($curr_password)) {			
					if($new_password == $conf_password ){
						if($this->m_customer->update_password($new_password, $uname)){						
							?>
	                    		 <script type=text/javascript>alert("update sukses!");</script>
	        				<?php
		        			$this->load->view('template/header');
							
							$this->viewProfile();
						}else{						
							?>
	                    		 <script type=text/javascript>alert("Gagal update password!");</script>
	        				<?php
	        			$this->load->view('template/header');
							$this->viewProfile();	
						}
					}else{
						?>
	                     <script type=text/javascript>alert("password baru dan confirm password tidak cocok!");</script>
	        			<?php
	        			$this->load->view('template/header');
							$this->viewProfile();					
					}
				}else{
					?>
                     <script type=text/javascript>alert("password lama yang anda masukan salah!");</script>
        			<?php
        		$this->viewProfile();	
				}				
		}else{
			  $this->load->view('customer/kelola_profile');
		}
	}



 public function keluar()
	{
		$this->session->sess_destroy();
		redirect('Home');
	}
}

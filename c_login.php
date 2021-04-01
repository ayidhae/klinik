<?php 

/**
* 
*/
class c_login extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();        
        $this->load->model('m_user');
        $this->load->model('m_pasien');
       
	}

	function index() {
		if($this->session->has_userdata('username')){
				if($this->session->userdata('hak_akses')=='admin'){
					redirect('c_user/homeAdmin');
				}elseif($this->session->userdata('hak_akses')=='dokter'){
					redirect('c_user/homeDokter');
				}elseif($this->session->userdata('hak_akses')=='manajer'){
					redirect('c_user/homeManajer');
				}elseif ($this->session->userdata('hak_akses')=='pasien' && $this->session->userdata('status') == 'aktif') {
					redirect('c_pasien/home');
				}
		}else{
			$this->load->view('utama/login-page');
		}
		
	}

	function validate() {
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$cekUser = $this->m_user->cek($username, $password);	
		
		$cekPasien = $this->m_pasien->cek($username, $password);		

		if($cekUser->num_rows() == 1)
		{
			foreach($cekUser->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['hak_akses'] = $data->hak_akses;
				$this->session->set_userdata($sess_data);
			}
		

			if($this->session->userdata('hak_akses') == 'admin')
			{
				redirect('c_user/homeAdmin');
			}else if ($this->session->userdata('hak_akses') == 'dokter')
			{
				redirect('c_user/homeDokter');
			}else if ($this->session->userdata('hak_akses') == 'manajer')
			{
				redirect('c_user/homeManajer');
			}		
		}
		  else if($cekPasien->num_rows() == 1)
			{
			foreach($cekPasien->result() as $data){
				$sess_data['username'] = $data->username;
				$sess_data['password'] = $data->password;
				$sess_data['hak_akses'] = $data->hak_akses;
				$sess_data['status'] = $data->status;

				$this->session->set_userdata($sess_data);
			}			
			if($this->session->userdata('hak_akses') == 'pasien' && $this->session->userdata('status') == 'aktif')
			{
				redirect('c_pasien/home');
			}else{
				?>
                     <script type=text/javascript>alert("Status tidak aktif");</script>
        		<?php
        		$this->load->view('utama/login-page');
			}
		} else {
			 ?>
                     <script type=text/javascript>alert("Maaf, kombinasi username dengan password salah. ");</script>

        	<?php
			$this->index();

		}
	}
}
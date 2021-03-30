<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pasien extends CI_Model{
	
function insert_pasien($data){
        $query = $this->db->insert('pasien',$data);
        return $query;
    }
	
    function cek($username, $password){
	 	$this->db->where('username', $username);
	 	$this->db->where('password', md5($password));
	 	return $this->db->get('pasien');
	}

	// function view_cus (){
	// 	return $this->db->get('pasien');
	// }


	// function cekRegistrasi($username){
 // 	$this->db->where('username', $username);
	//  	return $this->db->get('pasien');
	//  }

	function detail($where,$table){		
		return $this->db->get_where($table,$where);
	}


	function getAllpasien(){
		 return $this->db->get('pasien');
		
	}

	function profilepasien ($username){
		if($username) {
			$sql = "SELECT * FROM pasien WHERE username = ?";
			$query = $this->db->query($sql, array($username));
			$result = $query->result_array();

			return $result;
		}
	}

	function delete_user($where,$table){
		$this->db->where($where);
		$this->db->delete($table);
	}
	
	function updateProfile($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}

    function check_regis($username){
		$this->db->where('username', $username);
		return $this->db->get('pasien');
	}

	function getCurrentPass($username){
		$query = $this->db->where(['username'=>$username]) ->get('pasien');
		if($query->num_rows() > 0) {
			return $query->row();
		}
	}

	function update_password($new_password,$uname){
		$data = array (
			'password' => md5($new_password)
		);

		return $this->db->where('username',$uname)
		->update('pasien',$data);
	}

	// nama perusahaaan untuk pesanan
	function getNama(){
    	$this->db->order_by('nama','asc');
    	$query = $this->db->get('pasien');
    	if($query->num_rows()>0){
      		return $query->result();
    	}else{
      		return false;
    	}
	}

}


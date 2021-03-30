<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_user extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function getUser($where,$table){
		return $this->db->get_where($table,$where);
	}
    function getAlluser(){
         return $this->db->get('user');
        
    }
    function insert_user($data){
        $query = $this->db->insert('user',$data);
        return $query;
    }
function detail($where,$table){     
        return $this->db->get_where($table,$where);
    }
     function updateProfile($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

	function cek($username, $password){
		$this->db->where('username', $username);
		$this->db->where('password', $password);
		return $this->db->get('user');
	}

	function ambilNama($param){
		$this->db->select('nama,no_hp');
        $this->db->where($param);
        $query = $this->db->get('user');
        if($query->num_rows()>0)
        {
          return $query->result();
        }
        else
        {
          return false;
        }
      }

    
    function getCurrentPass($username){
        $query = $this->db->where(['username'=>$username])
              ->get('user');
        if($query->num_rows() > 0) {
          return $query->row();
        }
    }

    function update_password($new_password,$uname){
        $data = array (
            'password' =>($new_password)
        );

        return $this->db->where('username',$uname)
        ->update('user',$data);
  }
}

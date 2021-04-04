<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_keuangan extends CI_Model {

	function __construct() {
        parent::__construct();
    }

function getAllKeuangan(){
     return $this->db->get('keuangan');
 }

	function insert_keuangan($data){
		$query = $this->db->insert('keuangan',$data);
		return $query;
	}
<<<<<<< HEAD
	function simpan($tabel,$data)
	{
		$s=$this->db->insert($tabel,$data);
		return $s;
	}
	function edit($tabel,$where)
	{
		$query=$this->db->query("select * from $tabel where $where");
		return $query;
	}


	// function update($tabel,$data,$where)
	// {
	// 	$this->db->where($where,$data[$where]);
	// 	$this->db->update($tabel,$data);
	// }
	function updateKeuangan($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}
	function detail($where,$table){		
		return $this->db->get_where($table,$where);

	}

=======
	// function simpan($tabel,$data)
	// {
	// 	$s=$this->db->insert($tabel,$data);
	// 	return $s;
	// }
	function detail($where,$table){		
		return $this->db->get_where($table,$where);
	}
	function updateKeuangan($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }
>>>>>>> fd77b8bb2ee1e1672b1cdf021dc3ec7efc1fb514

	function getIdKeuangan(){
		$this->db->select('RIGHT(keuangan.id_keuangan,4) as id', FALSE);
		$this->db->order_by('id_keuangan','DESC');    
		$this->db->limit(1);    
		  $query = $this->db->get('keuangan');    
		  if($query->num_rows() <> 0){      		  
		   $data = $query->row();      
		   $kode = intval($data->id) + 1;    
		  }
		  else {      		  
		   $kode = 1;    
		  }
		  $kodemax = str_pad($kode, 4, "0", STR_PAD_LEFT);
		  $kodejadi = "KEUANG-".$kodemax;    
		  return $kodejadi;
	}
	function delete($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
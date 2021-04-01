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

	function update($tabel,$data,$where)
	{
		$this->db->where($where,$data[$where]);
		$this->db->update($tabel,$data);
	}

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
	
}

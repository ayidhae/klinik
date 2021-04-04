<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_pemesanan extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function getData($data){
          return $this->db->get($data);
        
    }
    function insert($data,$table){
        $query = $this->db->insert($table,$data);
        return $query;
    }

    function update($where,$data,$table){
        $this->db->where($where);
        $this->db->update($table,$data);
    }

    function detail($where,$table){     
        return $this->db->get_where($table,$where);
    }

    function getDatabyJoin($table){
        $this->db->join('tb_kategori_treatment', 'id_kategori_treatment');
        $query = $this->db->get($table)->result();
        return $query;
    }

    function getDataKategori($table){
        $query = $this->db->get($table)->result();
        return $query;
    }

    function delete($table,$where){
        $this->db->where($where);
        $this->db->delete($table);
    }
}
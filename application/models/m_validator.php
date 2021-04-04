<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class m_validator extends CI_Model {

	function __construct() {
        parent::__construct();
    }

    function getAlluser(){
        return $this->db->get('user');
    }
}

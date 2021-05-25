<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mdl_task extends CI_Model{
	
	function __construct(){
		parent::__construct();
	}

	function get($order_by){
		$this->db->order_by($order_by);
		$query=$this->db->get('task');
		return $query;
	}

	function _insert($data){
		$table = $this->get_table('task');
		$this->db->insert($table, $data);
	}
}
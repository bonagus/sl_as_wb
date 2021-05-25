<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller
{

	function __construct() 
	{
		parent::__construct();
	}


	function index()
	{
		
		// $this->load->model('mdl_perfectmodel');
		// $data['query'] = $this->mdl_perfectmodel->get('prioritas');
		// $data['module'] = 'task';
		// $data['lihat_tampil'] = 'tampil';
		// echo Modules::run('template/dua_kolom', $data) ;

		$data['view_module'] = 'home';
		$data['view_file'] = 'index';
		$this->load->view('templates/head');
		$this->load->view('templates/side', $data);
		$this->load->view('templates/core', $data);
		$this->load->view('templates/foot', $data);
		$this->load->view('templates/script', $data);
	}

	function get($order_by) {
	$this->load->model('mdl_perfectcontroller');
	$query = $this->mdl_perfectcontroller->get($order_by);
	return $query;
	}

	function get_with_limit($limit, $offset, $order_by) {
	$this->load->model('mdl_perfectcontroller');
	$query = $this->mdl_perfectcontroller->get_with_limit($limit, $offset, $order_by);
	return $query;
	}

	function get_where($id) {
	$this->load->model('mdl_perfectcontroller');
	$query = $this->mdl_perfectcontroller->get_where($id);
	return $query;
	}

	function get_where_custom($col, $value) {
	$this->load->model('mdl_perfectcontroller');
	$query = $this->mdl_perfectcontroller->get_where_custom($col, $value);
	return $query;
	}

	function _insert($data) {
	$this->load->model('mdl_perfectcontroller');
	$this->mdl_perfectcontroller->_insert($data);
	}

	function _update($id, $data) {
	$this->load->model('mdl_perfectcontroller');
	$this->mdl_perfectcontroller->_update($id, $data);
	}

	function _delete($id) {
	$this->load->model('mdl_perfectcontroller');
	$this->mdl_perfectcontroller->_delete($id);
	}

	function count_where($column, $value) {
	$this->load->model('mdl_perfectcontroller');
	$count = $this->mdl_perfectcontroller->count_where($column, $value);
	return $count;
	}

	function get_max() {
	$this->load->model('mdl_perfectcontroller');
	$max_id = $this->mdl_perfectcontroller->get_max();
	return $max_id;
	}

	function _custom_query($mysql_query) {
	$this->load->model('mdl_perfectcontroller');
	$query = $this->mdl_perfectcontroller->_custom_query($mysql_query);
	return $query;
	}

}
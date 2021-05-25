<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class task extends MX_Controller {

	function index(){
		
	$this->load->model('mdl_perfectmodel');
	$data['query'] = $this->mdl_perfectmodel->get('prioritas');
	$data['module'] = 'task';
	$data['lihat_tampil'] = 'tampil';
	echo Modules::run('template/dua_kolom', $data) ;

	/*$this->load->view('tampil', $data);*/
	}
	
	function get_data_from_post(){
		$data['judul'] = $this->input->post('judul', TRUE);
		$data['prioritas'] = $this->input->post('prioritas', TRUE);
		return $data;
	}

	function get_data_from_db(){
		$query = $this->get_where($update_id);
		foreach ($query->result() as $row) {
			$data['judul'] = $row->judul;
			$data['prioritas'] = $row->prioritas;
		}
		return $data;
	}

	function tambah(){
		$update_id = $this->url->segment(3);

		if (is_numeric($update_id)) {
			$data = $this->get_data_from_db($update_id);
		} else{
			$data = $this->get_data_from_post();
		}

		$data['module'] = 'task';
		$data['lihat_tampil'] = 'form';
		echo Modules::run('template/dua_kolom', $data);
	}


	function _insert($data) {
		$this->load->model('mdl_perfectmodel');
		$this->mdl_perfectmodel->_insert($data);
	}

	function submit(){
		$this->load->library('form_validation');
		$this->form_validation->set_rules('judul', 'judul', 'required|min_length[5]');
		$this->form_validation->set_rules('prioritas', 'prioritas', 'required|max_length[2]|numeric');
		if ($this->form_validation->run() == FALSE)
		{
			$this->tambah();
		}
		else
		{

			$data = $this->get_data_from_post();
			$this->_insert($data);
			redirect('task');
		}
	}
}

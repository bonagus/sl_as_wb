<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Templates extends MX_Controller 
{

	function demo($data)
	{
		$this->load->view('bootsori/head', $data);
		$this->load->view('bootsori/side', $data);
		$this->load->view('bootsori/core', $data);
		$this->load->view('bootsori/foot', $data);
		$this->load->view('bootsori/script', $data);
	}

	function sample($data)
	{
		$this->load->view('sample', $data);
	}
}
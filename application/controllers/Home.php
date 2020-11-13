<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->library("session");
	}

	public function index()
	{
		$data['adminLogged'] = $this->session->userdata('adminLogged');
		$this->load->view('home', $data);
	}
}

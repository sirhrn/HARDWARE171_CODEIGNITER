<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
    parent::__construct();

		$this->load->library("session");
    $this->load->library('form_validation');
		$this->load->helper('form');
    $this->load->model('adminModel');
	}

	public function list()
	{
		$data['admin'] = $this->adminModel->getAdmin();
		$this->load->view('admin/adminList', $data);
	}

	public function createForm()
	{
		$this->load->view('admin/adminCreate');
	}

	public function insert()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

		if($this->form_validation->run() == FALSE)
		{
			echo "Erro no cadastro do Administrador, Verifique os campos e tente Novamente!!";
			$this->load->view('admin/adminCreate');
		}
		else
		{
			$this->adminModel->setAdmin();
			echo "Administrador Cadastrado com Sucesso!!";
			$this->load->view('admin/adminCreate');
		}
	}

	public function delete() {
		$id = $this->uri->segment(3);
		$this->adminModel->deleteAdmin($id);
		$data['admin'] = $this->adminModel->getAdmin();
		$this->load->view('admin/adminList', $data);
	}

	public function loginForm()
	{
		$this->load->view('admin/adminLogin');
	}

	public function login()
	{
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('senha', 'Senha', 'required');

		if($this->form_validation->run() == FALSE)
		{
			echo "Erro ao realizar o login, verifique os campos e tente novamente!!";
			$this->load->view('admin/adminLogin');
		}
		else
		{
			if ($this->adminModel->verifyLogin())
			{
				$data['admin'] = $this->adminModel->getAdmin();
				$this->load->view('admin/adminList', $data);
			}
			else {
				$this->load->view('admin/adminLogin');
			}
		}
	}
}

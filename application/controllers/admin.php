<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class admin extends CI_Controller {

	public function index()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/topbar');
		$this->load->view('admin/index');
		$this->load->view('layout/footer');
	}

	public function profile()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/topbar');
		$this->load->view('profile/index');
		$this->load->view('layout/footer');
	}
	public function register()
	{
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('layout/topbar');
		$this->load->view('register/register');
		$this->load->view('layout/footer');
	}
}

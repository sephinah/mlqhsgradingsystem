<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
		
	{
		$data['title'] = 'Bootstrap 3 + CodeIgniter';
		$this->load->view('template/header', $data);
		$this->load->view('home');
		$this->load->view('template/footer');

	}

}

	
	


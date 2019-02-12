<?php

class Customer extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_Product');
	}

	public function all(){
		//$data['products'] = $this->M_Product->get();
		$this->load->view('customers');
	}

	public function add(){
		$this->load->view('new_customer');
	}

	public function blacklists(){
		$this->load->view('customers_blacklist');
	}

}
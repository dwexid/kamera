<?php

class Product extends CI_Controller{

	function __construct(){
		parent::__construct();
		$this->load->model('M_Product');
	}

	public function all(){
		//$data['products'] = $this->M_Product->get();
		$this->load->view('products');
	}

	public function add(){
		$this->load->view('new_product');
	}

}
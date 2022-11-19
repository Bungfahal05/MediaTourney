<?php

Class Kategori Extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('admin/login');
		}
	}
	function index()
	{
		$data['kategori']	=	$this->model_kategori->tampil_kategori()->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/kategori', $data);
		$this->load->view('layout_admin/footer');
	}
}
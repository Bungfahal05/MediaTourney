<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {
	public function index()
	{
		$data['tourney']	= $this->model_tourney->limit()->result();
		$data['kategori'] 	= $this->model_kategori->tampil_kategori()->result();
		$data['blog']		= $this->model_blog->limit()->result();
		$this->load->view('layout/header');
		$this->load->view('layout/sidebar');
		$this->load->view('home', $data);
		$this->load->view('layout/footer');
	}
}

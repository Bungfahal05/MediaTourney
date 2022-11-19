<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dashboard extends CI_Controller {
	  function __construct(){
    parent::__construct();
    if($this->session->userdata('logged_in') !== TRUE){
      redirect('admin/login');
    }
  }
	public function index()
	{
		$data['ambil_tourney']	= $this->model_tourney->ambil_tourney();
		$data['ambil_team']		= $this->model_team->ambil_team();
		$data['ambil_blog']		= $this->model_blog->ambil_blog();
		$data['ambil_partner']	= $this->model_partner->ambil_partner();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/dashboard', $data);
		$this->load->view('layout_admin/footer');
	}
}

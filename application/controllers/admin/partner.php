<?php

Class Partner Extends CI_Controller
{
	function __construct(){
    	parent::__construct();
    	if($this->session->userdata('logged_in') !== TRUE){
      	redirect('admin/login');
    }
  }
	function index()
	{
		$data['partner']	=	$this->model_partner->tampil_partner()->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/partner', $data);
		$this->load->view('layout_admin/footer');
	}
	public function edit($id)
	{
		$where	=	array('id_partner'	=>	$id);
		$data['partner']	=	$this->model_partner->edit_partner($where, 'partner')->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/partners/edit', $data);
		$this->load->view('layout_admin/footer');
	}
	public function update()
	{
		$id = $this->input->post('id_partner');
		$nama_partner = $this->input->post('nama_partner');
		$instagram = $this->input->post('instagram');

		$data = array(
		        'nama_partner' => $nama_partner,
		        'instagram' => $instagram,
		);

		$where = array(
			'id_partner' => $id
		);

		$this->model_partner->update_partner($where,$data,'partner');
		redirect('admin/partner');
	}
	public function hapus($id)
	{
		$where	=	array('id_partner'	=> $id);
		$this->model_partner->hapus_partner($where, 'partner');
		redirect('admin/partner');
	}
}

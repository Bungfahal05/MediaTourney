<?php

Class Tourney Extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('admin/login');
		}
	}
	function index()
	{
		$data['tourney'] =	$this->model_tourney->tampil_tourney()->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/Tourney',$data);
		$this->load->view('layout_admin/footer');
	}
	public function edit($id)
	{
		$where	= array('id'	=>	$id);
		$data['tourney'] = $this->model_tourney->edit_tourney($where, 'tournament')->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/tournament/edit', $data);
		$this->load->view('layout_admin/footer');
	}
	public function update()
	{
		$id 			= $this->input->post('id');
		$nama	= $this->input->post('nama');
		$oleh			= $this->input->post('oleh');
		$instagram		= $this->input->post('instagram');
		$biaya			= $this->input->post('biaya');
		$event			= $this->input->post('event');


		$data = array(
			'nama'	=> $nama,
			'oleh'			=> $oleh,
			'instagram'		=> $instagram,
			'biaya'			=> $biaya,
			'event'			=> $event
		);
		$where = array(
			'id'	=> $id
		);
		$this->model_tourney->update_tourney($where,$data,'tournament');
		redirect('admin/tourney');
	}
	public function hapus($id)
	{
		$where	=	array('id'	=> $id);
		$this->model_tourney->hapus_tourney($where, 'tournament');
		redirect('admin/tourney');
	}
}
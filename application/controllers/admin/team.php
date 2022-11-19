<?php

Class Team Extends CI_Controller
{
	function __construct(){
    	parent::__construct();
    	if($this->session->userdata('logged_in') !== TRUE){
      	redirect('admin/login');
    }
  }
	function index()
	{
		$data['team']	=	$this->model_team->tampil_team()->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/team', $data);
		$this->load->view('layout_admin/footer');
	}
	public function edit($id)
	{
		$where	= array('id_team'	=>	$id);
		$data['team'] = $this->model_team->edit_team($where, 'team')->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/teams/edit', $data);
		$this->load->view('layout_admin/footer');
	}
	public function update()
	{
		$id 			= $this->input->post('id_team');
		$nama_team	= $this->input->post('nama_team');
		$link			= $this->input->post('link');
		$instagram		= $this->input->post('instagram');


		$data = array(
			'nama_team'		=> $nama_team,
			'link'			=> $link,
			'instagram'		=> $instagram,
		);
		$where = array(
			'id_team'	=> $id
		);
		$this->model_tourney->update_tourney($where,$data,'team');
		redirect('admin/team');
	}
	public function hapus($id)
	{
		$where	=	array('id_team'	=> $id);
		$this->model_team->hapus_team($where, 'team');
		redirect('admin/team');
	}
}
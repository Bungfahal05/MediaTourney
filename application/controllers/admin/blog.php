<?php

Class Blog Extends CI_Controller{
	function __construct(){
    	parent::__construct();
    	if($this->session->userdata('logged_in') !== TRUE){
      	redirect('admin/login');
    }
  }
	function index()
	{
		$data['blog']	=	$this->model_blog->tampil_blog()->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/Blog', $data);
		$this->load->view('layout_admin/footer');
	}
	public function edit($id)
	{
		$where = array('id_blog'	=> $id);
		$data['blog']	= $this->model_blog->edit_blog($where,'blog')->result();
		$data['kategor']	= $this->model_kategori->tampil_kategori()->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/blogs/edit', $data);
		$this->load->view('layout_admin/footer');	
	}
	public function update()
	{
		$id 	= $this->input->post('id_blog');
		$judul 	= $this->input->post('judul');
		$deskripsi_blog 	= $this->input->post('deskripsi_blog');
		$kategor 	= $this->input->post('kategor');
		$publish 	= $this->input->post('publish');

		$data = array 
		(
			'judul'		=> $judul,
			'deskripsi_blog'	=> $deskripsi_blog,
			'kategori'		=> $kategori,
			'publish'	=> $publish
		);
		$where = array('id_blog'	=> $id);
		$this->model_blog->update_blog($where,$data,'blog');
		redirect('admin/blog');
	}
	public function hapus($id)
	{
		$where = array('id_blog'	=> $id);
		$this->model_blog->hapus_blog($where,'blog');
		redirect('admin/blog');

	}
}
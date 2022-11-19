<?php

CLass Add_kategori Extends CI_Controller
{
	function __construct(){
    	parent::__construct();
    	if($this->session->userdata('logged_in') !== TRUE){
      	redirect('admin/login');
    }
  }
	function index()
	{
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/categori/add_kategori');
		$this->load->view('layout_admin/footer');
	}

	public function Tambah()
	{
		$kategori		=	$this->input->post('kategori');
		$link	=	$this->input->post('link');
		$gambar		=	$_FILES['gambar']['name'];
		if($gambar = ''){}
			else 
			{
				$config		['upload_path']		=	'./assets/kategori';
				$config		['allowed_types']	=	'png|jpg|jpeg|gif';
				$this->load->library('upload', $config);
					if(!$this->upload->do_upload('gambar'))
						{
							echo "gambar gagal diupload!";
						}
					else
						{
							$gambar	= $this->upload->data('file_name');
						}
			}
		$data	= array
			(
				'kategori'			=>	$kategori,
				'link'			=>	$link,
				'gambar'				=>	$gambar
			);
		$this->model_kategori->tambah_kategori($data, 'kategori');
		redirect('admin/kategori');
	}
}
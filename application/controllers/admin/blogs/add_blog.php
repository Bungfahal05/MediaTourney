<?php

Class Add_blog Extends CI_Controller
{
	public function index()
	{
		$data['kategori']	=	$this->model_kategori->tampil_kategori()->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/blogs/add_blog', $data);
		$this->load->view('layout_admin/footer');
	}
	public function tambah()
	{
		$judul	=	$this->input->post('judul');
		$author	=	$this->input->post('author');
		$deskripsi_blog	=	$this->input->post('deskripsi_blog');
		$publish = $this->input->post('publish');
		$kategori	=	$this->input->post('kategori');
		$gambar		=	$_FILES['gambar']['name'];
		if($gambar = ''){}
			else 
			{
				$config		['upload_path']		=	'./assets/blog';
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
				'judul'			=>	$judul,
				'author'		=>	$author,
				'deskripsi_blog'=>	$deskripsi_blog,
				'publish'		=>	$publish,
				'kategori'			=>	$kategori,
				'gambar'		=>	$gambar
			);
		$this->model_blog->tambah_blog($data, 'blog');
		redirect('admin/blog');
	}
}
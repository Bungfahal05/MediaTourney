<?php

Class Add_partner Extends CI_Controller
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
		$this->load->view('admin/partners/add_partner');
		$this->load->view('layout_admin/footer');
	}
	public function Tambah()
	{
		$nama_partner	=	$this->input->post('nama_partner');
		$instagram	=	$this->input->post('instagram');
		$gambar		=	$_FILES['gambar']['name'];
		if($gambar = ''){}
			else 
			{
				$config		['upload_path']		=	'./assets/partner';
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
				'nama_partner'			=>	$nama_partner,
				'instagram'		=>	$instagram,
				'gambar'		=>	$gambar
			);
		$this->model_partner->tambah_partner($data, 'partner');
		redirect('admin/partner');
	}
}
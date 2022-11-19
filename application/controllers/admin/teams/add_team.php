<?php

Class Add_team Extends CI_Controller
{
	function __construct(){
    	parent::__construct();
    	if($this->session->userdata('logged_in') !== TRUE){
      	redirect('admin/login');
    }
  }
	public function index()
	{
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/teams/add_team');
		$this->load->view('layout_admin/footer');
	}

	public function tambah()
	{
		$nama_team	=	$this->input->post('nama_team');
		$instagram	=	$this->input->post('instagram');
		$logo		=	$_FILES['logo']['name'];

		if($logo = '' ){}
			else
			{
				$config	['upload_path']	=	'assets/team';
				$config	['allowed_types']	=	'png|jpg|jpeg|svg|gif';
				$this->load->library('upload', $config);
					if(!$this->upload->do_upload('logo'))
					{
						echo "Gambar Gagal Di Upload!!";
					}
					else
					{
						$logo	=	$this->upload->data('file_name');
					}
			}
		$data	= array
			(
				'nama_team'			=>	$nama_team,
				'instagram'		=>	$instagram,
				'logo'			=>	$logo
			);
		$this->model_team->tambah_team($data, 'team');
		redirect('admin/team');
	}
}
<?php

Class Add_tourney Extends CI_Controller{
	function __construct()
	{
		parent::__construct();
		if($this->session->userdata('logged_in') !== TRUE){
			redirect('admin/login');
		}
	}
	function index()
	{
		$data['tourney']	=	$this->model_tourney->tampil_tourney()->result();
		$data['kategori']	=	$this->model_kategori->tampil_kategori()->result();
		$data['tipe']	=	$this->model_tourney->tampil_tipe()->result();
		$this->load->view('layout_admin/header');
		$this->load->view('layout_admin/sidebar');
		$this->load->view('admin/tournament/add_tourney', $data);
		$this->load->view('layout_admin/footer');
	}
	public function Tambah()
	{
		$nama	=	$this->input->post('nama');
		$oleh	=	$this->input->post('oleh');
		$instagram	=	$this->input->post('instagram');
		$biaya	=	$this->input->post('biaya');
		$hadiah	=	$this->input->post('hadiah');
		$slot	=	$this->input->post('slot');
		$event	=	$this->input->post('event');
		$deskripsi	=	$this->input->post('deskripsi');
		$tipe	=	$this->input->post('tipe');
		$kategori = $this->input->post('kategori');
		$gambar		=	$_FILES['gambar']['name'];
		if($gambar = ''){}
			else 
			{
				$config		['upload_path']		=	'./assets/tourney';
				$config		['allowed_types']	=	'png|jpg|jpeg|gif';
				$config		['width']			=	6000;
				$config		['height']			=	4000;
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
				'nama'			=>	$nama,
				'oleh'			=>	$oleh,
				'instagram'		=>	$instagram,
				'deskripsi'		=>	$deskripsi,
				'biaya'			=>	$biaya,
				'hadiah'		=>	$hadiah,
				'slot'			=>	$slot,
				'event'			=>	$event,
				'tipe'			=>	$tipe,
				'kategori'		=>	$kategori,
				'gambar'		=>	$gambar
			);
		$this->model_tourney->tambah_tourney($data, 'tournament');
		redirect('admin/tourney');
	}
}
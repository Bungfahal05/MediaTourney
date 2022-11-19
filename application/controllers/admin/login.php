<?php

Class Login extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('user_model');
	}
	public function Index()
	{
		$this->load->view('layout_admin/header');
		$this->load->view('admin/login');
	}
  function auth(){
    $username    = $this->input->post('username',TRUE);
    $password = ($this->input->post('password',TRUE));
    $validate = $this->user_model->validate($username,$password);
    if($validate->num_rows() > 0){
        $data  = $validate->row_array();
        $username  = $data['user'];
        $role = $data['role'];
        $level = $data['level'];
        $sesdata = array(
            'username'  => $name,
            'role'     => $role,
            'level'     => $level,
            'logged_in' => TRUE
        );
        $this->session->set_userdata($sesdata);
        // access login for admin
        if($level === '1'){
            redirect('admin/Dashboard');

        // access login for staff
        }elseif($level === '2'){
            redirect('admin/Dashboard');

        // access login for author
        }else{
            redirect('admin/Dashboard');
        }
    }else{
        echo $this->session->set_flashdata('msg','Username or Password is Wrong');
        redirect('admin/login');
    }
  }

  function logout(){
      $this->session->sess_destroy();
      redirect('admin/login');
  }

}

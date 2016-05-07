<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('m_db');
		$this->load->model('login_model');
	}
	
	function index()
	{
		$this->form_validation->set_rules('username','Username','required');
		$this->form_validation->set_rules('password','Password','required');
		if($this->form_validation->run()==TRUE)
		{
			$username=$this->input->post('username',TRUE);
			$password=$this->input->post('password',TRUE);
			if($this->login_model->user_login($username,$password)==TRUE)
			{				
				$akses=$this->login_model->user_info('akses');
				redirect(base_url().$akses.'/dashboard');
			}else{
				redirect(base_url().'login');
			}
		}else{
			$app=baca_konfig('nama-aplikasi');
			$meta['judul']=$app." | User Login";
			$meta['appname']=$app;
			$this->load->view('tema/login',$meta);
		}		
	}
	
	function logout()
	{
		$this->login_model->user_logout();
	}
}
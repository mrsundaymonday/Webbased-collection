<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model');
		$this->load->model('Login_model');
	}


	public function index()
	{
		//$this->load->view('welcome_message');
		// $data['datauser'] = $this->User_model->tampil_data();
		$this->load->view('view_login');
	}


	  function checklogin()
	  {
		header('Access-Control-Allow-Origin: *');
		$email    =  addslashes($this->input->post('email'));
		$password = addslashes($this->input->post('password'));
		$result = $this->User_model->verifylogin($email,$password);
	
		if ($result) 
		{
			# code...
			$data = array
			(
			  'first_name'=>$result->first_name,	
			  'last_name'=>$result->last_name,	
			  'email'=>$result->email	,
			  'isLoggedIn'=>TRUE
			);
			$this->session->set_userdata($data);
			echo "ok";
			redirect("mainmenu/index");

		} else
		{
			echo "Username atau password salah !";
		}




	  }




}

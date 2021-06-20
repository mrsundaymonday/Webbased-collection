<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Mainmenu extends CI_Controller 
{

	function __construct()
	{
		parent::__construct();
        date_default_timezone_set("Asia/Bangkok");
		$this->load->model('User_model');
		$this->load->model('Collection_model');

	}

	// public function index()
	// {
	// 	//$this->load->view('welcome_message');
	// 	$data['datauser'] = $this->User_model->tampil_data();
	// 	$this->load->view('view_input',$data);
	// }

	public function index()
	{
		//$this->load->view('welcome_message');
		// $data['datauser'] = $this->User_model->tampil_data();
		$this->load->view('view_mainmenu2');
	}


 	function inputinvoice()
	 {
		$data['tipetransaksi'] = $this->Collection_model->tampil_tipetransaksi();
		$data['datainvoice'] = $this->Collection_model->tampil_datainvoice();
		$this->load->view('view_inputinvoice',$data);

	 }

 	function inputinvoice2()
	 {
		$data['datainvoice'] = $this->Collection_model->tampil_datainvoice();
		$this->load->view('view_inputinvoice2',$data);

	 }	 

 	function inputreceipt()
	 {
		// $data['datauser2'] = $this->User_model->all();
	//	$data['datauser'] = $this->User_model->tampil_data();
	$data['tipetransaksi'] = $this->Collection_model->tampil_tipetransaksi();
	$data['datainvoice'] = $this->Collection_model->tampil_datainvoice();
	$this->load->view('view_receipt2',$data);

	 }

 	function reportsoa()
	 {
		$data['datauser'] = $this->User_model->tampil_data();
		$this->load->view('view_input',$data);

	 }

	 function testdatetmpicker()
	 {
		 $this->load->view("view_tesdatetimepicker");
	 }

}

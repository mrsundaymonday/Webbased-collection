<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Crud extends CI_Controller 
{
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Bangkok");
		$this->load->model('User_model');
		$this->load->model('Collection_model');

	}

  	public function tambah()
	{


		for ($i=0; $i < count($this->input->post('txtFullname')) ; $i++) 
		{ 
			$data = array
			(
				'fullname'=> $this->input->post('txtFullname')[$i] ,
				'email' => $this->input->post('txtEmail')[$i] ,
				'phone'=>$this->input->post('txtPhone')[$i],
				'address' => $this->input->post('txtAddress')[$i]
			);
			$this->User_model->input_data($data);
		}
	 	redirect('welcome/index');

	}


	function get_autocomplete()
	{
		if (isset($_GET['term'])) 
		{
		  	$result = $this->Collection_model->search_tipetransaksi($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'			=> $row->agreementtype_name ,
					'description'   => $row->agreementtype_id
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}


	function search_invoice_id()
	{
		if (isset($_GET['term'])) 
		{
		  	$result = $this->Collection_model->search_invoiceid($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'			=> $row->invoice_id,
					'description'   => $row->id_officialreceiptmaster
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}


function delete_mastertrcs($id)
{
		$this->Collection_model->delete_by_id_amstertrcs($id);
		redirect('crud');

}


	function add_invoice()
	{
		// olah data last number 
			$kodetransaksi = 'TRC/05/2021/000001';
//			$lastcounter  = $this->Collection_model->getlastcounter();
			

//			echo "nomor baru = ". $counterbaru ;
			// $eonumber = $this->db->order_by('created_date',"desc")->limit(1)->get('tbl_event_order')->row();
		    $lastcounter = $this->db->order_by(' kode_transaksi ','desc')
			->limit(1)->get(' tbl_officialreceipt_master')->row();
			// print_r($lastcounter->kode_transaksi);
			// exit();
			// $counterbaru  = strval($lastcounter)  + 1 ;
		// olah data last number 
			$tgl_invoice = date('Y-m-d H:i:s',strtotime($this->input->post('tglinvoice')));
			$tgl_jatuhtempo = date('Y-m-d H:i:s',strtotime($this->input->post('tglduedate')));
			$createby =  $this->session->userdata('first_name'). " ". $this->session->userdata('last_name');
			if(empty($lastcounter))
				{
					$data = array
					(
						'kode_transaksi'=> 'TRC' .'/'.date('m').'/'.date('Y').'/'.'000001',
						'tgl_invoice'=>$tgl_invoice,
						'tgl_duedate'=>$tgl_jatuhtempo,
						'invoice_id'=>$this->input->post('invoiceid'),
						'schedulepaymentdetil_descr'=>$this->input->post('invoice_desc'),
						'schedulepaymentdetil_amount'=>$this->input->post('invoice_amount'),	
						'agreementtype_id'=>$this->input->post('agreementtype_id'),																
						'rekanan_id'=> $this->input->post('rekanan_id'),																
						'rekananshipping_line'=> $this->input->post('rekananshipping_line'),																
						'rekananshipping_name'=>$this->input->post('rekananshipping_name'),																	 															
						'agreementtype_name'=>$this->input->post('tipe_transaksi'),														
						'installment_ke'=> $this->input->post('installment_ke'),																
						'create_by'=> $createby ,
						'create_date'=> date("Y-m-d H:i:s"),
						'modified_by'=> $createby,
						'modified_date' =>date("Y-m-d H:i:s")
					);		
				} 
				else 
				{
					$lastcounter =  explode('/',$lastcounter->kode_transaksi);
					// var_dump($lastcounter);
					// exit();
					$data = array
					(

						'kode_transaksi'=> 'TRC' .'/'.date('m').'/'.date('Y').'/'.sprintf("%'.06d", $lastcounter[3]+1) ,
						'tgl_invoice'=>$tgl_invoice,
						'tgl_duedate'=>$tgl_jatuhtempo,
						'invoice_id'=>$this->input->post('invoiceid'),
						'schedulepaymentdetil_descr'=>$this->input->post('invoice_desc'),
						'schedulepaymentdetil_amount'=>$this->input->post('invoice_amount'),	
						'agreementtype_id'=>$this->input->post('agreementtype_id'),																
						'rekanan_id'=> $this->input->post('rekanan_id'),																
						'rekananshipping_line'=> $this->input->post('rekananshipping_line'),																
						'rekananshipping_name'=>$this->input->post('rekananshipping_name'),																	 															
						'agreementtype_name'=>$this->input->post('tipe_transaksi'),														
						'installment_ke'=> $this->input->post('installment_ke'),																
						'create_by'=> $createby ,
						'create_date'=> date("Y-m-d H:i:s"),
						'modified_by'=> $createby,
						'modified_date' =>date("Y-m-d H:i:s")
					);
				}
		// $this->collection_model->tambah_invoice($data,$this->table_invoice);
			$this->Collection_model->tambah_invoice($data);
			redirect("mainmenu/inputinvoice");

	}



	function get_autocomplete_rekananname()
	{
		if (isset($_GET['term'])) 
		{
		  	$result = $this->Collection_model->search_rekananname($_GET['term']);
		   	if (count($result) > 0) {
		    foreach ($result as $row)
		     	$arr_result[] = array(
					'label'			=> $row->rekanan_name,
					'description'   => $row->rekanan_id
				);
		     	echo json_encode($arr_result);
		   	}
		}
	}

	function get_rekananshippingname()
	{
        if (isset($_GET['shopname'])) {
            $result = $this->Collection_model->search_where($_GET['shopname'],$_GET['rekanan']);    
          
            if (count($result) > 0) {
            foreach ($result as $row)
                $arr_result[] = array(
                    'label'         => $row->rekananshipping_name,
                    'description'   => $row->rekananshipping_line,
                );
                echo json_encode($arr_result);
            }
        }
    }




	function add_receipt()
	{


		// var_dump($this->input->post());
		// exit();

			$tgl_receipt = date('Y-m-d H:i:s',strtotime($this->input->post('tgl_receipt')));
			$createby =  $this->session->userdata('first_name'). " ". $this->session->userdata('last_name');
					$data = array
					(
						'id_officialreceiptmaster'=>$this->input->post('invoice_id'),
						'tgl_receipt'=>$tgl_receipt,
						'nomor_or2'=>$this->input->post('nomor_or2'),
						'deskripsi'=>$this->input->post('deskripsi'),	
						'amount_receipt'=>$this->input->post('amount_receipt'),	
						'create_by'=> $createby ,
						'create_date'=> date("Y-m-d H:i:s"),
						'modified_by'=> $createby,
						'modified_date' =>date("Y-m-d H:i:s")
					);		
		// $this->collection_model->tambah_invoice($data,$this->table_invoice);
			$result =  $this->Collection_model->tambah_receipt($data);
			if ($result)
			{
				$this->session->set_flashdata('success', 'Data '.$this->input->post('search_invoice_id'). ' berhasil disimpan ');
				echo json_encode(array("status" =>true));
  
			}else 
			{
				$this->session->set_flashdata('error', 'Maaf!, terjadi kesalahan saat proses penyimpanan data');
				echo json_encode(array("status" =>false));
			}





			// redirect("mainmenu/inputreceipt");

	}







}

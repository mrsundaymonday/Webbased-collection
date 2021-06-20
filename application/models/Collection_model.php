<?php 

class Collection_model extends CI_Model
{

    var $tbl_officialreceipt_master = "tbl_officialreceipt_master";
    var $tbl_officialreceipt = "tbl_officialreceipt";
    var $master_rekananshipping="master_rekananshipping";

    function tampil_datainvoice()
    {
		// return $this->db->get('user');
        // SELECT a.kode_transaksi , a.tgl_invoice ,a.tgl_duedate , a.invoice_id,a.installment_ke ,
        // a.schedulepaymentdetil_descr,a.schedulepaymentdetil_amount, a.rekanan_id,a.rekananshipping_line,a.agreementtype_id,
        // a.create_by,a.create_date,a.modified_by,a.modified_date,
        // b.rekanan_name,c.rekananshipping_name,d.agreementtype_name
        // FROM tbl_officialreceipt_master a 
        // INNER join master_rekanan b on a.rekanan_id = b.rekanan_id 
        // INNER JOIN master_rekananshipping c on ( a.rekanan_id = c.rekanan_id and a.rekananshipping_line = c.rekananshipping_line )
        // INNER JOIN master_agreementtype d on a.agreementtype_id = d.agreementtype_id
        
        $this->db->select(" tbl_officialreceipt_master.id_officialreceiptmaster ,tbl_officialreceipt_master.kode_transaksi , tbl_officialreceipt_master.tgl_invoice ,
        tbl_officialreceipt_master.tgl_duedate , tbl_officialreceipt_master.invoice_id,tbl_officialreceipt_master.installment_ke ,
        tbl_officialreceipt_master.schedulepaymentdetil_descr,tbl_officialreceipt_master.schedulepaymentdetil_amount, 
        tbl_officialreceipt_master.rekanan_id,tbl_officialreceipt_master.rekananshipping_line,
        tbl_officialreceipt_master.agreementtype_id,
        tbl_officialreceipt_master.create_by,tbl_officialreceipt_master.create_date,tbl_officialreceipt_master.modified_by,
        tbl_officialreceipt_master.modified_date,
        master_rekanan.rekanan_name,master_rekananshipping.rekananshipping_name,master_agreementtype.agreementtype_name
        ");
        $this->db->join("master_rekanan","tbl_officialreceipt_master.rekanan_id = master_rekanan.rekanan_id ",'left');
        $this->db->join("master_rekananshipping"," tbl_officialreceipt_master.rekanan_id = master_rekananshipping.rekanan_id and tbl_officialreceipt_master.rekananshipping_line = master_rekananshipping.rekananshipping_line ",'left');        
        $this->db->join("master_agreementtype"," tbl_officialreceipt_master.agreementtype_id = master_agreementtype.agreementtype_id ",'left');                
        return $this->db->get($this->tbl_officialreceipt_master)->result();
	}



  function tampil_tipetransaksi()
  {
    return $this->db->get("master_agreementtype")->result();
  }

	// function get_all_blog()
	// {
	// 	$result=$this->db->get('blog');
	// 	return $result;
	// }

	function search_tipetransaksi($title)
	{
		$this->db->like('agreementtype_name ', $title , 'both');
		$this->db->order_by('agreementtype_name ', 'ASC');
		$this->db->limit(10);
		return $this->db->get('master_agreementtype')->result();
	}


	function search_invoiceid($title)
	{
		$this->db->like('invoice_id', $title , 'both');
		$this->db->order_by('invoice_id', 'ASC');
		$this->db->limit(10);
		return $this->db->get('tbl_officialreceipt_master')->result();
	}

	// function input_data($data,$table)
  //   {
	// 	$this->db->insert($table,$data);
	// }

  function tambah_invoice($data)
  {
    return $this->db->insert($this->tbl_officialreceipt_master,$data);
  }

  function tambah_receipt($data)
  {
    return $this->db->insert($this->tbl_officialreceipt,$data);
    
  }



	function search_rekananname($title)
	{
		$this->db->like('rekanan_name', $title , 'both');
		$this->db->order_by('rekanan_name', 'ASC');
		$this->db->limit(10);
		return $this->db->get('master_rekanan')->result();
	}


  public function search_where($shopname,$rekanan)
  {
     $this->db->like('rekananshipping_name',$shopname);
     $this->db->where('rekanan_id',$rekanan);
     return $this->db->get($this->master_rekananshipping)->result();
 }

//  $this->db->join('tbl_trans_lapor','tbl_trans_arahan.kode_laporan=tbl_trans_lapor.kode_laporan');
//  $this->db->where('kode_arahan',$id);
//  $query = $this->db->get($this->table); 
//  return $query->row();

function getlastcounter()
{

    $this->db->order_by(' RIGHT(kode_transaksi, 6)','DESC LIMIT 1');
    $query = $this->db->get($this->tbl_officialreceipt_master);
    return $query->row();
}


function delete_by_id_amstertrcs($id)
{
  $this->db->where('id_officialreceiptmaster', $id);
 return  $this->db->delete($this->tbl_officialreceipt_master);

}


}
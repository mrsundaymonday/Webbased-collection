<?php 

class User_model extends CI_Model
{

	var $table_user = 'user';
	var $table_user2 = 'tbl_user2';

	function tampil_data()
    {
		// return $this->db->get('user');
        return $this->db->get('user')->result();
	}

	function input_data($data)
    {
		$this->db->insert($this->table_user, $data);
	}


	public function all()
	{
		$data = $this->db->get("tbl_user2");
		return $data->result();
	}


	function verifylogin($email,$password)
	{
		$this->db->where('email',$email);
		$this->db->where('password', MD5($password) );
		return $this->db->get($this->table_user2)->row();
	}
	




}
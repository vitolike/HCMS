<?php 

class User_model extends CI_Model {

	public function useronline()
	{
	$id = intval($this->session->userdata('id'));
	$this->db->where('userid',$id);
	return $this->db->get('users')->result();
	}
	
}
<?php 

class Cadastro_model extends CI_Model {

	public function cadastro($data)
	{
		return $this->db->insert('users',$data);
	}
	
	public function verificaEmail($email)
	{
		$this->db->where('email',$email);
		return $this->db->get('users')->row_array();
	}
	
}
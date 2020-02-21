<?php 

class Escritorio_model extends CI_Model {

	public function delete_cliente($id=null)
	{
		$this->db->where('idclientes',$id);
		if($this->db->delete('clientes')){
        return true;
    } else {
        return false;
    }
		
	}
	
}
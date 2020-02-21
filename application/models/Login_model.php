<?php 

class Login_model extends CI_Model {

    public function verifica_sessao()
	{
		if( $this->session->userdata('logado') == false){
			redirect ('escritorio/entrar');
		}		
		   
	}
	
}
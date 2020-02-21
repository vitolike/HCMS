
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Main extends CI_Controller {

	public function index()
	{
		$this->load->view('welcome_message');
	}
	
	public function entrar()
	{
		$this->load->view('/login/login');
	}
	public function logar()
	{
		$email = $this->input->post('email');
		$senha = md5($this->input->post('senha'));
		
		$this->db->where('email',$email);
		$this->db->where('senha',$senha);
		$data['users'] = $this->db->get('users')->result();
		
		if(count($data['users']) == 1){
			$dados['nome'] = $data['users'][0]->nome;
			$dados['id'] = $data['users'][0]->userid;
			$dados['logado'] = true;
			$this->session->set_userdata($dados);
			redirect('escritorio');
		}
		else{
			redirect('');
		}
		
	}
	public function sair()
	{
		$this->session->sess_destroy();
		redirect('');
	}
	

	
}

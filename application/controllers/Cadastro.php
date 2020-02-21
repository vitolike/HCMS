
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cadastro extends CI_Controller {

	public function index()
	{
		$this->load->view('/cadastro/cadastro');
	}
	public function cadastrado()
	{
		$this->load->view('/cadastro/sucesso');
	}
		
			
	public function novo()
	{
		
		$data['nome'] = $this->input->post('nome');
		$data['sobrenome'] = $this->input->post('sobrenome');
		$data['senha'] = md5($this->input->post('senha'));
		$data['email'] = $this->input->post('email');
		$data['cpf'] = $this->input->post('cpf');
		$data['endereco'] = $this->input->post('endereco');
		$data['cidade'] = $this->input->post('cidade');
		$data['estado'] = $this->input->post('estado');
		$data['telefone'] = $this->input->post('telefone');
		$data['patrocinador'] = $this->input->post('patrocinador');
		
		$this->load->model('cadastro_model');
		
		if(!$this->cadastro_model->verificaEmail($data['email'])){
			$this->cadastro_model->cadastro($data);
			redirect('cadastro/cadastrado');
		}else{
		redirect('error');
		}
	}
	
}

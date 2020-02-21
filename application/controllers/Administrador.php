<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Administrador extends CI_Controller {

	public function index()
	{
		$this->$painel;
	}
	public function painel()
	{
		$this->load->view('welcome_message');
	}
	public function propriedades()
	{
		
		$this->load->model('User_model');
		$userdata['users'] = $this->User_model->useronline();
		$this->db->select('*');
		$dados['prop'] = $this->db->get('prop')->result();
		$this->load->view('/administrador/layout/header');
		$this->load->view('/administrador/layout/menubar',$userdata);
		$this->load->view('/administrador/properties/list',$dados);
		$this->load->view('/administrador/layout/footer');
	}
	public function nova_propriedade()
	{
		$this->load->model('User_model');
		$userdata['users'] = $this->User_model->useronline();
		$this->load->view('/administrador/layout/header');
		$this->load->view('/administrador/layout/menubar',$userdata);
		$this->load->view('/administrador/properties/add');
		$this->load->view('/administrador/layout/footer');
	}
	public function add_propriedade()
	{
		
		$data['id_prop'] = $this->input->post('id_prop');
		$data['description'] = $this->input->post('description');
		$data['value'] = $this->input->post('value');
		$data['status'] = $this->input->post('status');
		$data['type'] = $this->input->post('type');
		$data['status_date'] = $this->input->post('status_date');
		
		if($this->db->insert('prop',$data)){
			redirect('administrador/propriedades');
		}
		
	}
		public function produtos()
	{
		$this->load->model('User_model');
		$userdata['users'] = $this->User_model->useronline();
		$this->db->select('*');
		$dados['produto'] = $this->db->get('produto')->result();
		$this->load->view('/administrador/layout/header');
		$this->load->view('/administrador/layout/menubar',$userdata);
		$this->load->view('/administrador/produtos/list',$dados);
		$this->load->view('/administrador/layout/footer');
	}
	    public function novo_produto()
	{
		$this->load->model('User_model');
		$userdata['users'] = $this->User_model->useronline();
		$this->load->view('/administrador/layout/header');
		$this->load->view('/administrador/layout/menubar',$userdata);
		$this->load->view('/administrador/produtos/add');
		$this->load->view('/administrador/layout/footer');
	}
	    public function add_produto()
	{
		$data['codigo_produto'] = $this->input->post('codigo_produto');
		$data['descricao'] = $this->input->post('descricao');
		$data['valor'] = $this->input->post('valor');
		$data['nome'] = $this->input->post('nome');
		if($this->db->insert('produto',$data)){
			redirect('administrador/produtos');
		}
		
	}
	
	public function delete_produto($id=null)
	{

		$this->load->model('User_model');
		$authdata['users'] = $this->User_model->useronline();
		//-----//
		$this->load->model('escritorio_model');
		$result = $this->escritorio_model->delete_cliente($id);
        if($result){
            $data = array("message" => "Cliente deletado com sucesso!"); //sets variables in $data
        } else {
            $data = array("message" => "Este cliente não pode ser deletado."); //sets variables in $data
        }
		
		$this->db->select('*');
		$dados['produto'] = $this->db->get('produto')->result();
		
		$this->load->view('/administrador/layout/header');
		$this->load->view('/administrador/layout/menubar',$authdata);
		$this->load->view('/layout/msg_sucesso', $data);
		$this->load->view('/administrador/produtos/list',$dados);
		$this->load->view('/administrador/layout/footer');

	}
	public function tipodeconta()
	{
		
		$this->load->model('User_model');
		$userdata['users'] = $this->User_model->useronline();
		$this->db->select('*');
		$dados['tipocontas'] = $this->db->get('tipocontas')->result();
		$this->load->view('/administrador/layout/header');
		$this->load->view('/administrador/layout/menubar',$userdata);
		$this->load->view('/administrador/tipocontas/list',$dados);
		$this->load->view('/administrador/layout/footer');
	}
	public function novo_tipodeconta()
	{
		$this->load->model('User_model');
		$userdata['users'] = $this->User_model->useronline();
		$this->load->view('/administrador/layout/header');
		$this->load->view('/administrador/layout/menubar',$userdata);
		$this->load->view('/administrador/tipocontas/add');
		$this->load->view('/administrador/layout/footer');
	}
	public function add_tipodeconta()
	{
		
		$data['codigo_conta'] = $this->input->post('codigo_conta');
		$data['descricao'] = $this->input->post('descricao');
		$data['porcentagem'] = $this->input->post('porcentagem');
		$data['valor'] = $this->input->post('valor');
		$data['diasvencimento'] = $this->input->post('diasvencimento');
		
		if($this->db->insert('tipocontas',$data)){
			redirect('administrador/tipodeconta');
		}
		
	}
	
}

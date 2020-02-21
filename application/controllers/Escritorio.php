
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Escritorio extends CI_Controller {

	function __construct() {
        parent::__construct();
        
		$this->load->model('login_model','',TRUE);
		$this->load->model('User_model','',TRUE);
		$this->load->model('pedidos_model','',TRUE);

	}	
	public function index()
	{
		$this->login_model->verifica_sessao();
		$this->pagina_inicial();
	}
	public function entrar()
	{
		$this->load->view('/login/login');
	}	
	public function sair()
	{
		$this->session->sess_destroy();
		redirect('');
	}
	public function pagina_inicial()
	{
		$this->login_model->verifica_sessao();
		$data['users'] = $this->User_model->useronline();

		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar',$data);
		$this->load->view('/escritorio/users/dashboard');
		$this->load->view('/layout/footer');
	}
	public function novo_cliente()
	{

		$this->login_model->verifica_sessao();
		$data['users'] = $this->User_model->useronline();
		$this->db->select('*');
		$consulta['cidades'] = $this->db->get('cidades')->result();
		//-----//
		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar',$data);
		$this->load->view('/escritorio/cliente/novo_cliente',$consulta);
		$this->load->view('/layout/footer');
	}
	public function ver_cliente($id=null)
	{
		$this->login_model->verifica_sessao();
		$data['users'] = $this->User_model->useronline();
		$this->db->where('idclientes',$id);
		$consulta['clientes']  = $this->db->get('clientes')->result();
		//-----//
		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar', $data);
		$this->load->view('/escritorio/cliente/ver_cliente',$consulta);
		$this->load->view('/layout/footer');
	}
	public function lista_clientes()
	{
		$this->login_model->verifica_sessao();
		$data['users'] = $this->User_model->useronline();
		$id = intval($this->session->userdata('id'));
		$consulta['clientes']  = $this->db->get_where('clientes', array('criadopor =' => $id))->result();
		//-----//
		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar',$data);
		$this->load->view('/escritorio/cliente/lista_cliente',$consulta);
		$this->load->view('/layout/footer');
	}
	public function add_cliente()
	{
		
		$data['razao_social'] = $this->input->post('razao_social');
		$data['descricao'] = $this->input->post('descricao');
		$data['cnpj'] = $this->input->post('cnpj');
		$data['endereco'] = $this->input->post('endereco');
		$data['bairro'] = $this->input->post('bairro');
		$data['cidade'] = $this->input->post('cidade');
		$data['estado'] = $this->input->post('estado');
		$data['telefone'] = $this->input->post('telefone');
		$data['cep'] = $this->input->post('cep');
		$data['responsavel'] = $this->input->post('responsavel');
		$data['data_criacao'] = $this->input->post('data_criacao');
		$data['status'] = 'NOVO';
		$data['criadopor'] = $this->session->userdata('id');
		
		if($this->db->insert('clientes',$data)){
			redirect('escritorio/lista_clientes');
		}
		
	}
	public function atualiza_cliente()
	{
		$idc = $this->input->post('idclientes');
		$data['razao_social'] = $this->input->post('razao_social');
		$data['descricao'] = $this->input->post('descricao');
		$data['cnpj'] = $this->input->post('cnpj');
		$data['endereco'] = $this->input->post('endereco');
		$data['bairro'] = $this->input->post('bairro');
		$data['cidade'] = $this->input->post('cidade');
		$data['estado'] = $this->input->post('estado');
		$data['telefone'] = $this->input->post('telefone');
		$data['cep'] = $this->input->post('cep');
		$data['responsavel'] = $this->input->post('responsavel');
		$data['data_alteracao'] = $this->input->post('data_alteracao');
		$data['criadopor'] = $this->session->userdata('id');
		
		$this->db->where('idclientes',$idc);
		if($this->db->update('clientes',$data)){
			redirect('escritorio/lista_clientes');
		}
		
	}
	
	public function delete_cliente($id=null)
	{
		$this->login_model->verifica_sessao();
		$authdata['users'] = $this->User_model->useronline();
		
		$userid = intval($this->session->userdata('id'));
		$consulta['clientes']  = $this->db->get_where('clientes', array('criadopor =' => $userid))->result();
		//-----//
		
		
		$this->load->model('escritorio_model');
		$result = $this->escritorio_model->delete_cliente($id);
        if($result){
            $data = array("message" => "Cliente deletado com sucesso!"); //sets variables in $data
        } else {
            $data = array("message" => "Este cliente não pode ser deletado."); //sets variables in $data
        }
		
		
		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar',$authdata);
        $this->load->view('/layout/msg_sucesso', $data); 
		$this->load->view('/escritorio/lista_cliente', $consulta);
		$this->load->view('/layout/footer');

	}
	public function config_usuario()
	{
	
		$this->login_model->verifica_sessao();
		$data['users'] = $this->User_model->useronline();
		$id = intval($this->session->userdata('id'));
		$this->db->where('userid',$id);
		$consulta['users']  = $this->db->get('users')->result();
		
		$this->db->select('patrocinador');
		$this->db->from('users');
		$this->db->where('userid',$id);
		$patrocinador =  $this->db->get()->row()->patrocinador;
		
		
		$this->db->select('*');
		$this->db->where('patrocinador',$patrocinador);
		$consulta['patrocinador']  = $this->db->get('users')->result();
		
		//-----//
		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar', $data);
		$this->load->view('/escritorio/configuracoes/config_usuario',$consulta);
		$this->load->view('/layout/footer');
	}
	public function atualiza_usuario()
	{
		$this->login_model->verifica_sessao();
		$user['users'] = $this->User_model->useronline();
	    $id = intval($this->session->userdata('id'));
		
		$this->db->where('userid',$id);
		$consulta['users']  = $this->db->get('users')->result();
		
		$this->db->select('patrocinador');
	    $this->db->from('users');
		$this->db->where('userid',$id);
		$patrocinador =  $this->db->get()->row()->patrocinador;
				   		
		$this->db->select('*');
		$this->db->where('patrocinador',$patrocinador);
		$consulta['patrocinador']  = $this->db->get('users')->result();
		
		
		$data['nome'] = $this->input->post('nome');
		$data['sobrenome'] = $this->input->post('sobrenome');
		$data['email'] = $this->input->post('email');
		$data['endereco'] = $this->input->post('endereco');
		$data['cidade'] = $this->input->post('cidade');
		$data['estado'] = $this->input->post('estado');
		$data['pais'] = $this->input->post('pais');
		$data['telefone'] = $this->input->post('telefone');
		
		
		$this->db->where('userid',$id);
		if($this->db->update('users',$data)){
		   		redirect('escritorio/atualizado_usuario');
		}	
	}
	public function atualiza_senha_usuario()
	{
	    $id = intval($this->session->userdata('id'));
		$data['senha'] = md5($this->input->post('senha'));
		

		$this->db->where('userid',$id);
		if($this->db->update('users',$data)){
		   		redirect('escritorio/atualizado_usuario');
		}	
	}
	public function atualiza_infoadc_usuario()
	{
	    $id = intval($this->session->userdata('id'));

		$data['banco'] = $this->input->post('banco');
		$data['numeroconta'] = $this->input->post('numeroconta');
		$data['agencia'] = $this->input->post('agencia');

		$this->db->where('userid',$id);
		if($this->db->update('users',$data)){
		   		redirect('escritorio/atualizado_usuario');
		}	
	}
	
	public function atualizado_usuario(){
		
		$id = intval($this->session->userdata('id'));
		$this->db->where('userid',$id);
		$consulta['users']  = $this->db->get('users')->result();
		
		$this->db->select('patrocinador');
	    $this->db->from('users');
		$this->db->where('userid',$id);
		$patrocinador =  $this->db->get()->row()->patrocinador;
				   		
		$this->db->select('*');
		$this->db->where('patrocinador',$patrocinador);
		$consulta['patrocinador']  = $this->db->get('users')->result();
		
		$this->login_model->verifica_sessao();
		$user['users'] = $this->User_model->useronline();
		$msg = array("message" => "Dados atualizados com sucesso!"); 
		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar', $user);
		$this->load->view('/layout/msg_sucesso', $msg); 
		$this->load->view('/escritorio/configuracoes/config_usuario',$consulta);
		$this->load->view('/layout/footer');
	}
	public function upg_conta()
	{
	
		$this->login_model->verifica_sessao();
		$data['users'] = $this->User_model->useronline();
		$id = intval($this->session->userdata('id'));
		$this->db->where('userid',$id);
		$consulta['users']  = $this->db->get('users')->result();
		
		$this->db->select('patrocinador');
		$this->db->from('users');
		$this->db->where('userid',$id);
		$patrocinador =  $this->db->get()->row()->patrocinador;
		
		
		$this->db->select('*');
		$this->db->where('patrocinador',$patrocinador);
		$consulta['patrocinador']  = $this->db->get('users')->result();
		
		//-----//
		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar', $data);
		$this->load->view('/escritorio/paginas/upg_conta',$consulta);
		$this->load->view('/layout/footer');
	}
}

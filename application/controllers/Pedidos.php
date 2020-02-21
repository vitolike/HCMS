
<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pedidos extends CI_Controller {

	function __construct() {
        parent::__construct();
        
		$this->load->model('login_model','',TRUE);
		$this->load->model('user_model','',TRUE);
		$this->load->model('pedidos_model','',TRUE);

	}	
	public function index()
	{

		$this->login_model->verifica_sessao();
		$this->lista_pedidos();
	}
	public function lista_pedidos()
	{
		$this->login_model->verifica_sessao();
		$data['users'] = $this->user_model->useronline();
		
		$id = intval($this->session->userdata('id'));
		$consulta['pedido']  = $this->db->get_where('pedido', array('vendedor =' => $id))->result();

		//-----//
		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar',$data);
		$this->load->view('/escritorio/pedidos/lista_pedidos',$consulta);
		$this->load->view('/layout/footer');
	}
		public function novo()
	{
		$this->login_model->verifica_sessao();
		$data['users'] = $this->user_model->useronline();
		$this->db->select('*');
		$consulta['clientes'] = $this->db->get('clientes')->result();

		//-----//
		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar',$data);
		$this->load->view('/escritorio/pedidos/adc_pedido',$consulta);
		$this->load->view('/layout/footer');
	}
	
	function adicionar(){

		$this->load->model('pedidos_model');
		$userid = intval($this->session->userdata('id'));
        $data = array(
			    'codigo_pedido' => $this->input->post('codigo_pedido'),
                'data' => $this->input->post('data'),
                'cliente' => $this->input->post('cliente'),
                'descricao' => $this->input->post('descricao'),
			    'status' => 'NOVO',
			    'vendedor' => $userid
		);
          

            if (is_numeric($id = $this->pedidos_model->add('pedido', $data, true)) ) {
                redirect('pedidos/detalhes/'.$id);

            } else {
                redirect('pedidos');
          
            }     
        
    }
	public function detalhes($id=null)
	{
		$this->login_model->verifica_sessao();
		$data['users'] = $this->user_model->useronline();
		$this->db->select('pedido.idpedido, pedido.codigo_pedido, pedido.descricao, pedido.cliente, clientes.razao_social, pedido.vendedor, users.nome, pedido.total, clientes.endereco, clientes.cidade, clientes.estado, clientes.telefone, clientes.cnpj, pedido.data');
		$this->db->from('pedido');
        $this->db->join('clientes','pedido.cliente = clientes.idclientes');
        $this->db->join('users','pedido.vendedor = users.userid');
		$this->db->where('idpedido',$id);
		$consulta['pedido']  = $this->db->get()->row();
		$this->db->select('codigo_pedido');
		$this->db->from('pedido');
		$this->db->where('idpedido',$id);
		$cod = $this->db->get()->row()->codigo_pedido;
		$this->db->where('codigo_pedido',$cod);
		$consulta['linhas_pedido'] = $this->db->get('linhas_pedido')->result();
		$this->db->select('*');
		$consulta['produto'] = $this->db->get('produto')->result();
		
		
		

		//var_dump($consulta);
		//-----//
		$this->load->view('/layout/header');
		$this->load->view('/layout/menubar',$data);
		$this->load->view('/escritorio/pedidos/detalhe_pedido',$consulta);
		$this->load->view('/layout/footer');
	}
	    public function add_linhapedido($id=null){

			 $userid = intval($this->session->userdata('id'));
			 $this->db->select('porcentagem');
			 $this->db->from('tipocontas');
             $this->db->join('users','tipocontas.codigo_conta = users.tipodeconta');
		     $this->db->where('userid', $userid);
			 $porcentagem = $this->db->get()->row()->porcentagem;
			 $codigo_produto = $this->input->post('codigo_produto');
			 $quantidade = $this->input->post('quantidade');
		  	 $this->db->select('codigo_pedido');
		     $this->db->from('pedido');
		     $this->db->where('idpedido',$id);
		     $cod = $this->db->get()->row()->codigo_pedido;
			 $this->db->select('valor');
			 $this->db->from('produto');
			 $this->db->where('codigo_produto',$codigo_produto);
			 $valor = $this->db->get()->row()->valor;
			 $calcula_desconto = ( $porcentagem * $valor ) / 100;
			 $desconto = $valor - $calcula_desconto;
			 $this->db->select('descricao');
			 $this->db->from('produto');
			 $this->db->where('codigo_produto',$codigo_produto);
			 $descricao = $this->db->get()->row()->descricao;
			 $subtotal = $desconto * $quantidade;
			 $this->db->select('total');
			 $this->db->from('pedido');
			 $this->db->where('codigo_pedido',$cod);
			 $total = $this->db->get()->row()->total;
			 $total_real = $total + $subtotal;
	
			
             $data = array(
			    'codigo_pedido' => $cod, 
                'codigo_produto' => $codigo_produto,
				'descricao' => $descricao,
                'quantidade' => $quantidade,
                'valor' => $desconto,
				'sub_total' => $subtotal
	         );
			
		
			if ($this->db->insert('linhas_pedido',$data)) {
                $this->db->where('idpedido', $id);
				$this->db->set('total', $total_real);
                $this->db->update('pedido');
				redirect('pedidos/detalhes/'.$id);

            } else {
                
             redirect('pedidos');
            }         
    }
	public function deletar_linha($id=null)
	{
		$this->db->select('codigo_pedido');
		$this->db->from('linhas_pedido');
		$this->db->where('id',$id);
		$cod = $this->db->get()->row()->codigo_pedido;
		$this->db->select('idpedido');
		$this->db->from('pedido');
		$this->db->where('codigo_pedido',$cod);
		$idpedido = $this->db->get()->row()->idpedido;
		$this->db->select('total');
		$this->db->from('pedido');
		$this->db->where('codigo_pedido',$cod);
		$total = $this->db->get()->row()->total;

		$sql = "UPDATE pedido set total = total - (select sum(sub_total) from linhas_pedido where id = ?)";
		 $this->db->query($sql, array($id));
		
		$this->db->where('id',$id);
		if($this->db->delete('linhas_pedido')){
			redirect('pedidos/detalhes/'.$idpedido);
		}

	}
	    public function pagar_pedido($id=null){

			
			
           

       
       
    }

	
	
}

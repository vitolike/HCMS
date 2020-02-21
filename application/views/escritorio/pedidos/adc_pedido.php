      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">

<div class="container-fluid container-fixed-lg">
            <div id="rootwizard" class="m-t-50">
			  <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm">
                <li class="active">
                  <a data-toggle="tab"><i class="fa fa-shopping-cart tab-icon"></i> <span>Novo pedido</span></a>
                </li>
                <li class="">
                  <a data-toggle="tab"><i class="fa fa-list tab-icon"></i> <span>Detalhes do Pedido</span></a>
                </li>
                <li class="">
                  <a data-toggle="tab"><i class="fa fa-credit-card tab-icon"></i> <span>Pagamento</span></a>
                </li>
                <li class="">
                  <a data-toggle="tab"><i class="fa fa-check tab-icon"></i> <span>Informações</span></a>
                </li>
              </ul>
				<div class="tab-content">
				 <div class="tab-pane padding-20 active slide-left">
                  <div class="row row-same-height">
                    <div class="col-md-4 b-r b-dashed b-grey sm-b-b">
						 <div class="padding-30 m-t-50">
                        <h2>Your Information is safe with us!</h2>
                        <p>We respect your privacy and protect it with strong encryption, plus strict policies . Two-step verification, which we encourage all our customers to use.</p>
                        <p class="small hint-text">Below is a sample page for your cart , Created using pages design UI Elementes</p>
                      </div>
                    </div>
                    <div class="col-md-8">
                      <div class="padding-30">
						  <form id="form-register" name="form1" method="post" class="p-t-15" role="form" action="<?= base_url(); ?>pedidos/adicionar">
				<div class="row">
					<div class="col-sm-6">
				  <div class="form-group form-group-default">
                    <label>#Num.</label>
                    <input type="text" name="codigo_pedido" value="<?php echo date('dmYHis'); ?>-<?= $users[0]->userid; ?>#" class="form-control" readonly>
                  </div>
                  
					</div><div class="col-sm-6">
                  <div class="form-group form-group-default">
                      <label>Cliente</label>
                    <select class="cs-select cs-skin-slide cs-transparent form-control" data-init-plugin="cs-select" name="cliente"><option value="">-- SELECIONE --</option>
						
						  <?php foreach($clientes as $row) { 
              echo '<option value="'.$row->idclientes.'">'.$row->idclientes.' - '.$row->razao_social. ' - '.$row->cnpj.'</option>';  } ?>
						
                    </select>
                  </div>
                </div>
				</div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default input-group">
                      <label>Data do Pedido</label>
                      <input type="email" class="form-control" value="<?php echo date('d-m-Y H:i'); ?>" name='data' readonly>
                      <span class="input-group-addon">
                                          <i class="fa fa-calendar"></i>
                       </span>
                    </div>
				 
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Descrição</label>
                    <input type="text" name="descricao" class="form-control" placeholder="Exemplo: VENDA PARA JOZÈ INFORMATICA LTDA" required>
                  </div>
                </div>
              </div>
             
                      <div class="row">
                  <div class="col-sm-12">
                  
                  <button type="submit" class="btn btn-success btn-cons btn-animated from-left fa fa-mail-forward pull-right">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-mail-forward fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">Continuar</span>
                </button>
                <button type="button" class="btn btn-danger btn-cons btn-animated from-left fa fa-mail-reply pull-right">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-mail-reply fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">Voltar</span>
                </button>
                
					  
				  </div>              
  				</div>           
              </div>
              
                    </div>
                  </div>
                </div>
				
				
				</div>
				
				
	        </div>
</div>
		  </div>
		  </div></div>
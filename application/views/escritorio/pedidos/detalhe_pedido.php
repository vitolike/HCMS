      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">

<div class="container-fluid container-fixed-lg">
            <div id="rootwizard" class="m-t-50">
			  <ul class="nav nav-tabs nav-tabs-linetriangle nav-tabs-separator nav-stack-sm">
                <li class="">
                  <a data-toggle="tab"><i class="fa fa-shopping-cart tab-icon"></i> <span>Seu pedido</span></a>
                </li>
                <li class="active">
                  <a data-toggle="tab" ><i class="fa fa-list tab-icon"></i> <span>Detalhes do Pedido</span></a>
                </li>
                <li class="">
                  <a data-toggle="tab" ><i class="fa fa-credit-card tab-icon"></i> <span>Pagamento</span></a>
                </li>
                <li class="">
                  <a data-toggle="tab"><i class="fa fa-check tab-icon"></i> <span>Informações</span></a>
                </li>
              </ul>
				<div class="tab-content">
				 <div class="tab-pane padding-20 active slide-left">
                  <div class="row row-same-height">
                    <div class="col-md-4 b-r b-dashed b-grey sm-b-b">
						<div class="row">  <h5 class="font-montserrat all-caps bold">Num. Pedido:  <?php echo $pedido->codigo_pedido ?></h5>
						</div>
						 <div class="row"> <div class="container-sm-10">
                          <div class="row row-sm-height b-a b-grey ">
							  <div class="text-left col-middle padding-10">
                              <h5 class="font-montserrat all-caps small no-margin hint-text bold">Descrição</h5>
                              <h4 class="no-margin small"><?php echo $pedido->descricao ?>  </h4>
							  </div>
							  </div>         
						   </div></div>	
						
						
						
						<div class="row"> <div class="container-sm-10">
                          <div class="row row-sm-height b-a b-grey ">
							  <div class="text-left col-middle padding-10">
                              <h5 class="font-montserrat all-caps small no-margin hint-text bold">Cliente</h5>
                              <h4 class="no-margin small all-caps">		
						<p><b>Razão Social: </b><?php echo $pedido->razao_social ?></p>
						<p><b>CNPJ: </b><?php echo $pedido->cnpj ?></p>
						<p><b>Endereço: </b><?php echo $pedido->endereco ?></p>
						<p><b>Cidade: </b><?php echo $pedido->cidade ?></p>
						<p><b>Estado: </b><?php echo $pedido->estado ?></p>
						<p><b>Telefone: </b><?php echo $pedido->telefone ?></p>  </h4>
							  </div>
							  </div>         
						   </div></div>	
						 <div class="row"> <div class="container-sm-10">
                          <div class="row row-sm-height b-a b-grey ">
							  <div class="text-left col-middle padding-10">
                              <h5 class="font-montserrat all-caps small no-margin hint-text bold">Data</h5>
                              <h4 class="no-margin small"><?php echo $pedido->data ?>  </h4>
							  </div>
							  </div>         
						   </div></div>	
						
                       <div class="row"> <div class="container-sm-10">
                          <div class="row row-sm-height b-a b-grey ">
							  <div class="text-left col-middle padding-10">
                              <h5 class="font-montserrat all-caps small no-margin hint-text bold">Total</h5>
                              <h4 class="no-margin">R$ <?php echo number_format($pedido->total,2,',','.');?>  </h4>
							  </div>
							  </div>         
						   </div></div>			
						

                    </div>
                    <div class="col-md-8">
                      <div class="padding-30">
						  <form method="post" class="p-t-15" role="form" action="<?= base_url('pedidos/add_linhapedido/'.$pedido->idpedido) ?>">
            
              <div class="row clearfix">
				    <div class="col-sm-8">
				 <div class="form-group form-group-default required">
                    <label>Produto/Serviço</label>
                    <select class="cs-select cs-skin-slide cs-transparent form-control" data-init-plugin="cs-select" name="codigo_produto"><option value="">-- SELECIONE --</option>
						
						  <?php foreach($produto as $row) { 
              echo '<option value="'.$row->codigo_produto.'">'.$row->codigo_produto.' - '.$row->descricao.'</option>';  } ?>
						
                    </select>
					  </div>
				  </div>
              <div class="col-sm-2">
				   <div class="form-group form-group-default">
                    <label>Quantidade</label>
                    <input type="text" name="quantidade" class="form-control" required>
                  </div>
				  </div> 
				  <div class="col-sm-2"> <button type="submit" class="btn btn-info">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-plus fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">Adicionar</span>
                </button></div>
              </div>
               </form>  
				<div class="row">
					<div class="col-sm-12">
						                      <table class="table table-hover table-condensed" id="condensedTable">
                        <thead>
                          <tr>
                            <!-- NOTE * : Inline Style Width For Table Cell is Required as it may differ from user to user
												Comman Practice Followed
												-->
                            <th style="width:38%">Produto/Serviço</th>
                            <th style="width:10%">QT</th>
                            <th style="width:18%">Valor</th>
                             <th style="width:18%">Sub-total</th>
                             <th style="width:12%"th>
                          </tr>
                        </thead>
                        <tbody>
                         <?php foreach($linhas_pedido as $db): ?>
                          <tr>
                            <td class="v-align-middle semi-bold"><?= $db->codigo_produto; ?> - <?= $db->descricao; ?></td>
                            <td class="v-align-middle"><?= $db->quantidade; ?></td>
                            <td class="v-align-middle semi-bold">R$ <?php echo number_format($db->valor,2,',','.');?> 
                            </td>
                              <td class="v-align-middle semi-bold">R$ <?php echo number_format($db->sub_total,2,',','.');?> 
                            </td>
                            <td>
                             <button type="button" onclick="window.location.href='<?= base_url('pedidos/deletar_linha/'. $db->id) ?>'" class="btn btn-danger">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-trash fs-15"></i>
                               </span>
					 </button> 
                            </td>
                          </tr>
                          <?php endforeach; ?>  
                        </tbody>
                      </table>
					</div>					
				</div>    
						  
						  <button class="btn btn-success btn-cons btn-animated from-left fa fa-credit-card pull-right" type="button">
                        <span>Pagar <i class="fa fa-mail-forward fs-15"></i></span>
                      </button>
						  <button class="btn btn-danger btn-cons btn-animated from-left fa fa-times pull-right" type="button">
                        <span><i class="fa fa-times fs-15"></i> Cancelar</span>
                      </button>
                    </div>
                  </div>
                </div>
				
				
				</div>
				
				
	        </div>
</div>
		  </div>
		  </div></div>
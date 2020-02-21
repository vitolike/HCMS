 <!-- END HEADER -->
      <!-- START PAGE CONTENT WRAPPER -->
      <div class="page-content-wrapper ">
        <!-- START PAGE CONTENT -->
        <div class="content ">
          <!-- START JUMBOTRON -->
          <div class="jumbotron" data-pages="parallax">
            <div class="container-fluid container-fixed-lg sm-p-l-20 sm-p-r-20">
              <div class="inner">
                <ul class="breadcrumb">
                  <li>
                    <p>Cadastro</p>
                  </li>
                  <li><a href="#" class="active">Ver Cliente</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
			<div class="col-lg-3 col-md-3 ">
				                    <div class="panel panel-transparent">
                      <div class="panel-heading">
                        <div class="panel-title">PARA COMEÇAR
                        </div>
                      </div>
                      <div class="panel-body">
                        <h5>Cadastre o seu cliente, mesmo que seja somente uma prospecção,
									lembre-se de preencher todos os dados. </h5>
                        <br>
                        <div>
                          <div class="m-t-5 inline">
                          </div>
                          <div class="inline m-l-10">
                          </div>
                          <div class="row">
                          <div class="col-sm-6"><button type="button" class="btn btn-info">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-question fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">AJUDA</span>
                </button></div></div>
                        </div>
                      </div>
                    </div>
			</div>
          <div class="col-lg-7 col-md-10 ">
           
            <form id="form-register" name="form1" method="post" class="p-t-15" role="form" action="<?= base_url(); ?>escritorio/atualiza_cliente">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>CLIENTE ID</label>
                   <input type="text" name="idclientes" value="<?= $clientes[0]->idclientes; ?>" class="form-control" readonly>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>Razão Social</label>
                   <input type="text" name="razao_social" class="form-control" value="<?= $clientes[0]->razao_social; ?>" required>
                  </div>
                </div>
				</div>
               <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Descrição</label>
                    <input type="text" name="descricao" value="<?= $clientes[0]->descricao; ?>" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>CNPJ</label>
                    <input type="text" name="cnpj" class="form-control" value="<?= $clientes[0]->cnpj; ?>" onKeyPress="MascaraCNPJ(form1.cnpj);" 
maxlength="18" onBlur="ValidarCNPJ(form1.cnpj);" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Endereço</label>
                    <input type="text" name="endereco" value="<?= $clientes[0]->endereco; ?>" class="form-control"required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Bairro</label>
                   <input type="text" name="bairro" class="form-control" value="<?= $clientes[0]->bairro; ?>" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>CEP</label>
                   <input type="text" name="cep" value="<?= $clientes[0]->cep; ?>" class="form-control" required>
                  </div>
                </div>
				</div>
                         <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                       <label>Cidade</label>
                      <input type="text" name="cidade" value="<?= $clientes[0]->cidade; ?>" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                   <label>Estado</label>
                <input type="text" name="estado" value="<?= $clientes[0]->estado; ?>" class="form-control" required>
                  </div>
                </div>
				<div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Telefone</label>
                   <input type="text" name="telefone" value="<?= $clientes[0]->telefone; ?>" onKeyPress="MascaraTelefone(form1.telefone);" 
maxlength="14"  onBlur="ValidaTelefone(form1.telefone);" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>responsável</label>
                   <input type="text" name="responsavel" class="form-control" value="<?= $clientes[0]->responsavel; ?>" placeholder="Exemplo: Carlos José" required>
                  </div>
                </div>
				</div>
                      <div class="row">  <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>Registro alterado dia</label>
                   <input type="text" name="data_alteracao" class="form-control" value="<?php echo date('l jS \of F Y h:i:s A'); ?>" readonly>
                  </div></div>
                  <div class="col-sm-6">
                  <button type="submit" class="btn btn-success">
                              <span class="p-t-5 p-b-5">
                               <i class="fa  fa-save fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">SALVAR</span>
                </button>
                <button type="button" class="btn btn-warning">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-history fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">ALTERAR STATUS</span>
                </button>
                 <a href="<?= base_url('escritorio/delete_cliente/'. $clientes[0]->idclientes) ?>"><button type="button" class="btn btn-danger">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-trash fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">EXCLUIR</span>
					 </button></a>
                
					  
				  </div>              
  				</div>           
              </div>
              
            </form>
          </div>
                          
          </div>
  
        </div>

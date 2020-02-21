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
                    <p>Configurações</p>
                  </li>
                  <li><a href="#" class="active">Configurações do usuario</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
			<div class="col-lg-3 col-md-3 ">
				                    <div class="panel panel-transparent">
                      <div class="panel-heading">
                        <div class="panel-title">DICAS
                        </div>
                      </div>
                      <div class="panel-body">
                        <h5>Não esqueça de preencher corretamente todos os seus dados.</h5>
                        <br>
                        <div>
                          <div class="m-t-5 inline">
                          </div>
                          <div class="inline m-l-10">
                          </div>
                          <div class="row">
                          </div>
                        </div>
                      </div>
                    </div>
			</div>
          <div class="col-lg-7 col-md-10 ">
           
            <form id="form-register" name="form1" method="post" class="p-t-15" role="form" action="<?= base_url(); ?>escritorio/atualiza_usuario">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Nome</label>
                   <input type="text" name="nome" value="<?= $users[0]->nome; ?>" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>Sobrenome</label>
                   <input type="text" name="sobrenome" class="form-control" value="<?= $users[0]->sobrenome; ?>" required>
                  </div>
                </div>
				</div>
               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>E-mail</label>
                   <input type="text" name="email" value="<?= $users[0]->email; ?>" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>CPF</label>
                   <input type="text" name="cpf" class="form-control" value="<?= $users[0]->cpf; ?>" readonly>
                  </div>
                </div>
				</div>
              <div class="row">
                <div class="col-sm-8">
                  <div class="form-group form-group-default">
                    <label>Endereço</label>
                   <input type="text" name="endereco" value="<?= $users[0]->endereco; ?>" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group form-group-default">
                  <label>Cidade</label>
                   <input type="text" name="cidade" class="form-control" value="<?= $users[0]->cidade; ?>" required>
                  </div>
                </div>
				</div>
               <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Estado</label>
                   <input type="text" name="estado" value="<?= $users[0]->estado; ?>" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>País</label>
                   <input type="text" name="pais" class="form-control" value="<?= $users[0]->pais; ?>" required>
                  </div>
                </div>
				</div>
                <div class="row">
                <div class="col-sm-2">
                  <div class="form-group form-group-default">
                  <label>Telefone</label>
                   <input type="text" name="telefone" class="form-control" value="<?= $users[0]->telefone; ?>" required>
                  </div>
                </div>
                <div class="col-sm-2">
                  <div class="form-group form-group-default">
                  <label>CONTA</label>
                   <input type="text" name="tipodeconta" class="form-control" value="<?= $users[0]->tipodeconta; ?>" readonly>
                  </div>
                </div>
                 <div class="col-sm-2">
                <button type="button" class="btn btn-info">
                   <span class="p-t-5 p-b-5">
                     <i class="fa fa-unlock fs-15"></i>
                   </span>
                         <br>
                   <span class="fs-11 font-montserrat text-uppercase">UPGRADE</span>
                </button>
                  
                </div>
			<div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>ID DO SEU PATROCINADOR</label>
                   <input type="text" name="patrocinador" class="form-control" class="form-control" value="<?= $users[0]->patrocinador; ?> - <?= $patrocinador[0]->nome; ?> <?= $patrocinador[0]->sobrenome; ?>" readonly>
				</div></div></div>
                  <div class="row">
                  <div class="col-sm-12">
                  <button type="submit" class="btn btn-success">
                              <span class="p-t-5 p-b-5">
                               <i class="fa  fa-save fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">SALVAR</span>
                </button>
                <button type="button" class="btn btn-danger"  data-toggle="modal"  data-target="#ModalSenha">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-key fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">ALTERAR SENHA</span>
                </button>             
					  
				<button type="button" class="btn btn-complete"  data-toggle="modal"  data-target="#ModalConta">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-briefcase fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">DADOS FINANCEIROS</span>
                </button>     
                
           
					  
				     </div>
					</div>           
  				</div>           
              </div>
              
            </form>
          </div>
                          
          </div>
           <!-- MODAL STICK UP  -->
<div class="modal fade stick-up" id="ModalConta" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                <i class="pg-close fs-14"></i>
                </button>
                <h5>DADOS <span class="semi-bold">FINANCEIROS</span></h5>
                <p>Insira seus dados financeiros para recebimento.</p>
            </div>
            <div class="modal-body">
               
             <form id="form-register" name="form1" method="post" class="p-t-15" role="form" action="<?= base_url(); ?>escritorio/atualiza_infoadc_usuario">
                
                <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>BANCO</label>
                   <input type="text" name="banco" value="<?= $users[0]->banco; ?>" placeholder="Ex: Banco do Brasil" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>AGÊNCIA</label>
                   <input type="text" name="agencia" value="<?= $users[0]->agencia; ?>" placeholder="Ex: 00000-000" class="form-control" required>
                  </div>
						</div></div>
                <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>NUMERO DA CONTA</label>
                   <input type="text" name="numeroconta" placeholder="Ex: 00000-000" value="<?= $users[0]->numeroconta; ?>" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>CPF TITULAR</label>
                   <input type="text" name="cpf" class="form-control" value="<?= $users[0]->cpf; ?>" readonly>
                  </div>
                </div>
                </div>
                
                <div class="row"> 
                <div class="col-sm-4">
                 <button type="submit" class="btn btn-success">
                              <span class="p-t-5 p-b-5">
                               <i class="fa  fa-save fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">SALVAR</span>
					</button>
			    </div>
				</div>
                
                </form>   
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- END MODAL STICK UP  -->
           
           
           
            <!-- Modal -->
<div class="modal fade slide-up disable-scroll" id="ModalSenha" tabindex="-1" role="dialog" aria-labelledby="modalSlideUpLabel" aria-hidden="false">
    <div class="modal-dialog ">
        <div class="modal-content-wrapper">
        <div class="modal-content">
            <div class="modal-header clearfix text-left">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">
                  <i class="pg-close fs-14"></i>
                </button>
                <h5>ALTERAR <span class="semi-bold">SENHA</span></h5>
            </div>
            <div class="modal-body">
                Configure aqui sua nova senha.
                <form id="form-register" name="form1" method="post" class="p-t-15" role="form" action="<?= base_url(); ?>escritorio/atualiza_senha_usuario">
                
                    <div class="row">
                <div class="col-sm-4">
                  <div class="form-group form-group-default">
                    <label>NOVA SENHA</label>
                   <input type="password" name="senha" placeholder="Minimo 6 caracteres" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-4">
                  <div class="form-group form-group-default">
                  <label>CONFIRMAÇÃO</label>
                   <input type="password" name="senhac" class="form-control" required>
                  </div>
                </div>
                 <div class="col-sm-4">
                 <button type="submit" class="btn btn-success">
                              <span class="p-t-5 p-b-5">
                               <i class="fa  fa-save fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">SALVAR</span>
                </button
					 </div>
                
				</div>
                	
                	
                </form>
                
                
                
            </div>
        </div>
        </div>
        <!-- /.modal-content -->
    </div>
</div>
<!-- /.modal-dialog -->




  
        </div>
          
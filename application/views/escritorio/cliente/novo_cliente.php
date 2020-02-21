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
                  <li><a href="#" class="active">Novo Cliente</a>
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
									lembre-se de preencher todos os dados.</h5>
                        <br>
                        <div>
                          <div class="profile-img-wrapper m-t-5 inline">
                            <img width="35" height="35" src="<?= base_url(); ?>assets/img/profiles/avatar_small.jpg" alt="" data-src="<?= base_url(); ?>assets/img/profiles/avatar_small.jpg" data-src-retina="<?= base_url(); ?>assets/img/profiles/avatar_small2x.jpg">
                            <div class="chat-status available">
                            </div>
                          </div>
                          <div class="inline m-l-10">
                            <p class="small hint-text m-t-5">Diretor de Vendas
                              <br> isBLACKTIE</p>
                          </div>
                        </div>
                      </div>
                    </div>
			</div>
          <div class="col-lg-7 col-md-10 ">
           
            <form id="form-register" name="form1" method="post" class="p-t-15" role="form" action="<?= base_url(); ?>escritorio/add_cliente">
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Razão Social</label>
                    <input type="text" name="razao_social" placeholder="Exemplo: COMPUTARES BRASIL LTDA" class="form-control" required>
                  </div>
                </div>
				</div>
               <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Descrição</label>
                    <input type="text" name="descricao" placeholder="Uma breve descrição" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>CNPJ</label>
                    <input type="text" name="cnpj" class="form-control" placeholder="Exemplo: 00.000.000/0000=00" onKeyPress="MascaraCNPJ(form1.cnpj);" 
maxlength="18" onBlur="ValidarCNPJ(form1.cnpj);" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Endereço</label>
                    <input type="text" name="endereco" placeholder="Exemplo: Av Paulista, N50" class="form-control"required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Bairro</label>
                   <input type="text" name="bairro" class="form-control" placeholder="Exemplo: Bairro Centro" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>CEP</label>
                   <input type="text" name="cep" placeholder="Exemplo: 00000-000" class="form-control" required>
                  </div>
                </div>
				</div>
                         <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                       <label>Cidade</label>
                      <select name="cidade" class="full-width" data-placeholder="Selecione" data-init-plugin="select2">
                          <optgroup label="Cidades">
                       <?php foreach($cidades as $row) { 
              echo '<option value="'.$row->Nome.'">'.$row->Nome.'</option>';
            } ?>
                          </optgroup>

                        </select>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                   <label>Estado</label>
                   <select name="estado" class="full-width" data-placeholder="Selecione" data-init-plugin="select2">
                          <optgroup label="Estado/UF">
                       <?php foreach($cidades as $row) { 
              echo '<option value="'.$row->Uf.'">'.$row->Uf.'</option>';
            } ?>
                          </optgroup>
                        </select>
                  </div>
                </div>
				<div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Telefone</label>
                   <input type="text" name="telefone"  onKeyPress="MascaraTelefone(form1.telefone);" 
maxlength="14"  onBlur="ValidaTelefone(form1.telefone);" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>responsável</label>
                   <input type="text" name="responsavel" class="form-control" placeholder="Exemplo: Carlos José" required>
                  </div>
                </div>
				</div>
                      <div class="row">  <div class="col-sm-6">
                  <div class="form-group form-group-default">
                  <label>Registro criado dia</label>
                   <input type="text" name="data_criacao" class="form-control" value="<?php echo date('d-m-Y H:i'); ?>" readonly>
                  </div></div>
                  <div class="col-sm-6">
                  <button type="submit" class="btn btn-success">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-plus fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">Adicionar</span>
                </button>
                <button type="button" class="btn btn-info">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-question fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">Ajuda</span>
                </button>
                
					  
				  </div>              
  				</div>           
              </div>
              
            </form>
          </div>
                          
          </div>
  
        </div>

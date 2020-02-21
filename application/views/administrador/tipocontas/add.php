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
                    <p>Propriedades</p>
                  </li>
                  <li><a href="#" class="active">Novo Tipo de Conta</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 ">
            <form id="form-register" method="post" class="p-t-15" role="form" action="<?= base_url(); ?>administrador/add_tipodeconta">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group form-group-default">
                    <label>Codigo de Tipo de Conta</label>
                    <input type="text" name="codigo_conta" class="form-control">
                  </div>
                </div>
                <div class="col-sm-9">
                  <div class="form-group form-group-default">
                    <label>Descrição</label>
                    <input type="text" name="descricao" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Porcentagem</label>
                    <input type="text" name="porcentagem" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group form-group-default">
                    <label>Valor</label>
                   <input type="text" name="valor" class="form-control">
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Dias Vencimento/Duração</label>
                     <input type="text" name="diasvencimento" class="form-control">
                  </div>
                </div>
				</div>
                <div class="row">
                <div class="col-sm-6">
                 <button class="btn btn-info btn-cons m-t-15" type="submit">Adicionar</button> 
                 <button class="btn btn-danger btn-cons m-t-15" type="submit">Limpar</button> 
                </div>
				</div>
                
              </div>
              
            </form>
          </div>
          </div>
  
        </div>

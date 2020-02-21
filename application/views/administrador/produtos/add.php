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
                    <p>CADASTRO</p>
                  </li>
                  <li><a href="#" class="active">NOVO PRODUTO</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 ">
            <form id="form-register" method="post" class="p-t-15" role="form" action="<?= base_url(); ?>administrador/add_produto">
			<div class="row">
                <div class="col-sm-3">
                  <div class="form-group form-group-default">
                    <label>Codigo</label>
                    <input type="text" name="codigo_produto" class="form-control">
                  </div>
                </div>
                <div class="col-sm-9">
                  <div class="form-group form-group-default">
                    <label>Data</label>
                    <input type="text" value="<?php echo date('l jS \of F Y h:i:s A'); ?>" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group form-group-default">
                    <label>Nome</label>
                    <input type="text" name="nome" class="form-control">
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
                 <div class="form-group form-group-default input-group">
                        <label>Valor</label>
                        <input type="text" name="valor" data-a-sign="R$ " class="autonumeric form-control">
                        <span class="input-group-addon">R$</span>
                      </div>
                </div>
              </div>
                <div class="row">
                <div class="col-sm-6">
                  <button type="submit" class="btn btn-danger">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-plus fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">Adicionar</span>
                </button>
                <button type="button" onclick="goBack()" class="btn btn-menu">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-question fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">Voltar</span>
                </button>
                
					  
				  </div>
				</div>
                
              </div>
              
            </form>
          </div>
          </div>
  
        </div>
        
        
        
        <script> 
			function goBack() 
			{ 
			window.history.back();
     		}
        </script>
        

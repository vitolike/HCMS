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
                  <li><a href="#" class="active">Nova Propriedade</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <div class="col-lg-7 col-md-6 ">
            <form id="form-register" method="post" class="p-t-15" role="form" action="<?= base_url(); ?>administrador/add_propriedade">
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group form-group-default">
                    <label>ID da Propriedade</label>
                    <input type="text" name="id_prop" class="form-control">
                  </div>
                </div>
                <div class="col-sm-9">
                  <div class="form-group form-group-default">
                    <label>Descrição</label>
                    <input type="text" name="description" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Valor</label>
                    <input type="text" name="value" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-3">
                  <div class="form-group form-group-default">
                    <label>Status</label>
                    <input type="checkbox" name="status" data-init-plugin="switchery" data-size="small" data-color="primary" checked="checked" />
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Data</label>
                    <input type="text" name="status_date" class="form-control" value="<?php echo date('l jS \of F Y h:i:s A'); ?>" readonly>
                  </div>
                </div>
                <div class="col-sm-3">
                  <div class="form-group form-group-default">
                    <label>Tipo</label>
                    <input type="text" name="type" class="form-control">
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

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
                    <p>Resumo</p>
                  </li>
                  <li><a href="#" class="active">Lista de Pedidos</a>
                  </li>
                </ul>

              </div>
            </div>
          </div><div class="container-fluid container-fixed-lg">
         
            <div class="panel panel-transparent">
              <div class="panel-heading">

                <div class="btn-group pull-right m-b-10">
                
                
                <div class="btn-group btn-group-justified">
                          <div class="btn-group">
        <button type="button" onclick="window.location.href='<?= base_url(); ?>pedidos/novo'" class="btn btn-success">
                              <span class="p-t-5 p-b-5">
                                                    <i class="fa fa-plus fs-15"></i>
                              </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">NOVO PEDIDO</span>
                            </button>
                          </div>
                          <div class="btn-group">
                            <button type="button" class="btn btn-success">
                              <span class="p-t-5 p-b-5">
                                                    <i class="fa fa-question fs-15"></i>
                                                </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">AJUDA</span>
                            </button>
                          </div>
                        </div>
                      </div>
                
                </div>
                <div class="clearfix"></div>
              </div>
              <div class="panel-body">
                <div class="table-responsive">
                  <table class="table table-hover" id="basicTable">
                    <thead>
                      <tr>
                        <th style="width:20%">#Num.</th>
                        <th style="width:20%">Data do Pedido</th>
                        <th style="width:20%">Descrição</th>
                        <th style="width:29%">Cliente</th>
                        <th style="width:15%">Status</th>
                        <th style="width:15%"></th>
                      </tr>
                    </thead>
                    <tbody>
                   
                     <?php foreach($pedido as $db): ?>
                      <tr>
                        <td class="v-align-middle ">
                          <p><?= $db->codigo_pedido; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $db->data; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $db->descricao; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $db->cliente; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $db->status; ?></p>
                        </td>
                        <td class="v-align-middle">
							<p></p>
                        </td>
                      </tr>
                    <?php endforeach; ?>  

                    </tbody>
                  </table>
                </div>
              </div>
            </div>
                          
          </div>
  
        </div>

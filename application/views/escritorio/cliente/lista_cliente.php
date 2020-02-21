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
                  <li><a href="#" class="active">Lista de Clientes</a>
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
        <button type="button" onclick="window.location.href='<?= base_url(); ?>escritorio/novo_cliente'" class="btn btn-success">
                              <span class="p-t-5 p-b-5">
                                                    <i class="fa fa-plus fs-15"></i>
                              </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">CADASTRAR CLIENTE</span>
                            </button>
                          </div>
                          <div class="btn-group">
                            <button type="button" class="btn btn-success">
                              <span class="p-t-5 p-b-5">
                                                    <i class="fa fa-print fs-15"></i>
                                                </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">IMPRIMIR/BAIXAR LISTA</span>
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
                        <th style="width:20%">Razão Social</th>
                        <th style="width:20%">Descrição</th>
                        <th style="width:29%">CNPJ</th>
                        <th style="width:15%">Status</th>
                        <th style="width:15%"></th>
                      </tr>
                    </thead>
                    <tbody>
                   
                     <?php foreach($clientes as $db): ?>
                      <tr>
                        <td class="v-align-middle ">
                          <p><?= $db->razao_social; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $db->descricao; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $db->cnpj; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $db->status; ?></p>
                        </td>
                        <td class="v-align-middle">
							<p><button type="button" onclick="window.location.href='<?= base_url('escritorio/ver_cliente/'.$db->idclientes) ?>'" class="btn btn-complete">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-edit fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">Editar</span>
								</button></p>
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

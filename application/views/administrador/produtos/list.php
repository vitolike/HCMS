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
                  <li><a href="#" class="active">PRODUTOS CADASTRADOS</a>
                  </li>
                </ul>

              </div>
            </div>
          </div>
          <!-- END JUMBOTRON -->
          <!-- START CONTAINER FLUID -->
          <div class="container-fluid container-fixed-lg">
         
            <div class="panel panel-transparent">
              <div class="panel-heading">

                <div class="btn-group pull-right m-b-10">
                
                <div class="btn-group btn-group-justified">
                          <div class="btn-group">
                            <button onclick="window.location.href='<?= base_url(); ?>/administrador/novo_produto'" type="button" class="btn btn-default">
                              <span class="p-t-5 p-b-5">
                                                    <i class="fa fa-plus fs-15"></i>
                                                </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">NOVO PRODUTO</span>
                            </button>
                          </div>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default">
                              <span class="p-t-5 p-b-5">
                                                    <i class="fa fa-history fs-15"></i>
                                                </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">LOGS</span>
                            </button>
                          </div>
                          <div class="btn-group">
                            <button type="button" class="btn btn-default">
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
                        <th style="width:20%">ID</th>
                        <th style="width:60%">DESCRIÇÃO</th>
                        <th style="width:20%">VALOR</th>
                        <th style="width:15%"></th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php foreach($produto as $prop) {?>
                      <tr>
                        <td class="v-align-middle ">
                          <p><?= $prop->codigo_produto; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $prop->descricao; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $prop->valor; ?></p>
                        </td>
                        <td class="v-align-middle">
                        <button type="button" class="btn btn-complete">
                              <span class="p-t-5 p-b-5">
                               <i class="fa fa-edit fs-15"></i>
                               </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">Editar</span>
                </button>
                        </td>
                      </tr>
                      <?php }?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

            <!-- BEGIN PlACE PAGE CONTENT HERE -->
            <!-- END PLACE PAGE CONTENT HERE -->
          </div>
  
        </div>

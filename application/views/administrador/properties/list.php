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
                  <li><a href="#" class="active">Lista de Propriedades</a>
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
                            <a href="<?= base_url(); ?>/administrador/nova_propriedade"><button type="button" class="btn btn-default">
                              <span class="p-t-5 p-b-5">
                                                    <i class="fa fa-plus fs-15"></i>
                                                </span>
                              <br>
                              <span class="fs-11 font-montserrat text-uppercase">NOVA PROPRIEDADE</span>
                            </button></a>
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
                        <th style="width:20%">DESCRIÇÃO</th>
                        <th style="width:29%">VALOR</th>
                        <th style="width:15%">STATUS</th>
                        <th style="width:15%">ULTIMA ATUALIZAÇÃO</th>
                      </tr>
                    </thead>
                    <tbody>
                     <?php foreach($prop as $prop) {?>
                      <tr>
                        <td class="v-align-middle ">
                          <p><?= $prop->id_prop; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $prop->description; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $prop->value; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $prop->status; ?></p>
                        </td>
                        <td class="v-align-middle">
                          <p><?= $prop->status_date; ?></p>
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

  <body class="fixed-header ">
    <!-- BEGIN SIDEBPANEL-->
    <nav class="page-sidebar" data-pages="sidebar">
      <!-- BEGIN SIDEBAR MENU TOP TRAY CONTENT-->
      
      <div class="sidebar-header">
      <img src="<?= base_url(); ?>assets/img/logo4-mn.png" alt="logo">
      </div>
      <!-- END SIDEBAR MENU HEADER-->
      <!-- START SIDEBAR MENU -->
      <div class="sidebar-menu">
        <!-- BEGIN SIDEBAR MENU ITEMS-->
        <ul class="menu-items">
          <li class="m-t-30 ">
            <a href="index.html" class="detailed">
              <span class="title">RESUMO</span>
              <span class="details">Novidades!</span>
            </a>
            <span class="bg-danger icon-thumbnail"><i class="pg-home"></i></span>
			</li>
           <li>
            <a href="javascript:;"><span class="title">PEDIDOS</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-layouts2"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="default_layout.html">NOVO PEDIDO</a>
                <span class="icon-thumbnail"><i class="pg-plus"></i></span>
              </li>
              <li class="">
                <a href="secondary_layout.html">LISTAR TODOS</a>
                <span class="icon-thumbnail">L</span>
              </li>
                <li class="">
                <a href="secondary_layout.html">ACOMPANHAR</a>
                <span class="icon-thumbnail">A</span>
              </li>
            </ul>
          </li>
            <li>
            <a href="javascript:;"><span class="title">CLIENTES</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-layouts"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="default_layout.html">NOVO CLIENTES</a>
                <span class="icon-thumbnail"><i class="pg-plus"></i></span>
              </li>
              <li class="">
                <a href="secondary_layout.html">LISTAR TODOS</a>
                <span class="icon-thumbnail"><i class="pg-contact_book"></i></span>
              </li>
             </ul>
          </li>
          </li>
            <li>
            <a href="javascript:;"><span class="title">AJUDA</span>
            <span class=" arrow"></span></a>
            <span class="icon-thumbnail"><i class="pg-folder_alt"></i></span>
            <ul class="sub-menu">
              <li class="">
                <a href="default_layout.html">DIVULGAÇÃO</a>
                <span class="icon-thumbnail"><i class="pg-plus"></i></span>
              </li>
              <li class="">
                <a href="secondary_layout.html">MATERIAIS</a>
                <span class="icon-thumbnail"><i class="pg-contact_book"></i></span>
              </li>
               <li class="">
                <a href="secondary_layout.html">VIDEO CURSOS</a>
                <span class="icon-thumbnail"><i class="pg-contact_book"></i></span>
              </li>
             </ul>
          </li>
          
        </ul>
        <div class="clearfix"></div>
      </div>
      <!-- END SIDEBAR MENU -->
    </nav>
    <!-- END SIDEBAR -->
    <!-- END SIDEBPANEL-->
    <!-- START PAGE-CONTAINER -->
    <div class="page-container ">
      <!-- START HEADER -->
      <div class="header ">
        <!-- START MOBILE CONTROLS -->
        <div class="container-fluid relative">
          <!-- LEFT SIDE -->
          <div class="pull-left full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link toggle-sidebar visible-sm-inline-block visible-xs-inline-block padding-5" data-toggle="sidebar">
                <span class="icon-set menu-hambuger"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
          <div class="pull-center hidden-md hidden-lg">
            <div class="header-inner">
              <div class="brand inline">
                 <img src="<?= base_url(); ?>assets/img/logo3.png" alt="logo" width="150" height="32">
              </div>
            </div>
          </div>
          <!-- RIGHT SIDE -->
          <div class="pull-right full-height visible-sm visible-xs">
            <!-- START ACTION BAR -->
            <div class="header-inner">
              <a href="#" class="btn-link visible-sm-inline-block visible-xs-inline-block" data-toggle="quickview" data-toggle-element="#quickview">
                <span class="icon-set menu-hambuger-plus"></span>
              </a>
            </div>
            <!-- END ACTION BAR -->
          </div>
        </div>
        <!-- END MOBILE CONTROLS -->
        <div class=" pull-left sm-table hidden-xs hidden-sm">
          <div class="header-inner">
            <div class="brand inline">
              <img src="<?= base_url(); ?>assets/img/logo2-mn.png" alt="logo">
            </div>
            
            <!-- END NOTIFICATIONS LIST -->
           </div>
        </div>
        <div class=" pull-right">
         
        </div>
        <div class=" pull-right">
          <!-- START User Info-->
          <div class="visible-lg visible-md m-t-10">
            <div class="pull-left p-r-10 p-t-10 fs-16 font-heading">
              <span class="semi-bold"><?= $users[0]->nome; ?></span> <span class="text-master"><?= $users[0]->sobrenome; ?></span>
            </div>
            <div class="dropdown pull-right">
              <button class="profile-dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <span class="thumbnail-wrapper d32 circular inline m-t-5">
                <img src="<?= base_url(); ?>assets/img/profiles/avatar.jpg" alt="" data-src="<?= base_url(); ?>assets/img/profiles/avatar.jpg" data-src-retina="<?= base_url(); ?>assets/img/profiles/avatar_small2x.jpg" width="32" height="32">
            </span>
              </button>
              <ul class="dropdown-menu profile-dropdown" role="menu">
                <li><a href="#"><i class="pg-settings_small"></i> Configurações</a>
                </li>
                <li><a href="#"><i class="pg-outdent"></i> Feedback</a>
                </li>
                <li><a href="#"><i class="pg-signals"></i> Ajuda</a>
                </li>
                <li class="bg-master-lighter">
                  <a href="<?= base_url(); ?>escritorio/sair" class="clearfix">
                    <span class="pull-left">Sair</span>
                    <span class="pull-right"><i class="pg-power"></i></span>
                  </a>
                </li> 
              </ul>
            </div>
          </div>
          <!-- END User Info-->
        </div>
      </div>
<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>isBLACKTIE - Entrar</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no, shrink-to-fit=no" />
    <link rel="apple-touch-icon" href="<?= base_url(); ?>pages/ico/60.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url(); ?>pages/ico/76.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?= base_url(); ?>pages/ico/120.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?= base_url(); ?>pages/ico/152.png">
    <link rel="icon" type="image/x-icon" href="favicon.ico" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-touch-fullscreen" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="default">
    <meta content="" name="description" />
    <meta content="" name="author" />
    <link href="<?= base_url(); ?>assets/plugins/pace/pace-theme-flash.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/boostrapv3/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/font-awesome/css/font-awesome.css" rel="stylesheet" type="text/css" />
    <link href="<?= base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url(); ?>assets/plugins/bootstrap-select2/select2.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url(); ?>assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="<?= base_url(); ?>pages/css/pages-icons.css" rel="stylesheet" type="text/css">
    <link class="main-stylesheet" href="<?= base_url(); ?>pages/css/pages.css" rel="stylesheet" type="text/css" />
    <!--[if lte IE 9]>
        <link href="pages/css/ie9.css" rel="stylesheet" type="text/css" />
    <![endif]-->
    <script type="text/javascript">
    window.onload = function()
    {
      // fix for windows 8
      if (navigator.appVersion.indexOf("Windows NT 6.2") != -1)
        document.head.innerHTML += '<link rel="stylesheet" type="text/css" href="pages/css/windows.chrome.fix.css" />'
    }
    </script>
  </head>
  <body class="fixed-header ">
    <div class="login-wrapper ">
      <!-- START Login Background Pic Wrapper-->
      <div class="bg-pic">
        <!-- START Background Pic-->
        <img src="<?= base_url(); ?>assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src="<?= base_url(); ?>assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" data-src-retina="<?= base_url(); ?>assets/img/demo/new-york-city-buildings-sunrise-morning-hd-wallpaper.jpg" alt="" class="lazy">
        <!-- END Background Pic-->
        <!-- START Background Caption-->
        <div class="bg-caption pull-bottom sm-pull-bottom text-white p-l-20 m-b-20">
          <h2 class="semi-bold text-white">
					Cada sonho que você deixa pra trás, é um pedaço do seu futuro que deixa de existir.</h2>
       <p class="small no-margin pull-left sm-pull-reset">
              <span class="hint-text">Copyright &copy; <?php echo date("Y")?> </span>
              <span class="font-montserrat">isBlackTie</span>.
              <span class="hint-text">All rights reserved. </span>
              
       </p>
        </div>
        <!-- END Background Caption-->
      </div>
      <!-- END Login Background Pic Wrapper-->
      <!-- START Login Right Container-->
      <div class="login-container bg-white">
        <div class="p-l-50 m-l-20 p-r-50 m-r-20 p-t-50 m-t-30 sm-p-l-15 sm-p-r-15 sm-p-t-40">
          <img src="<?= base_url(); ?>assets/img/logo3.png" alt="logo">
         
         <h5>Obrigado por se cadastrar, agora você já pode entrar na sua conta.</h5>
         
       
          <form id="form-login" class="p-t-15" method="post" role="form" action="<?= base_url(); ?>main/logar">
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>E-mail</label>
              <div class="controls">
                <input type="text" name="email" placeholder="Ex: contato@eu.com" class="form-control" required>
              </div>
            </div>
            <!-- END Form Control-->
            <!-- START Form Control-->
            <div class="form-group form-group-default">
              <label>Senha</label>
              <div class="controls">
                <input type="password" class="form-control" name="senha" placeholder="Sua Senha" required>
              </div>
            </div>
            <!-- START Form Control-->
            
            <!-- END Form Control-->
            <button class="btn btn-info btn-cons m-t-10" type="submit">Entrar</button>
            <div class="row">
             
            </div>
          </form>
          
          
         </div>
      </div>
      <!-- END Login Right Container-->
    </div>
    <!-- BEGIN VENDOR JS -->
    <script src="<?= base_url(); ?>assets/plugins/pace/pace.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery-1.11.1.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/modernizr.custom.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/boostrapv3/js/bootstrap.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/jquery/jquery-easy.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/jquery-unveil/jquery.unveil.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/jquery-bez/jquery.bez.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/jquery-ios-list/jquery.ioslist.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/jquery-actual/jquery.actual.min.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/jquery-scrollbar/jquery.scrollbar.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/bootstrap-select2/select2.min.js"></script>
    <script type="text/javascript" src="<?= base_url(); ?>assets/plugins/classie/classie.js"></script>
    <script src="<?= base_url(); ?>assets/plugins/switchery/js/switchery.min.js" type="text/javascript"></script>
    <script src="<?= base_url(); ?>assets/plugins/jquery-validation/js/jquery.validate.js" type="text/javascript"></script>
    <!-- END VENDOR JS -->
    <script src="<?= base_url(); ?>pages/js/pages.min.js"></script>
    <script>
    $(function()
    {
      $('#form-login').validate()
    })
    </script>
  </body>
</html>
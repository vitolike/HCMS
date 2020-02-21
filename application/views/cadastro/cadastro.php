<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="content-type" content="text/html;charset=UTF-8" />
    <meta charset="utf-8" />
    <title>isBLACKTIE - Cadastro</title>
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
    <script src="<?= base_url(); ?>assets/js/valida_cpf_cnpj.js"></script>
  </head>
  <body class="fixed-header ">
    <div class="register-container full-height sm-p-t-30">
      <div class="container-sm-height full-height">
        <div class="row row-sm-height">
          <div class="col-sm-12 col-sm-height col-middle">
            <img src="<?= base_url(); ?>assets/img/logo3.png" alt="logo" width="150" height="32">
            <h5>Para começar se cadastre em nosso sistema.</h5>
           
            <form name="form1" id="form-register" method="post" class="p-t-15" role="form" action="<?= base_url(); ?>cadastro/novo">
              <div class="row">
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Nome</label>
                    <input type="text" name="nome" placeholder="John" class="form-control" required>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Sobre nome</label>
                    <input type="text" name="sobrenome" placeholder="Smith" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Senha</label>
                    <input type="password" name="senha" placeholder="Minimo 6 caracteres" class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Email</label>
                    <input type="email" name="email" placeholder="O Email que você mais usa." class="form-control" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>CPF</label>
                    <input type="text" name="cpf"  placeholder="ex: 000.000.000-00" class="form-control" onBlur="ValidarCPF(form1.cpf);" 
onKeyPress="MascaraCPF(form1.cpf);" maxlength="14" required>
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col-sm-12">
                  <div class="form-group form-group-default">
                    <label>Endereço</label>
                    <input type="text" name="endereco" placeholder="ex: Rua. Que Sobe e Desçe, N:00" class="form-control">
                  </div>
                </div>
				</div>
              <div class="row">
               <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Cidade</label>
                    <input type="text" name="cidade" placeholder="ex: São Paulo" class="form-control">
                  </div>
                </div>
              
               <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Estado</label>
                    <input type="text" name="estado" placeholder="ex: São Paulo" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row">
               <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>Telefone</label>
                    <input type="text" name="telefone" placeholder="ex: (11) 5555-5555" id="phone" class="form-control" onKeyPress="MascaraTelefone(form1.telefone);" maxlength="14"  onBlur="ValidaTelefone(form1.telefone);">
                  </div>
                </div>
              
               <div class="col-sm-6">
                  <div class="form-group form-group-default">
                    <label>ID do Patrocinador</label>
                    <input type="number" name="patrocinador" placeholder="ex: 100" class="form-control">
                  </div>
                </div>
              </div>
              <div class="row m-t-10">
                <div class="col-md-6">
                  <p>Ao clicar no botão Criar Conta você está de acordo com nossos termos de <a href="#" class="text-info small">privacidade</a> e contrato de uso.</p>
                </div>
                <div class="col-md-6 text-right">
                 <button class="btn btn-info btn-cons m-t-15" type="submit">Criar conta</button> 
                </div>
              </div>
              
            </form>
          </div> 
        </div>
      </div>
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
      $('#form-register').validate()
    })
    </script>
  </body>
</html>
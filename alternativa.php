<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="icon" href="assets/img/icon.png">
  <title>
    POEMAS ALEATÓRIOS
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.css?v=2.2.0" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent " color-on-scroll="300">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="#" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom">
          POEMAS ALEATÓRIOS
        </a>
        <button class="navbar-toggler navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
        <li class="nav-item">
            <a href="home.php" class="btn btn-dark btn-round">Home</a>
          </li>  
        <li class="nav-item">
            <a class="nav-link" rel="tooltip" title="Star on GitHub" data-placement="bottom" href="https://www.github.com/tijhemerson" target="_blank">
              <i class="fa fa-github"></i>
              <p class="d-lg-none">GitHub</p>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link">
            <?php
            if(isset($_SESSION['logado'])):
            ?>
              <p>Usuário Logado</p>
            </a>
            <?php else: header("location:login-page.php");?>
          </li>
          <?php endif;?>
          <li class="nav-item">
            <a href="sair.php" class="btn btn-warning btn-round">Sair</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="page-header" data-parallax="true" style="background-image: url('assets/img/back.jpg');">
    <div class="filter"></div>
    <div class="container">
      <div class="motto text-center">
        <div class="col-sm-3 col-md-2 mr-auto ml-auto">
          <img src="./assets/img/pic.png" class="img-circle img-no-padding img-responsive" alt="Rounded Image">
        </div>
        <h1>RANDOM POEMS</h1>
        <h3>Melhor que o wattpad.</h3>
        <br/>
      </div>
    </div>
  </div>
  <div class="main">
    <div class="section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <h2 class="title">Quem somos?</h2>
            <h5 class="description">O RANDOM POEMS é uma comunidade feita para você, poeta, compartilhar suas obras.
              Acesse e poste seus poemas.</h5>
          </div>
        </div>
        <br/>
        <br/>
        <div class="row">
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-warning">
                <i class="nc-icon nc-album-2"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Layout bonito.</h4>
                <p class="description">Feito com bootstrap 4, com intúito de ser agradável aos</p>
              </div>
            </div>
          </div>
          
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-warning">
                <i class="nc-icon nc-tablet-2"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Responsivo</h4>
                <p>Você pode acessar de qualquer dispositivo com acesso à internet.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-warning">
                <i class="nc-icon nc-bulb-63"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Novas ideias</h4>
                <p>Use outras obras como inspiração para criar as suas.</p>
              </div>
            </div>
          </div>
          <div class="col-md-3">
            <div class="info">
              <div class="icon icon-warning">
                <i class="nc-icon nc-world-2"></i>
              </div>
              <div class="description">
                <h4 class="info-title">Delightful design</h4>
                <p>Find unique and handmade delightful designs related items directly from our sellers.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <footer class="footer   footer-white ">
    <div class="container">
      <div class="row">
        <div class="credits ml-auto">
          <span class="copyright">
            ©
            <script>
              document.write(new Date().getFullYear())
              </script>, #VouTirarDez <i class="fa fa-heart heart"></i> by J&J Corporation
          </span>
        </div>
      </div>
    </div>
  </footer>
  
  <!-- Modal -->
  <div class="modal bd-example-modal-sm" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Login</h5>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Email">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password">
              <div style="width: 100%; margin-top: 1.5em">
                <button class="btn btn-warning btn-block btn-round">Login</button>
                <button style="border: none; background: none; outline: none " data-toggle="modal"  data-target=".bd-example-modal-sm2" class="nav-link">Cadastre-se</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal bd-example-modal-sm2" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalCenterTitle">Register</h5>
        </div>
        <div class="modal-body">
          <div class="container">
            <div class="row">
              <label>Nome</label>
              <input type="text" class="form-control" placeholder="Nome">
              <label>Email</label>
              <input type="text" class="form-control" placeholder="Email">
              <label>Password</label>
              <input type="password" class="form-control" placeholder="Password">
              <div style="width: 100%; margin-top: 1.5em">
                <button class="btn btn-warning btn-block btn-round">Login</button>
                <button style="border: none; background: none; outline: none " data-toggle="modal2" data-target="#exampleModalCenter2" class="nav-link">Já tenho uma conta</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>





  <!--   Core JS Files   -->
  <script src="assets/js/core/jquery.min.js" type="text/javascript"></script>
  <script src="assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="assets/js/core/bootstrap.min.js" type="text/javascript"></script>
  <!--  Plugin for Switches, full documentation here: http://www.jque.re/plugins/version3/bootstrap.switch/ -->
  <script src="assets/js/plugins/bootstrap-switch.js"></script>
  <!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
  <script src="assets/js/plugins/nouislider.min.js" type="text/javascript"></script>
  <!--  Plugin for the DatePicker, full documentation here: https://github.com/uxsolutions/bootstrap-datepicker -->
  <script src="assets/js/plugins/moment.min.js"></script>
  <script src="assets/js/plugins/bootstrap-datepicker.js" type="text/javascript"></script>
  <!-- Control Center for Paper Kit: parallax effects, scripts for the example pages etc -->
  <script src="assets/js/paper-kit.js?v=2.2.0" type="text/javascript"></script>
  <!--  Google Maps Plugin    -->
  <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
</body>

</html>
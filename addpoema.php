<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <link rel="icon" href="assets/img/icon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <title>
    POEMAS ALEATÓRIOS
  </title>
  <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
  <!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
  <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
  <!-- CSS Files -->
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
  <link href="assets/css/paper-kit.css" rel="stylesheet" />
  <link href="assets/css/meu.css" rel="stylesheet" />
  <!-- CSS Just for demo purpose, don't include it in your project -->
  <link href="assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="landing-page sidebar-collapse">
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg fixed-top navbar-transparent" color-on-scroll="-1">
    <div class="container">
      <div class="navbar-translate">
        <a class="navbar-brand" href="alternativa.php" rel="tooltip" title="Coded by Creative Tim" data-placement="bottom" >
          POEMAS ALEATÓRIOS
        </a>
        <button class="navbar-toggler navbar-toggler" type="butto" data-toggle="collapse" data-target="#navigation" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-bar bar1"></span>
          <span class="navbar-toggler-bar bar2"></span>
          <span class="navbar-toggler-bar bar3"></span>
        </button>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navigation">
        <ul class="navbar-nav">
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
 



  <div class="main">
    <div class="section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="lista">
                <div class="card bg-warning">
              <div class="card-body">
              <form method="post" action="tratarpoema.php">
              <div class="form-group">
            <label for="poema">Poema</label>
            <input type="text" class="form-control" id="autor"  placeholder="Entre com o seu nome" name="autor" required>
            <input type="text" class="form-control" id="titulo"  placeholder="Entre com o título do seu poema" name="titulo" required>
            <textarea type="text" class="form-control" id="poema" placeholder="Escreva seu poema aqui" rows="6" name="poema" ></textarea>
            </div>
            </div>
            <button class="btn btn-outline-default btn-block btn-round">Enviar poema</button>
          </div>
          </form>
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
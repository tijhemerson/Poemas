<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8" />
  <link rel="apple-touch-icon" sizes="76x76" href="assets/img//apple-icon.png">
  <link rel="icon" type="image/png" href="assets/img/favicon.png">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
  <link rel="icon" href="assets/img/icon.png">
  <title>
    RANDOM POEMS
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
            <a href="sair.php" class="btn btn-warning btn-round">Sair
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  <div class="main">
    <div class="section text-center">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ml-auto mr-auto">
            <div class="lista" id="addpoema">
              <a href="#">
                <div class="card bg-warning">
                  <div class="card-body" id="addpoema">
                  <?php
              try{
                require('conexaopoema.php');
                // A variável $pdo, usada a seguir, está vindo do conexao.php

                $consulta = $pdo->prepare("SELECT * FROM poema");
                $consulta->execute();

                $poemas = $consulta->fetchAll();
                
                foreach($poemas as $poema) {
               echo " <h2>{$poema["autor"]}</h2>
               <h5 >{$poema["titulo"]}</h5>
               <p >{$poema["poema"]}</p>
               <div>--------------------------------------------------------------------------</div>
               ";
                  
              }

                } catch(Exception $e) {
                die("Erro de banco de dados: " . $e->getMessage());
                } 



            ?>
                    <h2>Brendow H. Godoi</h2>
                    <h5 >Vida</h5>
                    <p >A vida é mais
                     <br> do que só trabalhar.
                      <br> do que só se sentir triste.
                      <br> do que só pagar boletos.
                      <br> do que só se contentar.

                      <br> A vida é mais do que 
                      <br> essa merda que todo mundo
                      <br> tá acostumado.</p>
                      <div>--------------------------------------------------------------------------</div>
                    
                    <h2>Brendow H. Godoi</h2>
                    <h5 class="card-title">Castigo</h5>
                    <p class="card-text">Alguns amigos meus morreram atropelados ou com câncer. Pessoas boas, bem melhores do que eu fora em toda a vida. Eu os vi mortos em seus caixões. suas coroas de dálias, orquídeas e rosas. tragicamente jovens, bons e promissores. De certa forma, Deus os levou antes de mim. mesmo eu sendo um grande filho da puta, bêbado e moderadamente viciado em cocaína, ele os levou e me deixou aqui. Talvez Deus queira que eu entenda algo. Ou talvez, viver seja um castigo para almas hediondas feito a minha.</p>
                    <div>--------------------------------------------------------------------------</div>
                    
                    <h2>Brendow H. Godoi</h2>
                    <h5 class="card-title">Punhos cerrados</h5>
                    <p class="card-text">Hoje pela manhã, assim que acordei, eu senti falta de algo, como quem esquece a carteira no ônibus. Olhei no espelho e tentei encontrar algum vestígio de esperança em alguma curva da minha feição cansada e desmotivada. Falhei. Então, eu me senti encurralado por cada um dos meus inúmeros problemas. Eu me senti num beco sem saída, escuro e úmido, sendo jurado pelos olhos odiosos de um touro de duas toneladas. Mesmo sem qualquer estímulo de perspectiva, eu firmei as pernas, cerrei os punhos e me preparei pra porrada. E mais uma vez, como sempre, o touro avançou feito um demônio de aço. A pancada veio certeira, sem compaixão. Caí. Misturei sangue com o lodo do chão. Beijei a aspereza da derrota mais uma vez. Em determinados momentos, parece que estamos numa câmara de gás, morrendo lentamente, sufocados pelos nossos próprios medos e anseios. Sem tirar os olhos do touro, eu enchi o meu tolo coração de fé e esbocei uma reação. Eu me pus de pé, e me prontifiquei na posição de um boxeador. A sua grana pode acabar no fim do mês. Os seus amigos podem te deixar. A sua saúde pode fraquejar. O seu coração pode pedir socorro. Mas você tem que se manter de pé, com os punhos cerrados, na mira do touro. De novo, de novo e de novo...</p>
                    <div>--------------------------------------------------------------------------</div>
                    
                    <h2>Brendow H. Godoi</h2>
                    <h5 class="card-title">Ditado</h5>
                    <p class="card-text">O que não te mata
                    <br> ( ) te fortalece
                    <br> (x)te deixa mais amargo</p>
                    <div>--------------------------------------------------------------------------</div>
                    
                    <h2>Brendow H. Godoi</h2>
                    <h5 class="card-title">Ninguém.</h5>
                    <p class="card-text">Quem  quer crescer, tem que sumir às vezes. Não se desculpe por ser ausente. Ninguém vai conquistar porra nenhuma por você.</p>
                    <div>--------------------------------------------------------------------------</div>
                    
                  </div>
                </div>
              </a>
            </div>
            <a href="addpoema.php" class="btn btn-outline-warning btn-round"  data-target="#exampleModalCenter" >Adicionar um poema</a>
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
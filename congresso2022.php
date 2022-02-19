<!DOCTYPE html>
<html lang="zxx">

<head>
  <meta charset="utf-8">
  <title>SEEC|PA || Congresso Estadual de Educação</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="plugins/bootstrap/bootstrap.min.css">
  <!-- slick slider -->
  <link rel="stylesheet" href="plugins/slick/slick.css">
  <!-- themefy-icon -->
  <link rel="stylesheet" href="plugins/themify-icons/themify-icons.css">
  <!-- animation css -->
  <link rel="stylesheet" href="plugins/animate/animate.css">
  <!-- aos -->
  <link rel="stylesheet" href="plugins/aos/aos.css">
  <!-- venobox popup -->
  <link rel="stylesheet" href="plugins/venobox/venobox.css">

  <!-- Main Stylesheet -->
  <link href="css/style.css" rel="stylesheet">

  <!--Favicon-->
  <link rel="shortcut icon" href="images/favicon.ico" type="image/x-icon">
  <link rel="icon" href="images/favicon.ico" type="image/x-icon">

</head>

<body>


  <!-- header -->
  <header class="fixed-top header">
    <div class="navigation w-100">
      <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light p-0">
          <a class="navbar-brand" href="index.php"><img src="images/logo.png" alt="logo"></a>
          <button class="navbar-toggler rounded-0" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse" id="navigation">
            <ul class="navbar-nav ml-auto text-center">
              <li class="nav-item active">
                <a class="nav-link" href="index.php">INÍCIO</a>
              </li>
              <li class="nav-item @@about">
                <a class="nav-link" href="index.php#sobre">SOBRE</a>
              </li>
              <li class="nav-item @@courses">
                <a class="nav-link" href="index.php#cursos">CURSOS</a>
              </li>
              <li class="nav-item @@events">
                <a class="nav-link" href="index.php#eventos">EVENTOS</a>
              </li>
              <li class="nav-item dropdown view">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  DEPARTAMENTOS
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <a class="dropdown-item" href="#">ITQ</a>
                  <a class="dropdown-item" href="#">MQTI</a>
                  <a class="dropdown-item" href="#">CTMQ</a>
                  <a class="dropdown-item" href="#">DEBQ</a>
                </div>
              </li>
              <li class="nav-item @@contact">
                <a class="nav-link" href="index.php#contato">CONTATO</a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </header>
  <!-- /header -->
  <!-- Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0 border-0 p-4">
        <div class="modal-header border-0">
          <h3>Solicitar cadastro</h3><br>
          <small> *Se ainda não tem acesso, solicite seu cadastro enviando suas informações</small>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="login">
            <form action="#" class="row">
              <div class="col-12">
                <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Nome Completo">
              </div>
              <div class="col-12">
                <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Telefone">
              </div>
              <div class="col-12">
                <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="E-mail">
              </div>
              <div class="col-12">
                <label for="">Selecione seu departamento:</label>
                <select name="departamento" id="departamento" aria-placeholder="Selecione seu departamento">
                  <option value="itq">ITQ</option>
                  <option value="mqti">MQTI</option>
                  <option value="ctmq">CTMQ</option>
                  <option value="debq">DEBQ</option>
                </select>
              </div>
              <div class="col-12">
                <input type="text-are" aria-rowcount="6" class="form-control mb-3" id="signupMessage" name="signupMessage" placeholder="Informe: 1)Sua região, 2)Sua igreja, 3)Seu pastor.">
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">SOLICITAR</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0 border-0 p-4">
        <div class="modal-header border-0">
          <h3>Fazer login</h3><br>
          <small> *Faça login para acessar sua área exclusiva</small>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" class="row">
            <div class="col-12">
              <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Nome de usuário">
            </div>
            <div class="col-12">
              <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Senha">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- /header -->
  <!-- Modal -->
  <div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0 border-0 p-4">
        <div class="modal-header border-0">
          <h3>Cadastrar</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="login">
            <form action="#" class="row">
              <div class="col-12">
                <input type="text" class="form-control mb-3" id="signupPhone" name="signupPhone" placeholder="Phone">
              </div>
              <div class="col-12">
                <input type="text" class="form-control mb-3" id="signupName" name="signupName" placeholder="Name">
              </div>
              <div class="col-12">
                <input type="email" class="form-control mb-3" id="signupEmail" name="signupEmail" placeholder="Email">
              </div>
              <div class="col-12">
                <input type="password" class="form-control mb-3" id="signupPassword" name="signupPassword" placeholder="Password">
              </div>
              <div class="col-12">
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal -->
  <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content rounded-0 border-0 p-4">
        <div class="modal-header border-0">
          <h3>Entrar</h3>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form action="#" class="row">
            <div class="col-12">
              <input type="text" class="form-control mb-3" id="loginPhone" name="loginPhone" placeholder="Phone">
            </div>
            <div class="col-12">
              <input type="text" class="form-control mb-3" id="loginName" name="loginName" placeholder="Name">
            </div>
            <div class="col-12">
              <input type="password" class="form-control mb-3" id="loginPassword" name="loginPassword" placeholder="Password">
            </div>
            <div class="col-12">
              <button type="submit" class="btn btn-primary">LOGIN</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>

  <!-- page title -->
  <section class="page-title-section overlay" data-background="images/backgrounds/page-title.jpg">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <ul class="list-inline custom-breadcrumb">
            <li class="list-inline-item"><a class="h2 text-primary font-secondary" href="events.html">Próximos Eventos</a></li>
            <li class="list-inline-item text-white h3 font-secondary nasted">Congresso Estadual de Educação</li>
          </ul>
          <p class="text-lighten">O congresso de todos os educadores quadrangulares do Pará</p>
        </div>
      </div>
    </div>
  </section>
  <!-- /page title -->

  <!-- event single -->
  <section class="section-sm">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="section-title">Força e Coragem para Crescer e Multiplicar</h2>
        </div>
        <!-- event image -->
        <div class="col-12 mb-4">
          <img src="images/events/event-single.jpg" alt="event thumb" class="img-fluid w-100">
        </div>
      </div>
      <!-- event info -->
      <div class="row align-items-center mb-5">
        <div class="col-lg-9">
          <ul class="list-inline">
            <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
              <div class="d-flex align-items-center">
                <i class="ti-location-pin text-primary icon-md mr-2"></i>
                <div class="text-left">
                  <h6 class="mb-0">LOCAL</h6>
                  <p class="mb-0">Belém, PA</p>
                </div>
              </div>
            </li>
            <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
              <div class="d-flex align-items-center">
                <i class="ti-calendar text-primary icon-md mr-2"></i>
                <div class="text-left">
                  <h6 class="mb-0">DATA</h6>
                  <p class="mb-0">08 de Agosto (sábado)</p>
                </div>
              </div>
            </li>
            <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
              <div class="d-flex align-items-center">
                <i class="ti-time text-primary icon-md mr-2"></i>
                <div class="text-left">
                  <h6 class="mb-0">HORA</h6>
                  <p class="mb-0">08:00 - 18:00</p>
                </div>
              </div>
            </li>
            <li class="list-inline-item mr-xl-5 mr-4 mb-3 mb-lg-0">
              <div class="d-flex align-items-center">
                <i class="ti-wallet text-primary icon-md mr-2"></i>
                <div class="text-left">
                  <h6 class="mb-0">INSCRIÇÃO</h6>
                  <p class="mb-0">Em breve...</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
        <div class="col-lg-3 text-lg-right text-left">
          <a href="#" class="btn btn-primary">Aguarde...</a>
        </div>
        <!-- border -->
        <div class="col-12 mt-4 order-4">
          <div class="border-bottom border-primary"></div>
        </div>
      </div>
      <!-- event details --
    <div class="row">
      <div class="col-12 mb-50">
        <h3>About Event</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et
          dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea
          commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat
          nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit
          anim id est laborum. Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
          laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
          dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
          consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
          ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut
          labore et dolore magnam aliquam quaerat voluptatem.</p>
      </div>
    </div>
    <!-- event speakers -->
      <div class="row">
        <div class="col-12">
          <h3 class="mb-4">Palestrantes</h3>
        </div>
        <!-- speakers -->
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="media">
            <img class="mr-3 img-fluid" src="images/event-speakers/eurides.jpg" alt="speaker">
            <div class="media-body">
              <h4 class="mt-0">Eurides Obalski</h4>
              Diretora SEEC-PA
            </div>
          </div>
        </div>
        <!-- speakers -->
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="media">
            <img class="mr-3 img-fluid" src="images/event-speakers/speaker-2.jpg" alt="speaker">
            <div class="media-body">
              <h4 class="mt-0">Palestrante</h4>
              A ser confirmado(a)
            </div>
          </div>
        </div>
        <!-- speakers -->
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="media">
            <img class="mr-3 img-fluid" src="images/event-speakers/speaker-3.jpg" alt="speaker">
            <div class="media-body">
              <h4 class="mt-0">Palestrante</h4>
              A ser confirmado(a)
            </div>
          </div>
        </div>
        <!-- speakers -->
        <div class="col-lg-3 col-sm-6 mb-4 mb-lg-0">
          <div class="media">
            <img class="mr-3 img-fluid" src="images/event-speakers/speaker-4.jpg" alt="speaker">
            <div class="media-body">
              <h4 class="mt-0">Palestrante</h4>
              A ser confirmado(a)
            </div>
          </div>
        </div>
        <!-- border -->
        <div class="col-12 mt-4 order-4">
          <div class="border-bottom border-primary"></div>
        </div>
      </div>
    </div>
  </section>
  <!-- /event single -->

  <!-- more event --
<section class="section pt-0">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2 class="section-title">More Events</h2>
      </div>
    </div>
    <div class="row justify-content-center">
  <!-- event --
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-1.jpg" alt="event thumb">
        <div class="card-date"><span>18</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location --
        <p><i class="ti-location-pin text-primary mr-2"></i>Harvard, Usa</p>
        <a href="event-single.html"><h4 class="card-title">Toward a public philosophy of justice</h4></a>
      </div>
    </div>
  </div>
  <!-- event --
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-2.jpg" alt="event thumb">
        <div class="card-date"><span>21</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location --
        <p><i class="ti-location-pin text-primary mr-2"></i>Cambridge, USA</p>
        <a href="event-single.html"><h4 class="card-title">Research seminar in clinical science.</h4></a>
      </div>
    </div>
  </div>
  <!-- event --
  <div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
    <div class="card border-0 rounded-0 hover-shadow">
      <div class="card-img position-relative">
        <img class="card-img-top rounded-0" src="images/events/event-3.jpg" alt="event thumb">
        <div class="card-date"><span>23</span><br>December</div>
      </div>
      <div class="card-body">
        <!-- location --
        <p><i class="ti-location-pin text-primary mr-2"></i>Dhanmondi Lake, Dhaka</p>
        <a href="event-single.html"><h4 class="card-title">Firefly training in trauma-informed yoga</h4></a>
      </div>
    </div>
  </div>
</div>
  </div>
</section>
<!-- /more event -->

  <!-- footer -->
  <footer>
    <!-- newsletter -->
    <!-- footer content -->
    <div class="footer bg-footer section border-bottom">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-sm-8 mb-5 mb-lg-0">
            <!-- logo -->
            <a class="logo-footer" href="index.html"><img class="img-fluid mb-4" src="images/logo.png" alt="logo"></a>
            <ul class="list-unstyled">
              <li class="mb-2">Tv. Timbó, 1212 - Pedreira, <br>
                Belém - PA, 66085-354</li>
              <li class="mb-2">+55 (91) 99981-2198</li>
              <li class="mb-2">ead@seecpa.com.br</li>
            </ul>
          </div>
          <!-- company -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">SEEC|PA</h4>
            <ul class="list-unstyled">
              <li class="mb-3"><a class="text-color" href="#sobre">Sobre nós</a></li>
              <li class="mb-3"><a class="text-color" href="#">Departamentos</a></li>
              <li class="mb-3"><a class="text-color" href="#contato">Contato</a></li>
            </ul>
          </div>
          <!-- links -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">LINKS</h4>
            <ul class="list-unstyled" style="color: white;">
              <li class="mb-3"><a class="text-color" href="cursos.html">Cursos</a></li>
              <li class="mb-3"><a class="text-color" href="eventos.html">Eventos</a></li>
            </ul>
          </div>
          <!-- support -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">SUPORTE</h4>
            <ul class="list-unstyled" style="color: white;">
              <li class="mb-3"><a class="text-color" href="htttps://wa.me/5591991882198" target="_blank">Contato WahtsApp</a></li>
            </ul>
          </div>
          <!-- support -->
          <div class="col-lg-2 col-md-3 col-sm-4 col-6 mb-5 mb-md-0">
            <h4 class="text-white mb-5">Sites recomendados</h4>
            <ul class="list-unstyled" style="color: white;">
              <li class="mb-3"><a class="text-color" href="https://www.sgecbrasil.com.br/" target="_balnk">SGEC</a></li>
              <li class="mb-3"><a class="text-color" href="https://www.quadrangular.com.br/" target="_balnk">IEQ Brasil</a></li>
              <li class="mb-3"><a class="text-color" href="https://quadrangularpara.org/" target="_balnk">IEQ Pará</a></li>
              <li class="mb-3"><a class="text-color" href="https://www.sisced.org/" target="_balnk">CED Pará</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!-- copyright -->
    <div class="copyright py-4 bg-footer">
      <div class="container">
        <div class="row">
          <div class="col-sm-7 text-sm-left text-center">
            <p class="mb-0">SEEC | PA
              <script>
                var CurrentYear = new Date().getFullYear()
                document.write(CurrentYear)
              </script>
              © por <a href="https://estimulardigital.com">Estimular Digital</a>
            </p>
          </div>
          <div class="col-sm-5 text-sm-right text-center">
            <ul class="list-inline">
              <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.facebook.com/seec.para" target="_balnk"><i class="ti-facebook text-primary"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.youtube.com/c/SEECPA" target="_balnk"><i class="ti-youtube text-primary"></i></a></li>
              <li class="list-inline-item"><a class="d-inline-block p-2" href="https://www.instagram.com/seec.pa/" target="_balnk"><i class="ti-instagram text-primary"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- /footer -->

  <!-- jQuery -->
  <script src="plugins/jQuery/jquery.min.js"></script>
  <!-- Bootstrap JS -->
  <script src="plugins/bootstrap/bootstrap.min.js"></script>
  <!-- slick slider -->
  <script src="plugins/slick/slick.min.js"></script>
  <!-- aos -->
  <script src="plugins/aos/aos.js"></script>
  <!-- venobox popup -->
  <script src="plugins/venobox/venobox.min.js"></script>
  <!-- mixitup filter -->
  <script src="plugins/mixitup/mixitup.min.js"></script>
  <!-- google map -->
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&libraries=places"></script>
  <script src="plugins/google-map/gmap.js"></script>

  <!-- Main Script -->
  <script src="js/script.js"></script>

</body>

</html>
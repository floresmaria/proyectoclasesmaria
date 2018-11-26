<!DOCTYPE html>
<html lang="en" class=" js no-touch">

<head>
  <title>Todo | Clases</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="style/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="style/font-awesome.min.css">
  
  <link rel="stylesheet" type="text/css" href="style/slick-team-slider.css" />
  <link rel="stylesheet" type="text/css" href="style/style.css">
</head>

<body>
  <!--HEADER START-->
  <div class="main-navigation navbar-fixed-top">
    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
              </button>
          <a class="navbar-brand" href="index.html">TodoClases</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="#banner">Inicio</a></li>
            <li><a href="#service">Servicios</a></li>
            <li><a href="#portfolio">Portafolio</a></li>
            <li><a href="#about">Equipo</a></li>
            <li><a href="#contact">Contáctanos</a></li>
            <li><a href="{{ url('/login') }}">Inicia Sesión</a></li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
  <!--HEADER END-->

  <!--BANNER START-->
  <div id="banner" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="jumbotron">
          <h1 class="small">Bienvenido a <span class="bold">TodoClases</span></h1>
          <p class="big">Un lugar con el propósito de brindarte apoyo al momento de crear tus clases más organizadas.</p>
          <a href="#" class="btn btn-banner">Leer Más<i class="fa fa-send"></i></a>
        </div>
      </div>
    </div>
  </div>
  <!--BANNER END-->

  <!--CTA1 START-->
  <div class="cta-1">
    <div class="container">
      <div class="row text-center white">
        <h1 class="cta-title">Título</h1>
        <p class="cta-sub-title">Descripción breve.</p>
      </div>
    </div>
  </div>
  <!--CTA1 END-->

  <!--SERVICE START-->
  <div id="service" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Nuestros servicios</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa-picture-o"></i></div>
            <div class="service-text">
              <h3>Diseño</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa fa-code"></i></div>
            <div class="service-text">
              <h3>Desarrollo</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="service-box">
            <div class="service-icon"><i class="fa fa-diamond"></i></div>
            <div class="service-text">
              <h3>Márketing</h3>
              <p> doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--SERVICE END-->
  <div id="portfolio">
    <div class="container">
      <div class="page-title text-center">
        <h1>Nuestras obras privativas</h1>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
        <hr class="pg-titl-bdr-btm"></hr>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul id="portfolio-flters">
            <li data-filter=".filter-app, .filter-card, .filter-logo, .filter-web" class="filter-active">Todo</li>
            <li data-filter=".filter-app">App</li>
            <li data-filter=".filter-card">Card</li>
            <li data-filter=".filter-logo">Logo</li>
            <li data-filter=".filter-web">Web</li>
          </ul>
        </div>
      </div>

      <div class="row" id="portfolio-wrapper">
        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="imagenes/portfolio/app1.jpg" alt="">
            <div class="details">
              <h4>App 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="imagenes/portfolio/web2.jpg" alt="">
            <div class="details">
              <h4>Web 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="imagenes/portfolio/app3.jpg" alt="">
            <div class="details">
              <h4>App 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="imagenes/portfolio/card1.jpg" alt="">
            <div class="details">
              <h4>Card 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="imagenes/portfolio/card2.jpg" alt="">
            <div class="details">
              <h4>Card 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="imagenes/portfolio/web3.jpg" alt="">
            <div class="details">
              <h4>Web 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-card">
          <a href="">
            <img src="imagenes/portfolio/card3.jpg" alt="">
            <div class="details">
              <h4>Card 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-app">
          <a href="">
            <img src="imagenes/portfolio/app2.jpg" alt="">
            <div class="details">
              <h4>App 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="imagenes/portfolio/logo1.jpg" alt="">
            <div class="details">
              <h4>Logo 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="imagenes/portfolio/logo3.jpg" alt="">
            <div class="details">
              <h4>Logo 3</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-web">
          <a href="">
            <img src="imagenes/portfolio/web1.jpg" alt="">
            <div class="details">
              <h4>Web 1</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>

        <div class="col-lg-3 col-md-6 portfolio-item filter-logo">
          <a href="">
            <img src="imagenes/portfolio/logo2.jpg" alt="">
            <div class="details">
              <h4>Logo 2</h4>
              <span>Alored dono par</span>
            </div>
          </a>
        </div>
      </div>
    </div>
  </div>

  <!--TEAM START-->
  <div id="about" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Conozca a nuestro equipo</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div class="autoplay">
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="imagenes/agent1.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Haris Brown</h3>
                <p class="marb-20">Sr. Diseñador de interfaz de usuario</p>
                <p>Sígueme:</p>
                <ul class="team-social">
                  <li class="bgblue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="bgred"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="bgblue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="bgblue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="imagenes/agent2.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Emmy Brown</h3>
                <p class="marb-20">Jr. Diseñador de interfaz de usuario</p>
                <p>Sígueme:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="imagenes/agent3.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Iain Dante</h3>
                <p class="marb-20">Jr. Diseñador de interfaz de usuario</p>
                <p>Sígueme:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="team-info">
              <div class="img-sec">
                <img src="imagenes/agent4.jpg" class="img-responsive">
              </div>
              <div class="fig-caption">
                <h3>Kate Haris</h3>
                <p class="marb-20">Jr. Diseñador de interfaz de usuario</p>
                <p>Sígueme:</p>
                <ul class="team-social">
                  <li class="blue-dark"><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li class="red"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li class="blue-light"><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li class="blue-dark"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--TEAM END-->

  <!--CTA2 START-->
  <div class="cta2">
    <div class="container">
      <div class="row white text-center">
        <h3 class="wd75 fnt-24">“Cada cosa está diseñada. Pocas cosas están bien diseñadas ". - Brian Reed</h3>
        <p class="cta-sub-title"></p>
        <a href="{{ url('/register') }}" class="btn btn-default">Regístrate</a>
      </div>
    </div>
  </div>
  <!--CTA2 END-->

  <!--CONTACT START-->
  <div id="contact" class="section-padding">
    <div class="container">
      <div class="row">
        <div class="page-title text-center">
          <h1>Contacto rápido</h1>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor <br>incididunt ut labore et dolore magna aliqua. </p>
          <hr class="pg-titl-bdr-btm"></hr>
        </div>
        <div id="sendmessage">Tu mensaje ha sido enviado. ¡Gracias!</div>
        <div id="errormessage"></div>

        <div class="form-sec">
          <form action="" method="post" role="form" class="contactForm">
            <div class="col-md-4 form-group">
              <input type="text" name="name" class="form-control text-field-box" id="name" placeholder="Tú nombre" data-rule="minlen:4" data-msg="Por favor ingresa al menos 4 letras" />
              <div class="validation"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="email" class="form-control text-field-box" name="email" id="email" placeholder="Tú E-mail" data-rule="email" data-msg="Por favor ingresa un e-mail válido" />
              <div class="validation"></div>
            </div>
            <div class="col-md-4 form-group">
              <input type="text" class="form-control text-field-box" name="subject" id="subject" placeholder="Tema" data-rule="minlen:4" data-msg="Por favor ingrese al menos 8 caracteres del tema" />
              <div class="validation"></div>
            </div>
            <div class="col-md-12 form-group">
              <textarea class="form-control text-field-box" name="message" rows="5" data-rule="required" data-msg="Por fvor escribe par nosotros" placeholder="Mensaje"></textarea>
              <div class="validation"></div>

              <button class="button-medium" id="contact-submit" type="submit" name="contact">Enviar</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!--CONTACT END-->

  <!--FOOTER START-->
  <footer class="footer section-padding">
    <div class="container">
      <div class="row">
        <div style="visibility: visible; animation-name: zoomIn;" class="col-sm-12 text-center wow zoomIn">
          <h3>Síguenos en nuestras redes sociales</h3>
          <div class="footer_social">
            <ul>
              <li><a class="f_facebook" href="#"><i class="fa fa-facebook"></i></a></li>
              <li><a class="f_twitter" href="#"><i class="fa fa-twitter"></i></a></li>
              <li><a class="f_google" href="#"><i class="fa fa-google-plus"></i></a></li>
              <li><a class="f_linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
            </ul>
          </div>
        </div>
        <!--- END COL -->
      </div>
      <!--- END ROW -->
    </div>
    <!--- END CONTAINER -->
  </footer>
  <!--FOOTER END-->
  <div class="footer-bottom">
    <div class="container">
      <div style="visibility: visible; animation-name: zoomIn;" class="col-md-12 text-center wow zoomIn">
        <div class="footer_copyright">
          <p> © Copyright, Todos los derechos reservados.</p>
          <div class="credits">
            <a href="#">María Flores C.I:27.036.624</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="javas/jquery.min.js"></script>
  <script src="javas/jquery.easing.min.js"></script>
  <script src="javas/bootstrap.min.js"></script>
  <script type="text/javascript" src="javas/slick.min.js"></script>
  <script type="text/javascript" src="javas/custom.js"></script>
  <script src="contactform/contactform.js"></script>


</body>

</html>

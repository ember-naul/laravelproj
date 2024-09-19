<!-- =======================================================
  * Template Name: Tempo
  * Template URL: https://bootstrapmade.com/tempo-free-onepage-bootstrap-theme/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

<!DOCTYPE html>
<html lang="en">

<meta charset="utf-8">
<meta content="width=device-width, initial-scale=1.0" name="viewport">
<title>Index - Tempo Bootstrap Template</title>
<meta name="description" content="">
<meta name="keywords" content="">

<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet"
  class="__web-inspector-hide-shortcut__">
<link href="{{asset('vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{asset('vendor/aos/aos.css" rel="stylesheet')}}">
<link href="{{asset('vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{asset('vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

<link href="{{asset('css/main.css')}}" rel="stylesheet">
<link href="{{asset('/img/favicon.png')}}" rel="icon">
<link href="{{asset('/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

<link href="{{asset('img/favicon.png')}}" rel="icon">
<link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="apple-touch-icon">
<link href="{{ asset('img/apple-touch-icon.png')}}" rel="apple-touch-icon">

<link href="{{asset('main.css')}}" rel="stylesheet">
</head>

<body class="index-page">

  <header id="header" class="header d-flex align-items-center fixed-top">
    <div class="container-fluid container-xl position-relative d-flex align-items-center justify-content-between">

      <a href="/home" class="logo d-flex align-items-center">
        <img src="{{asset('img/logo.png')}}" alt="Logo">
        <h1 class="sitename">Ember Blog</h1>
      </a>

      <nav id="navmenu" class="navmenu">
        <ul>
          <li><a href="#hero" class="active">Início</a></li>
          <li><a href="#about">Sobre</a></li>
        </ul>
        <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
      </nav>

    </div>
  </header>

  <main class="main">

    <section id="hero" class="hero section dark-background">

      <img src="{{asset('img/hero-bg.jpg')}}" alt="Imagem de Fundo" data-aos="fade-in">

      <div class="container text-center" data-aos="fade-up" data-aos-delay="100">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <h2>Bem-vindo ao Ember Blog</h2>
            <p>Seu ponto de partida para descobertas e reflexões.</p>
            <a href="#about" class="btn-get-started">Explore Agora</a>
          </div>
        </div>
      </div>

    </section>

    <section id="about" class="about section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Sobre o Blog</h2>
        <p><span>Descubra mais</span> <span class="description-title">sobre<br></span></p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="row gy-5">

          <div class="content col-xl-5 d-flex flex-column" data-aos="fade-up" data-aos-delay="100">
            <h3>O Ember Blog é sua fonte de conhecimento e inspiração.</h3>
            <p>
              Criado para compartilhar insights e reflexões sobre diversos temas, desde tecnologia até desenvolvimento pessoal. <br>
              Nosso objetivo é proporcionar conteúdo valioso e envolvente para nossos leitores.
            </p>
            <a href="#contact" class="about-btn align-self-center align-self-xl-start"><span>Saiba mais</span> <i
                class="bi bi-chevron-right"></i></a>
          </div>

          <div class="col-xl-7" data-aos="fade-up" data-aos-delay="200">
            <div class="row gy-4">

              <div class="col-md-6 icon-box position-relative">
                <i class="bi bi-pen"></i>
                <h4><a href="#blog-posts" class="stretched-link">Conteúdo Diversificado</a></h4>
                <p>Artigos sobre uma ampla gama de tópicos e interesses.</p>
              </div>

              <div class="col-md-6 icon-box position-relative">
                <i class="bi bi-lightbulb"></i>
                <h4><a href="#blog-tips" class="stretched-link">Dicas e Truques</a></h4>
                <p>Guias e recomendações para aprimorar suas habilidades e conhecimentos.</p>
              </div>

            </div>
          </div>

        </div>

      </div>

    </section>
  </main>

  <footer id="footer" class="footer dark-background">

    <div class="container footer-top">
      <div class="row gy-4">
        <div class="col-lg-5 col-md-12 footer-about">
          <a href="index.html" class="logo d-flex align-items-center">
            <span class="sitename">Tempo</span>
          </a>
          <p>Eeeee.</p>
          <div class="social-links d-flex mt-4">
            <a href=""><i class="bi bi-twitter-x"></i></a>
            <a href=""><i class="bi bi-facebook"></i></a>
            <a href=""><i class="bi bi-instagram"></i></a>
            <a href=""><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </div>

    <div class="container copyright text-center mt-4">
      <p>© <span>Copyright</span> <strong class="px-1 sitename">Tempo</strong> <span>All Rights Reserved</span></p>
      <div class="credits">
        <!-- Licensing information: https://bootstrapmade.com/license/ -->
        <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
        Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
      </div>
    </div>

  </footer>

  <!-- Scroll Top -->
  <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

  <!-- Preloader -->
  <div id="preloader"></div>

  <!-- Vendor JS Files -->

  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('vendor/php-email-form/validate.js')}}"></script>
  <script src="{{ asset('vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{ asset('vendor/imagesloaded/imagesloaded.pkgd.min.js')}}"></script>
  <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{ asset('vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!-- Main JS File -->
  <script src="{{ asset('js/main.js')}}"></script>

</body>

</html>
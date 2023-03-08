<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/estacionamento/fonts/icomoon/style.css">
    <link rel="stylesheet" href="/estacionamento/css/bootstrap.min.css">
    <link rel="stylesheet" href="/estacionamento/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="/estacionamento/css/magnific-popup.css">
    <link rel="stylesheet" href="/estacionamento/css/jquery-ui.css">
    <link rel="stylesheet" href="/estacionamento/css/owl.carousel.min.css">
    <link rel="stylesheet" href="/estacionamento/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="/estacionamento/css/aos.css">
    <link rel="stylesheet" href="/estacionamento/css/style.css">
    
</head>
<body>
  
<div class="site-wrap">
    <div class="site-navbar py-2">

      <div class="search-wrap">
        <div class="container">
          <a href="#" class="search-close js-search-close"><span class="icon-close2"></span></a>
          <form action="/home" method="post">
            <input type="text" class="form-control" placeholder="Pesquisar">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
            <img src="/estacionamento/images/155.png" width="190" alt="Image placeholder" class="img-fluid "><a href="" class="js-logo-clone"><strong class="text-primary"></strong></a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li><a href="/home">Home</a></li>
                <li class=""><a href="/vagas">Vagas</a></li>
              
                <li><a href="/reservas">Reservas</a></li>
                <li><a href="/contacto">Contacto</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">
            <a href="/" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
            </a>
            <a href="" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
      
    </div>
    
    @yield('content')
    

<footer class="site-footer bg-dark text-white">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-lg-4 mb-1 mb-lg-0">

            <div class="block-7">
              <h3 class="footer-heading mb-4">Sobre nós</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius quae reiciendis distinctio voluptates
                sed dolorum excepturi iure eaque, aut unde.</p>
            </div>

          </div>
          <div class="col-lg-3 mx-auto mb-2 mb-lg-0">
            <h3 class="footer-heading mb-1">Navigation</h3>
            <ul class="list-unstyled">
              <li><a href="#" class=" text-white">Supplements</a></li>
              <li><a href="#" class=" text-white">Vitamins</a></li>
              <li><a href="#" class=" text-white">Diet &amp; Nutrition</a></li>
              <li><a href="#" class=" text-white">Tea &amp; Coffee</a></li>
            </ul>
          </div>

          <div class="col-md-6 col-lg-3">
            <div class="block-5">
              <h3 class="footer-heading mb-4">Contact Info</h3>
              <ul class="list-unstyled ">
                <li class="address text-white">203 Fake St. Mountain View, San Francisco, California, USA</li>
                <li class="phone text-white"><a href="tel://23923929210" class=" text-white">+2 392 3929 210</a></li>
                <li class="email text-white">emailaddress@domain.com</li>
              </ul>
            </div>


          </div>

        </div>
     <p align="center">
              Copyright &copy;
             <i class="" aria-hidden="true"></i> by <a href="" target="_blank"
                class="text-primary">controlede vagasdeestacionamento</a>
            </p>
      </div>
    </footer>
  </div>
<style>
  #nav{
    background-color: #000;
  }
</style>
    <script src="/estacionamento/js/jquery-3.3.1.min.js"></script>
    <script src="/estacionamento/js/jquery-ui.js"></script>
    <script src="/estacionamento/js/popper.min.js"></script>
    <script src="/estacionamento/js/bootstrap.min.js"></script>
    <script src="/estacionamento/js/owl.carousel.min.js"></script>
    <script src="/estacionamento/js/jquery.magnific-popup.min.js"></script>
    <script src="/estacionamento/js/aos.js"></script>
    <script src="/estacionamento/js/main.js"></script>

</body>
</html>






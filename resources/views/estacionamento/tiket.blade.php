<html lang="en">

<head>
  <title>tiket</title>
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
          <form action="#" method="post">
            <input type="text" class="form-control" placeholder="Pesquisar">
          </form>
        </div>
      </div>

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
            <img src="/estacionamento/images/155.png" width="190" alt="Image placeholder" class="img-fluid "><a href="index.html" class="js-logo-clone"><strong class="text-primary"></strong></a>
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
            <a href="#" class="icons-btn d-inline-block js-search-open"><span class="icon-search"></span></a>
            <a href="cart.html" class="icons-btn d-inline-block bag">
            </a>
            <a href="#" class="site-menu-toggle js-menu-toggle ml-3 d-inline-block d-lg-none"><span
                class="icon-menu"></span></a>
          </div>
        </div>
      </div>
    </div>
    
    <hr>
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            

       
                @if(session('excluir'))
                    <p class="bg-danger text-center text-white p-2">
                        {{session('excluir')}}
                    </p>
                    @endif
                    
  



          </div>
        </div>
      </div>
    </div>
    @foreach ($dados as $value)
    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12 text-center">
            <span class="icon-check_circle display-3 text-primary"></span>
            <h2 class="display-3 text-black">Reserva criada!</h2>
            <p class="lead mb-5">A sua reserva foi criada com sucesso</p>
            <p><a href="/pdf" class="btn btn-md height-auto px-4 py-3 btn-primary">IMPRIMIR</a></p>
            <form action="/excluir/{{$value->id}}" method="post">
                 <button class="btn btn-danger"><i class="dw dw-delete-3"></i>
                      Excluir reserva
                    </button>
                    @method('DELETE')
                    @csrf
            </form>                               
            <div class="ticket" style="border: 2px 2px 2px 2px solid black;">

      
            <table class="table text-black" style="border-radius: 60px; border: 1px solid #000;width: 40px;position:relative;left:35%;">
            <thead>
              <tr>
                <th class="alert-dark"></th>
                <th class="alert-dark">ESTACIONAMENTO </th>
                <th class="alert-dark"></th>
                <th class="alert-dark"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Marca</td>
                <td></td>
                <td>{{$value->marca}}</td>
              </tr>
              <tr>
              <td>Nome</td>
                <td></td>
                <td>{{$value->nome}}</td>
              </tr>
              <tr>
              <td>Placa</td>
                <td></td>
                <td>{{$value->placa}}</td>
              </tr>
              <tr>
              <td>Código</td>
                <td></td>
                <td>{{$value->codigo}}</td>
              </tr>
              <tr>
                <td class=""></td>
                <td class="text-center"><img src="/estacionamento/images/qr.png" class="img-fluid"></td>
                <td class=""></td>
                <td class=""></td>
              </tr>
              <tr>
              
              <td class="alert-dark" style="font-size: 7pt;">{{$value->data}}</td>
                <td class="alert-dark text-center"></td>
                <td class="alert-dark"  style="font-size: 7pt;">{{$value->hora}}</td>
                <td class="alert-dark"></td>
              </tr>
            </tbody>
          </table>   
            </div>
            @endforeach
          </div>
        </div>
      </div>
    </div>
  </div>

  <style type="text/css">
    fieldset{
        border: 1px solid #000;
        box-shadow: 0px 0px 1px 0px #fff;
        height: 400px;
        padding: 28px;
        width: 310px;
        border-radius: 10px;
    }
	</style>
  <script type="text/javascript">
      
  </script>

 
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

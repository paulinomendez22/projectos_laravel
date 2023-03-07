<html lang="en">

<head>
  <title>pdf</title>
  <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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

  
    <hr>
    @foreach ($dados as $value) <img src="/estacionamento/images/155.png" width="150" alt="Image placeholder" class="img-fluid ">
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
  
  <script type="text/javascript">
      print();
  </script>

 
    <script src="/estacionamento/js/jquery-3.3.1.min.js"></script>
    <script src="/estacionamento/js/jquery-ui.js"></script>
    <script src="/estacionamento/js/popper.min.js"></script>
    <script src="/estacionamento/js/bootstrap.min.js"></script>
    <script src="/estacionamento/js/owl.carousel.min.js"></script>
    <script src="/estacionamento/js/jquery.magnific-popup.min.js"></script>
    <script src="/estacionamento/js/aos.js"></script>
    <script src="/estacionamento/js/main.js"></script>
    <style type="text/css">
    body{
        background-color: #fff;
    }
	</style>
</body>
</html>

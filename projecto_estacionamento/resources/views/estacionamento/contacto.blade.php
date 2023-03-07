@extends('layouts.estacionamento')
@section('title', 'contacto')

@section('content')
        {{--comentário no blade--}}


        <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index.html">Inserir</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Contacto</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Priencher Formulários</h2>
          </div>
          <div class="col-md-12">
    
            <form action="#" method="post">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="c_fname" class="text-black">Primeiro Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="digite o primeiro nome" id="c_fname" name="c_fname">
                  </div>
                  <div class="col-md-6">
                    <label for="c_lname" class="text-black">Próximo Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" placeholder="digite o segundo nome" id="c_lname" name="c_lname">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" placeholder="digite o email" id="c_email" name="c_email" placeholder="">
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_subject" class="text-black">Assunto </label>
                    <input type="text" class="form-control" placeholder="assunto" id="c_subject" name="c_subject">
                  </div>
                </div>
    
                <div class="form-group row">
                  <div class="col-md-12">
                    <label for="c_message" class="text-black">Mensagem </label>
                    <textarea name="c_message" id="c_message" placeholder="escrever mensagem" cols="30" rows="7" class="form-control"></textarea>
                  </div>
                </div>
                <div class="form-group row">
                  <div class="col-lg-12">
                    <button  type="submit" class="btn btn-primary btn-lg btn-block">Enviar</button>
                  </div>
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>
    
@endsection
@extends('layouts.estacionamento')
@section('title', 'reservas')

@section('content')
        {{--comentário no blade--}}

        <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            

       
                @if(session('msg'))
                    <p class="bg-success text-center text-white p-2">
                        {{session('msg')}}
                    </p>
                    @endif
                    
  



          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-12">
          </div>
        </div>
        <div class="row">
          <div class="col-md-6 mb-5 mb-md-0">
          <form action="/reserva" method="POST">
            @csrf
            <div class="p-3 p-lg-5 border">
              <div class="form-group">
                <label for="c_country" class="text-black">Marca <span class="text-danger">*</span></label>
                <select id="c_country" name="marca" class="form-control">
                  <option value="1">Selecione a marca do veículo</option>
                  <option value="jeep">Jeep</option>
                  <option value="Mitsubishi Pajero">Mitsubishi Pajero</option>
                  <option value="Toyota">Toyota</option>
                  <option value="Mitsubishi">Mitsubishi</option>
                  <option value="Kia">Kia</option>
                  <option value="i10">i10</option>
                  <option value="Hiunday">Hiunday</option>
                  <option value="Reunalt">Reunalt</option>
                </select>
              </div>
              <div class="form-group row">
                <div class="col-md-6">
                  <label for="c_fname" class="text-black">Primeiro Nome <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_fname" name="nome" placeholder="Primeiro Nome">
                </div>
                <div class="col-md-6">
                  <label for="c_lname" class="text-black">Sobrenome<span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_lname" name="apelido" placeholder="Sobrenome">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_companyname" class="text-black">Placa</label>
                  <input type="text" class="form-control" id="c_companyname" name="placa" placeholder="Placa">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-12">
                  <label for="c_address" class="text-black">Código <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="c_address" name="codigo" placeholder="Código">
                </div>
              </div>
    
              <div class="form-group row">
                <div class="col-md-6">
                  <button type="submit" class="btn btn-primary">Criar reserva</button>
                </form>
                </div>
              </div>
    
            </div>
          </div>
          <div class="col-md-6">
    
            <div class="row mb-5">
              <div class="col-md-12">
                <h2 class=" h3 mb-3 text-black">Criar uma conta {{date("Y-m-d");}}</h2>
                <div class="p-3 p-lg-5 border">
    
                  <label for="c_code" class="text-black mb-3"></label>
                  <div class="input-group w-75">
                    <form action="/reservas" method="post">
                      @csrf
                      <label>E-mail</label>
                      <input type="text" class="form-control" name="email" placeholder="Seu email ou nº">
                      <label class="mt-3">Senha</label>
                      <input type="password" class="form-control" name="senha" placeholder="digite o seu Senha">
                      <button type="submit" class="btn btn-primary mt-3">Criar conta</button>
                    </form>
                    <div class="input-group-append">
                    </div>
                  </div>
    
                </div>
              </div>
            </div>
    
            <div class="row mb-5">
              <div class="col-md-12">
                
                <div class="p-3 p-lg-5 border">
                  
    
                  <div class="border mb-3">
                    <h3 class="h6 mb-0"><a class="d-block" data-toggle="collapse" href="#collapsebank" role="button"
                        aria-expanded="false" aria-controls="collapsebank">Porque criar uma conta?</a></h3>
    
                    <div class="collapse" id="collapsebank">
                      <div class="py-2 px-4">
                        <p class="mb-0">Make your payment directly into our bank account. Please use your Order ID as the
                          payment reference. Your order won’t be shipped until the funds have cleared in our account.</p>
                      </div>
                    </div>
                  </div>
    
                  
    
                 
                </div>
              </div>
            </div>
    
          </div>
        </div>
        <!-- </form> -->
      </div>
    </div>
    

    
@endsection
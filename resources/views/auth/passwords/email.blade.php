@include('includes.head')
<body class="d-flex align-items-center " style="background-color:#F5FEFF;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-5 p-0 p-md-1">
        <div class="card p-4 card-border-radius border-0 card-login-register">
          <div class="card-header bg-transparent border-0 mx-auto mt-1 mt-md-3 d-flex flex-column align-items-center">
            <a href="/"><img src="{{asset('img/Logo.png')}}" width="150" class="" alt="Trueque"></a>
            <h4 class="text-center my-1 my-md-3">Cambiar contraseña</h4>
          </div>
          @if (session('status'))
            <div class="alert alert-success" role="alert">
              {{ session('status') }}
            </div>
          @endif
          <form method="POST" action="{{ route('password.email') }}">@csrf
            <div class="form-group">
              <label for="email" class="d-block">{{ __('Correo electronico') }}</label>
              <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

              @error('email')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                </span>
              @enderror
            </div>

            <div class="form-group">
              <button type="submit" class="btn-rounded btn-primary btn-primary-dark d-block w-100"> {{ __('Enviar') }} </button>
            </div>
          </form>
          <a class="mt-3 text-center" href="/login">Cancelar</a>
        </div>
      </div>
    </div>
  </div>
</body>

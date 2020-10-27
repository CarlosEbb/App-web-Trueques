@include('includes.head')
<body class="d-flex align-items-center " style="background-color:#F5FEFF;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-5 p-0 p-md-1">
        <div class="card p-4 card-border-radius border-0 card-login-register">
          <div class="card-header bg-transparent border-0 mx-auto mt-1 mt-md-3 d-flex flex-column align-items-center">
            <a href="/"><img src="{{asset('img/Logo.png')}}" width="150" class="" alt="Trueque"></a>
            <h4 class="text-center my-1 my-md-3">Confirmar contraseña</h4>
            <p>Por favor confirma tu contraseña antes de entrar</p>
          </div>
          <form method="POST" action="{{ route('password.confirm') }}">@csrf
            <div class="form-group">
                <label for="password" class="d-block">{{ __('Contraseña') }}</label>
                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group mb-0">
              <button type="submit" class="d-block w-100 btn-rounded btn-primary btn-primary-dark">
                  {{ __('Confirmar contraseña') }}
              </button>

              @if (Route::has('password.request'))
                <a class="mt-3 text-center d-block" href="{{ route('password.request') }}">
                  {{ __('Forgot Your Password?') }}
                </a>
              @endif
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

@include('includes.head')
<body class="d-flex align-items-center " style="background-color:#F5FEFF;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-5 p-0 p-md-1">
        <div class="card p-4 card-border-radius border-0 card-login-register">
          <div class="card-header bg-transparent border-0 mx-auto mt-1 mt-md-3 d-flex flex-column align-items-center">
            <a href="/"><img src="{{asset('img/Logo.png')}}" width="150" class="" alt="Trueque"></a>
            <h4 class="text-center my-1 my-md-3">Restaurar contraseña</h4>
          </div>
          <form method="POST" action="{{ route('password.update') }}">
            @csrf

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group">
                <label for="email" class="d-block">{{ __('Correo electronico') }}</label>
                <input id="email" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>

                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password" class="d-block">{{ __('Contraseña') }}</label>
                <input id="password" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>

            <div class="form-group">
                <label for="password-confirm" class="d-block">{{ __('Confirmar contraseña') }}</label>
                <input id="password-confirm" type="password" class="input" name="password_confirmation" required autocomplete="new-password">
            </div>

            <div class="form-group mb-0">
              <button type="submit" class="d-block w-100 btn-rounded btn-primary btn-primary-dark">
                  {{ __('Restaurar contraseña') }}
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</body>

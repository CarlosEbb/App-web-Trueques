
@include('includes.head')
<body class="d-flex align-items-center " style="background-color:#F5FEFF;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-5 p-0 p-md-1">
        <form method="POST" action="{{ route('login') }}">@csrf
          <div class="card p-4 card-border-radius border-0 card-login-register">
            <div class="card-header bg-transparent border-0 mx-auto mt-1 mt-md-3">
              <a href="/"><img src="{{asset('img/Logo.png')}}" width="150" class="" alt="Trueque"></a>
              <h4 class="text-center my-1 my-md-3">Acceder</h4>
            </div>

            <label for="email">Correo Electrónico</label>
            <input id="email" placeholder="correo@gmail.com" type="email" class="input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror

            
            <label for="password" class="mt-3">Contraseña</label>
            <input id="password" placeholder="*********" type="password" class="input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
            
            @if (Route::has('password.request'))
                <a class="mt-3 font-weight-bold" href="{{ route('password.request') }}">¿Olvidaste la contraseña?</a>
            @endif

            <div class="card border-0 my-3 ml-4">
              <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
              <label class="form-check-label" for="remember">Recuerdame</label>
            </div>

            <button type="submit" class="btn-rounded btn-primary btn-primary-dark">Iniciar Sesión</button>
            <a class="py-2 btn-rounded bg-primary mt-2 text-white btn-primary-dark" href="{{ route('social.auth', 'facebook') }}">
              <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path d="M16 4C9.384 4 4 9.384 4 16s5.384 12 12 12s12-5.384 12-12S22.616 4 16 4zm0 2c5.535 0 10 4.465 10 10a9.977 9.977 0 0 1-8.512 9.879v-6.963h2.848l.447-2.893h-3.295v-1.58c0-1.2.395-2.267 1.518-2.267h1.805V9.652c-.317-.043-.988-.136-2.256-.136c-2.648 0-4.2 1.398-4.2 4.584v1.923h-2.722v2.893h2.722v6.938A9.975 9.975 0 0 1 6 16c0-5.535 4.465-10 10-10z" fill="white"/><rect x="0" y="0" width="32" height="32" fill="rgba(0, 0, 0, 0)" /></svg>
              Facebook
            </a>
            <a class="btn-rounded bg-light mt-2 btn-primary-dark"  href="{{ route('social.auth', 'google') }}">
              <svg class="mr-3" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 16 16"><path d="M8.159 6.856V9.6h4.537c-.184 1.178-1.372 3.45-4.537 3.45C5.428 13.05 3.2 10.788 3.2 8s2.228-5.05 4.959-5.05c1.553 0 2.594.663 3.188 1.234l2.172-2.091C12.125.787 10.319-.001 8.16-.001c-4.422 0-8 3.578-8 8s3.578 8 8 8c4.616 0 7.681-3.247 7.681-7.816c0-.525-.056-.925-.125-1.325L8.16 6.855z" fill="dark"/><rect x="0" y="0" width="16" height="16" fill="rgba(0, 0, 0, 0)" /></svg>
              Google
            </a>
            
            <a class="mt-3 text-center" href="/register">¿No tienes una cuenta? Registrate</a>
          </div>
        </form>
      </div>
    </div>
  </div>
</body>
{{-- @endsection --}}

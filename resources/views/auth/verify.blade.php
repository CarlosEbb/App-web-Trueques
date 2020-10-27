@include('includes.head')
<body class="d-flex align-items-center " style="background-color:#F5FEFF;">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-12 col-md-8 col-lg-5 p-0 p-md-1">
        <div class="card p-4 card-border-radius border-0 card-login-register">
          <div class="card-header bg-transparent border-0 mx-auto mt-1 mt-md-3 ">
            <a href="/"><img src="{{asset('img/Logo.png')}}" width="150" class="" alt="Trueque"></a>
            <h4 class="text-center my-1 my-md-3">Verificar</h4>
          </div>
          @if (session('resent'))
            <div class="alert alert-success" role="alert">
              {{ __('A fresh verification link has been sent to your email address.') }}
            </div>
          @endif

          {{ __('Before proceeding, please check your email for a verification link.') }}
          {{ __('If you did not receive the email') }},
          <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
              @csrf
              <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
          </form>
        </div>
      </div>
    </div>
  </div>
</body>


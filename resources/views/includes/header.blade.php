<nav class="navbar navbar-light shadow-0">
  <div class="container">
    <a class="navbar-brand m-0 d-block p-2 d-md-none w-100" href="/">
      <img src="{{asset('img/Logo-2.png')}}" height="40" alt="Trueque" loading="lazy"/>
    </a>

    <a class="navbar-brand m-0  d-none d-md-block" href="/">
      <img src="{{asset('img/Logo-2.png')}}" height="40" alt="Trueque" loading="lazy"/>
    </a>

    <form name="formulariobusqueda" action="{{route('busqueda')}}" method="GET" class="d-none d-md-none d-lg-block" style="width: 60%;">@csrf
      @include('includes.addBuscador')
      <div class="form-row align-items-center">
        <div class="col-md-4 d-flex">
          <input type="text" class="form-control input-municipio" placeholder="Municipio" name="municipio" id="myInput" @isset($_GET['municipio']) value="{{$_GET['municipio']}}" @endisset>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg); left: 10px; top: 8px; position: absolute;" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zM7 9c0-2.76 2.24-5 5-5s5 2.24 5 5c0 2.88-2.88 7.19-5 9.88C9.92 16.21 7 11.85 7 9z" fill="#25405f"/><circle cx="12" cy="9" r="2.5" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
        </div>
        <div class="col-md-8 d-flex">
          <input type="text" class="form-control input-search" placeholder="Buscar Productos" name="busqueda" required @isset($_GET['busqueda']) value="{{$_GET['busqueda']}}" @endisset>
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg); left: 10px; top: 8px; position: absolute;" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
        </div>
      </div>
      <button hidden></button>
    </form>

    @guest
      <div class="d-flex justify-content-end content-menu-logaut">
        <a class="btn-iniciar-sesion mx-2 btn btn-rounded py-2" href="{{route('login')}}">
          <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M11.5 14c4.142 0 7.5 1.567 7.5 3.5V20H4v-2.5c0-1.933 3.358-3.5 7.5-3.5zm6.5 3.5c0-1.38-2.91-2.5-6.5-2.5S5 16.12 5 17.5V19h13v-1.5zM11.5 5a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7zm0 1a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
          Regístrate o inicia sesión
        </a>
        
        {{-- Btn menu buscar --}}
        <div class="dropdown d-block d-md-block d-lg-none">
          <a class="my-auto btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#" role="button" id="dropdownMenuBuscar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M9.5 4a6.5 6.5 0 0 1 4.932 10.734l5.644 5.644l-.707.707l-5.645-5.645A6.5 6.5 0 1 1 9.5 4zm0 1a5.5 5.5 0 1 0 0 11a5.5 5.5 0 0 0 0-11z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            <span class="tooltiptext">Buscar</span>
          </a>
        
          <div class="dropdown-menu dropdown-menu-right menu menu-navbar menu-buscar" aria-labelledby="dropdownMenuBuscar">
            <p class="menu-notificaciones-title">Buscar producto</p>
            <form action="" class="flex-fill">
              @include('includes.addBuscador')
              <div class="form-row align-items-center">
                <div class="col-md-12 ">
                  <input type="text" class="form-control input-search" placeholder="Buscar productos">
                </div>
                <div class="col-md-12 mt-3">
                  <select class="form-control select-city">
                    <option selected disabled >Ciudad</option>
                      @foreach( \App\Models\Departamento::all() as $ciudad)
                      <option value="{{$ciudad->id}}">{{ucwords(strtolower($ciudad->departamento))}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <button class="btn-rounded btn-primary btn-primary-dark btn-block py-2 mt-3">Buscar</button>
            </form>
          </div>
        </div>
        
        <a class="btn-publicar mx-1" href="{{route('login')}}" rel="noopener noreferrer">
          <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" fill="#00416b"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
          <span class="d-none d-md-block">Publicar</span>
        </a>
      </div>
    @else
      <div class="content-menu-login d-flex">
        {{-- Btn publicar producto --}}
        <a class="btn-publicar mx-1" href="{{route('selecionar-categorias')}}" rel="noopener noreferrer">
          <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19 13h-6v6h-2v-6H5v-2h6V5h2v6h6v2z" fill="#00416b"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
          <span class="d-none d-md-block">Publicar</span>
        </a>
        
        {{-- Btn menu notificaciones --}}
        <div class="dropdown">
          <a class="dropdown-toggle btn-rounded mx-1 btn-menu-notificaciones tooltips" href="#" role="button" id="dropdownMenuNotificaciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19.29 17.29L18 16v-5c0-3.07-1.64-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.63 5.36 6 7.92 6 11v5l-1.29 1.29c-.63.63-.19 1.71.7 1.71h13.17c.9 0 1.34-1.08.71-1.71zM16 17H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6zm-4 5c1.1 0 2-.9 2-2h-4a2 2 0 0 0 2 2z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>

              <?php
                $count = 0;
              ?>
              @foreach(\App\Chat::orderBy("created_at", "desc")->where('to_id', Auth::user()->id)->where('notificacion', 0)->get()->groupBy('chat-event') as $chats)
              
                <?php
                  if($chats->where('to_id', Auth::user()->id)->last() != null)
                  $count = $count + 1;
                ?>
              @endforeach


            @if($count >= 1)
            <span class="badge badge-pill badge-danger badge-notificaciones">
              
              {{$count}}
            </span>
            @endif
            <span class="tooltiptext">notificaciones</span>
          </a> 
          
          <div class="dropdown-menu menu menu-navbar" aria-labelledby="dropdownMenuNotificaciones">
            <ul class="menu-notificaciones-list">
              <p class="menu-notificaciones-title">Notificaciones</p>
                @forelse(\App\Chat::orderBy("created_at", "desc")->where('to_id', Auth::user()->id)->get()->groupBy('chat-event') as $notificaciones)
               
                  <?php
                      if(Auth::user()->id == $notificaciones[0]->user_comprador_id){
                        $toC = \App\Models\User::find($notificaciones[0]->user_id);
                      }else{
                        $toC = \App\Models\User::find($notificaciones[0]->user_comprador_id);
                      }
                      
                  ?>
                <li>
                  <a class="menu-notificacion-mensaje d-flex align-items-center" href="{{route('chat')}}?p={{$notificaciones[0]->producto_id}}&v={{$notificaciones[0]->user_id}}&c={{$notificaciones[0]->user_comprador_id}}">
                    <div class="menu-notificaciones-icon mx-2">
                      <svg class="d-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 4h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-3.5l-3 3l-3-3H5a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3zm0 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.914l2.586 2.586L14.086 18H18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    </div>
                    <p>{{$notificaciones[0]->comprador->name}} pregunta en: {{$notificaciones[0]->producto->nombre}}</p>
                  </a>
                </li>
                @empty
                  No hay nada para mostrar
                @endforelse
            </ul>
          </div>
        </div>
        {{-- Btn menu buscar --}}
        <div class="dropdown d-block d-md-block d-lg-none">
          <a class="my-auto btn-rounded mx-1 tooltips btn-menu-buscar" href="#" role="button" id="dropdownMenuBuscar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M9.5 4a6.5 6.5 0 0 1 4.932 10.734l5.644 5.644l-.707.707l-5.645-5.645A6.5 6.5 0 1 1 9.5 4zm0 1a5.5 5.5 0 1 0 0 11a5.5 5.5 0 0 0 0-11z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            <span class="tooltiptext">Buscar</span>
          </a>
        
          <div class="dropdown-menu menu menu-navbar menu-buscar" aria-labelledby="dropdownMenuBuscar">
            <p class="menu-notificaciones-title">Buscar producto</p>
            <form action="" class="flex-fill">
              @include('includes.addBuscador')
              <div class="form-row align-items-center">
                <div class="col-md-12 ">
                  <input type="text" class="form-control input-search" placeholder="Buscar productos">
                </div>
                <div class="col-md-12 mt-3">
                  <select class="form-control select-city">
                    <option selected disabled >Ciudad</option>
                      @foreach( \App\Models\Departamento::all() as $ciudad)
                      <option value="{{$ciudad->id}}">{{$ciudad->departamento}}</option>
                      @endforeach
                  </select>
                </div>
              </div>
              <button class="btn-rounded btn-primary btn-primary-dark btn-block py-2 mt-3">Buscar</button>
            </form>
          </div>
        </div>
        <div class="dropdown">
          <a href="#" class="dropdown-toggle btn-rounded mx-1 btn-menu-user tooltips" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 5.9a2.1 2.1 0 1 1 0 4.2a2.1 2.1 0 0 1 0-4.2m0 9c2.97 0 6.1 1.46 6.1 2.1v1.1H5.9V17c0-.64 3.13-2.1 6.1-2.1M12 4C9.79 4 8 5.79 8 8s1.79 4 4 4s4-1.79 4-4s-1.79-4-4-4zm0 9c-2.67 0-8 1.34-8 4v2c0 .55.45 1 1 1h14c.55 0 1-.45 1-1v-2c0-2.66-5.33-4-8-4z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            <span class="tooltiptext">Usuario</span>
          </a>
        
          <div class="dropdown-menu  dropdown-menu-right menu menu-navbar" aria-labelledby="dropdownMenuLink">
            <div class="datos-users border-bottom">
              <form action="subirFoto" name="fotoformulario" method="post" enctype="multipart/form-data">@csrf
                <input type="file" id="fileinput" name="fotoPerfil" hidden>
              </form>
              <img class="rounded-circle img-user" @if(Auth::user()->foto == null) src="{{asset('img/avatar.png')}}" @else src="{{asset(Auth::user()->foto)}}"  @endif alt="" onclick="subirFoto();">
              <div class="name-user">
                <p class="mb-0 font-weight-bold">{{Auth::user()->name}}</p>
                <p class="mb-2">{{Auth::user()->mail}}</p>
                <a class="link-perfil-user" href="/perfil">Ver perfil y editar</a>
              </div>
            </div>
            
            <ul class="menu-user-list">
              @if(Auth::user()->rol_id == 1)
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M13 7.5h5v2h-5zm0 7h5v2h-5zM19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM11 6H6v5h5V6zm-1 4H7V7h3v3zm1 3H6v5h5v-5zm-1 4H7v-3h3v3z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <a class="ml-2" href="/home">Dashboard</a>
              </li>
              @endif
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8 3h9a3 3 0 0 1 3 3v13a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm0 1a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-3v6.7l-3-2.1l-3 2.1V4zm5 0H9v4.78l2-1.401l2 1.4V4zM8 24a5 5 0 0 1-5-5V7h1v12a4 4 0 0 0 4 4h8v1H8z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <a class="ml-2" href="/anuncios">Anuncios</a>
              </li>
              <li>
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M21.224 15.543l-.813-1.464l-1.748.972l.812 1.461c.048.085.082.173.104.264a1.024 1.024 0 0 1-.014.5a.988.988 0 0 1-.104.235a1 1 0 0 1-.347.352a.978.978 0 0 1-.513.137H14v-2l-4 3l4 3v-2h4.601c.278 0 .552-.037.811-.109a2.948 2.948 0 0 0 1.319-.776c.178-.179.332-.38.456-.593a2.992 2.992 0 0 0 .336-2.215a3.163 3.163 0 0 0-.299-.764zM5.862 11.039l-2.31 4.62a3.06 3.06 0 0 0-.261.755a2.997 2.997 0 0 0 .851 2.735c.178.174.376.326.595.453A3.022 3.022 0 0 0 6.236 20H8v-2H6.236a1.016 1.016 0 0 1-.5-.13a.974.974 0 0 1-.353-.349a1 1 0 0 1-.149-.468a.933.933 0 0 1 .018-.245c.018-.087.048-.173.089-.256l2.256-4.512l1.599.923L8.598 8L4 9.964l1.862 1.075zm12.736 1.925L19.196 8l-1.638.945l-2.843-5.117a2.95 2.95 0 0 0-1.913-1.459a3.227 3.227 0 0 0-.772-.083a3.003 3.003 0 0 0-1.498.433A2.967 2.967 0 0 0 9.41 3.944l-.732 1.464l1.789.895l.732-1.465c.045-.09.101-.171.166-.242a.933.933 0 0 1 .443-.27a1.053 1.053 0 0 1 .53-.011a.963.963 0 0 1 .63.485l2.858 5.146L14 11l4.598 1.964z" fill="#626262"/></svg>
                <a class="ml-2" href="/intercambios">intercambios</a>
              </li>
              
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <a class="ml-2" href="/favoritos">Favoritos</a>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19.588 15.492l-1.814-1.29a6.483 6.483 0 0 0-.005-3.421l1.82-1.274l-1.453-2.514l-2.024.926a6.484 6.484 0 0 0-2.966-1.706L12.953 4h-2.906l-.193 2.213A6.483 6.483 0 0 0 6.889 7.92l-2.025-.926l-1.452 2.514l1.82 1.274a6.483 6.483 0 0 0-.006 3.42l-1.814 1.29l1.452 2.502l2.025-.927a6.483 6.483 0 0 0 2.965 1.706l.193 2.213h2.906l.193-2.213a6.484 6.484 0 0 0 2.965-1.706l2.025.927l1.453-2.501zM13.505 2.985a.5.5 0 0 1 .5.477l.178 2.035a7.45 7.45 0 0 1 2.043 1.178l1.85-.863a.5.5 0 0 1 .662.195l2.005 3.47a.5.5 0 0 1-.162.671l-1.674 1.172c.128.798.124 1.593.001 2.359l1.673 1.17a.5.5 0 0 1 .162.672l-2.005 3.457a.5.5 0 0 1-.662.195l-1.85-.863c-.602.49-1.288.89-2.043 1.179l-.178 2.035a.5.5 0 0 1-.5.476h-4.01a.5.5 0 0 1-.5-.476l-.178-2.035a7.453 7.453 0 0 1-2.043-1.179l-1.85.863a.5.5 0 0 1-.663-.194L2.257 15.52a.5.5 0 0 1 .162-.671l1.673-1.171a7.45 7.45 0 0 1 0-2.359L2.42 10.148a.5.5 0 0 1-.162-.67L4.26 6.007a.5.5 0 0 1 .663-.195l1.85.863a7.45 7.45 0 0 1 2.043-1.178l.178-2.035a.5.5 0 0 1 .5-.477h4.01zM11.5 9a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7zm0 1a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <a class="ml-2" href="/configuracion">Configuraciones</a>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M15 3H9a3 3 0 0 0-3 3v4h1V6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2v-4H6v4a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3zM3 12h10.25L10 8.75l.664-.75l4.5 4.5l-4.5 4.5l-.664-.75L13.25 13H3v-1z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <a class="ml-2" href="{{route('logout')}}">Cerrar sesión</a>
              </li>
            </ul>
          </div>
        </div>

      </div>
    @endauth
  </div>
</nav>
<ul class="nav container mt-2 d-flex">
  <li class="nav-item">
    <div class="dropdown">
      <a class="nav-link btn-categorias dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M3 18h18v-2H3v2zm0-5h18v-2H3v2zm0-7v2h18V6H3z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
        Categorias
      </a>
    
      <div class="dropdown-menu menu menu-categorias mt-2 px-1" aria-labelledby="dropdownMenuLink">
        <div class="content-categorias">
          @foreach( \App\Models\Categoria::where('status', true)->orderBy('nombre', 'ASC')->get() as $categoria)
            <div class="item-categorias">
              <div class="mt-2">
                <a class="d-block title-subcategoria" style="color: #333333;" href="{{route('busqueda')}}?categoria={{$categoria->id}}">
                  <b>{{$categoria->nombre}}</b>
                </a>
              </div>
              @if($categoria->subCategoria->count() > 1)
                @foreach($categoria->subCategoria as $subCategoria)
                  <div>
                    <a class="d-block" style="color: #333333;" href="{{route('busqueda')}}?categoria={{$categoria->id}}">
                      {{$subCategoria->nombre}}
                    </a>
                  </div>
                @endforeach
              @endif
            </div>
          @endforeach
        </div>
        {{-- <ul class="list-group flex-row row">
          @foreach( \App\Models\Categoria::orderBy('nombre', 'ASC')->get() as $categoria)
            <li class="list-group-item border-0 border-bottom list-group-item-hover col-md-3 col-12 h-auto">
              <a class="d-block" style="color: #333333;" href="{{route('busqueda')}}?categoria={{$categoria->id}}">
                <b>{{$categoria->nombre}}</b>
              </a>
              @foreach($categoria->subCategoria as $subCategoria)
                <a class="d-block" style="color: #3d3d3d;" href="{{route('busqueda')}}?categoria={{$categoria->id}}&subCategoria={{$subCategoria->id}}">
                  {{$subCategoria->nombre}}
                </a>
              @endforeach
            </li>
          @endforeach
        </ul> --}}
      </div>
    </div>
  </li>
</ul>

<nav class="navbar navbar-light bg-light shadow-0 border-bottom">
  <div class="container">
    <a class="navbar-brand d-block p-2 d-md-none w-100" href="/">
      <img
        src="{{asset('img/Logo.png')}}"
        height="30"
        alt="Trueque"
        loading="lazy"
      />
    </a>

    <a class="navbar-brand d-none d-md-block" href="/">
      <img
        src="{{asset('img/Logo.png')}}"
        height="30"
        alt="Trueque"
        loading="lazy"
      />
    </a>

    <form action="" class="d-none d-md-none d-lg-block" style="width: 57%;">
      <div class="form-row align-items-center">
        <div class="col-md-4">
          <select class="form-control p-2 select-city">
            <option selected disabled >Departamentos</option>
              @foreach( \App\Models\Departamento::all() as $ciudad)
              <option value="{{$ciudad->id}}">{{$ciudad->departamento}}</option>
              @endforeach
          </select>
        </div>
        <div class="col-md-8 d-flex">
          <input type="text" class="form-control input-search pl-5" placeholder="Buscar productos">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg); left: 10px; top: 8px; position: absolute;" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M15.5 14h-.79l-.28-.27A6.471 6.471 0 0 0 16 9.5A6.5 6.5 0 1 0 9.5 16c1.61 0 3.09-.59 4.23-1.57l.27.28v.79l5 4.99L20.49 19l-4.99-5zm-6 0C7.01 14 5 11.99 5 9.5S7.01 5 9.5 5S14 7.01 14 9.5S11.99 14 9.5 14z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
        </div>
      </div>
    </form>

    @guest
      <div class="d-flex justify-content-end content-menu-logaut">
        <a class="btn-iniciar-sesion mx-2 btn btn-rounded-light btn-rounded" href="{{route('login')}}">
          <svg class="mr-1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M11.5 14c4.142 0 7.5 1.567 7.5 3.5V20H4v-2.5c0-1.933 3.358-3.5 7.5-3.5zm6.5 3.5c0-1.38-2.91-2.5-6.5-2.5S5 16.12 5 17.5V19h13v-1.5zM11.5 5a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7zm0 1a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5z" fill="#01a0b8"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
          Iniciar sesion
        </a>
        
        {{-- Btn menu buscar --}}
        <div class="dropdown d-block d-md-block d-lg-none">
          <a class="my-auto btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#" role="button" id="dropdownMenuBuscar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M9.5 4a6.5 6.5 0 0 1 4.932 10.734l5.644 5.644l-.707.707l-5.645-5.645A6.5 6.5 0 1 1 9.5 4zm0 1a5.5 5.5 0 1 0 0 11a5.5 5.5 0 0 0 0-11z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            <span class="tooltiptext">Buscar</span>
          </a>
        
          <div class="dropdown-menu dropdown-menu-right menu menu-navbar menu-buscar" aria-labelledby="dropdownMenuBuscar">
            <p class="menu-notificaciones-title">Buscar producto</p>
            <form action="" class="flex-fill">
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
        
        <a class="btn-rounded btn-primary btn-primary-dark btn-border-dark mx-1" href="{{route('login')}}" rel="noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 13v-1h6V6h1v6h6v1h-6v6h-1v-6H5z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
          <span class="d-none d-md-block">Publicar</span>
        </a>
      </div>
    @else
      <div class="content-menu-login" style="display: contents;">
        {{-- Btn menu notificaciones --}}
        <div class="dropdown">
          <a class="dropdown-toggle btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 btn-menu-notificaciones tooltips" href="#" role="button" id="dropdownMenuNotificaciones" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 4.5a.5.5 0 0 0-1 0v1.527A4.5 4.5 0 0 0 7 10.5v5.914L5.414 18h12.172L16 16.414V10.5a4.5 4.5 0 0 0-4-4.473V4.5zM11.5 3A1.5 1.5 0 0 1 13 4.5v.707c2.309.653 4 2.775 4 5.293V16l3 3H3l3-3v-5.5a5.502 5.502 0 0 1 4-5.293V4.5A1.5 1.5 0 0 1 11.5 3zm0 19a2.5 2.5 0 0 1-2.45-2h1.035a1.5 1.5 0 0 0 2.83 0h1.035a2.5 2.5 0 0 1-2.45 2z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            <span class="tooltiptext">notificaciones</span>
          </a>
          
          <div class="dropdown-menu menu menu-navbar" aria-labelledby="dropdownMenuNotificaciones">
            <ul class="menu-notificaciones-list">
              <p class="menu-notificaciones-title">Notificaciones</p>
              <li>
                <div class="menu-notificaciones-icon mx-2">
                  <svg class="d-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 4h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-3.5l-3 3l-3-3H5a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3zm0 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.914l2.586 2.586L14.086 18H18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5z" fill="#111"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                </div>
                <div class="menu-notificacion-mensaje">
                  <a href="">title</a>
                  <p class="mb-1">Lorem ipsum dolor sit amet.</p>
                </div>
              </li>
              <li>
                <div class="menu-notificaciones-icon mx-2">
                  <svg class="d-block" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 4h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3h-3.5l-3 3l-3-3H5a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3zm0 1a2 2 0 0 0-2 2v9a2 2 0 0 0 2 2h3.914l2.586 2.586L14.086 18H18a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2H5z" fill="#111"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                </div>
                <div class="menu-notificacion-mensaje">
                  <a href="">title</a>
                  <p class="mb-1">Lorem ipsum dolor sit amet.</p>
                </div>
              </li>
            </ul>
          </div>
        </div>
        {{-- Btn menu buscar --}}
        <div class="dropdown d-block d-md-block d-lg-none">
          <a class="my-auto btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#" role="button" id="dropdownMenuBuscar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M9.5 4a6.5 6.5 0 0 1 4.932 10.734l5.644 5.644l-.707.707l-5.645-5.645A6.5 6.5 0 1 1 9.5 4zm0 1a5.5 5.5 0 1 0 0 11a5.5 5.5 0 0 0 0-11z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            <span class="tooltiptext">Buscar</span>
          </a>
        
          <div class="dropdown-menu menu menu-navbar menu-buscar" aria-labelledby="dropdownMenuBuscar">
            <p class="menu-notificaciones-title">Buscar producto</p>
            <form action="" class="flex-fill">
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
        {{-- Btn chat --}}
        <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips" href="#">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M3 20.586L6.586 17H18a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14.586zM3 22H2V6a3 3 0 0 1 3-3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3H7l-4 4zM6 7h11v1H6V7zm0 3h11v1H6v-1zm0 3h8v1H6v-1z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
          <span class="tooltiptext">Chat</span>
        </a>
        {{-- Btn menu user --}}
        <div class="dropdown">
          <a href="#" class="dropdown-toggle btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 btn-menu-user tooltips" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M11.5 14c4.142 0 7.5 1.567 7.5 3.5V20H4v-2.5c0-1.933 3.358-3.5 7.5-3.5zm6.5 3.5c0-1.38-2.91-2.5-6.5-2.5S5 16.12 5 17.5V19h13v-1.5zM11.5 5a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7zm0 1a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            <span class="tooltiptext">Usuario</span>
          </a>
        
          <div class="dropdown-menu  dropdown-menu-right menu menu-navbar" aria-labelledby="dropdownMenuLink">
            <div class="datos-users border-bottom">
              <img class="rounded-circle img-user" src="{{asset('img/avatar.png')}}" alt="">
              <div class="name-user">
                <p class="mb-0 font-weight-bold">{{Auth::user()->name}}</p>
                <p class="mb-2">{{Auth::user()->mail}}</p>
                <a class="link-perfil-user" href="/perfil">Ver perfil y editar</a>
              </div>
            </div>
            
            <ul class="menu-user-list">
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8 3h9a3 3 0 0 1 3 3v13a3 3 0 0 1-3 3H8a3 3 0 0 1-3-3V6a3 3 0 0 1 3-3zm0 1a2 2 0 0 0-2 2v13a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2h-3v6.7l-3-2.1l-3 2.1V4zm5 0H9v4.78l2-1.401l2 1.4V4zM8 24a5 5 0 0 1-5-5V7h1v12a4 4 0 0 0 4 4h8v1H8z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <a class="ml-2" href="/anuncios">Anuncios</a>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M18.707 16.743L14.464 12.5l4.243-4.243l.707.707L15.88 12.5l3.535 3.535l-.707.708zm-14.414 0l-.707-.707L7.12 12.5L3.586 8.964l.707-.707L8.536 12.5l-4.243 4.243z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <a class="ml-2" href="/cambios">Cambios</a>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <a class="ml-2" href="/favoritos">Favoritos</a>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19.588 15.492l-1.814-1.29a6.483 6.483 0 0 0-.005-3.421l1.82-1.274l-1.453-2.514l-2.024.926a6.484 6.484 0 0 0-2.966-1.706L12.953 4h-2.906l-.193 2.213A6.483 6.483 0 0 0 6.889 7.92l-2.025-.926l-1.452 2.514l1.82 1.274a6.483 6.483 0 0 0-.006 3.42l-1.814 1.29l1.452 2.502l2.025-.927a6.483 6.483 0 0 0 2.965 1.706l.193 2.213h2.906l.193-2.213a6.484 6.484 0 0 0 2.965-1.706l2.025.927l1.453-2.501zM13.505 2.985a.5.5 0 0 1 .5.477l.178 2.035a7.45 7.45 0 0 1 2.043 1.178l1.85-.863a.5.5 0 0 1 .662.195l2.005 3.47a.5.5 0 0 1-.162.671l-1.674 1.172c.128.798.124 1.593.001 2.359l1.673 1.17a.5.5 0 0 1 .162.672l-2.005 3.457a.5.5 0 0 1-.662.195l-1.85-.863c-.602.49-1.288.89-2.043 1.179l-.178 2.035a.5.5 0 0 1-.5.476h-4.01a.5.5 0 0 1-.5-.476l-.178-2.035a7.453 7.453 0 0 1-2.043-1.179l-1.85.863a.5.5 0 0 1-.663-.194L2.257 15.52a.5.5 0 0 1 .162-.671l1.673-1.171a7.45 7.45 0 0 1 0-2.359L2.42 10.148a.5.5 0 0 1-.162-.67L4.26 6.007a.5.5 0 0 1 .663-.195l1.85.863a7.45 7.45 0 0 1 2.043-1.178l.178-2.035a.5.5 0 0 1 .5-.477h4.01zM11.5 9a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7zm0 1a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <a class="ml-2" href="/configuracion">Configuraciones</a>
              </li>
              <li>
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M15 3H9a3 3 0 0 0-3 3v4h1V6a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v13a2 2 0 0 1-2 2H9a2 2 0 0 1-2-2v-4H6v4a3 3 0 0 0 3 3h6a3 3 0 0 0 3-3V6a3 3 0 0 0-3-3zM3 12h10.25L10 8.75l.664-.75l4.5 4.5l-4.5 4.5l-.664-.75L13.25 13H3v-1z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <a class="ml-2" href="{{route('logout')}}">Cerrar sesión</a>
              </li>
            </ul>
          </div>
        </div>
        {{-- Btn publicar producto --}}
        <a class="btn-rounded btn-primary btn-primary-dark btn-border-dark mx-1" href="{{route('publicar-productos')}}" rel="noopener noreferrer">
          <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 13v-1h6V6h1v6h6v1h-6v6h-1v-6H5z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
          <span class="d-none d-md-block">Publicar</span>
        </a>
      </div>
    @endauth
  </div>
</nav>
<ul class="nav container">
<li class="nav-item">
  <div class="dropdown">
    <a class="nav-link btn-categorias text-uppercase dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
      todas las categorias
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5.843 9.593L11.5 15.25l5.657-5.657l-.707-.707l-4.95 4.95l-4.95-4.95l-.707.707z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
    </a>
  
    <div class="dropdown-menu menu menu-categorias mt-2 px-1" aria-labelledby="dropdownMenuLink">
      <ul class="list-group">
        @foreach( \App\Models\Categoria::all() as $categoria)
          <li class="list-group-item border-top-0 border-right-0 border-left-0 border-bottom list-group-item-hover">
            <a href="{{route('categorias.show', $categoria->id)}}">{{$categoria->nombre}}</a>
          </li>
        @endforeach
      </ul>
    </div>
  </div>
</li>
@foreach( \App\Models\Categoria::paginate(5) as $categoriaside)
<li class="nav-item d-md-flex align-items-center d-none d-md-block">
  <a class="nav-link nav-link-text-categorias text-uppercase" href="{{route('categorias.show', $categoriaside->id)}}">{{$categoriaside->nombre}}</a>
</li>
@endforeach
</ul>
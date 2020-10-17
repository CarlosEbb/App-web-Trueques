<nav class="navbar navbar-light bg-light shadow-0 border-bottom d-flex">
    <div class="container">
      <a class="navbar-brand" href="#">
        <img
          src="{{asset('img/Logo.png')}}"
          height="30"
          alt="Trueque"
          loading="lazy"
        />
      </a>

      <form action="" class="flex-fill">
        <div class="form-row align-items-center">
          <div class="col-md-4">
            <select class="form-control select-city">
              <option selected disabled >Ciudad</option>
              <option value="1">One</option>
              <option value="2">Two</option>
              <option value="3">Three</option>
            </select>
          </div>
          <div class="col-md-8">
            <input type="text" class="form-control input-search" placeholder="Buscar productos">
          </div>
        </div>
      </form>

      
      <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M3 20.586L6.586 17H18a2 2 0 0 0 2-2V6a2 2 0 0 0-2-2H5a2 2 0 0 0-2 2v14.586zM3 22H2V6a3 3 0 0 1 3-3h13a3 3 0 0 1 3 3v9a3 3 0 0 1-3 3H7l-4 4zM6 7h11v1H6V7zm0 3h11v1H6v-1zm0 3h8v1H6v-1z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
        <span class="tooltiptext">Chat</span>
      </a>

      <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips" href="#">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M12 4.5a.5.5 0 0 0-1 0v1.527A4.5 4.5 0 0 0 7 10.5v5.914L5.414 18h12.172L16 16.414V10.5a4.5 4.5 0 0 0-4-4.473V4.5zM11.5 3A1.5 1.5 0 0 1 13 4.5v.707c2.309.653 4 2.775 4 5.293V16l3 3H3l3-3v-5.5a5.502 5.502 0 0 1 4-5.293V4.5A1.5 1.5 0 0 1 11.5 3zm0 19a2.5 2.5 0 0 1-2.45-2h1.035a1.5 1.5 0 0 0 2.83 0h1.035a2.5 2.5 0 0 1-2.45 2z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
        <span class="tooltiptext">Notificaciones</span>
      </a>
      <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1" href="{{route('login')}}">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M11.5 14c4.142 0 7.5 1.567 7.5 3.5V20H4v-2.5c0-1.933 3.358-3.5 7.5-3.5zm6.5 3.5c0-1.38-2.91-2.5-6.5-2.5S5 16.12 5 17.5V19h13v-1.5zM11.5 5a3.5 3.5 0 1 1 0 7a3.5 3.5 0 0 1 0-7zm0 1a2.5 2.5 0 1 0 0 5a2.5 2.5 0 0 0 0-5z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
      </a>
      <a class="btn-rounded btn-primary btn-primary-dark btn-border-dark mx-1" href="#" target="_blank" rel="noopener noreferrer">
        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5 13v-1h6V6h1v6h6v1h-6v6h-1v-6H5z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
        Publicar
      </a>
    </div>
</nav>
<ul class="nav container">
  <li class="nav-item">
    <a class="nav-link btn-categorias text-uppercase" href="#">
      todas las categorias
      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5.843 9.593L11.5 15.25l5.657-5.657l-.707-.707l-4.95 4.95l-4.95-4.95l-.707.707z" fill="black"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
    </a>
    <div class="menu-category mt-2">
      <ul class="list-group">
        <li class="list-group-item border-top-0 border-right-0 border-left-0 border-bottom list-group-item-hover">Cras justo odio</li>
        <li class="list-group-item border-top-0 border-right-0 border-left-0 border-bottom list-group-item-hover">Dapibus ac facilisis in</li>
        <li class="list-group-item border-top-0 border-right-0 border-left-0 border-bottom list-group-item-hover">Morbi leo risus</li>
        <li class="list-group-item border-top-0 border-right-0 border-left-0 border-bottom list-group-item-hover">Porta ac consectetur ac</li>
        <li class="list-group-item border-top-0 border-right-0 border-left-0 border-bottom list-group-item-hover">Vestibulum at eros</li>
        <li class="list-group-item border-top-0 border-right-0 border-left-0 border-bottom list-group-item-hover">Vestibulum at eros</li>
        <li class="list-group-item border-top-0 border-right-0 border-left-0 border-bottom list-group-item-hover">Vestibulum at eros</li>
        <li class="list-group-item border-top-0 border-right-0 border-left-0 border-bottom list-group-item-hover">Vestibulum at eros</li>
      </ul>
    </div>
  </li>
  <li class="nav-item d-flex align-items-center">
    <a class="nav-link nav-link-text-categorias text-uppercase" href="#">Link</a>
  </li>
  <li class="nav-item d-flex align-items-center">
    <a class="nav-link nav-link-text-categorias text-uppercase" href="#">Link</a>
  </li>
  <li class="nav-item d-flex align-items-center">
    <a class="nav-link nav-link-text-categorias text-uppercase" href="#">Disabled</a>
  </li>
</ul>
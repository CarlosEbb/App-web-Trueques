<footer class="mt-5">
  <div class="container py-3">
    <div class="row m-0">
      <div class="col-12 col-md-12 col-lg-3 d-flex justify-content-center align-items-start">
        <img src="{{asset('img/Logo.png')}}" alt="Logo" width="190" height="100">
      </div>
      <div class="col-12 col-md-4 col-lg-2">
        <ul class="list-group ">
          <li class="list-group-item border-0 py-1 px-1  bg-transparent font-weight-bold">
            Cambiemoslo
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">¿Quiénes somos?</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">Prensa</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">Empleo</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">Equipo</a>
          </li>
          {{-- @foreach(\App\Models\Categoria::paginate(4) as $categoria)
            <li class="list-group-item border-0 py-2 bg-transparent">
              <a href="{{route('busqueda')}}?categoria={{$categoria->id}}" class="link-footer" rel="noopener noreferrer">{{$categoria->nombre}}</a>
            </li>
          @endforeach --}}
        </ul>        
      </div>
      <div class="col-12 col-md-4 col-lg-2">
        <ul class="list-group ">
          <li class="list-group-item border-0 py-1 px-1  bg-transparent font-weight-bold">
            Soporte
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">Preguntas frecuentes</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">Reglas de publicación</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">Consejos de seguridad</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">¿Quiénes somos?</a>
          </li>
          {{-- @foreach(\App\Models\Categoria::paginate(4) as $buscado)
            <li class="list-group-item border-0 py-2 bg-transparent"><a href="{{route('categorias.show', $buscado->id)}}" class="link-footer" rel="noopener noreferrer">{{$buscado->nombre}}</a></li>
          @endforeach --}}
        </ul>   
      </div>
      <div class="col-12 col-md-4 col-lg-2">
        <ul class="list-group ">
          <li class="list-group-item border-0 py-1 px-1  bg-transparent font-weight-bold">Legal</li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">Condiciones de uso</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">Política de privacidad</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="" class="link-footer" rel="noopener noreferrer">Cookies</a>
          </li>
          {{-- @foreach(\App\Models\Categoria::paginate(4) as $buscado)
            <li class="list-group-item border-0 py-2 bg-transparent"><a href="{{route('categorias.show', $buscado->id)}}" class="link-footer" rel="noopener noreferrer">{{$buscado->nombre}}</a></li>
          @endforeach --}}
        </ul>   
      </div>
      <div class="col-12 col-md-12 col-lg-3 d-flex align-items-center">
        <ul class="list-group d-flex justify-content-center flex-row">
          <li class="list-group-item border-0 py-2 bg-transparent">
            <a href="#" class="link-footer" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="3em" height="3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path d="M16 4C9.384 4 4 9.384 4 16s5.384 12 12 12s12-5.384 12-12S22.616 4 16 4zm0 2c5.535 0 10 4.465 10 10a9.977 9.977 0 0 1-8.512 9.879v-6.963h2.848l.447-2.893h-3.295v-1.58c0-1.2.395-2.267 1.518-2.267h1.805V9.652c-.317-.043-.988-.136-2.256-.136c-2.648 0-4.2 1.398-4.2 4.584v1.923h-2.722v2.893h2.722v6.938A9.975 9.975 0 0 1 6 16c0-5.535 4.465-10 10-10z" fill="#00416b"/><rect x="0" y="0" width="32" height="32" fill="rgba(0, 0, 0, 0)" /></svg>
            </a>
          </li>
          <li class="list-group-item border-0 py-2 bg-transparent">
            <a href="#" class="link-footer" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="3em" height="3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path d="M11.469 5C7.918 5 5 7.914 5 11.469v9.062C5 24.082 7.914 27 11.469 27h9.062C24.082 27 27 24.086 27 20.531V11.47C27 7.918 24.086 5 20.531 5zm0 2h9.062A4.463 4.463 0 0 1 25 11.469v9.062A4.463 4.463 0 0 1 20.531 25H11.47A4.463 4.463 0 0 1 7 20.531V11.47A4.463 4.463 0 0 1 11.469 7zm10.437 2.188a.902.902 0 0 0-.906.906c0 .504.402.906.906.906a.902.902 0 0 0 .907-.906a.902.902 0 0 0-.907-.906zM16 10c-3.3 0-6 2.7-6 6s2.7 6 6 6s6-2.7 6-6s-2.7-6-6-6zm0 2c2.223 0 4 1.777 4 4s-1.777 4-4 4s-4-1.777-4-4s1.777-4 4-4z" fill="#00416b"/><rect x="0" y="0" width="32" height="32" fill="rgba(0, 0, 0, 0)" /></svg>
            </a>
          </li>
          <li class="list-group-item border-0 py-2 bg-transparent">
            <a href="#" class="link-footer" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="3em" height="3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M15.3 5.55a2.9 2.9 0 0 0-2.9 2.847l-.028 1.575a.6.6 0 0 1-.68.583l-1.561-.212c-2.054-.28-4.022-1.226-5.91-2.799c-.598 3.31.57 5.603 3.383 7.372l1.747 1.098a.6.6 0 0 1 .034.993L7.793 18.17c.947.059 1.846.017 2.592-.131c4.718-.942 7.855-4.492 7.855-10.348c0-.478-1.012-2.141-2.94-2.141zm-4.9 2.81a4.9 4.9 0 0 1 8.385-3.355c.711-.005 1.316.175 2.669-.645c-.335 1.64-.5 2.352-1.214 3.331c0 7.642-4.697 11.358-9.463 12.309c-3.268.652-8.02-.419-9.382-1.841c.694-.054 3.514-.357 5.144-1.55C5.16 15.7-.329 12.47 3.278 3.786c1.693 1.977 3.41 3.323 5.15 4.037c1.158.475 1.442.465 1.973.538z" fill="#00416b"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            </a>
          </li>
          <li class="list-group-item border-0 py-2 bg-transparent">
            <a href="#" class="link-footer" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="3em" height="3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M19.606 6.995c-.076-.298-.292-.523-.539-.592C18.63 6.28 16.5 6 12 6s-6.628.28-7.069.403c-.244.068-.46.293-.537.592C4.285 7.419 4 9.196 4 12s.285 4.58.394 5.006c.076.297.292.522.538.59C5.372 17.72 7.5 18 12 18s6.629-.28 7.069-.403c.244-.068.46-.293.537-.592C19.715 16.581 20 14.8 20 12s-.285-4.58-.394-5.005zm1.937-.497C22 8.28 22 12 22 12s0 3.72-.457 5.502c-.254.985-.997 1.76-1.938 2.022C17.896 20 12 20 12 20s-5.893 0-7.605-.476c-.945-.266-1.687-1.04-1.938-2.022C2 15.72 2 12 2 12s0-3.72.457-5.502c.254-.985.997-1.76 1.938-2.022C6.107 4 12 4 12 4s5.896 0 7.605.476c.945.266 1.687 1.04 1.938 2.022zM10 15.5v-7l6 3.5l-6 3.5z" fill="#00416b"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</footer>
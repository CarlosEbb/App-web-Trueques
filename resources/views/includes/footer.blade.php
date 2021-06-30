<footer class="mt-5">
  <div class="container py-3">
    <div class="row m-0">
      <div class="col-12 col-md-12 col-lg-3 d-flex justify-content-center align-items-start">
        <img src="{{asset('img/Logo.png')}}" alt="Logo" width="190" height="100">
      </div>
      <div class="col-12 col-md-2 col-lg-3">
        <ul class="list-group ">
          <li class="list-group-item border-0 py-1 px-1  bg-transparent font-weight-bold">
            Cambiemoslo
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="/quienes-somos" class="link-footer" rel="noopener noreferrer">¿Quiénes somos?</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="/reglas" class="link-footer" rel="noopener noreferrer">Paso a Paso para Publicar</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="/consejos-seguridad" class="link-footer" rel="noopener noreferrer">Consejos de seguridad</a>
          </li>
          
          {{-- @foreach(\App\Models\Categoria::paginate(4) as $categoria)
            <li class="list-group-item border-0 py-2 bg-transparent">
              <a href="{{route('busqueda')}}?categoria={{$categoria->id}}" class="link-footer" rel="noopener noreferrer">{{$categoria->nombre}}</a>
            </li>
          @endforeach --}}
        </ul>        
      </div>
      <div class="col-12 col-md-2 col-lg-2">
      <ul class="list-group ">
          <li class="list-group-item border-0 py-1 px-1  bg-transparent font-weight-bold">Legal</li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="/condiciones-uso" class="link-footer" rel="noopener noreferrer">Términos y Condiciones</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="/politica-privacidad" class="link-footer" rel="noopener noreferrer">Política de privacidad</a>
          </li>
        </ul>  
      </div>
      <div class="col-12 col-md-2 col-lg-2">
      <ul class="list-group ">
          <li class="list-group-item border-0 py-1 px-1  bg-transparent font-weight-bold">Soporte</li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="/preguntas-frecuentes" class="link-footer" rel="noopener noreferrer">Preguntas frecuentes</a>
          </li>
          <li class="list-group-item border-0 p-0 ml-3 bg-transparent">
            <a href="/contactanos" class="link-footer" rel="noopener noreferrer">Contáctanos</a>
          </li>
        </ul>  
      </div>
      
      <div class="col-12 col-md-2 col-lg-2 d-flex align-items-center">
        <ul class="list-group d-flex justify-content-center flex-row">
          <li class="list-group-item border-0 py-2 px-2 px-md-2 bg-transparent">
            <a href="https://www.facebook.com/Cambiemoslo-103262105117267/" class="link-footer" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="3em" height="3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path d="M16 4C9.384 4 4 9.384 4 16s5.384 12 12 12s12-5.384 12-12S22.616 4 16 4zm0 2c5.535 0 10 4.465 10 10a9.977 9.977 0 0 1-8.512 9.879v-6.963h2.848l.447-2.893h-3.295v-1.58c0-1.2.395-2.267 1.518-2.267h1.805V9.652c-.317-.043-.988-.136-2.256-.136c-2.648 0-4.2 1.398-4.2 4.584v1.923h-2.722v2.893h2.722v6.938A9.975 9.975 0 0 1 6 16c0-5.535 4.465-10 10-10z" fill="#00416b"/><rect x="0" y="0" width="32" height="32" fill="rgba(0, 0, 0, 0)" /></svg>
            </a>
          </li>
          <li class="list-group-item border-0 py-2 px-2 px-md-2 bg-transparent">
            <a href="https://www.instagram.com/cambiemoslo/" class="link-footer" target="_blank" rel="noopener noreferrer">
              <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="3em" height="3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32"><path d="M11.469 5C7.918 5 5 7.914 5 11.469v9.062C5 24.082 7.914 27 11.469 27h9.062C24.082 27 27 24.086 27 20.531V11.47C27 7.918 24.086 5 20.531 5zm0 2h9.062A4.463 4.463 0 0 1 25 11.469v9.062A4.463 4.463 0 0 1 20.531 25H11.47A4.463 4.463 0 0 1 7 20.531V11.47A4.463 4.463 0 0 1 11.469 7zm10.437 2.188a.902.902 0 0 0-.906.906c0 .504.402.906.906.906a.902.902 0 0 0 .907-.906a.902.902 0 0 0-.907-.906zM16 10c-3.3 0-6 2.7-6 6s2.7 6 6 6s6-2.7 6-6s-2.7-6-6-6zm0 2c2.223 0 4 1.777 4 4s-1.777 4-4 4s-4-1.777-4-4s1.777-4 4-4z" fill="#00416b"/><rect x="0" y="0" width="32" height="32" fill="rgba(0, 0, 0, 0)" /></svg>
            </a>
          </li>
         
        </ul>
      </div>
    </div>
  </div>
</footer>
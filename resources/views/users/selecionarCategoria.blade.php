@extends('layouts.app')

@section('content')
<div class="container mt-5" style="min-height: 63.4vh;">
  <div class="row">
    <div class="col-12 text-center my-5">
      <h3 class="text-uppercase title d-flex align-items-center justify-content-md-center">
        {{-- <a href="/" class="d-block d-md-none"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1em" height="1em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M20 11H7.83l5.59-5.59L12 4l-8 8l8 8l1.41-1.41L7.83 13H20v-2z" fill="#25405f"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg></a> --}}
        seleccionar categoria
      </h3>
    </div>
    <div class="col-5">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          @foreach( \App\Models\Categoria::orderBy('nombre', 'ASC')->get() as $categoria)
            <a class="nav-link" id="v-pills-home" data-toggle="pill" href="#v-pills-home-{{$categoria->id}}" role="tab" aria-controls="v-pills-home-{{$categoria->id}}" aria-selected="true">{{$categoria->nombre}}</a>
          @endforeach
      </div>
    </div>
    <div class="col-7 col-md-6">
      <div class="tab-content" id="v-pills-tabContent">
      @foreach( \App\Models\Categoria::orderBy('nombre', 'ASC')->get() as $categoria)
          <div class="tab-pane fade show" id="v-pills-home-{{$categoria->id}}" role="tabpanel" aria-labelledby="v-pills-home-{{$categoria->id}}">
              @foreach($categoria->subCategoria as $subCategoria)
                <a class="d-block border p-2 rounded my-2" href="/publicar-productos?categoria_id={{$categoria->id}}&sub_categoria_id={{$subCategoria->id}}">{{$subCategoria->nombre}}</a>
              @endforeach
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
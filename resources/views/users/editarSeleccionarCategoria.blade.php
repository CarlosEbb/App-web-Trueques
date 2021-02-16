@extends('layouts.app')

@section('content')
<div class="container mt-5" style="min-height: 63.4vh;">
  <div class="row">
    <div class="col-12 text-center my-5">
      <h2 class="text-uppercase title">seleccionar categoria</h2>
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
                <a class="d-block border p-2 rounded my-2" href="/editarProductos?categoria{{$nroInteres}}={{$categoria->id}}&subCategoria{{$nroInteres}}={{$subCategoria->id}}&producto={{$producto->id}}">{{$subCategoria->nombre}}</a>
              @endforeach
          </div>
        @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
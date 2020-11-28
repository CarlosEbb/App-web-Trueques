@extends('layouts.app')

@section('content')
<div class="container mt-5" style="min-height: 63.4vh;">
  <div class="row">
    <div class="col-12 text-center my-5">
      <h2 class="text-uppercase title">seleccionar categoria</h2>
    </div>
    <div class="col-5">
      <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
        <a class="nav-link active" id="v-pills-home-tab" data-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Categorias</a>
        <a class="nav-link" id="v-pills-profile-tab" data-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Categorias</a>
        <a class="nav-link" id="v-pills-messages-tab" data-toggle="pill" href="#v-pills-messages" role="tab" aria-controls="v-pills-messages" aria-selected="false">Categorias</a>
        <a class="nav-link" id="v-pills-settings-tab" data-toggle="pill" href="#v-pills-settings" role="tab" aria-controls="v-pills-settings" aria-selected="false">Categorias</a>
      </div>
    </div>
    <div class="col-7 col-md-6">
      <div class="tab-content" id="v-pills-tabContent">
        <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
        </div>
        <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
        </div>
        <div class="tab-pane fade" id="v-pills-messages" role="tabpanel" aria-labelledby="v-pills-messages-tab">
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
        </div>
        <div class="tab-pane fade" id="v-pills-settings" role="tabpanel" aria-labelledby="v-pills-settings-tab">
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
          <a class="d-block border p-2 rounded my-2" href="">Sub categorias </a>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
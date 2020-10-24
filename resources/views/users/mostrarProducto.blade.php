@extends('layouts.app')

@section('content')
 
  <div class="container">
    <div class="row mt-5">
      <section class="col-12 col-md-8">
        <div class="row px-1">
          <article class="card card-border-radius col-12 p-0">
            <img src="https://via.placeholder.com/300x250" class="card-img-top card-img-rounded-top" alt="">
            <div class="content-img-product card-footer bg-transparent d-flex ">
              <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
              <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
              <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
              <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
              <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
              <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
              <img src="https://via.placeholder.com/90" width="90" class="rounded-lg mx-1 mt-2" alt="">
            </div>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3 class="title-card-product">Descripción</h3>
            <p>{{$producto->descripcion}}</p>
            <span class="footer-product">Publicado el 20/30/2020</span>
          </article>
        </div>
      </section>
      <section class="col-12 col-md-4 mt-3 mt-md-0">
        <div class="row px-1">
          <article class="card card-border-radius card-border-active p-3 col-12">
            <h3 class="title-card-product">$ 1.600.000</h3>
            <p class="name-product">{{$producto->nombre}}</p>
            <span class="footer-product">Bogota / centro</span>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3 class="title-card-product">Descripción del vendedor</h3>
            <div class="content-info-user d-flex">
              <img src="https://via.placeholder.com/50" width="50" class="rounded-circle mr-3" alt="">
              <div class="info-user">
                <p class="mb-1 font-weight-bold">Miguel Perez</p>
                <span class="footer-product">Miembro desde jun 2019</span>
              </div>
            </div>
            <button class=" mt-3 btn-rounded btn-primary btn-primary-dark  mx-auto d-block w-100 tooltips">Chat</button>
          </article>
          <article class="card card-border-radius p-3 col-12 mt-3">
            <h3 class="title-card-product">Publicado en</h3>
            <span>Hipotecho Occidental, Kennedy, Bogotá</span>
          </article>
        </div>
      </section>
      <section class="col-12">
        <div class="row">
          <div class="col-12 section-content">
            <h1 class="title">Productos relacionados</h1> 
          </div>
          <article class="col-12 px-5 px-sm-3 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
            <div class="card card-product">
            <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title mb-5 card-title-product">Samsung</h5>
                <div class="card-footer card-footer-product">
                  <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$producto->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">favorito</span>
                </a>
                <a href="#" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">producto</span>
                </a>
                </div>
              </div>
            </div>
          </article>
          <article class="col-12 px-5 px-sm-3 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
            <div class="card card-product">
            <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title mb-5 card-title-product">Samsung</h5>
                <div class="card-footer card-footer-product">
                  <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$producto->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">favorito</span>
                </a>
                <a href="#" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">producto</span>
                </a>
                </div>
              </div>
            </div>
          </article>
          <article class="col-12 px-5 px-sm-3 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
            <div class="card card-product">
            <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title mb-5 card-title-product">Samsung</h5>
                <div class="card-footer card-footer-product">
                  <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$producto->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    <span class="tooltiptext">favorito</span>
                  </a>
                  <a href="#" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                    <span class="tooltiptext">producto</span>
                  </a>
                </div>
              </div>
            </div>
          </article>
          <article class="col-12 px-5 px-sm-3 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
            <div class="card card-product">
            <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title mb-5 card-title-product">Samsung</h5>
                <div class="card-footer card-footer-product">
                  <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon_{{$producto->id}}" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">favorito</span>
                </a>
                <a href="#" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                  <span class="tooltiptext">producto</span>
                </a>
                </div>
              </div>
            </div>
          </article>
        </div>
      </section>
    </div>
  </div>
  <br>
@endsection
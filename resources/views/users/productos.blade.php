@extends('layouts.app')

@section('content')
    <div class="container mt-5">
      <section class="row">
        <div class="col-12 col-md-3">
          <h5 class="border-bottom py-2 text-body">Filtrar busqueda</h5>
          <div class="accordion" id="accordionExample">
            <div class="card border-0 border-bottom">
              <div class="card-header pl-1 bg-transparent" id="headingOne">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left text-uppercase text-body font-waight-bold" type="button" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                    <b>
                      <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5.843 9.593L11.5 15.25l5.657-5.657l-.707-.707l-4.95 4.95l-4.95-4.95l-.707.707z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                      rango de precio
                    </b>
                  </button>
                </h2>
              </div>
          
              <div id="collapseOne" class="collapse show" aria-labelledby="headingOne" data-parent="#accordionExample">
                <div class="card-body">
                  <a href="#" class="d-block text-uppercase py-1">0 a 10,000 pesos</a>
                  <a href="#" class="d-block text-uppercase py-1">10,000 a 20,000 pesos</a>
                  <a href="#" class="d-block text-uppercase py-1">20,000 a 40,000 pesos</a>
                  <a href="#" class="d-block text-uppercase py-1">40,000 a 60,000 pesos</a>
                  <a href="#" class="d-block text-uppercase py-1">60,000 a 100,000 pesos</a>
                </div>
              </div>
            </div>
            <div class="card border-0 border-bottom">
              <div class="card-header pl-1 bg-transparent" id="headingTwo">
                <h2 class="mb-0">
                  <button class="btn btn-link btn-block text-left collapsed text-uppercase text-body" type="button" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                      <b>
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.7em" height="1.7em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M5.843 9.593L11.5 15.25l5.657-5.657l-.707-.707l-4.95 4.95l-4.95-4.95l-.707.707z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                        localidad
                      </b>
                  </button>
                </h2>
              </div>
              <div id="collapseTwo" class="collapse show" aria-labelledby="headingTwo" data-parent="#accordionExample">
                <div class="card-body">
                  <a href="#" class="d-block text-uppercase py-1">Barranquilla</a>
                  <a href="#" class="d-block text-uppercase py-1">Nariño</a>
                  <a href="#" class="d-block text-uppercase py-1">Cordoba</a>
                  <a href="#" class="d-block text-uppercase py-1">Bogota</a>
                  <a href="#" class="d-block text-uppercase py-1">Medellin</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <article class="col-12 px-5 px-sm-3 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
          <div class="card card-product">
          <img class="card-img-top card-img-product" src="{{asset('img/telefono.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">OnePlus</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
          <img class="card-img-top card-img-product" src="{{asset('img/telefono.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">OnePlus</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
          <img class="card-img-top card-img-product" src="{{asset('img/telefono.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">OnePlus</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path class="addFavoritoCorazon" d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
      </section>
    </div>
@endsection
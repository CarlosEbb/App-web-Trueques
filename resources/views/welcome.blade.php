@extends('layouts.app')
@section('content')
    <div class="container-fluid m-0 p-0">
        <img class="w-100 mt-1" src="{{asset('img/banner-home.png')}}" alt="">
    </div>
    <div class="container">
      {{-- Productos recientes --}}
      <section class="row">
        <div class="col-12 section-content">
          <h1 class="title">Productos recientes</h1> 
        </div>
        <article class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
          <div class="card card-product">
          <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">Card title</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
        <article class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
          <div class="card card-product">
          <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">Card title</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
        <article class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
          <div class="card card-product">
          <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">Card title</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
        <article class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
          <div class="card card-product">
          <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">Card title</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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

      {{-- Categorías populares --}}
      <section class="row">
        <div class="col-12 section-content">
          <h1 class="title">Categorías populares</h1> 
        </div>
        <article class="col-12 col-md-6 mb-4">
          <div class="card card-banner-product">
            <div class="card-body card-body-banner-categorias">
              <img src="{{asset('img/laptop.png')}}" width="250" height="250" alt="">
              <h5>Tu laptop consiguela aqui</h5>
            </div>
            <div class="card-footer card-footer-product" style="right: 20px; position: absolute; bottom: 20px;">
              <a href="#" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <span class="tooltiptext">Caracteristicas</span>
              </a>
            </div>
          </div>
        </article>
        <article class="col-12 col-md-6 mb-4">
          <div class="card card-banner-product">
            <div class="card-body card-body-banner-categorias">
              <img src="{{asset('img/tv.jpg')}}" width="250" height="250" alt="">
              <h5>Buscas televisor consiguelo aqui </h5>
            </div>
            <div class="card-footer card-footer-product" style="right: 20px; position: absolute; bottom: 20px;">
              <a href="#" class="btn-rounded btn-primary btn-primary-dark  mx-1 tooltips">
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.5em" height="1.5em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M8.593 18.157L14.25 12.5L8.593 6.843l-.707.707l4.95 4.95l-4.95 4.95l.707.707z" fill="white"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                <span class="tooltiptext">Caracteristicas</span>
              </a>
            </div>
          </div>
        </article>
      </section>

      {{-- Productos destacados --}}
      <section class="row">
        <div class="col-12 section-content">
          <h1 class="title">Productos destacados</h1> 
        </div>
        <article class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
          <div class="card card-product">
          <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">Card title</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
        <article class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
          <div class="card card-product">
          <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">Card title</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
        <article class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
          <div class="card card-product">
          <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">Card title</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
        <article class="col-12 col-sm-6 col-md-4 col-lg-3 mb-4 py-1">
          <div class="card card-product">
          <img class="card-img-top card-img-product" src="{{asset('img/laptops.jpg')}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title mb-5 card-title-product">Card title</h5>
              <div class="card-footer card-footer-product">
                <a class="btn-rounded btn-rounded-light btn-rounded-light-hover mx-1 tooltips btn-menu-buscar" href="#">
                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="1.3em" height="1.3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4.244 12.252a4.25 4.25 0 1 1 6.697-5.111h1.118a4.25 4.25 0 1 1 6.697 5.111L11.5 19.51l-7.256-7.257zm15.218.71A5.25 5.25 0 1 0 11.5 6.167a5.25 5.25 0 1 0-7.962 6.795l7.962 7.961l7.962-7.96z" fill="#009fb7"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
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
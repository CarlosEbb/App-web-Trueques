@extends('layouts.admin')
@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-12 text-center mb-5">
                <h2 class="title">Bienvenido, {{Auth::user()->name}}</h2>
            </div>
           
            <div class="col-12 col-md-6 mb-5 mb-md-0">
                <div class="card card-border-radius">
                    <div class="card-body">
                        <div class="header-card-dashboard d-flex mb-4" style="align-items: flex-end;">
                            <div class="icon-card-dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="3em" height="3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M13 7.5h5v2h-5zm0 7h5v2h-5zM19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM11 6H6v5h5V6zm-1 4H7V7h3v3zm1 3H6v5h5v-5zm-1 4H7v-3h3v3z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                            </div>
                            <h5 class="card-title ml-3">
                                Productos Registrados <br>
                                <span class="card-text lead">{{\App\Models\Producto::count()}}</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 mb-5 mb-md-0">
                <div class="card card-border-radius">
                    <div class="card-body">
                        <div class="header-card-dashboard d-flex mb-4" style="align-items: flex-end;">
                            <div class="icon-card-dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="3em" height="3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M13 7.5h5v2h-5zm0 7h5v2h-5zM19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm0 16H5V5h14v14zM11 6H6v5h5V6zm-1 4H7V7h3v3zm1 3H6v5h5v-5zm-1 4H7v-3h3v3z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                            </div>
                            <h5 class="card-title ml-3">
                                Productos Intercambiados <br>
                                <span class="card-text lead">{{\App\Models\Comentario::count()}}</span>
                            </h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="card card-border-radius">
                    <div class="card-body">
                        <div class="header-card-dashboard d-flex mb-4" style="align-items: flex-end;">
                            <div class="icon-card-dashboard">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" aria-hidden="true" focusable="false" width="3em" height="3em" style="-ms-transform: rotate(360deg); -webkit-transform: rotate(360deg); transform: rotate(360deg);" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24"><path d="M4 13c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2zm1.13 1.1c-.37-.06-.74-.1-1.13-.1c-.99 0-1.93.21-2.78.58A2.01 2.01 0 0 0 0 16.43V18h4.5v-1.61c0-.83.23-1.61.63-2.29zM20 13c1.1 0 2-.9 2-2s-.9-2-2-2s-2 .9-2 2s.9 2 2 2zm4 3.43c0-.81-.48-1.53-1.22-1.85A6.95 6.95 0 0 0 20 14c-.39 0-.76.04-1.13.1c.4.68.63 1.46.63 2.29V18H24v-1.57zm-7.76-2.78c-1.17-.52-2.61-.9-4.24-.9c-1.63 0-3.07.39-4.24.9A2.988 2.988 0 0 0 6 16.39V18h12v-1.61c0-1.18-.68-2.26-1.76-2.74zM8.07 16c.09-.23.13-.39.91-.69c.97-.38 1.99-.56 3.02-.56s2.05.18 3.02.56c.77.3.81.46.91.69H8.07zM12 8c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1m0-2c-1.66 0-3 1.34-3 3s1.34 3 3 3s3-1.34 3-3s-1.34-3-3-3z" fill="#626262"/><rect x="0" y="0" width="24" height="24" fill="rgba(0, 0, 0, 0)" /></svg>
                            </div>
                            <h5 class="card-title ml-3">
                                Usuarios Registrados <br>
                                <span class="card-text lead">10</span>
                            </h5>
                        </div>
                        <table class="table table-sm table-hover">
                            <tbody>
                                @foreach(\App\Models\User::paginate(5) as $user)
                                    <a class="media text-dark ml-3 d-flex align-items-center list-hover" style="cursor: pointer;">
                                        <tr  class="border-0">
                                            <td class="text-center p-0 small"><img class=" p-1 rounded-circle" src="{{asset('img/avatar.png')}}" width="35" height="35" alt="Generic placeholder image"></td>
                                            <td class="text-center p-0 small  w-25">{{$user->name}}</td>
                                            <td class="text-center p-0 small  w-25">{{$user->roles->nombre}}</td>
                                            <td class="text-center p-0 small  w-25">{{$user->created_at->format('d/m/Y')}}</td>
                                            <td class="text-center p-0 small  w-25"><b>estado:</b> @if($user->status) activo @else suspendido @endif</td>
                                        </tr>
                                    </a>
                                @endforeach
                            </tbody>
                        </table>
                        <p class="text-right mt-3"><a href="/users" class="">Ver todos</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


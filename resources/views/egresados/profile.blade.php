@extends('layouts.app')

@section('title', 'Perfil del egresado')

@section('content')  

    @include('layouts.nav_egresado')
    <div class="navbar-egresado"></div>
    <div class="container vh-100 p-3">
        <div class="row p-20 h-50">
            <div class="col-12 d-flex flex-row text-center">
                <div class="align-self-center">
                    <img class="img-thumbnail mx-auto" id="profile-picture" src="{{ asset('paper_img/male_avatar.png') }}" alt="profile picture">
                </div>
                <div class="align-self-center">
                    <div class="text-left">
                        <div><h2>{{ $user->name }} {{ $user->egresado->apellidos }}</h2></div>
                        <div><h4>{{ $user->egresado->pais->nombre }}</h4></div>
                        <div> {{ $user->egresado->edad }} anios</div>
                    </div>
                    <h5 class="text-center mt-5">
                        <a class="p-2 bg-orange text-white" href="#">Actualizar perfil</a>   
                    </h5>
                </div>
            </div>
        </div>
        
        <div class="row p-20 h-50">
            <div class="col-6 d-flex flex-column justify-content-center p-2 text-white" id="profile-section-3">
                <h4 class="text-center orange-color">INTERESES</h4>
                <div class="overflow-y p-4" id="">
                    <ul class="list-group">
                        <li class="list-group-item d-flex justify-content-between align-items-center button-hover">
                            <a class="profile-section-3-link w-100" href="#">Cras justo odio</a>
                            <span class="badge badge-primary badge-pill">14</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center button-hover">
                            <a class="profile-section-3-link w-100" href="#">Cras justo odio</a>
                            <span class="badge badge-primary badge-pill">2</span>
                        </li>
                    </ul>
                </div>
                <h5 class="text-center mt-2">
                    <a class="p-2 orange-color button-hover" href="#">Actualizar intereses</a>   
                </h5>
            </div>
            <div class="col-6 d-flex flex-column justify-content-center">
                <h4 class="text-center orange-color">AMIGOS</h4>
            </div>
        </div>
        
    </div>
@endsection
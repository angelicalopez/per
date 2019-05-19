@extends('layouts.app')

@section('title', 'Lista de administradores')

@section('content')  
<div class="wrapper">
    <div class="profile-background"> 
        <div class="filter-black"></div>  
    </div>
    <div class="profile-content section-nude mb-5">
        <div class="container">
            <div class="row owner mt-3">
                <div class="text-center mx-auto">
                    <div class="name">
                        <h4>Super usuario<br/><small>Panel administrativo</small></h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center mx-auto">
                    <p>Aqui puedes agregar nuevos administradores al sistema</p>
                    <br/>
                </div>
            </div>
            <hr>
            <div class="row mx-auto">
                <div class="col-8 mx-auto">
                    <form class="register-form" method="POST">
                        @csrf
                        <label class="orange-color">Apellidos</label>                        
                        <input name="apellidos" required type="text" class="form-control border" placeholder="apellidos">
                        @if ($errors->has('apellidos'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('apellidos') }}</strong>
                            </span>
                            <br>
                        @endif

                        <label class="orange-color mt-2">DNI</label>
                        <input name="dni" min="8" required type="text" class="form-control border" placeholder="dni">
                        @if ($errors->has('dni'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('dni') }}</strong>
                            </span>
                        @endif

                        <label class="orange-color mt-2">Direccion</label>
                        <input name="direccion" type="text" class="form-control border" placeholder="direccion">
                        @if ($errors->has('direccion'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('direccion') }}</strong>
                            </span>
                        @endif

                        <label class="orange-color mt-2">Telefono</label>
                        <input name="telefono" min="10" type="text" class="form-control border" placeholder="telefono">
                        @if ($errors->has('telefono'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('telefono') }}</strong>
                            </span>
                        @endif

                        <label class="orange-color mt-2">Pais</label>
                        <select name="pais" required class="form-control border">
                            <option value="1">Colombia</option>
                        </select>
                        @if ($errors->has('dni'))
                            <span class="help-block">
                                    <strong>{{ $errors->first('dni') }}</strong>
                            </span>
                        @endif

                        <br>

                        <button class="btn btn-danger btn-block">Iniciar sesion</button>
                    </form>
                </div>
            </div>
        </div>
    </div> 
@endsection
 Inicio: pagina:
{{--llamar plantilla--}}
@extends('layouts.app')
{{--dentro del contenedor--}}
@section('content')
<!--<h1>Configuracion de mi cuenta</h1> para prueba inicial -->
<div class="container">
    <div class="row justify-content-center">
        <!-- mensaje de confirmacion -->
        @if(session('message'))
        <div class="alert alert-success col-md-7" >{{session('message')}}</div>
        
        @endif
        
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Configuracion de mi cuenta</div>

                <div class="card-body">
                    <!--enctype="multipart/form-data"  para trabajar con los discos creados-->
                    <form method="POST" action="{{ route('user.update') }}" enctype="multipart/form-data">
                        @csrf





-------------------------------------------------
final pagina:

 <!--inicio subir imagen-->
                         <div class="form-group row">
                            <label for="image_path" class="col-md-4 col-form-label text-md-right">{{ __('Avatar') }}</label>

                            <div class="col-md-6">
                                <input id="image_path" type="file" class="form-control @error('image_path') is-invalid @enderror" name="image_path" />

                                @error('imagen_path')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                          <!--final subir imagen-->
                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Guardar cambios
                                </button>
                            </div>
                        </div>
        
        @endif
        
        <div class="col-md-8">
            <div class="card">

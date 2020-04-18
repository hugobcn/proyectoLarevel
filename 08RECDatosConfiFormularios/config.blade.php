/resources/views/user

Auth::user()->recoger desde la base


{{--llamar plantilla--}}
@extends('layouts.app')
{{--dentro del contenedor--}}
@section('content')
<!--<h1>Configuracion de mi cuenta</h1> para prueba inicial -->
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Configuracion de mi cuenta</div>

                <div class="card-body">
                    
                    <form method="POST" action="">
                        @csrf



                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ Auth::user()->name }}" required autocomplete="name" autofocus>

                              
                        <!--creadoApellidoV01 -->
                        <div class="form-group row">
        
                                <input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname" value="{{ Auth::user()->surname }}" required autocomplete="name" autofocus>

                            
                        
                         <!--creadoNickV01 -->
                        

                            <div class="col-md-6">
                                <input id="nick" type="text" class="form-control @error('nick') is-invalid @enderror" name="nick" value="{{ Auth::user()->nick }}" required autocomplete="nick" autofocus>

                             

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ Auth::user()->email }}" required autocomplete="email">

                             
                    






@endsection




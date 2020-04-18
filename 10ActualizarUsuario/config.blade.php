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

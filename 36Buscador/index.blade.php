/resources/views/user


@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Gente</h1>

            <form method="GET" action="{{ route('user.index') }}" id="buscador">
                <div class="row">
                    <div class="form-group col" >
                        <input type="text" id="search"  class="form-control"/>
                    </div>
                    <div class="form-group col  btn-search">
                        <input type="submit" value="buscar" class="btn btn-success"/>
                    </div>
                </div>
            </form>

            <hr>

            @foreach($users as $user)



@endsection


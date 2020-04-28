/resources/views/user


@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

        @foreach($user->images  as $image)
           @include('includes.image',['image'=>$image])
        @endforeach

        
    </div>
</div>
</div>
@endsection

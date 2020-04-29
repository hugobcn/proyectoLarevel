/resources/views/image



  
@extends('layouts.app')

@section('content')
<span class="number_likes">{{count($image->likes)}}</span>
                    </div>
                    
                    <!-- si usuario existe y es el quie lo ha creado-->
                    @if(Auth::user() &&  Auth::user()->id == $image->user->id)
                    <div class="action">
                        <a href="" class="btn btn-sm btn-primary">Actualizar</a>
                        <a href="{{route('image.delete',['id'=>$image->id])}}" class="btn btn-sm btn-danger">Borrar</a>
                    </div>
                    @endif
                    
                    <div class="clearfix"></div>

                    <div class="comments">

@endsection

@endsection


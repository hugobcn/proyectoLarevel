/resources/views/image



  
@extends('layouts.app')

@section('content')

  @endif
                        <span class="number_likes">{{count($image->likes)}}</span>
                    </div>

                    <!-- si usuario existe y es el quie lo ha creado-->
                    <!-- https://getbootstrap.com/docs/4.0/components/modal/ -->
                    @if(Auth::user() &&  Auth::user()->id == $image->user->id)
                    <div class="action">
                        <a href="{{ route('image.edit', ['id' => $image->id]) }}" class="btn btn-sm btn-primary">Actualizar</a>             
                        
                        <!--<a href="{{ route('image.delete', ['id' => $image->id]) }}" class="btn btn-sm btn-danger">Borrar</a>-->

                        <!-- Button to Open the Modal -->


@endsection

@endsection


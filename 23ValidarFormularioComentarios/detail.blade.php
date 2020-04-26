/resources/views/image

@extends('layouts.app')

@section('content')
<div class='likes'>
                        <img  src="{{asset('img/heart-black.png')}}"/>
                    </div>
                    
                    <div class="clearfix"></div>
                    
                    <div class="comments">
                        <h2>Comentarios ({{count($image->comments)}})</h2>
                        <hr>
                        
                        <form method="POST" action="{{ route('comment.save') }}">
                            @csrf
                            <input type="hidden" name="image_id" value="{{$image->id}}" />
                            <p>
                                <textarea class="form-control" name="content" required></textarea>
                                 @if ($errors->any())
                                <div class="alert alert-danger">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                       
                                            <li>{{ $error }}</li>
                                            
                                        @endforeach
                                    </ul>
                                </div>
                                @endif
                            </p>
                            <button type="submit" class="btn btn-success">Enviar</button>
                        </form>
                 
                        
                    </div>
@endsection



